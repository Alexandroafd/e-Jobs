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
                <li><a href="{{ route('auth.profile') }}"><i class="la la-user-tie"></i>Mon Profil</a></li>
                <li class="active"><a href="{{ route('auth.jobslist') }}"><i class="la la-bookmark-o"></i>Emplois Sélectionnés</a></li>
                <!-- <li><a href="dashboard-packages.html"><i class="la la-box"></i>Pacquets</a></li> -->
                <li><a href="{{ route('auth.changePassword') }}"><i class="la la-lock"></i>Changer le mot de passe</a></li>
                <!-- <li><a href="dashboard-profile.html"><i class="la la-user-alt"></i>Voir le Profile</a></li> -->
                <li><a href="{{ route('auth.logout') }}"><i class="la la-sign-out"></i>Déconnexion</a></li>
                <li><a href="{{ route('auth.deleteProfile') }}"><i class="la la-trash"></i>Supprimer le Profile</a></li>
              </ul>
          </div>
        </div>
        <!-- End User Sidebar -->
    
        <!-- Dashboard -->
        <section class="user-dashboard">
          <div class="dashboard-outer">
            <div class="upper-title-box">
              <h3> Mes sauvegardes </h3>
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
                      <h4> Emplois sauvegardés </h4>
    
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
                              <th>Employer</th>
                              <th>Statut</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          
                          <tbody>
                            @if ($savedJobs->isNotEmpty())
                                @foreach ($savedJobs as $savedJob)
                                <tr>
                                    <td>
                                      <h6> {{ $savedJob->job->title }} : {{ $savedJob->job->jobType->name }}</h6>
                                      <span class="info"><i class="icon flaticon-map-locator"></i> {{ $savedJob->job->company_location }} </span>
                                    </td>
                                    <td> {{ $savedJob->job->user->name }} </td>
                                    <td>
                                        @if ($savedJob->job->status == 1)
                                            <div class="status" > Actif </div>
                                        @else
                                            <div class="status"> Bloquer </div>
                                        @endif
                                    </td>
                                    <td>
                                      <div class="option-box">
                                        <ul class="option-list">
                                            <li><button><a href="{{ route('jobDetail', $savedJob->job_id) }}" data-text="Afficher"><span class="la la-eye"></span></a></button></li>
                                            <li><button><a href="{{ route('auth.removeSaveJob', $savedJob->id) }}" onclick="deletejob( {{ $savedJob->id }} )" data-text="Supprimer"><span class="la la-trash"></span></a></button></li>
                                        </ul> 
                                      </div>
                                    </td>
                                  </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="5"> Aucune sauvegarde d'emploi </td>
                            </tr>
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div>
                        {{ $savedJobs->links() }}
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Dashboard -->

@endsection