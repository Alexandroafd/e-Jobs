<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 19:40:10 GMT -->
<head>
  <meta charset="utf-8">
  <title>Superio | Dashboard</title>

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
        <!-- <ul>
          <li><a href="job-list-v5.html">Liste des emplois</a></li>
          <li><a href="blog-list-v2.html">Blog LIst v2</a></li>
          <li><a href="blog-list-v3.html">Blog LIst v3</a></li>
          <li><a href="job-single-3.html">Emploi unique</a></li>
        </ul> -->
      <!-- <li class="dropdown has-mega-menu" id="has-mega-menu">
        <span>Find Jobs</span>
         <div class="mega-menu">
          <div class="mega-menu-bar row">
            <div>
               <ul>
                <li><a href="job-list-v5.html">Jobs List</a></li>
                <li><a href="job-single-3.html">Job Single</a></li>
                <li><a href="job-list-v1.html">Jobs List – v1</a></li>
                <li><a href="job-list-v2.html">Jobs List – v2</a></li>
                <li><a href="job-list-v3.html">Jobs List – v3</a></li>
                <li><a href="job-list-v4.html">Jobs List – v4</a></li>
              </ul>
            </div> -->

            <!--<div class="column col-lg-3 col-md-3 col-sm-12">
              <ul>
                <li><a href="job-list-v6.html">Jobs List – v6</a></li>
                <li><a href="job-list-v7.html">Jobs List – v7</a></li>
                <li><a href="job-list-v8.html">Jobs List – v8</a></li>
                <li><a href="job-list-v9.html">Jobs List – v9</a></li>
                <li><a href="job-list-v10.html">Jobs List – v10</a></li>
              </ul>
            </div>

            <div class="column col-lg-3 col-md-3 col-sm-12">
              <ul>
                <li><a href="job-list-v11.html">Jobs List – v11</a></li>
                <li><a href="job-list-v12.html">Jobs List – v12</a></li>
                <li><a href="job-list-v13.html">Jobs List – v13</a></li>
                <li><a href="job-list-v14.html">Jobs List – v14</a></li>
                <li><a href="job-list-v15.html">Jobs List – v15</a></li>
                <li><a href="job-list-v16.html">Jobs List – v16</a></li>
                <li><a href="job-list-v17.html">Jobs List – v17</a></li>
              </ul>
            </div>

            <div class="column col-lg-3 col-md-3 col-sm-12">
              <ul>
                <li><a href="job-single.html">Job Single v1</a></li>
                <li><a href="job-single-2.html">Job Single v2</a></li> -->
                <!-- <li><a href="job-single-4.html">Job Single v4</a></li>
                <li><a href="job-single-5.html">Job Single v5</a></li>
                <li><a href="job-single-6.html">Job Single v6</a></li>
                <li><a href="job-single-7.html">Job Single v7</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li> -->

      {{--<li class="dropdown">
        <a href="{{ route('liste.employer') }}" @class(['nav-link', 'active' => str_contains($route, 'liste.')])>Employeurs</a>
         <ul>
          <li><a href="employers-list-v3.html">Liste des employeurs</a></li>
          <li><a href="employers-single-v3.html">Employeurs unique</a></li>
          <li><a href="dashboard.html">Employeurs Dashboard</a></li>
        </ul>
      </li>--}}

      <!-- <li class="dropdown">
        <span>Employers</span>
        <ul>
            <span><a href="employers-list-v3.html">Employers List</span>
                <li><a href="employers-single-v3.html">Employers Single</a></li>
                <li><a href="dashboard.html">Employers Dashboard</a></li>
        </ul>
      </li>
             <ul>
              <li><a href="employers-list-v1.html">Employers LIst v1</a></li>
              <li><a href="employers-list-v2.html">Employers LIst v2</a></li>
              <li><a href="employers-list-v3.html">Employers LIst v3</a></li>
              <li><a href="employers-list-v4.html">Employers LIst v4</a></li>
            </ul>
          </li>

          <li class="dropdown">
             <ul>
              <li><a href="employers-single-v1.html">Employers Single v1</a></li>
              <li><a href="employers-single-v2.html">Employers Single v2</a></li>
            </ul>
          </li> -->
        <li class="dropdown">
            <a href="{{ route('blog') }}" @class(['nav-link', 'active' => str_contains($route, 'blog')])>Blog</a>
        </li>

        <li class="dropdown">
            <a href="{{ route('pages.about') }}" @class(['nav-link', 'active' => str_contains($route, 'pages.')])>A propos</a>
        </li>

        <li class="dropdown">
            <a href="{{ route('pages.contact') }}" @class(['nav-link', 'active' => str_contains($route, 'pages.')])>Contact</a>

        </li>

      {{--<li class="dropdown">
        <a href="{{ route('liste.candidat') }}" @class(['nav-link', 'active' => str_contains($route, 'liste.')])>Candidats</a>
         <ul>
               <li><a href="candidates-list-v1.html">Candidates LIst v1</a></li>
              <li><a href="candidates-list-v2.html">Candidates LIst v2</a></li>
              <li><a href="candidates-list-v3.html">Liste des candidats</a></li>
              <li><a href="candidates-single-v1.html">Candidat unique</a></li>
              <li><a href="candidate-dashboard.html">Candidat Dashboard</a></li>
        </ul>
      </li> --}}
             <!-- <li><a href="candidates-list-v4.html">Candidates LIst v4</a></li>
              <li><a href="candidates-list-v5.html">Candidates LIst v5</a></li>
              <li><a href="candidates-list-v6.html">Candidates LIst v6</a></li>
              <li><a href="candidates-list-v7.html">Candidates LIst v7</a></li>
            </ul>
          </li>

          <li class="dropdown">
             <ul>
               <li><a href="candidates-single-v2.html">Candidates Single v2</a></li>
              <li><a href="candidates-single-v3.html">Candidates Single v3</a></li>
              <li><a href="candidates-single-v4.html">Candidates Single v4</a></li>
              <li><a href="candidates-single-v5.html">Candidates Single v5</a></li> -->

      {{--<li class="dropdown">
        <a href="{{ route('blog') }}" @class(['nav-link', 'active' => str_contains($route, 'blog')])>Blog</a>
        <ul>
          <li><a href="blog-list-v1.html">Blog List</a></li>
           <li><a href="blog-list-v2.html">Blog LIst v2</a></li>
          <li><a href="blog-list-v3.html">Blog LIst v3</a></li>
          <li><a href="blog-single.html">Blog Single</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <span>Pages</span>
        <ul>
        <li><a href="about.html">Panier</a></li>
        <li><a href="{{ route('pages.faq') }}" @class(['nav-link', 'active' => str_contains($route, 'pages.')])>FAQ's</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="{{ route('pages.element') }}" @class(['nav-link', 'active' => str_contains($route, 'pages.')])>Ui Elements</a></li>
        <li><a href="{{ route('pages.contact') }}" @class(['nav-link', 'active' => str_contains($route, 'pages.')])>Contact</a></li>
        </ul>
      </li>--}}
        <!-- <ul>
          <li class="dropdown">
            <span>Shop</span>
            <ul>
              <li><a href="shop.html">Shop List</a></li>
              <li><a href="shop-single.html">Shop Single</a></li>
              <li><a href="shopping-cart.html">Panier</a></li>
              <li><a href="shop-checkout.html">Payement</a></li>
              <li><a href="order-completed.html">Order Completed</a></li>
              <li><a href="login.html">Connexion</a></li>
              <li><a href="register.html">Inscription</a></li>
            </ul>
          </li>
          <li><a href="about.html">About</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="faqs.html">FAQ's</a></li>
          <li><a href="terms.html">Terms</a></li>
          <li><a href="invoice.html">Invoice</a></li>
          <li><a href="elements.html">Ui Elements</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </li> -->

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

            <button class="menu-btn">
              <span class="count">1</span>
              <span class="icon la la-heart-o"></span>
            </button>

            <button class="menu-btn">
              <span class="icon la la-bell"></span>
            </button>

            <div class="dropdown dashboard-option">
                @if (!Auth::check())
                    <a href="{{ route('auth.login') }}" class="theme-btn btn-style-three call-modal">Connexion</a>  <!--class="theme-btn btn-style-three call-modal"-->
                @else
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="theme-btn btn-style-three call-modal">Admin</a>
                    @endif
                    <a href="{{ route('auth.createJob') }}" class="theme-btn btn-style-one">Poster un emploi</a>
                @endif

            <!-- Dashboard Option -->
           <!-- <div class="dropdown dashboard-option">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/resource/company-6.png') }}" alt="avatar" class="thumb">
                <span class="name">My Account</span>
              </a>
              <ul class="dropdown-menu">
                <li class="active"><a href="candidate-dashboard.html"> <i class="la la-home"></i> Dashboard</a></li>
                <li><a href="candidate-dashboard-profile.html"><i class="la la-user-tie"></i>My Profile</a></li>
                <li><a href="candidate-dashboard-resume.html"><i class="la la-file-invoice"></i>My Resume</a></li>
                <li><a href="candidate-dashboard-applied-job.html"><i class="la la-briefcase"></i> Applied Jobs </a></li>
                <li><a href="candidate-dashboard-job-alerts.html"><i class="la la-bell"></i>Job Alerts</a></li>
                <li><a href="candidate-dashboard-shortlisted-resume.html"><i class="la la-bookmark-o"></i>Shortlisted Jobs</a></li>
                <li><a href="candidate-dashboard-cv-manager.html"><i class="la la-file-invoice"></i> CV manager</a></li>
                <li><a href="dashboard-packages.html"><i class="la la-box"></i>Packages</a></li>
                <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i>Messages</a></li>
                <li><a href="dashboard-change-password.html"><i class="la la-lock"></i>Change Password</a></li>
                <li><a href="dashboard-profile.html"><i class="la la-user-alt"></i>View Profile</a></li>
                <li><a href="index.html"><i class="la la-sign-out"></i>Logout</a></li>
                <li><a href="dashboard-delete.html"><i class="la la-trash"></i>Delete Profile</a></li>
              </ul>
            </div> -->
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
              <a href="{{ route('auth.login') }}" class="call-modal"><span class="icon-user"></span></a>
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

    <!-- User Sidebar -->
    <div class="user-sidebar">

      <div class="sidebar-inner">
        <ul class="navigation">
            <li class="active"><a href="{{ route('auth.dashboard') }}"> <i class="la la-home"></i> Dashboard</a></li>
            <li><a href="{{ route('auth.profile') }}"><i class="la la-user-tie"></i>Mon Profil</a></li>
            <li><a href="{{ route('auth.jobslist') }}"><i class="la la-bookmark-o"></i>Emplois Sélectionnés</a></li>
            <!--<li><a href="dashboard-packages.html"><i class="la la-box"></i>Pacquets</a></li>-->
            <li><a href="{{ route('auth.changePassword') }}"><i class="la la-lock"></i>Changer le mot de passe</a></li>
           <!-- <li><a href="dashboard-profile.html"><i class="la la-user-alt"></i>Voir le Profile</a></li>-->
            <li><a href="{{ route('auth.logout') }}"><i class="la la-sign-out"></i>Déconnexion</a></li>
            <li><a href="{{ route('auth.deleteProfile') }}"><i class="la la-trash"></i>Supprimer le Profil</a></li>
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
    <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3> Heyy {{ Auth::user()->name }} !</h3>
          <div class="text">Bienvenu !!</div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="ui-item">
              <div class="left">
                <i class="icon flaticon-briefcase"></i>
              </div>
              <div class="right">
                <h4>22</h4>
                <p>Emplois Postulés</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="ui-item ui-red">
              <div class="left">
                <i class="icon la la-file-invoice"></i>
              </div>
              <div class="right">
                <h4>9382</h4>
                <p>Alertes d'emplois</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="ui-item ui-yellow">
              <div class="left">
                <i class="icon la la-comment-o"></i>
              </div>
              <div class="right">
                <h4>74</h4>
                <p>Méssages</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="ui-item ui-green">
              <div class="left">
                <i class="icon la la-bookmark-o"></i>
              </div>
              <div class="right">
                <h4>32</h4>
                <p>Ma Liste</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">


          <div class="col-lg-7">
            <!-- Graph widget -->
            <div class="graph-widget ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Fréquence de vue de votre profil</h4>
                  <div class="chosen-outer">
                    <!--Tabs Box-->
                    <select class="chosen-select">
                      <option> 6 derniers mois</option>
                      <option>12 derniers mois</option>
                      <option>16 derniers mois</option>
                      <option>24 derniers mois</option>
                      <option>5 dernières années</option>
                    </select>
                  </div>
                </div>

                <div class="widget-content">
                  <canvas id="chart" width="100" height="45"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <!-- Notification Widget -->
            <div class="notification-widget ls-widget">
              <div class="widget-title">
                <h4>Notifications</h4>
              </div>
              <div class="widget-content">
                <ul class="notification-list">
                  <li><span class="icon flaticon-briefcase"></span> <strong>Wade Warren</strong> applied for a job <span class="colored">Web Developer</span></li>
                  <li><span class="icon flaticon-briefcase"></span> <strong>Henry Wilson</strong> applied for a job <span class="colored">Senior Product Designer</span></li>
                  <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Raul Costa</strong> applied for a job <span class="colored">Product Manager, Risk</span></li>
                  <li><span class="icon flaticon-briefcase"></span> <strong>Jack Milk</strong> applied for a job <span class="colored">Technical Architect</span></li>
                  <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Michel Arian</strong> applied for a job <span class="colored">Software Engineer</span></li>
                  <li><span class="icon flaticon-briefcase"></span> <strong>Ali Tufan</strong> applied for a job <span class="colored">UI Designer</span></li>
                </ul>
              </div>
            </div>
          </div>


          <div class="col-lg-12">
            <!-- applicants Widget -->
            <div class="applicants-widget ls-widget">
              <div class="widget-title">
                <h4>Emplois postulés récemment</h4>
              </div>
              <div class="widget-content">
                <div class="row">
                  <!-- Job Block -->
                  <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                      <div class="content">
                        <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-1.png') }}" alt=""></span>
                        <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                        <ul class="job-info">
                          <li><span class="icon flaticon-briefcase"></span> Segment</li>
                          <li><span class="icon flaticon-map-locator"></span> Calavi, Bénin</li>
                          <li><span class="icon flaticon-clock-3"></span> 11h déjà</li>
                          <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                          <li class="time">Temps Plein</li>
                          <li class="privacy">Privé</li>
                          <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                      </div>
                    </div>
                  </div>

                  <!-- Job Block -->
                  <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                      <div class="content">
                        <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-2.png') }}" alt=""></span>
                        <h4><a href="#">Recruiting Coordinator</a></h4>
                        <ul class="job-info">
                          <li><span class="icon flaticon-briefcase"></span> Segment</li>
                          <li><span class="icon flaticon-map-locator"></span> Cotonou, Bénin</li>
                          <li><span class="icon flaticon-clock-3"></span> 10h déjà</li>
                          <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                          <li class="time">Temps Plein</li>
                          <li class="privacy">Privé</li>
                          <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                      </div>
                    </div>
                  </div>

                  <!-- Job Block -->
                  <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                      <div class="content">
                        <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-3.png') }}" alt=""></span>
                        <h4><a href="#">Product Manager, Studio</a></h4>
                        <ul class="job-info">
                          <li><span class="icon flaticon-briefcase"></span> Segment</li>
                          <li><span class="icon flaticon-map-locator"></span> Ouidah, Bénin</li>
                          <li><span class="icon flaticon-clock-3"></span> 09h déjà</li>
                          <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                          <li class="time">Temps Plein</li>
                          <li class="privacy">Privé</li>
                          <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                      </div>
                    </div>
                  </div>

                  <!-- Job Block -->
                  <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                      <div class="content">
                        <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-4.png') }}" alt=""></span>
                        <h4><a href="#">Senior Product Designer</a></h4>
                        <ul class="job-info">
                          <li><span class="icon flaticon-briefcase"></span> Segment</li>
                          <li><span class="icon flaticon-map-locator"></span> Parakou, Bénin</li>
                          <li><span class="icon flaticon-clock-3"></span> 20h déjà</li>
                          <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                          <li class="time">Temps Plein</li>
                          <li class="privacy">Privé</li>
                          <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                      </div>
                    </div>
                  </div>

                  <!-- Job Block -->
                  <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                      <div class="content">
                        <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-5.png') }}" alt=""></span>
                        <h4><a href="#">Senior Full Stack Engineer, Creator Success</a></h4>
                        <ul class="job-info">
                          <li><span class="icon flaticon-briefcase"></span> Segment</li>
                          <li><span class="icon flaticon-map-locator"></span> Akassato, Bénin</li>
                          <li><span class="icon flaticon-clock-3"></span> 22h déjà</li>
                          <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                          <li class="time">Temps Plein</li>
                          <li class="privacy">Privé</li>
                          <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                      </div>
                    </div>
                  </div>

                  <!-- Job Block -->
                  <div class="job-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                      <div class="content">
                        <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-6.png') }}" alt=""></span>
                        <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                        <ul class="job-info">
                          <li><span class="icon flaticon-briefcase"></span> Segment</li>
                          <li><span class="icon flaticon-map-locator"></span> Porto-Novo, Bénin</li>
                          <li><span class="icon flaticon-clock-3"></span> 15h déjà</li>
                          <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                          <li class="time">Temps Plein</li>
                          <li class="privacy">Privé</li>
                          <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Dashboard -->

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
  <script src="{{ asset('js/knob.js') }}"></script>
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


<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 19:40:15 GMT -->
</html>
