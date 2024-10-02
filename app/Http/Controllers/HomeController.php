<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsRequest;
use App\Mail\JobNotificationEmail;
use App\Models\Category;
use App\Models\Job;
use App\Models\SavedJob;
use App\Models\User;
use App\Models\JobApplied;
use App\Models\jobType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->orderBy('name', 'ASC')->take(10)->get();                                                  //Afficher les catégories de jobs

        $featuredjobs = Job::where('status', 1)->orderBy('created_at','DESC')->with('jobType')->where('isFeatured', 1)->take(6)->get();        //Afficher les offres d'emplois

        //$latestjobs = Job::where('status', 1)->orderBy('created_at','DESC')->with('jobType')->take(6)->get();                                //Afficher les dernières offres

        return view ('home', [
            'categories' => $categories,
            'featuredjobs' => $featuredjobs
           // 'latestjobs' => $latestjobs
        ]);
    }

    public function find(JobsRequest $request)
    {
        $categories = Category::where('status', 1)->orderBy('name', 'ASC')->get();
        $jobTypes = jobType::where('status', 1)->get();

        $jobs = Job::where('status', 1);

        //dd($jobs);

        if(!empty($request->title))                                                              //Filtrer par titre et mots clef
        {
            $jobs = $jobs->where(function($query) use ($request) {
                $query->orWhere('title', 'like', '%'.$request->title.'%');
                //$query->orWhere('keyword', 'like', '%'.$request->title.'%');
            });
        }

        if(!empty($request->city))                                                               //Filtrer par ville
        {
            $jobs = $jobs->where('city', $request->city);
        }

        if(!empty($request->category))                                                          //Filtrer par categorie
        {
            $jobs = $jobs->where('category_id', $request->category);
        }

       /* if(!empty($request->jobType))                                                          //Filtrer par type de job
        {
            //1 2 3
            $jobTypeArray = explode(',', $request->jobType)

            $jobs = $jobs->whereIn('job_type_id', $request->jobTypeArray);
        } */

       /* if(!empty($request->experience))                                                               //Filtrer par expérience
        {
            $jobs = $jobs->where('experience', $request->experience);
        } */

        $jobs = $jobs->with(['jobType', 'category'])->orderBy('created_at', 'DESC')->paginate(16);
        //dd($jobs);

        return view ('liste.find', [
            'categories' => $categories,
            'jobTypes' => $jobTypes,
            'jobs' => $jobs,
            'input' => $request->validated()
        ]);
    }

    public function detail($id)                                                             //Job détails
    {
        $job = Job::where(['id' => $id, 'status' => 1])->with(['jobType', 'category'])->first();
        //dd($job);

        if($job == null)
        {
            abort(404);
        }

        $count = 0;
        if (Auth::user())
        {
            $count = SavedJob::where(['user_id' => Auth::user()->id, 'job_id' => $id])->count();
        }

        $applications = JobApplied::where('job_id', $id)->with('user')->get();

        return view ('liste.jobDetail', [
            'job' => $job,
            'count' => $count,
            'applications' => $applications
        ]);
    }

    public function appliedJob(Request $request)                                                    //Postulé pour un job
    {
        $id = $request->id;
        $job = Job::where('id', $id)->first();
        //dd($job);

        if($job == null)   //job not found in BDD                                                   Vérifier si le job est dipo
        {
            session()->flash('error', 'Lemploi nest pas disponible !');
            //return redirect()->route('jobDetail');
            return back()->with('error', 'Lemploi nest pas disponible !');
        }

        $employer_id = $job->user_id;                                                                //Vérifier l'id de l'user connecté
        //dd($employer_id);                                                                          //Renvoyer une erreur s'il essai de postuler à son propre emploi

        if ($employer_id == Auth::user()->id)
        {
            session()->flash('error', 'Vous ne pouvez pas postulé à cet emploi !');
            //return redirect()->route('jobDetail', $job->id);
            return back()->with('error', 'Vous ne pouvez pas postulé à cet emploi !');
        }

        $jobApplied = JobApplied::where([                                                              //Vérifier s'il à déjà postulé et renvoyer une erreur si oui
            'user_id' => Auth::user()->id,
            'job_id' => $id
        ])->count();
            ($jobApplied);

        if($jobApplied > 0)
        {
            session()->flash('error', 'Vous avez déjà postulé pour cet emploi !');
            //return redirect()->route('jobDetail');
            return back()->with('error', 'Vous avez déjà postulé pour cet emploi !');
        }

        $app = new JobApplied();                                                                        //Ajouter l'emploi dans la table applied
        $app -> job_id = $id;
        $app -> user_id = Auth::user()->id;
        $app -> employer_id = $employer_id;
        $app -> applied_date = now();
        $app -> save();
        //dd($app);


        $employer = User::where('id', $employer_id)->first();                                            //Envoyer un email à l'employeur

        $mailData = [
            'employer' => $employer,
            'user' => Auth::user()->id,
            'job' => $job
        ];

        Mail::to($employer->email)->send(new JobNotificationEmail($mailData));

            session()->flash('success', 'Vous avez postulé pour cet emploi !');
            //return redirect()->route('jobDetail');
            return back()->with('success', 'Vous avez postulé pour cet emploi !');
    }

    public function employer()
    {
        return view ('liste.employer');
    }

    public function candidat()
    {
        return view ('liste.candidat');
    }

    public function savedJob(Request $request)
    {
        $id = $request->id;

        $job = Job::find($id);

        if ($job == null)
        {
            session()->flash('error', 'Impossible de sauvegarder cet emploi !');
            return back()->with('error', 'Impossible de sauvegarder cet emploi !');
        }

        $count = SavedJob::where(['user_id' => Auth::user()->id, 'job_id' => $id])->count();

        if ($count > 0)
        {
            session()->flash('error', 'Vous avez déjà sauvegarder cet emploi !');
            return back()->with('error', 'Vous avez déjà sauvegarder cet emploi !');
        }

        $savedjob = new SavedJob();
        $savedjob -> user_id = Auth::user()->id;
        $savedjob -> job_id = $id;
        $savedjob -> save();

        session()->flash('success', 'Vous avez sauvegarder cet emploi !');
        return back()->with('success', 'Vous avez sauvegarder cet emploi !');
    }
}
