@extends('base')

@section('title', 'Mon profil')

@section('content')

        <!-- User Sidebar -->
        <div class="user-sidebar">

            <div class="sidebar-inner">
              <ul class="navigation">
                {{--<li><a href="{{ route('auth.dashboard') }}"> <i class="la la-home"></i> Dashboard</a></li>--}}
                <li class="active"><a href="{{ route('auth.profile') }}"><i class="la la-user-tie"></i>Mon Profil</a></li>
                <li><a href="{{ route('auth.jobslist') }}"><i class="la la-bookmark-o"></i>Emplois Sélectionnés</a></li>
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

    <!-- Dashboard -->
    <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>Mon Profil</h3>
          <div class="text"> Bienvenu !!</div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h3> {{ Auth::user()->name }} </h3>
                  <p> {{ Auth::user()->jobTitle }} </p>
                </div>

                <div class="widget-content">

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

                  <form class="default-form" action="{{ route('auth.doprofile') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <img src="{{ asset('profil_pic/'.Auth::user()->image) }}" alt="photo" style="width: 200px">
                    <input class="mb-5" type="file" name="image" id="image">
                    <!-- Input -->
                    <!-- <div class="form-group col-lg-12 col-md-12">
                        <label>Image</label>
                        <input type="file" name="image" id="image">
                     </div> -->

                    <div class="row">
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Nom</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Jérome" value="{{ $user->name }}">
                        @error('name')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Titre</label>
                        <input class="form-control @error('jobTitle') is-invalid @enderror" type="text" name="jobTitle" id="jobTitle" placeholder="devellopeur" value="{{ $user->jobTitle }}">
                        @error('jobTitle')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Téléphone</label>
                        <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" placeholder="0 123 456 7890" value="{{ $user->phone }}">
                        @error('phone')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Addresse Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" placeholder="email" value="{{ $user->email }}">
                        @error('email')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <!--<div class="form-group col-lg-6 col-md-12">
                        <label>Website</label>
                        <input type="text" name="name" placeholder="www.jerome.com">
                      </div>-->

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label> Salaire(FCFA) </label>
                        <input class="form-control @error('salary') is-invalid @enderror" type="number" name="salary" id="salary" placeholder="100.000 FCFA" value="{{ $user->salary }}">
                        @error('salary')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                        <!--<select class="chosen-select">
                          <option>40-70 K</option>
                          <option>50-80 K</option>
                          <option>60-90 K</option>
                          <option>70-100 K</option>
                          <option>100-150 K</option>
                        </select> -->
                      </div>

                      <!-- Input -->
                      <!--<div class="form-group col-lg-3 col-md-12">
                        <label>Expected Salary($)</label>
                        <select class="chosen-select">
                          <option>120-350 K</option>
                          <option>40-70 K</option>
                          <option>50-80 K</option>
                          <option>60-90 K</option>
                          <option>70-100 K</option>
                          <option>100-150 K</option>
                        </select>
                      </div>-->

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Expérience</label>
                        <input class="form-control @error('experience') is-invalid @enderror" type="text" name="experience" id="experience" placeholder="5-10 ans" value="{{ $user->experience }}">
                        @error('experience')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Age</label>
                        <input class="form-control @error('age') is-invalid @enderror" type="number" name="age" id="age" placeholder="20 ans" value="{{ $user->age }} ans">
                        @error('age')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                        <!--<select class="chosen-select">
                          <option>23 - 27 Years</option>
                          <option>24 - 28 Years</option>
                          <option>25 - 29 Years</option>
                          <option>26 - 30 Years</option>
                        </select>-->
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Dernier Diplome</label>
                        <input class="form-control @error('diplome') is-invalid @enderror" type="text" name="diplome" id="diplome" placeholder="diplome" value="{{ $user->diplome }}">
                        @error('diplome')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Search Select -->
                      <!--<div class="form-group col-lg-6 col-md-12">
                        <label>Categories </label>
                        <select data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4">
                          <option value="Banking">Banking</option>
                          <option value="Digital&Creative">Digital & Creative</option>
                          <option value="Retail">Retail</option>
                          <option value="Human Resources">Human Resources</option>
                          <option value="Management">Management</option>
                        </select>
                      </div> -->

                      <!-- Input -->
                     <!-- <div class="form-group col-lg-6 col-md-12">
                        <label>Allow In Search & Listing</label>
                        <select class="chosen-select">
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div> -->

                      <!-- About Company -->
                      <div class="form-group col-lg-12 col-md-12">
                        <label>Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description"> {{ $user->description }} </textarea>
                        @error('description')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <button class="theme-btn btn-style-one">
                            Sauvegarder
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Ls widget -->
            {{--<div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Réseaux Sociaux</h4>
                </div>

                <div class="widget-content">
                  <form class="default-form" action="{{ route('auth.profile') }}" method="post">
                    @csrf
                    <div class="row">
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Facebook</label>
                        <input class="form-control @error('facebook') is-invalid @enderror" type="text" name="facebook" id="facebook" placeholder="www.facebook.com" value="{{ $user->facebook }}">
                        @error('facebook')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Twitter</label>
                        <input class="form-control @error('twitter') is-invalid @enderror" type="text" name="twitter" id="twitter" placeholder="www.twitter.com" value="{{ $user->twitter }}">
                        @error('twitter')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Linkedin</label>
                        <input class="form-control @error('linkedin') is-invalid @enderror" type="text" name="linkedin" id="linkedin" placeholder="www.linkedin.com" value="{{ $user->linkedin }}">
                        @error('linkedin')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Instagram</label>
                        <input class="form-control @error('instagram') is-invalid @enderror" type="text" name="instagram" id="instagram" placeholder="www.instagram.com" value="{{ $user->instagram }}">
                        @error('intagram')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <button class="theme-btn btn-style-one">Sauvegarder</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4> Informations de contact</h4>
                </div>

                <div class="widget-content">
                  <form class="default-form">
                    <div class="row">
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Pays</label>
                        <select class="chosen-select">
                          <option>Bénin</option>
                          <option>Pakistan</option>
                          <option>Chaina</option>
                          <option>Japan</option>
                          <option>India</option>
                        </select>
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Ville</label>
                        <select class="chosen-select">
                          <option>Cotonou</option>
                          <option>Calavi</option>
                          <option>Porto-Novo</option>
                          <option>Parakou</option>
                          <option>Ouidah</option>
                        </select>
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-12 col-md-12">
                        <label>Addresse Complete</label>
                        <input type="text" name="name" placeholder="Abomey Calavi, Bénin.">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Trouver sur Map</label>
                        <input type="text" name="name" placeholder="Abomey Calavi, Bénin">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-3 col-md-12">
                        <label>Latitude</label>
                        <input type="text" name="name" placeholder="Calavi">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-3 col-md-12">
                        <label>Longitude</label>
                        <input type="text" name="name" placeholder="Calavi">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-12 col-md-12">
                        <button class="theme-btn btn-style-three">Rechercher La Location</button>
                      </div>


                      <div class="form-group col-lg-12 col-md-12">
                        <div class="map-outer">
                          <div class="map-canvas map-height" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="{{ asset('images/resource/map-marker.png') }}" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                          </div>
                        </div>
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-12 col-md-12">
                        <button class="theme-btn btn-style-one">Sauvegarder</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>--}}

          </div>


        </div>
      </div>
    </section>
    <!-- End Dashboard -->

@endsection
