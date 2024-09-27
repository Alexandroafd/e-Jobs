@extends('layout')

@section('title', 'Détail')

@section('content')

        <!-- Job Detail Section -->
        <section class="job-detail-section">
            <!-- Upper Box -->
            <div class="upper-box">
              <div class="auto-container">

                <!-- Job Block -->
                <div class="job-block-seven">
                  <div class="inner-box">
                    <div class="content">
                      <span class="company-logo"><img src=" {{ asset('images/resource/company-logo/5-1.png') }} " alt=""></span>
                      <h4> {{ $job->title }} </h4>
                      <div class="">
                        <p class="icon flaticon-map-locator mt-2"> {{ $job->company_location }} </p>  
                        <p class="icon flaticon-clock-3 mt-2"> {{\Carbon\Carbon::parse($job->created_at)->format('d M, Y')}} </p>
                        @if (!is_null($job->salary))
                        <p class="icon flaticon-money mt-2"> {{ $job->salary }} FCFA</p>
                        @endif
                      </div>
                      <ul class="job-other-info">
                        <li class="time mt-2"> {{ $job->jobType->name }} </li>
                      </ul>
                    </div>
      
                    <div class=" {{ ($count == 1) ? 'savedJob' : '' }}"> <!--class="btn-box" -->
                        @if (Auth::check())
                            <a href="{{ route('savedJob', $job->id) }}" onclick="{{ $job->id }}" class="theme-btn btn-style-one m-2">Sauvegarder</a>
                            @else
                            <a href="{{ route('auth.login') }}" class="theme-btn btn-style-one">Connectez-vous pour sauvegarder</a>
                        @endif
                        @if (Auth::check())
                            <a href="{{ route('appliedJob', $job->id) }}" onclick="{{ $job->id }}" class="theme-btn btn-style-one">Postuler</a>
                            @else
                            <a href="{{ route('auth.login') }}" class="theme-btn btn-style-one">Connectez-vous pour postuler</a>
                        @endif
                        <button class="bookmark-btn"><i class="flaticon-bookmark savedJob"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @if (Session::has('success'))
                <div class="bg-success py-4 mb-4 rounded">
                    <p class="text-white">&nbsp; &nbsp;{{ Session::get('success') }} </p>
                </div>
            @endif

            @if (Session::has('error'))
                <div class="bg-danger py-4 mb-4 rounded">
                    <p class="text-white">&nbsp; &nbsp;{{ Session::get('error') }} </p>
                </div>
            @endif 

            <div class="job-detail-outer">
              <div class="auto-container">
                <div class="row">
                  <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    @if (!empty($job->description))
                    <div class="job-detail">
                        <h4> Description </h4>
                        <p> {!! nL2br ($job->description) !!} </p>
                    @endif

                    @if (!empty($job->responsability))
                    <div class="job-detail">
                        <h4> Description </h4>
                        <p> {!! nL2br ($job->responsability) !!} </p>
                    @endif
                    
                        <h4>Expérience : {{ $job->experience }} an(s)</h4>
                    </div>
      
                    <!-- Other Options 
                    <div class="other-options">
                      <div class="social-share">
                        <h5> Partager cet emploi </h5>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="#" class="google"><i class="fab fa-google"></i> Google+</a>
                      </div>
                    </div> -->
      
                    <!-- Related Jobs -->
                    <div class="related-jobs">
                      <!--<div class="title-box">
                        <h3> Autres Emplois </h3>
                        <div class="text">2020 jobs live - 293 added today.</div> 
                      </div>-->
      
                      <!--Job Block -->
                      <div class="job-block">
                        <div class="inner-box">
                          <div class="content">
                            <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-3.png') }}" alt=""></span>
                            <h4><a href="#"> {{$job->title}} </a></h4>
                            <ul class="job-info">
                              <li><span class="icon flaticon-briefcase"></span> {{$job->company_name}} </li>
                              <li><span class="icon flaticon-map-locator"></span> {{$job->company_location}} </li>
                              <li><span class="icon flaticon-clock-3"></span> {{$job->created_at}} </li>
                                @if (!is_null($job->salary))
                                <li><span class="icon flaticon-money"></span> {{$job->salary}} </li>
                                @endif
                            </ul>
                            <ul class="job-other-info">
                              <li class="time">{{$job->jobType->name}}</li>
                            </ul>
                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
      
                  <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                      {{--<div class="sidebar-widget">
                         Job Overview 
                        <h4 class="widget-title">Informations Complémentaires</h4>
                        <div class="widget-content">
                          <ul class="job-overview">
                            <li>
                              <i class="icon icon-calendar"></i>
                              <h5>Date Postée : </h5>
                              <span>{{\Carbon\Carbon::parse($job->created_at)->format('d M, Y')}}</span>
                            </li>
                            <li>
                              <i class="icon icon-expiry"></i>
                              <h5>Date d'expiration : </h5>
                              <span>{{$job->date_limite}}</span>
                            </li>
                            <li>
                              <i class="icon icon-location"></i>
                              <h5>Localisation:</h5>
                              <span>{{$job->company_location}}</span>
                            </li>
                            <li>
                              <i class="icon icon-user-2"></i>
                              <h5>Nom de l'emploi:</h5>
                              <span>{{$job->title}}</span>
                            </li>
                            <li>
                              <i class="icon icon-salary"></i>
                              <h5>Salaire:</h5>
                                @if (!is_null($job->salary))
                                <span>{{$job->salary}}</span>
                                @endif
                            </li>
                          </ul>
                        </div>
      
                        <!-- Map Widget -->
                        <h4 class="widget-title">Localisation</h4>
                        <div class="widget-content">
                          <div class="map-outer">
                            <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/resource/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                            </div>
                          </div>
                        </div>
      
                        <!-- Job Skills 
                        <h4 class="widget-title">Job Skills</h4>
                        <div class="widget-content">
                          <ul class="job-skills">
                            <li><a href="#">app</a></li>
                            <li><a href="#">administrative</a></li>
                            <li><a href="#">android</a></li>
                            <li><a href="#">wordpress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">react</a></li>
                          </ul>
                        </div> 
                      </div> --}}
                      
                      @if (Auth::user())
                        @if (Auth::user()->id == $job->user_id)
                        <div class="sidebar-widget company-widget">
                            <div class="widget-content">
                            <div class="company-title">
                                <div class="company-logo"><img src="images/resource/company-7.png" alt=""></div>
                                <h5 class="company-name"> Candidats ayant postulés </h5>
                            </div>
                            <table class="table table-striped">
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Numéro</th>
                                    <th>Date</th>
                                </tr>
                                @if ($applications->isNotEmpty())
                                    @foreach ($applications as $application)
                                        <tr>
                                            <td> {{ $application->user->name }} </td>
                                            <td> {{ $application->user->email }} </td>
                                            <td> {{ $application->user->phone }} </td>
                                            <td> {{ \Carbon\Carbon::parse($application->applied_date)->format('d M, Y') }} </td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="3"> Aucun postulant </td>
                                </tr>
                                @endif
                            </table>
                            </div>
                        </div>
                        @endif
                        @else
                        <div class="sidebar-widget company-widget">
                            <div class="widget-content">
                              <div class="company-title">
                                <div class="company-logo"><img src="{{ asset('images/resource/company-7.png') }}" alt=""></div>
                                <h5 class="company-name"> Nom de l'Employeur :  {{ $job->user->name }}  </h5>
                              </div>
          
                              <ul class="company-info">
                                <li>Téléphone: <span>{{ $job->user->phone }}</span></li>
                                <li>Email: <span>{{ $job->user->email }}</span></li>
                                <li>Localisation: <span>{{ $job->company_location }}</span></li>
                                <li>Réseaux Sociaux
                                  <div class="social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                  </div>
                                </li>
                              </ul>
          
                              <div class="btn-box"><a href="#" class="theme-btn btn-style-three">{{ $job->company_website }}</a></div>
                            </div>
                          </div>
                      @endif
                    </aside>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Job Detail Section -->

@endsection