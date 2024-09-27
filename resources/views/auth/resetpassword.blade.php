<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Superio | Login</title>

  <!-- Stylesheets -->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body data-anm=".anm">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
    
        <!-- Main Header-->
        <header class="main-header">
          <div class="container-fluid">
            <!-- Main box -->
            <div class="main-box">
              <!--Nav Outer -->
              <div class="nav-outer">
                <div class="logo-box">
                  <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo-2.svg') }}" alt="" title=""></a></div>
                </div>
              </div>
    
             <!-- <div class="outer-box">
                 Login/Register 
                <div class="btn-box">
                  <a href="login-popup.html" class="theme-btn btn-style-three call-modal">Login / Register</a>
                  <a href="dashboard-post-job.html" class="theme-btn btn-style-one"><span class="btn-title">Job Post</span></a>
                </div>
              </div>
            </div>-->
          </div>
    
          <!-- Mobile Header -->
          <div class="mobile-header">
            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}" alt="" title=""></a></div>
          </div>
    
          <!-- Mobile Nav -->
          <div id="nav-mobile"></div>
        </header>
        <!--End Main Header -->
    
        <!-- Info Section -->
        <div class="login-section">
          <div class="image-layer" style="background-image: url({{ asset('images/background/12.jpg') }});"></div>
          <div class="outer-box">
            <!-- Login Form -->
            <div class="login-form default-form">
              <div class="form-inner">

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

                <h3> Changer le mot de passe </h3>
                <!--Login Form-->
                <form method="post" action="{{ route('auth.doresetPassword') }}">
                    @method('post')
                    @csrf
                    <input type="hidden" name="token" value="{{ $tokenString }}">
                  <div class="form-group">
                    <label>Nouveau mot de passe</label>
                    <input value="{{ old('new_password') }}" class="form-control @error('new_password') is-invalid @enderror" type="password" name="new_password" placeholder="">
                    @error('new_password')
                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Confirmer le mot de passe</label>
                    <input value="{{ old('confirm_password') }}" class="form-control @error('confirm_password') is-invalid @enderror" type="password" name="confirm_password" placeholder="">
                    @error('confirm_password')
                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <button class="theme-btn btn-style-one" type="submit" name="log-in">Connexion</button>
                  </div>
                </form>
    
                <div class="bottom-box">
                  <div class="text">Vous n'avez pas de compte? <a href="{{ route('auth.login') }}">  Se Reconnecter? </a></div>                 
                </div>
              </div>
            </div>
            <!--End Login Form -->
          </div>
        </div>
        <!-- End Info Section -->
    </div><!-- End Page Wrapper -->
    

    <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/chosen.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('js/jquery.modal.min.js') }}"></script>
        <script src="{{ asset('js/mmenu.polyfills.js') }}"></script>
        <script src="{{ asset('js/mmenu.js') }}"></script>
        <script src="{{ asset('js/appear.js') }}"></script>
        <script src="{{ asset('js/anm.min.js') }}"></script>
        <script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
        <script src="{{ asset('js/rellax.min.js') }}"></script>
        <script src="{{ asset('js/owl.js') }}"></script>
        <script src="{{ asset('js/wow.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>