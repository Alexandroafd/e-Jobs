<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use App\Models\JobApplied;
use App\Models\jobType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::orderBy('created_at','DESC')->with('user', 'applications')->paginate(10);
        //dd($jobs);
        return view ('admin.jobs.list', [  
            'jobs' => $jobs
        ]);
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        $categories = Category::orderBy('name', 'ASC')->get();
        $jobTypes = jobType::orderBy('name', 'ASC')->get();

        return view ('admin.jobs.edit', [
            'job' => $job,
            'categories' => $categories,
            'jobTypes' => $jobTypes
        ]);
    }

    public function update(Request $request, $id)
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

            $job->status = $request->status;
            $job->isFeatured = (!empty($request->isFeatured)) ? $request->isFeatured : 0;

            $job->save();

            session()->flash('success', 'Emploi modifié');

            return redirect()->route('admin.jobs');

        } else {
            return redirect()->route('admin.jobs')->withErrors($validation);
        }
    }

    public function delete(Request $request, $id)
    {
        $id = $request->id;
        $job = Job::find($id); 

        if ($job == null ) {  
        session()->flash('error', 'Déjà supprimé ou pas trouvé');
    }
        $job->delete();
        session()->flash('success', 'Emploi supprimé');
        return redirect()->route('admin.jobs');
    }

    public function jobsApplied()
    {
        $jobApplications = JobApplied::orderBy('created_at', 'DESC')->with('job', 'user', 'employer')->paginate(10);
        //dd($jobApplications);
        return view ('admin.jobs.jobapplied', [
            'jobApplications' => $jobApplications
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $id = $request->id;
        $job = JobApplied::find($id); 

        if ($job == null ) {  
        session()->flash('error', 'Déjà supprimé ou pas trouvé');
    }
        $job->delete();
        session()->flash('success', 'Supprimé');
        return redirect()->route('admin.jobsApplied');
    }
}
