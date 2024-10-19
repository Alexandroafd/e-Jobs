@extends('base')

@section('title', 'Liste des Candidats')

@section('content')

        <!-- Sidebar Backdrop -->
        <div class="sidebar-backdrop"></div>

        <!-- User Sidebar -->
        <div class="user-sidebar">
    
          <div class="sidebar-inner">
            <ul class="navigation">
                {{--<li><a href="{{ route('auth.dashboard') }}"> <i class="la la-home"></i> Dashboard</a></li>--}}
                <li><a href="{{ route('auth.createJob') }}"><i class="la la-paper-plane"></i>Poster un nouvel emploi</a></li>
                <li><a href="{{ route('auth.myJobs') }}"><i class="la la-briefcase"></i> Gérer mes emplois </a></li>
                <li class="active"><a href="{{ route('auth.myJobsApplied') }}"><i class="la la-file-invoice"></i> Tous les candidats </a></li>
                {{--<li><a href="{{ route('auth.jobslist') }}"><i class="la la-bookmark-o"></i>Liste des emplois</a></li>--}}
                <li><a href="{{ route('auth.Passwordchange') }}"><i class="la la-lock"></i>Changer le mot de passe </a></li>
                <li><a href="{{ route('auth.logout') }}"><i class="la la-sign-out"></i>Déconnexion</a></li>
                <li><a href="{{ route('auth.deleteProfile') }}"><i class="la la-trash"></i>Supprimer le Profil</a></li>
              </ul>
          </div>
        </div>
        <!-- End User Sidebar -->
    
        <!-- Dashboard -->
        <section class="user-dashboard">
          <div class="dashboard-outer">
            <div class="upper-title-box">
              <h3> Tous les Candidats </h3>
              <div class="text"> Bienvenu !! </div>
            </div>
            
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

            <div class="row">
              <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                  <div class="tabs-box">
                    <div class="widget-title">
                      <h4>Candidats</h4>
    
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
                              <th>Titre</th>
                              <th>Postulant</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          
                          <tbody>
                            @if ($jobsApplications->isNotEmpty())
                                @foreach ($jobsApplications as $jobsApplication)
                                <tr>
                                    <td>
                                      <h6> {{ $jobsApplication->job->title }} : {{ $jobsApplication->job->jobType->name }}</h6>
                                      <span class="info"><i class="icon flaticon-map-locator"></i> {{ $jobsApplication->job->company_location }} </span>
                                    </td>
                                    <td class="applied"><a href="#">{{ $jobsApplication->job->applications->count() }} Postulant</a></td>
                                    <td> {{ \Carbon\Carbon::parse($jobsApplication->job->applied_date)->format('d M, Y') }} </td>
                                    <td>
                                        @if ($jobsApplication->job->status == 1)
                                            <div class="status" > Active </div>
                                        @else
                                            <div class="status"> Bloquer </div>
                                        @endif
                                    </td>
                                    <td>
                                      <div class="option-box">
                                        <ul class="option-list">
                                            <li><button><a href="{{ route('jobDetail', $jobsApplication->job_id) }}" data-text="Afficher"><span class="la la-eye"></span></a></button></li>
                                            <li><button><a href="{{ route('auth.removeJobs', $jobsApplication->id) }}" onclick="deletejob( {{ $jobsApplication->id }} )" data-text="Supprimer"><span class="la la-trash"></span></a></button></li>
                                        </ul> 
                                      </div>
                                    </td>
                                  </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="5"> Aucune demande d'emploi </td>
                            </tr>
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div>
                        {{ $jobsApplications->links() }}
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Dashboard -->

@endsection