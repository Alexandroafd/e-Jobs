<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 19:39:56 GMT -->
<head>
  <meta charset="utf-8">
  <title>Superio | Just another HTML Template | @yield('title')</title>

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

  <div class="page-wrapper dashboard ">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

        <!-- Main Header-->
        <header class="main-header">

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
  
                    <li class="dropdown">
                      <a href="{{ route('liste.employer') }}" @class(['nav-link', 'active' => str_contains($route, 'liste.')])>Employeurs</a>
                    </li>
  
                    <li class="dropdown">
                      <a href="{{ route('liste.candidat') }}" @class(['nav-link', 'active' => str_contains($route, 'liste.')])>Candidats</a>
                    </li>
                    <li class="dropdown">
                      <a href="{{ route('blog') }}" @class(['nav-link', 'active' => str_contains($route, 'blog')])>Blog</a>
                    </li> 
  
                    <li class="dropdown">
                      <span>Pages</span>
                      <ul>
                      <li><a href="{{ route('pages.about') }}" @class(['nav-link', 'active' => str_contains($route, 'pages.')])>A propos</a></li>
                      <!--<li><a href="about.html">Panier</a></li>-->
                      <li><a href="{{ route('pages.faq') }}" @class(['nav-link', 'active' => str_contains($route, 'pages.')])>FAQ's</a></li>
                      <!--<li><a href="invoice.html">Invoice</a></li>-->
                      <li><a href="{{ route('pages.element') }}" @class(['nav-link', 'active' => str_contains($route, 'pages.')])>Ui Elements</a></li>
                      <li><a href="{{ route('pages.contact') }}" @class(['nav-link', 'active' => str_contains($route, 'pages.')])>Contact</a></li>
                      </ul>
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
                <!-- Add Listing 
                <a href="candidate-dashboard-cv-manager.html" class="upload-cv"> Upload your CV</a> -->
                <!-- Login/Register -->
                <div class="btn-box">
                    @if (!Auth::check())
                    <a href="{{ route('auth.login') }}" class="theme-btn btn-style-three call-modal">Connexion</a>  <!--class="theme-btn btn-style-three call-modal"-->
                    @else
                        @if (Auth::user()->role == 'admin')
                            <a href="{{ route('admin.dashboard') }}" class="theme-btn btn-style-three call-modal">Admin</a>
                        @endif
                        <a href="{{ route('auth.createJob') }}" class="theme-btn btn-style-one">Poster un emploi</a> 
                    @endif
                </div>
              </div>
            </div>
              <!-- Mobile Header -->
                  <div class="mobile-header">
                      <div class="logo"><a href="#"><img src="{{ asset('images/logo.svg') }}" alt="" title=""></a></div>
                  
                      <!--Nav Box-->
                      <div class="nav-outer clearfix">
                  
                          <div class="outer-box">
                              <!-- Login/Register -->
                              <div class="login-box">
                                <a href="{{ route('auth.login') }}" class="call-modal"><span class="icon-user"></span></a>
                              </div>
                              <a href="#nav-mobile" class="mobile-nav-toggler"><span class="flaticon-menu-1"></span></a>
                              </div>
                          </div>
                  </div>
                  
              <!-- Mobile Nav -->
              <div id="nav-mobile"></div>
          </header>
          <!--End Main Header -->

    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <div>
        @yield('content')
    </div>

    <!-- Copyright -->
    <div class="copyright-text">
      <p>© 2024 Superio. Tous Droits Réservés.</p>
    </div>

  </div><!-- End Page Wrapper -->


  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/chosen.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
  <script src="{{ asset('js/jquery.modal.min.js') }}"></script>
  <script src="{{ asset('js/mmenu.polyfills.js') }}"></script>
  <script src="{{ asset('js/mmenu.js') }}"></script>
  <script src="{{ asset('js/appear.js') }}"></script>
  <script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
  <script src="{{ asset('js/rellax.min.js') }}"></script>
  <script src="{{ asset('js/owl.js') }}"></script>
  <script src="{{ asset('js/wow.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>

  <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
  <script src="{{ asset('js/chart.min.js') }}"></script>
  <script>
    Chart.defaults.global.defaultFontFamily = "Sofia Pro";
    Chart.defaults.global.defaultFontColor = '#888';
    Chart.defaults.global.defaultFontSize = '14';

    var ctx = document.getElementById('chart').getContext('2d');

    var chart = new Chart(ctx, {

      type: 'line',
      // The data for our dataset
      data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        // Information about the dataset
        datasets: [{
          label: "Views",
          backgroundColor: 'transparent',
          borderColor: '#1967D2',
          borderWidth: "1",
          data: [196, 132, 215, 362, 210, 252],
          pointRadius: 3,
          pointHoverRadius: 3,
          pointHitRadius: 10,
          pointBackgroundColor: "#1967D2",
          pointHoverBackgroundColor: "#1967D2",
          pointBorderWidth: "2",
        }]
      },

      // Configuration options
      options: {

        layout: {
          padding: 10,
        },

        legend: {
          display: false
        },
        title: {
          display: false
        },

        scales: {
          yAxes: [{
            scaleLabel: {
              display: false
            },
            gridLines: {
              borderDash: [6, 10],
              color: "#d8d8d8",
              lineWidth: 1,
            },
          }],
          xAxes: [{
            scaleLabel: {
              display: false
            },
            gridLines: {
              display: false
            },
          }],
        },

        tooltips: {
          backgroundColor: '#333',
          titleFontSize: 13,
          titleFontColor: '#fff',
          bodyFontColor: '#fff',
          bodyFontSize: 13,
          displayColors: false,
          xPadding: 10,
          yPadding: 10,
          intersect: false
        }
      },
    });
  </script>

</body>


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 19:40:04 GMT -->
</html>