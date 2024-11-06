<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-applied-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 19:41:20 GMT -->
<head>
  <meta charset="utf-8">
  <title> Superio | @yield('title')</title>

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

<body>

  <div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header header-shaddow">
        <div class="container-fluid">
          <!-- Main box -->
          <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
              <div class="logo-box">
                <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}" alt="" title=""></a></div>
              </div>

              @php
                  $route = request()->route()->getName();
              @endphp

  <nav class="nav main-menu">
    <ul class="navigation" id="navbar">
      <li class="">
        <a href="{{ route('home') }}" @class(['nav-link', 'active' => str_contains($route, 'home')])>Accueil</a>
      </li>

      <li class="dropdown has-mega-menu" id="has-mega-menu">
            <a href="{{ route('liste.find') }}" @class(['nav-link', 'active' => str_contains($route, 'liste.')])>Emplois</a>
      </li>

      <!-- Only for Mobile View -->
      <li class="mm-add-listing">
        <a href="{{ route('auth.createJob') }}" class="theme-btn btn-style-one">Poster un emploi</a>
        <span>
          <span class="contact-info">
            <span class="phone-num"><span>Appelez ici</span><a href="tel:22912345678">229 123 456 78</a></span>
            <span class="address">Abomey-Calavi<br>Bénin.</span>
            <a href="mailto:admin@public.com" class="email">admin@public.com</a>
          </span>
          <span class="social-links">
            <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-linkedin-in"></span></a>
          </span>
        </span>
      </li>
    </ul>
  </nav>
  <!-- Main Menu End-->
            </div>

            <div class="outer-box">

              <!-- Dashboard Option -->
               <div class="dropdown dashboard-option">
                  @if (!Auth::check())
                      <a href="{{ route('auth.login') }}" class="theme-btn btn-style-three call-modal">Connexion</a>  <!--class="theme-btn btn-style-three call-modal"-->
                  @else
                      @if (Auth::user()->role == 'admin')
                          <a href="{{ route('admin.dashboard') }}" class="theme-btn btn-style-three call-modal">Admin</a>
                      @else
                          @if (Auth::user()->user_type == 'employer')
                              <a href="{{ route('auth.createJob') }}" class="theme-btn btn-style-one">Poster un emploi</a>
                          @endif
                      @endif
                  @endif
                  
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
          <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}" alt="" title=""></a></div>

          <!--Nav Box-->
          <div class="nav-outer clearfix">

            <div class="outer-box">
              <!-- Login/Register -->
              <div class="login-box">
                @if(!Auth::check())
                  <a href="{{ route('auth.login') }}" class="call-modal"><span class="icon-user"></span></a>
                @endif
              </div>

              <button id="toggle-user-sidebar"><img src="{{ asset('images/resource/company-6.png') }}" alt="avatar" class="thumb"></button>
              <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
            </div>
          </div>

        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>
      </header>
      <!--End Main Header -->

    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    @yield('content')

    <!-- Copyright -->
    <div class="copyright-text">
      <p>© 2024 Superio. Tous Droits Réservés.</p>
    </div>

  </div><!-- End Page Wrapper -->


  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/chosen.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('js/jquery.fancybox.js')}}"></script>
  <script src="{{asset('js/jquery.modal.min.js')}}"></script>
  <script src="{{asset('js/mmenu.polyfills.js')}}"></script>
  <script src="{{asset('js/mmenu.js')}}"></script>
  <script src="{{asset('js/appear.js')}}"></script>
  <script src="{{asset('js/ScrollMagic.min.js')}}"></script>
  <script src="{{asset('js/rellax.min.js')}}"></script>
  <script src="{{asset('js/owl.js')}}"></script>
  <script src="{{asset('js/wow.js')}}"></script>
  <script src="{{asset('js/knob.js')}}"></script>
  <script src="{{asset('js/script.js')}}"></script>
  <!--Google Map APi Key-->
  <script src="{{asset('http://maps.google.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw&amp;ver=5.2.4')}}"></script>
  <script src="{{asset('js/map-script.js')}}"></script>
  <!--End Google Map APi-->
</body>


<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-applied-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 19:41:20 GMT -->
</html>
