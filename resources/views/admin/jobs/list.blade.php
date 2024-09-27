@extends('admin')

@section('title', 'Tous les utilisateurs')

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
              <h4>Jobs</h4>

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
                      <th>ID</th>
                      <th>Titre</th>
                      <th>Créer par : </th>
                      <th>Statut</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @if ($jobs->isNotEmpty())
                        @foreach ($jobs as $job)
                            <tr>
                                <td> <h6> {{ $job->id }} </h6> </td>
                                <td> 
                                    <p> {{ $job->title }}  </p> 
                                    <p> {{ $job->applications->count() }} Postulant(s) </p>
                                </td>
                                <td> {{--{{ $job->user->name }}--}} </td>
                                <td>
                                    @if ($job->status  == 1)
                                        <p class="text-success">Actif</p>
                                    @else
                                        <p class="text-danger">Bloquer</p>
                                    @endif
                                </td>
                                <td> {{ \Carbon\Carbon::parse($job->created_at)->format('d M, Y') }} </td>
                                <td> 
                                    <div class="option-box">
                                        <ul class="option-list">
                                          <li><button><a href="{{ route('admin.jobs.edit', $job->id) }}" data-text="Editer"><span class="la la-pencil"></span></a></button></li>
                                         <li><button><a href="{{ route('admin.jobs.delete', $job->id) }}" onclick="deletejob( {{ $job->id }} )" data-text="Supprimer"><span class="la la-trash"></span></a></button></li>
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
                {{ $jobs->links() }}
              </div>
          </div>
        </div>
      </div>
    </div>

@endsection