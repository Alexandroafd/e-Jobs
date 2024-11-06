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
                <li><a href="{{ route('auth.deleteProfile') }}"><i class="la la-trash"></i>Supprimer le Profil</a></li>
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
                      <div class="form-group col-lg-6 col-md-12">
                        <label> Salaire(FCFA) </label>
                        <input class="form-control @error('salary') is-invalid @enderror" type="number" name="salary" id="salary" placeholder="100.000 FCFA" value="{{ $user->salary }}">
                        @error('salary')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

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
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Dernier Diplome</label>
                        <input class="form-control @error('diplome') is-invalid @enderror" type="text" name="diplome" id="diplome" placeholder="diplome" value="{{ $user->diplome }}">
                        @error('diplome')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                      </div>

                        <div class="form-group col-lg-6 col-md-12">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" value="" id="status-active">
                                <label for="genre" class="form-check-label"> Masculin </label>
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" value="" id="status-block">
                                <label for="genre" class="form-check-label"> Féminin </label>
                            </div>
                        </div>

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

          </div>


        </div>
      </div>
    </section>
    <!-- End Dashboard -->

@endsection
