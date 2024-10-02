<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordEmail;
use App\Models\Category;
use App\Models\JobApplied;
use App\Models\Job;
use App\Models\SavedJob;
use App\Models\jobType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register()
    {
        return view ('auth.register');
    }

    public function doregister(Request $request)
    {
       /*$validation = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users|max:150',
            'password' => 'required|string|min:8',
            'user_type' => 'required|in:candidat,employer'
        ]);

        //$user = User::create($request->validated());

        if ($validation->fails())
        {
            $errors = $validation->errors();

            return response()->json([
                'errors' => $errors,
                'statut' => 401
            ]);
        } */

        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users|max:150',
            'password' => 'required|string|min:8',
            'user_type' => 'required|in:candidat,employer'
        ]);


        /*if($validatedData->fails()){
            return back()->withErrors($validatedData);
        }*/

            /*$user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_type' => $request->user_type
            ]);*/
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'user_type' => $validatedData['user_type']
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;
            /*return response()-> json([
                'token' => $token,
                'type' => 'Bearer'
            ])->cookie('jwt', $token); */

            if($user->user_type === 'candidat'){
                return redirect()->route('auth.profile')->with('success','Inscription réussie');
            } elseif($user->user_type === 'employer'){
                return redirect()->route('auth.createJob')->with('success','Inscription réussie');
            }
            return redirect()->route('auth.login', $request->$token)->with('success','Inscription réussie');
    }

    public function login()
    {
        return view ('auth.login');
    }

    public function dologin(Request $request)
    {
       /* $validation = Validator::make($request->all(), [
            'email' => 'required|email|string',
            'password' => 'required|min:8'
        ]);

        if($validation->passes())
        {
            if (Auth::attempt([
                'email'=> $request->email,
                'password'=> $request->password
            ])) {
                $user = Auth::user();
                //dd($user);
                if($user->user_type === 'candidat'){
                    return redirect()->route('auth.profile');
                } elseif($user->user_type === 'employer'){
                    return redirect()->route('auth.createJob');
                }

            } else {

                return redirect()->route('auth.login')->with('error', 'Identifiants incorrects');
            }

        } else {
            return redirect()->route('auth.login')
            ->withErrors($validation)
            ->withInput($request->only('email'));
        }*/

        $validatedData = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|min:8'
        ]);

        // Authentification avec le paramètre "remember"
        $remember = $request->has('remember'); // Vrai si la case est cochée

        if (Auth::attempt([
            'email' => $validatedData['email'],
            'password' => $validatedData['password']
        ], $remember)) {
            $user = Auth::user();

            if ($remember) {
                // Enregistrer l'email dans un cookie pour une durée de 5 jours
                cookie()->queue('email', $validatedData['email'], 60 * 24 * 5);
            } else {
                // Supprimer le cookie si "Se rappeler de moi" n'est pas coché
                cookie()->forget('email');
            }
            
            if ($user->user_type === 'candidat') {
                return redirect()->route('auth.profile');
            } elseif ($user->user_type === 'employer') {
                return redirect()->route('auth.createJob');
            }
        }

        return redirect()->route('auth.login')->with('error', 'Identifiants incorrects');
    }

    public function dashboard ()
    {
        return view ('auth.dashboard');
    }

    public function profile()
    {

        $id = Auth::user()->id;                      //Retrouver l'user grace à son id

        $user = User::where('id', $id)->first();     //Trouver toutes ses infos
        //$user = User::find($id);

        return view ('auth.profile', [
            'user' => $user
        ]);
    }

    public function doprofile(Request $request)
    {
        $id = Auth::user()->id;

        $validation = Validator::make($request->all(), [
            'name' => 'required|min:4|max:20',
            'email' => 'required|email|unique:users,email,'.$id.',id',
            /*'phone' => 'required|numeric|min:8',
            'diplome' => 'required',
            'experience' => 'required',
            'salary' => 'required|numeric',
            'age' => 'required|numeric',
            'jobTitle' => 'required|string',
            'description' => 'required|string',*/
            //'facebook' => 'url',
            //'twitter' => 'url',
            //'linkedin' => 'url',
            //'instagram' => 'url'
            'image' => 'mimes:png,jpg,jpeg,svg|max:2000'
        ]);

        if($validation->passes())
        {

            $user = User::find($id);

            $user ->name = $request->name;
            $user ->email = $request->email;
            $user ->phone = $request->phone;
            //$user ->image = $request->image;
            $user ->diplome = $request->diplome;
            $user ->experience = $request->experience;
            $user ->salary = $request->salary;
            $user ->description = $request->description;
            $user ->age = $request->age;
            $user ->jobTitle = $request->jobTitle;
            //$user ->facebook = $request->facebook;
            //$user ->twitter = $request->twitter;
            //$user ->linkedin = $request->linkedin;
            //$user ->intragram = $request->instagram;

            $user->save();

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = $id.'-'.time().'-'.$ext;
            $image->move(public_path('/profil_pic'), $imageName);

            User::where('id', $id)->update(['image' => $imageName]);

            return redirect()->route('auth.profile')->with('success', 'Profil ajouté');

        } else {
            return redirect()->route('auth.profile')->withErrors($validation);
        }
    }

   /*  public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;

       $validation = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2000'
       ]);

       if($validation->passes())
       {
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = $id.'-'.time().'-'.$ext;
        $image->move(public_path('/profil_pic'), $imageName);

        User::where('id', $id)->update(['image' => $imageName]);

        session()->flash('succes', 'image ajoutée');

        return response()->json([
            'status' => false,
            'errors' =>[]
        ]);
       }else {
        return response()->json([
            'status' => false,
            'errors' => $validation->errors()
        ]);
       }
    } */

    public function jobslist()
    {
        $savedJobs = SavedJob::where('user_id', Auth::user()->id)->with(['job', 'job.jobType', 'job.category', 'job.applications'])->orderBy('created_at', 'DESC')->paginate(10);
        //dd($jobsApplications);
        return view ('auth.jobslist', [
            'savedJobs' => $savedJobs
        ]);

    }



    public function changePassword()
    {
        return view ('auth.changePassword');
    }

    public function updatePassword(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password'
        ]);

        if ($validation->fails())
        {
            return redirect()->route('auth.changePassword')
            ->withErrors($validation);
        }

        if (Hash::check($request->old_password, Auth::user()->password) == false)
        {
           session()->flash('error', 'Lancien mot de passe est incorret');
           return back()->with('error', 'Lancien mot de passe est incorret');
        }

        $user = User::find(Auth::user()->id);
        $user ->password = Hash::make($request->new_password);
        $user->save();

        session()->flash('success', 'Le mot de passe a été changé avec success');
        return back()->with('success', 'Le mot de passe a été changé avec success');
    }

    public function Passwordchange()
    {
        return view ('auth.Passwordchange');
    }

    public function UUpdatePassword(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password'
        ]);

        if ($validation->fails())
        {
            return redirect()->route('auth.Passwordchange')
            ->withErrors($validation);
        }

        if (Hash::check($request->old_password, Auth::user()->password) == false)
        {
           session()->flash('error', 'Lancien mot de passe est incorret');
           return back()->with('error', 'Lancien mot de passe est incorret');
        }

        $user = User::find(Auth::user()->id);
        $user ->password = Hash::make($request->new_password);
        $user->save();

        session()->flash('success', 'Le mot de passe a été changé avec success');
        return redirect()->route('auth.login')->with('success', 'Le mot de passe a été changé avec success');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login')->with('success', 'Déconnecté');
    }

    public function deleteProfile()
    {
       $user = User::find(Auth::user()->id)->delete();
       //dd($user);
        return redirect()->route('auth.login')->with('success', 'Profil supprimé');
    }

    public function createJob()
    {
       $categories = Category::orderBy('name', 'ASC')->where('status', 1)->get();

       $jobTypes = jobType::orderBy('name', 'ASC')->where('status', 1)->get();

        return view ('auth.job.create', [
            'categories' => $categories,
            'jobTypes' => $jobTypes
        ]);
    }

    public function saveJob(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'job_type' => 'required',
            'salary' => 'required',
            'experience' => 'required',
            'genre' => 'required',
            'date_limite' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'company_website' => 'required',
            'company_email' => 'required',
            'company_name' => 'required',
            'company_location' => 'required'
        ]);

        if ($validation->passes())
        {
            $job = new Job();

            $job->title = $request->title;
            $job->description = $request->description;
            $job->category_id = $request->category;
            $job->job_type_id = $request->job_type;
            $job->user_id = Auth::user()->id;
            $job->salary = $request->salary;
            $job->experience = $request->experience;
            $job->genre = $request->genre;
            $job->date_limite = $request->date_limite;
            $job->country = $request->country;
            $job->city = $request->city;
            $job->address = $request->address;
            $job->company_website = $request->company_website;
            $job->company_email = $request->company_email;
            $job->company_name = $request->company_name;
            $job->company_location = $request->company_location;

            $job->save();

            session()->flash('success', 'Emploi ajouté');

            return redirect()->route('auth.myJobs')->with('success', 'Job posté');

        } else {
            return redirect()->route('auth.createJob')->withErrors($validation);
        }
    }

    public function myJobs()
    {
        $jobs = Job::where('user_id', Auth::user()->id)->with('jobType', 'applications')->orderBy('created_at', 'DESC')->paginate(10);
        return view ('auth.job.myJobs', [
            'jobs' => $jobs
        ]);
    }

    public function editJob(Request $request, $id)
    {
        //$job->update($request->validation);
        //dd($id);
        $categories = Category::orderBy('name', 'ASC')->where('status', 1)->get();
        $jobTypes = jobType::orderBy('name', 'ASC')->where('status', 1)->get();

        $job = Job::where([
            'user_id' => Auth::user()->id,
            'id' => $id
        ])->first();

        //dd($job);

        if($job == null)
        {
            abort(404);
        }

        return view ('auth.job.editJob', [
            'categories' => $categories,
            'jobTypes' => $jobTypes,
            'job' => $job
        ]);
    }

    public function updateJob(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'job_type' => 'required',
            'salary' => 'required',
            'experience' => 'required',
            'genre' => 'required',
            'date_limite' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'company_website' => 'required',
            'company_email' => 'required',
            'company_name' => 'required',
            'company_location' => 'required'
        ]);

        if ($validation->passes())
        {
            $job = Job::find($id);

            $job->title = $request->title;
            $job->description = $request->description;
            $job->category_id = $request->category;
            $job->job_type_id = $request->job_type;
            $job->user_id = Auth::user()->id;
            $job->salary = $request->salary;
            $job->experience = $request->experience;
            $job->genre = $request->genre;
            $job->date_limite = $request->date_limite;
            $job->country = $request->country;
            $job->city = $request->city;
            $job->address = $request->address;
            $job->company_website = $request->company_website;
            $job->company_email = $request->company_email;
            $job->company_name = $request->company_name;
            $job->company_location = $request->company_location;

            $job->save();

            session()->flash('success', 'Emploi modifié');

            return redirect()->route('auth.myJobs');

        } else {
            return redirect()->route('auth.myJobs')->withErrors($validation);
        }
    }

    public function deleteJob(Request $request)
    {
        $job = Job::where([
            'user_id' => Auth::user()->id,
            'id' => $request->jobId
        ])->first();

        if ($job == null ) {
        session()->flash('error', 'Déjà supprimé ou pas trouvé');
       /* return response()->json([
            'status' => true,
            'error' => []
        ]); */
    }
        Job::where('id', $request->jobId)->delete();
        session()->flash('success', 'Emploi supprimé');
        return redirect()->route('auth.myJobs');
    }

    public function myJobsApplied()
    {
        $jobsApplications = JobApplied::where('user_id', Auth::user()->id)->with(['job', 'job.jobType', 'job.category', 'job.applications'])->orderBy('created_at', 'DESC')->paginate(10);
        //dd($jobsApplications);
        return view ('auth.myJobsApplied', [
            'jobsApplications' => $jobsApplications
        ]);
    }

    public function removeJobs(Request $request)
    {
        $jobApplication = JobApplied::where(['id' => $request->id, 'user_id' => Auth::user()->id])->first();
        //dd($jobApplication);
        if ($jobApplication == null)
        {
            session()->flash('error', 'Impossible de supprimer cette demande demploi');
            return back()->with('error', 'Impossible de supprimer cette demande demploi');
        }

        JobApplied::find($request->id)->delete();
        session()->flash('success', 'Demande demploi supprimée');
        return back()->with('success', 'Demande demploi supprimée');
    }

    public function removeSaveJob(Request $request)
    {
        $removeSaveJob = SavedJob::where(['id' => $request->id, 'user_id' => Auth::user()->id])->first();
        //dd($removeSaveJob);
        if ($removeSaveJob == null)
        {
            session()->flash('error', 'Impossible de supprimer cette sauvegarde demploi');
            return back()->with('error', 'Impossible de supprimer cette sauvegarde demploi');
        }

        SavedJob::find($request->id)->delete();
        session()->flash('success', 'Sauvegarde supprimée');
        return back()->with('success', 'Sauvegarde supprimée');
    }

    public function forgotPassword()
    {
        return view ('auth.forgotPassword');
    }

    public function doforgotPassword(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ]);

        if ($validation->fails())
        {
            return redirect()->route('auth.forgotPassword')->withInput()->withErrors($validation);
        }

        $token = Str::random(100);

        \DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        \DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now()
        ]);

        $user = User::where('email', $request->email)->first();

        $mailData = [
            'token' => $token,
            'user' => $user,
            'subject' => 'You have requested to change your password'
        ];

        //Envoyer l'email
        Mail::to($request->email)->send(new ResetPasswordEmail($mailData));

        return redirect()->route('auth.forgotPassword')->with('success', 'Un email vous a été envoyé, veuillez vérifier vos emails.');
    }

    public function resetPassword($tokenString)
    {
        $token = \DB::table('password_reset_tokens')->where('token',$tokenString)->first();

        if($token == null)
        {
            return redirect()->route('auth.forgotPassword')->with('error', 'Token invalide');
        }

        return view('auth.resetpassword', [
            'tokenString' => $tokenString
        ]);
    }

    public function doresetPassword(Request $request,)
    {
        $token = \DB::table('password_reset_tokens')->where('token',$request->token)->first();

        if($token == null)
        {
            return redirect()->route('auth.resetPassword')->with('error', 'Token invalide');
        }

        $validation = Validator::make($request->all(), [
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password'

        ]);

        if ($validation->fails())
        {
            return redirect()->route('auth.resetPassword', $request->token)->withErrors($validation);
        }

        User::where('email', $token->email)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('auth.login')->with('success', 'Vous avez changé le mot de passe');
    }
}
