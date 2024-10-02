@extends('base')

@section('title', 'Changer le mot de passe')

@section('content')

        <!-- User Sidebar -->
        <div class="user-sidebar">

            <div class="sidebar-inner">
              <ul class="navigation">
                {{--<li><a href="{{ route('auth.dashboard') }}"> <i class="la la-home"></i> Dashboard</a></li>--}}
                <li><a href="{{ route('auth.profile') }}"><i class="la la-user-tie"></i>Mon Profil</a></li>
                <li><a href="{{ route('auth.jobslist') }}"><i class="la la-bookmark-o"></i>Emplois Sélectionnés</a></li>
                <!-- <li><a href="dashboard-packages.html"><i class="la la-box"></i>Pacquets</a></li> -->
                <li class="active"><a href="{{ route('auth.changePassword') }}"><i class="la la-lock"></i>Changer le mot de passe</a></li>
                <!-- <li><a href="dashboard-profile.html"><i class="la la-user-alt"></i>Voir le Profile</a></li> -->
                <li><a href="{{ route('auth.logout') }}"><i class="la la-sign-out"></i>Déconnexion</a></li>
                <li><a href="{{ route('auth.deleteProfile') }}"><i class="la la-trash"></i>Supprimer le Profile</a></li>
              </ul>
      
              <div class="skills-percentage">
                <h4>Pourcentage de compétences</h4>
                <p>Valeur de mise pour le champ d'image de couverture pour augmenter votre compétence jusqu'à "85%"</p>
      
                <!-- Pie Graph -->
                <div class="pie-graph">
                  <div class="graph-outer">
                    <input type="text" class="dial" data-fgColor="#7367F0" data-bgColor="transparent" data-width="234" data-height="234" data-linecap="normal" value="30">
                    <div class="inner-text count-box"><span class="count-text txt" data-stop="30" data-speed="2000"></span>%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End User Sidebar -->
    
        <!-- Dashboard -->

        <!-- Dashboard -->
        <section class="user-dashboard">
            <div class="dashboard-outer">
              <div class="upper-title-box">
                <h3>Changer le mot de passe</h3>
                <div class="text"> Bienvenu !!</div>
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
      
              <!-- Ls widget -->
              <div class="ls-widget">
                <div class="widget-title">
                  <h4>Changer le mot de passe</h4>
                </div>
                <div class="widget-content">
                  <form class="default-form" method="post" action="{{ route('auth.updatePassword') }}">
                    @csrf
                    <div class="row">
                      <!-- Input -->
                      <div class="form-group col-lg-7 col-md-12">
                        <label> Ancien mot de passe </label>
                        <input class="form-control @error('old_password') is-invalid @enderror" type="password" name="old_password" id="old_password" placeholder="">
                        @error('old_password')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                    </div>
      
                      <!-- Input -->
                      <div class="form-group col-lg-7 col-md-12">
                        <label> Nouveau mot de passe </label>
                        <input class="form-control @error('new_password') is-invalid @enderror" type="password" name="new_password" id="new_password" placeholder="">
                        @error('new_password')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                    </div>
      
                      <!-- Input -->
                      <div class="form-group col-lg-7 col-md-12">
                        <label> Confirmer le mot de passe </label>
                        <input class="form-control @error('confirm_password') is-invalid @enderror" type="password" name="confirm_password" id="confirm_password" placeholder="">
                        @error('confirm_password')
                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                        @enderror
                    </div>
      
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <button class="theme-btn btn-style-one"> Modifier </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- End Dashboard -->

@endsection