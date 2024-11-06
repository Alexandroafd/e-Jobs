<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Superio | @yield('title')</title>

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

 <!-- <style>
    @layer reset {
        span {
            all: unset;
        }
    }
  </style> -->
</head>
<body data-anm=".anm">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

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
                    <!-- <div class="mega-menu">
                      <div class="mega-menu-bar row pt-0">
                        <div class="column col-lg-3 col-md-3 col-sm-12">
                          <ul>
                            <li class="current"><a href="index.html">Home Page 01</a></li>
                            <li><a href="index-2.html">Home Page 02</a></li>
                            <li><a href="index-3.html">Home Page 03</a></li>
                            <li><a href="index-4.html">Home Page 04</a></li>
                            <li><a href="index-5.html">Home Page 05</a></li>
                          </ul>
                        </div>

                        <div class="column col-lg-3 col-md-3 col-sm-12">
                          <ul>
                            <li><a href="index-6.html">Home Page 06</a></li>
                            <li><a href="index-7.html">Home Page 07</a></li>
                            <li><a href="index-8.html">Home Page 08</a></li>
                            <li><a href="index-9.html">Home Page 09</a></li>
                            <li><a href="index-10.html">Home Page 10</a></li>
                          </ul>
                        </div>

                        <div class="column col-lg-3 col-md-3 col-sm-12">
                          <ul>
                            <li><a href="index-11.html">Home Page 11</a></li>
                            <li><a href="index-12.html">Home Page 12</a></li>
                            <li><a href="index-13.html">Home Page 13</a></li>
                            <li><a href="index-14.html">Home Page 14</a></li>
                            <li><a href="index-15.html">Home Page 15</a></li>
                          </ul>
                        </div>

                        <div class="column col-lg-3 col-md-3 col-sm-12">
                          <ul>
                            <li><a href="index-16.html">Home Page 16</a></li>
                            <li><a href="index-17.html">Home Page 17</a></li>
                            <li><a href="index-18.html">Home Page 18</a></li>
                            <li><a href="index-19.html">Home Page 19</a></li>
                            <li><a href="index-20.html">Home Page 20</a></li>
                            <li><a href="index-21.html">Home Page 21</a></li>
                            <li><a href="index-22.html">Home Page 22</a></li>
                          </ul>
                        </div>
                      </div>
                    </div> -->
                  </li>

                  <li class="dropdown has-mega-menu" id="has-mega-menu">
                        <a href="{{ route('liste.find') }}" @class(['nav-link', 'active' => str_contains($route, 'liste.')])>Emplois</a>
                  </li>

                  <!-- Only for Mobile View -->
                  <li class="mm-add-listing">
                    @if (Auth::user())
                    <a href="{{ route('auth.createJob') }}" class="theme-btn btn-style-one">Poster un emploi</a>
                    @endif
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
              <!-- Login/Register btn-box -->
              <div class="">
                @if (!Auth::check())
                    <a href="{{ route('auth.login') }}" class="theme-btn btn-style-three">Connexion / Inscription</a>  <!--class="theme-btn btn-style-three call-modal"-->
                @else
                    @if (Auth::user()->user_type == 'employer')
                        <a href="{{ route('auth.createJob') }}" class="theme-btn btn-style-one">Poster un emploi</a>
                    @endif
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

        <div class="main">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            {{--<div class="auto-container">
              <!--Widgets Section-->
              <div class="widgets-section wow fadeInUp">
                <div class="row">
                  <div class="big-column col-xl-4 col-lg-3 col-md-12">
                    <div class="footer-column about-widget">
                      <div class="logo"><a href="#"><img src="{{ asset('images/logo.svg') }}" alt=""></a></div>
                      <p class="phone-num"><span>Appelez ici </span><a href="thebeehost%40support.html">229 123 456 78</a></p>
                      <p class="address">Abomey-Calavi<br>Bénin. <br><a href="mailto:admin@public.com" class="email">admin@public.com</a></p>
                    </div>
                  </div>

                  <!--<div class="big-column col-xl-8 col-lg-9 col-md-12">
                    <div class="row">
                      <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                          <h4 class="widget-title">Pour les Candidats</h4>
                          <div class="widget-content">
                            <ul class="list">
                              <li><a href="#">Parcourir les emplois</a></li>
                              <li><a href="#">Parcourir les Catégories</a></li>
                              <li><a href="#">Candidat Dashboard</a></li>
                              <li><a href="#">Mes Favoris</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>


                      <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                          <h4 class="widget-title">Pour les Employeurs</h4>
                          <div class="widget-content">
                            <ul class="list">
                              <li><a href="#">Parcourir les Candidats</a></li>
                              <li><a href="#">Employeur Dashboard</a></li>
                              <li><a href="#">Ajouter un emploi</a></li>
                              <li><a href="#">Tous les emplois</a></li>
                            </ul>
                          </div>
                        </div>
                      </div> -->

                      <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                          <h4 class="widget-title">A propos</h4>
                          <div class="widget-content">
                            <ul class="list">
                              <li><a href="{{ route('liste.find') }}">Page d'emplois</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>


                      <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                          <h4 class="widget-title">Aide</h4>
                          <div class="widget-content">
                            <ul class="list">
                              <li><a href="www.googlemap.com">Localisation</a></li>
                             <!-- <li><a href="#">Securité</a></li>
                              <li><a href="#">Accessibilité</a></li>-->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>--}}


            <!--Bottom-->
            <div class="footer-bottom">
              <div class="auto-container">
                <div class="outer-box">
                  <div class="copyright-text">© 2024 <a href="#">Superio</a>. Tous droits Réservés.</div>
                  <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
        </footer>
          <!-- End Main Footer -->


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
