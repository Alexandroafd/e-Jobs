@extends('base')

@section('title', 'Poster un emploi')

@section('content')

        <!-- User Sidebar -->
        <div class="user-sidebar">
            <div class="sidebar-inner">
              <ul class="navigation">
                {{--<li><a href="{{ route('auth.dashboard') }}"> <i class="la la-home"></i> Dashboard</a></li>--}}
                <li class="active"><a href="{{ route('auth.createJob') }}"><i class="la la-paper-plane"></i>Poster un nouvel emploi</a></li>
                <li><a href="{{ route('auth.myJobs') }}"><i class="la la-briefcase"></i> Gérer mes emplois </a></li>
                <li><a href="{{ route('auth.myJobsApplied') }}"><i class="la la-file-invoice"></i> Tous les candidats </a></li>
                {{--<li><a href="{{ route('auth.jobslist') }}"><i class="la la-bookmark-o"></i>Liste des emplois</a></li>--}}
                <li><a href="{{ route('auth.Passwordchange') }}"><i class="la la-lock"></i>Changer le mot de passe </a></li>
                <li><a href="{{ route('auth.logout') }}"><i class="la la-sign-out"></i>Déconnexion</a></li>
                <li><a href="{{ route('auth.deleteProfile') }}"><i class="la la-trash"></i>Supprimer le Profil</a></li>
              </ul>
              {{--<div class="skills-percentage">
                <h4>Pourcentage de compétences</h4>
                <p>Valeur de mise pour le champ d'image de couverture pour augmenter votre compétence jusqu'à "85%"</p>

                <!-- Pie Graph -->
                <div class="pie-graph">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#7367F0" data-bgColor="transparent" data-width="234" data-height="234" data-linecap="normal" value="30">
                    <div class="inner-text count-box"><span class="count-text txt" data-stop="30" data-speed="2000"></span>%</div>
                  </div>
                </div>
              </div>--}}
            </div>
        </div>
          <!-- End User Sidebar -->

          <!-- Dashboard -->
          <section class="user-dashboard">
            <div class="dashboard-outer">
                <div class="upper-title-box">
                    <h3> Heyy {{ Auth::user()->name }} !</h3>
                    <div class="text">Bienvenu !!</div>
                </div>

              <div class="row">
                <div class="col-lg-12">
                  <!-- Ls widget -->
                  <div class="ls-widget">
                    <div class="tabs-box">
                      <div class="widget-title">
                        <h4>Poster un emploi</h4>
                      </div>

                      <div class="widget-content">

                        {{--<div class="post-job-steps">
                          <div class="step">
                            <span class="icon flaticon-briefcase"></span>
                            <h5>Détails de l'emploi</h5>
                          </div>

                          <div class="step">
                            <span class="icon flaticon-money"></span>
                            <h5>Package & Paiement</h5>
                          </div>

                          <div class="step">
                            <span class="icon flaticon-checked"></span>
                            <h5>Confirmation</h5>
                          </div>
                        </div>--}}

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                <p class="mb-0 pb-0"> {{ Session::get('success') }} </p>
                            </div>
                        @endif

                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                <p class="mb-0 pb-0"> {{ Session::get('error') }} </p>
                            </div>
                        @endif

                        <form class="default-form" method="post" action="{{ route('auth.saveJob') }}">
                            @csrf
                          <div class="row">
                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12">
                              <label>Titre de l'emploi</label>
                              <input value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" placeholder="Title">
                              @error('title')
                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                              @enderror
                            </div>

                            <!-- About Company -->
                            <div class="form-group col-lg-12 col-md-12">
                              <label>Description</label>
                              <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description de l'emploi">{{ old('description') }}</textarea>
                              @error('description')
                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                              @enderror
                            </div>

                            <!-- About Company -->
                            <div class="form-group col-lg-12 col-md-12">
                                <label>Responsabilités</label>
                                <textarea class="form-control @error('responsability') is-invalid @enderror" name="responsability" id="responsability" placeholder="Responsabilités">{{ old('responsability') }}</textarea>
                                @error('responsability')
                                  <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                            </div>


                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                              <label>Addresse Email de l'entreprise</label>
                              <input value="{{ old('company_email') }}" class="form-control @error('company_email') is-invalid @enderror" type="text" name="company_email" id="company_email" placeholder="Email">
                              @error('company_email')
                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                              @enderror
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                              <label>Nom de l'entreprise</label>
                              <input value="{{ old('company_name') }}" class="form-control @error('company_name') is-invalid @enderror" type="text" name="company_name" id="company_name" placeholder="Nom">
                              @error('company_name')
                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                              @enderror
                            </div>

                            <!-- Search Select -->
                            <div class="form-group col-lg-6 col-md-12">
                              <label>Catégorie </label>
                              <select name="category" id="category" data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4">
                                @if ($categories->isNotEmpty())
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                              </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                              <label>Type d'emploi</label>
                              <select name="job_type" id="job_type" data-placeholder="JobType" class="chosen-select">
                                @if ($jobTypes->isNotEmpty())
                                    @foreach ($jobTypes as $jobType)
                                    <option value="{{ $jobType->id }}">{{ $jobType->name }}</option>
                                    @endforeach
                                 @endif
                              </select>
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                              <label>Salaire</label>
                              <input value="{{ old('salary') }}" class="form-control @error('salary') is-invalid @enderror" type="text" name="salary" id="salary" placeholder="10k">
                              @error('salary')
                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                              @enderror
                            </div>
                              <!-- <select class="chosen-select">
                                <option>Select</option>
                                <option>$1500</option>
                                <option>$2000</option>
                                <option>$2500</option>
                                <option>$3500</option>
                                <option>$4500</option>
                                <option>$5000</option>
                              </select> -->

                           <!-- <div class="form-group col-lg-6 col-md-12">
                              <label>Career Level</label>
                              <select class="chosen-select">
                                <option>Select</option>
                                <option>Banking</option>
                                <option>Digital & Creative</option>
                                <option>Retail</option>
                                <option>Human Resources</option>
                                <option>Management</option>
                              </select>
                            </div> -->

                            <div class="form-group col-lg-6 col-md-12">
                              <label>Experience</label>
                              <select name="experience" id="experience" class="chosen-select">
                                <option>1 an</option>
                                <option>2 ans</option>
                                <option>3 ans</option>
                                <option>4 ans</option>
                                <option>5 ans</option>
                                <option>6 ans</option>
                                <option>7 ans</option>
                                <option>5 ans</option>
                                <option>9 ans</option>
                                <option>10 ans</option>
                                <option>+10 ans</option>
                              </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                              <label>Genre</label>
                              <select name="genre" id="genre" class="chosen-select">
                                <option>Select</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <label>Site Web</label>
                                <input value="{{ old('company_website') }}" class="form-control @error('title') is-invalid @enderror" type="text" name="company_website" placeholder="Site web">
                                @error('company_website')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                            </div>

                            <!-- <div class="form-group col-lg-6 col-md-12">
                              <label>Industry</label>
                              <select class="chosen-select">
                                <option>Select</option>
                                <option>Banking</option>
                                <option>Digital & Creative</option>
                                <option>Retail</option>
                                <option>Human Resources</option>
                                <option>Management</option>
                              </select>
                            </div> -->

                           <!-- <div class="form-group col-lg-6 col-md-12">
                              <label>Qualification</label>
                              <select class="chosen-select">
                                <option>Select</option>
                                <option>Banking</option>
                                <option>Digital & Creative</option>
                                <option>Retail</option>
                                <option>Human Resources</option>
                                <option>Management</option>
                              </select>
                            </div> -->

                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12">
                              <label>Date limite</label>
                              <input value="{{ old('date_limite') }}" class="form-control @error('date_limite') is-invalid @enderror" type="text" name="date_limite" id="date_limite" placeholder="06.04.2020">
                            </div>
                            @error('date_limite')
                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                            @enderror

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                              <label>Pays</label>
                              <input value="{{ old('country') }}" class="form-control @error('country') is-invalid @enderror" type="text" name="country" id="country" placeholder="Pays">
                              @error('country')
                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                              @enderror
                              <!-- <select class="chosen-select">
                                <option>Australia</option>
                                <option>Pakistan</option>
                                <option>Chaina</option>
                                <option>Japan</option>
                                <option>India</option>
                              </select> -->
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                              <label>Ville</label>
                              <input value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" type="text" name="city" id="city" placeholder="Ville">
                              @error('city')
                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                              @enderror
                              <!-- <select class="chosen-select">
                                <option>Melbourne</option>
                                <option>Pakistan</option>
                                <option>Chaina</option>
                                <option>Japan</option>
                                <option>India</option>
                              </select> -->
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12">
                              <label>Addresse Complete de l'entreprise</label>
                              <input value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" placeholder="Abomey-Calavi, Pavé CEB.">
                              @error('address')
                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                              @enderror
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12">
                              <label>Localisation</label>
                              <input value="{{ old('location') }}" class="form-control @error('location') is-invalid @enderror" type="text" name="company_location" placeholder="Abomey-Calavi, Pavé CEB.">
                               @error('location')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                               @enderror
                            </div>

                            <!-- Input
                            <div class="form-group col-lg-3 col-md-12">
                              <label>Latitude</label>
                              <input type="text" name="name" placeholder="Melbourne">
                            </div>

                             Input
                            <div class="form-group col-lg-3 col-md-12">
                              <label>Longitude</label>
                              <input type="text" name="name" placeholder="Melbourne">
                            </div> -->

                            <!-- Input -->
                            {{--<div class="form-group col-lg-12 col-md-12">
                              <button class="theme-btn btn-style-three">Chercher la Localisation</button>
                            </div>


                            <div class="form-group col-lg-12 col-md-12">
                              <div class="map-outer">
                                <div class="map-canvas map-height" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/resource/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                </div>
                              </div>
                            </div>--}}

                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12 text-right">
                              <button class="theme-btn btn-style-one">Poster l'emploi</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </section>
          <!-- End Dashboard -->

@endsection
