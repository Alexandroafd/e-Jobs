@extends('admin')

@section('title', 'Tous les postulants')

@section('content')

        <!-- User Sidebar -->
        <div class="user-sidebar">

            <div class="sidebar-inner">
              <ul class="navigation">
                <li><a href="{{ route('admin.dashboard') }}"> <i class="la la-home"></i> Dashboard </a></li>
                <li><a href="{{ route('admin.users.userlist') }}"><i class="la la-user-tie"></i> Users </a></li>
               <!-- <li><a href="dashboard-post-job.html"><i class="la la-paper-plane"></i>Post a New Job</a></li> -->
                <li class="active"><a href="{{ route('admin.jobs') }}"><i class="la la-briefcase"></i> Jobs </a></li>
                <li><a href="{{ route('admin.jobsApplied') }}"><i class="la la-file-invoice"></i> Jobs Applications </a></li> 
                <!-- <li><a href="dashboard-resumes.html"><i class="la la-bookmark-o"></i>Shortlisted Resumes</a></li> 
                <li><a href="dashboard-packages.html"><i class="la la-box"></i>Packages</a></li>
                <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i>Messages</a></li>
                <li><a href="dashboard-resume-alerts.html"><i class="la la-bell"></i>Resume Alerts</a></li>
                <li><a href="dashboard-change-password.html"><i class="la la-lock"></i>Change Password</a></li>
                <li><a href="dashboard-company-profile.html"><i class="la la-user-alt"></i>View Profile</a></li> -->
                <li><a href="{{ route('auth.logout') }}"><i class="la la-sign-out"></i>Logout</a></li>
               <!-- <li><a href="index.html"><i class="la la-trash"></i>Delete Profile</a></li> -->
              </ul>
            </div>
        </div>
        <!-- End User Sidebar -->

    <div>
        @if (Session::has('success'))
            <div class="bg-success py-4 mb-4 rounded">
                <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('success') }} </p>
            </div>
        @endif

        @if (Session::has('error'))
            <div class="bg-danger py-4 mb-4 rounded">
                <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('error') }} </p>
            </div>
        @endif
    </div>

    <div class="row">
      <div class="col-lg-12">
        <!-- Ls widget -->
        <div class="ls-widget">
          <div class="tabs-box">
            <div class="widget-title">
              <h4>Jobs Applications</h4>

              <div class="chosen-outer">
                <!--Tabs Box-->
                <!-- <select class="chosen-select">
                  <option>Last 6 Months</option>
                  <option>Last 12 Months</option>
                  <option>Last 16 Months</option>
                  <option>Last 24 Months</option>
                  <option>Last 5 year</option>
                </select> -->
              </div>
            </div>

            <div class="widget-content">
              <div class="table-outer">
                <table class="default-table manage-job-table">
                  <thead>
                    <tr>
                      <th>Job Title</th>
                      <th>User</th>
                      <th>Employer</th>
                      <th>Applied Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @if ($jobApplications->isNotEmpty())
                        @foreach ($jobApplications as $jobApplication)
                            <tr>
                                <td> {{ $jobApplication->job->title }} </td>
                                <td> {{ $jobApplication->user->name }} </td>
                                <td> {{ $jobApplication->employer->name }} </td>
                                <td> {{ \Carbon\Carbon::parse($jobApplication->applied_date)->format('d M, Y') }} </td>
                                <td> 
                                    <div class="option-box">
                                        <ul class="option-list">
                                         <li><button><a href="{{ route('admin.jobsApplied.destroy', $jobApplication->id) }}" onclick="deletejobApplied( {{ $jobApplication->id }} )" data-text="Supprimer"><span class="la la-trash"></span></a></button></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
            <div>
                {{ $jobApplications->links() }}
              </div>
          </div>
        </div>
      </div>
    </div>

@endsection