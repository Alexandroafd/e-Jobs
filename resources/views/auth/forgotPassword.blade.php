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

                <h3> Mot de passe oublié </h3>
                <!--Login Form-->
                <form method="post" action="{{ route('auth.doforgotPassword') }}">
                    @method('post')
                    @csrf
                  <div class="form-group">
                    <label>Email</label>
                    <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
                    @error('email')
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