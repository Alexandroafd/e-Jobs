<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from creativelayers.net/themes/superio/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 19:40:31 GMT -->
<head>
  <meta charset="utf-8">
  <title>Superio | Ul Elements</title>

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

  <div class="page-wrapper">

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

                  <li class="dropdown">
                    <a href="{{ route('liste.employer') }}" @class(['nav-link', 'active' => str_contains($route, 'liste.')])>Employeurs</a>
                    <!-- <ul>
                      <li><a href="employers-list-v3.html">Liste des employeurs</a></li>
                      <li><a href="employers-single-v3.html">Employeurs unique</a></li>
                      <li><a href="dashboard.html">Employeurs Dashboard</a></li>
                    </ul> -->
                  </li>

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
                    <a href="{{ route('liste.candidat') }}" @class(['nav-link', 'active' => str_contains($route, 'liste.')])>Candidats</a>
                    <!-- <ul>
                           <li><a href="candidates-list-v1.html">Candidates LIst v1</a></li>
                          <li><a href="candidates-list-v2.html">Candidates LIst v2</a></li> 
                          <li><a href="candidates-list-v3.html">Liste des candidats</a></li>
                          <li><a href="candidates-single-v1.html">Candidat unique</a></li>
                          <li><a href="candidate-dashboard.html">Candidat Dashboard</a></li>
                    </ul> -->
                  </li>
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

                  <li class="dropdown">
                    <a href="{{ route('blog') }}" @class(['nav-link', 'active' => str_contains($route, 'blog')])>Blog</a>
                    <!--<ul>
                      <li><a href="blog-list-v1.html">Blog List</a></li>
                       <li><a href="blog-list-v2.html">Blog LIst v2</a></li>
                      <li><a href="blog-list-v3.html">Blog LIst v3</a></li> 
                      <li><a href="blog-single.html">Blog Single</a></li>
                    </ul> -->
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
            <!-- Login/Register -->
            <div class="btn-box">
              <a href="{{ route('auth.login') }}" class="theme-btn btn-style-three call-modal">Connexion / Inscription</a>
              <a href="{{ route('auth.createJob') }}" class="theme-btn btn-style-one"><span class="btn-title">Poster un emploi</span></a>
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
              <a href="{{ route('auth.login') }}" class="call-modal"><span class="icon-user"></span></a>
            </div>

            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
          </div>
        </div>
      </div>

      <!-- Mobile Nav -->
      <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title">
      <div class="auto-container">
        <div class="title-outer">
          <h1>UI Elements</h1>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li>UI Elements</li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Page Title-->

    <!-- Elements -->
    <section class="content-elements">
      <div class="auto-container">
        <!-- Accordion and Tabs -->
        <div class="row">
          <div class="column col-lg-6 col-md-12 col-sm-12">
            <h4 class="title">Accordions</h4>
            <!--Accordian Box-->
            <ul class="accordion-box">
              <!--Block-->
              <li class="accordion block active-block">
                <div class="acc-btn active">Why won't my payment go through? <span class="icon flaticon-add"></span></div>
                <div class="acc-content current">
                  <div class="content">
                    <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                    <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                  </div>
                </div>
              </li>

              <!--Block-->
              <li class="accordion block">
                <div class="acc-btn"> How do I get a refund? <span class="icon flaticon-add"></span></div>
                <div class="acc-content">
                  <div class="content">
                    <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                    <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                  </div>
                </div>
              </li>

              <!--Block-->
              <li class="accordion block">
                <div class="acc-btn">How do I redeem a coupon? <span class="icon flaticon-add"></span></div>
                <div class="acc-content">
                  <div class="content">
                    <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                    <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                  </div>
                </div>
              </li>

              <!--Block-->
              <li class="accordion block">
                <div class="acc-btn">Changing account name <span class="icon flaticon-add"></span></div>
                <div class="acc-content">
                  <div class="content">
                    <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                    <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                  </div>
                </div>
              </li>


            </ul>
          </div>

          <div class="column col-lg-6 col-md-12 col-sm-12">
            <h4 class="title">Tabs</h4>

            <div class="default-tabs tabs-box">
              <!--Tabs Box-->
              <ul class="tab-buttons clearfix">
                <li class="tab-btn active-btn" data-tab="#tab1">All</li>
                <li class="tab-btn" data-tab="#tab2">Trending</li>
                <li class="tab-btn" data-tab="#tab3">Design</li>
                <li class="tab-btn" data-tab="#tab3">Marketing</li>
                <li class="tab-btn" data-tab="#tab3">Health</li>
              </ul>

              <div class="tabs-content">
                <!--Tab-->
                <div class="tab active-tab" id="tab1">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                  <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>

                <!--Tab-->
                <div class="tab" id="tab2">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                  <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>

                <!--Tab-->
                <div class="tab" id="tab3">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                  <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
              </div>
            </div>

            <div class="default-tabs style-two tabs-box">
              <!--Tabs Box-->
              <ul class="tab-buttons clearfix">
                <li class="tab-btn active-btn" data-tab="#tab4">Item 1</li>
                <li class="tab-btn" data-tab="#tab5">Item 2</li>
                <li class="tab-btn" data-tab="#tab6">Item 3</li>
              </ul>

              <div class="tabs-content">
                <!--Tab-->
                <div class="tab active-tab" id="tab4">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                  <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>

                <!--Tab-->
                <div class="tab" id="tab5">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                  <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>

                <!--Tab-->
                <div class="tab" id="tab6">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.
                  <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Table and Message box -->
        <div class="row">
          <div class="column col-lg-6 col-md-12 col-sm-12">
            <h4 class="title">Table</h4>
            <div class="table-outer">
              <table class="default-table">
                <thead>
                  <tr>
                    <th>Description</th>
                    <th>Hour</th>
                    <th>Quantity</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Design UX and UI</td>
                    <td>14</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>Design UX and UI</td>
                    <td>14</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>Design UX and UI</td>
                    <td>14</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>Design UX and UI</td>
                    <td>14</td>
                    <td>3</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="column col-lg-6 col-md-12 col-sm-12">
            <h4 class="title">Message Boxes</h4>

            <div class="message-box info">
              <p>Info: User pending action</p>
              <button class="close-btn"><span class="close_icon"></span></button>
            </div>

            <div class="message-box warning">
              <p>Warning: User has to be admin</p>
              <button class="close-btn"><span class="close_icon"></span></button>
            </div>

            <div class="message-box error">
              <p>Error: Internal Server Error</p>
              <button class="close-btn"><span class="close_icon"></span></button>
            </div>

            <div class="message-box success">
              <p>Success: Updated members status</p>
              <button class="close-btn"><span class="close_icon"></span></button>
            </div>
          </div>
        </div>

        <!-- Buttons -->
        <div class="row">
          <div class="col-lg-12">
            <h4 class="title">Buttons</h4>
            <div class="buttons">
              <button type="button" class="theme-btn btn-style-one large">Button Primary</button>
              <button type="button" class="theme-btn btn-style-two large">Button Secondary</button>
              <button type="button" class="theme-btn btn-style-three large">Button Third</button>
              <button type="button" class="theme-btn btn-style-four large">Button Fourth</button>
            </div>
          </div>
        </div>

        <!-- Forms -->
        <div class="row">
          <div class="col-lg-12">
            <h4 class="title">Form </h4>
            <div class="row">

              <div class="column col-lg-6 col-md-12">
                <form class="default-form">
                  <!-- Input -->
                  <div class="form-group">
                    <label>Input</label>
                    <input type="text" name="name" placeholder="Ali Tuf..">
                  </div>

                  <!-- Search Select -->
                  <div class="form-group chosen-search">
                    <label>Search Select boxes</label>
                    <select class="chosen-search-select">
                      <option>All Categories</option>
                      <option>Residential</option>
                      <option>Commercial</option>
                      <option>Industrial</option>
                      <option>Apartments</option>
                    </select>
                  </div>

                  <!-- Textarea -->
                  <div class="form-group chosen-search">
                    <label>Textarea</label>
                    <textarea placeholder="Message"></textarea>
                  </div>
                </form>
              </div>

              <div class="column col-lg-6 col-md-12">
                <form class="default-form">
                  <!-- Input -->
                  <div class="form-group">
                    <label>Select boxes </label>
                    <select class="chosen-select">
                      <option>All Categories</option>
                      <option>Residential</option>
                      <option>Commercial</option>
                      <option>Industrial</option>
                      <option>Apartments</option>
                    </select>
                  </div>

                  <!-- Search Select -->
                  <div class="form-group">
                    <label>Multiple Select boxes </label>
                    <select data-placeholder="Choose a category..." class="chosen-select" multiple tabindex="4">
                      <option value="Banking">Banking</option>
                      <option value="Digital&Creative">Digital & Creative</option>
                      <option value="Retail">Retail</option>
                      <option value="Human Resources">Human Resources</option>
                      <option value="Management">Management</option>
                    </select>
                  </div>

                  <!-- Textarea -->
                  <div class="form-group">
                    <div class="row">
                      <div class="form-group col-lg-4 col-md-4 col-sm-12">
                        <label>Radiobox</label>
                        <div class="radio-outer margin-top-10">
                          <div class="radio-box">
                            <input type="radio" name="radio" id="radio-1" checked="">
                            <label for="radio-1">Items</label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" name="radio" id="radio-2" checked="">
                            <label for="radio-2">Items</label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" name="radio" id="radio-3" checked="">
                            <label for="radio-3">Items</label>
                          </div>
                          <div class="radio-box">
                            <input type="radio" name="radio" id="radio-4" checked="">
                            <label for="radio-4">Items</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-lg-4 col-md-4 col-sm-12">
                        <label>Checkbox</label>
                        <!-- Checkboxes Ouer -->
                        <div class="checkbox-outer margin-top-10">
                          <ul class="checkboxes square">
                            <li>
                              <input id="check-a" type="checkbox" name="check">
                              <label for="check-a">Items</label>
                            </li>
                            <li>
                              <input id="check-b" type="checkbox" name="check">
                              <label for="check-b">Items</label>
                            </li>
                            <li>
                              <input id="check-c" type="checkbox" name="check">
                              <label for="check-c">Items</label>
                            </li>
                            <li>
                              <input id="check-d" type="checkbox" name="check">
                              <label for="check-d">Items</label>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="form-group col-lg-4 col-md-4 col-sm-12">
                        <label>Switch</label>
                        <!-- Switchbox Outer -->
                        <div class="switchbox-outer margin-top-10">
                          <ul class="switchbox">
                            <li>
                              <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                <span class="title">Freelance</span>
                              </label>
                            </li>
                            <li>
                              <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                                <span class="title">Full Time</span>
                              </label>
                            </li>
                            <li>
                              <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                <span class="title">Part Time</span>
                              </label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>

        <!-- Tooltop and Progress -->
        <div class="row">
          <div class="column col-lg-6 col-md-12 col-sm-12">
            <h4 class="title">Tooltips</h4>
            <div class="tooltip-outer">
              <button type="button" class="tooltip-btn" data-toggle="tooltip" data-placement="top" title="Tooltip">Top </button>
              <button type="button" class="tooltip-btn" data-toggle="tooltip" data-placement="right" title="Tooltip"> right </button>
              <button type="button" class="tooltip-btn" data-toggle="tooltip" data-placement="bottom" title="Tooltip"> bottom </button>
              <button type="button" class="tooltip-btn" data-toggle="tooltip" data-placement="left" title="Tooltip"> left </button>
            </div>
            <h4 class="title margin-top-50">Range Slider</h4>
            <div class="range-slider-one salary-range">
              <div class="salary-range-slider"></div>
              <div class="input-outer">
                <div class="amount-outer">
                  <span class="amount salary-amount">
                    $<span class="min">0</span>
                    $<span class="max">0</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="column col-lg-6 col-md-12 col-sm-12">
            <h4 class="title">Progress bars</h4>

            <!--Skills-->
            <div class="progress-bars">
              <!--Skill Item-->
              <div class="bar-item style-two">
                <div class="skill-bar">
                  <div class="bar-inner">
                    <div class="bar progress-line" data-width="90">
                      <div class="skill-percentage">
                        <div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!--Skill Item-->
              <div class="bar-item style-two">
                <div class="skill-bar">
                  <div class="bar-inner">
                    <div class="bar progress-line" data-width="50">
                      <div class="skill-percentage">
                        <div class="count-box"><span class="count-text" data-speed="2000" data-stop="50">0</span>%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!--Skill Item-->
              <div class="bar-item style-two">
                <div class="skill-bar">
                  <div class="bar-inner">
                    <div class="bar progress-line" data-width="40">
                      <div class="skill-percentage">
                        <div class="count-box"><span class="count-text" data-speed="2000" data-stop="40">0</span>%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="typography">
          <h4 class="title">Typography</h4>
          <h5>Course Description</h5>
          <p>Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Ut et adipiscing erat. Curabitur this is a text link libero tempus congue.</p>
          <p>Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>
          <blockquote class="blockquote-style-one mb-5 mt-5">
            <p>Consectetur adipiscing elit. Vitae, feugiat amet varius senectus bibendum cum nunc. Venenatis, lacus leo, semper porttitor sapien id in aliquet risus. Risus, faucibus lectus rhoncus cum duis non. Posuere pharetra felis, et urna enim id.</p>
            <cite>Luis Pickford</cite>
          </blockquote>
          <div class="row">
            <div class="column col-lg-6">
              <h5>Course Description</h5>
              <ul class="list-style-three">
                <li>We do not require any previous experience or pre-defined skills to take this course. A great orientation would be enough to master UI/UX design.</li>
                <li>A computer with a good internet connection.</li>
                <li>Adobe Photoshop (OPTIONAL)</li>
              </ul>
            </div>
            <div class="column col-lg-6">
              <h5>What you'll learn</h5>
              <ul class="list-style-four">
                <li>Become a UI/UX designer.</li>
                <li>You will be able to start earning money Figma skills.</li>
                <li>Build a UI project from beginning to end.</li>
                <li>Work with colors & fonts.</li>
                <li>You will create your own UI Kit.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Elements -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
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

                  <div class="big-column col-xl-8 col-lg-9 col-md-12">
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
                      </div>

                      <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                          <h4 class="widget-title">A propos</h4>
                          <div class="widget-content">
                            <ul class="list">
                              <li><a href="#">Page d'emplois</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Contact</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>


                      <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                          <h4 class="widget-title">Aide</h4>
                          <div class="widget-content">
                            <ul class="list">
                              <li><a href="#">Localisation</a></li>
                              <li><a href="#">Conditions d'utilisation</a></li>
                              <li><a href="#">Securité</a></li>
                              <li><a href="#">Accessibilité</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


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

</body>


<!-- Mirrored from creativelayers.net/themes/superio/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 19:40:31 GMT -->
</html>