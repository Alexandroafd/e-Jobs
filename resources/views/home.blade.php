@extends('layout')

@section('title', 'Accueil')

@section('content')
    
        <!-- Banner Section-->
        <section class="banner-section">
          <div class="auto-container">
            <div class="row">
              <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInUp" data-wow-delay="1000ms">
                  <div class="title-box">
                    <h3>Plus de <span class="colored">50,000</span> emplois postés<br> pour vous.</h3>
                    <div class="text">Trouver l'emploi qui vous convient et démarrer votre carrière professionnelle.</div>
                  </div>
    
                  <!-- Job Search Form -->
                  <div class="job-search-form">
                    <form method="get" action="{{ route('liste.find') }}">
                      <div class="row">
                        <div class="form-group col-lg-5 col-md-12 col-sm-12">
                          <span class="icon flaticon-search-1"></span>
                          <input type="text" name="title" id="title" placeholder="Nom de l'emploi">
                        </div>
                        <!-- Form Group -->
                        <div class="form-group col-lg-4 col-md-12 col-sm-12 location">
                          <span class="icon flaticon-map-locator"></span>
                          <input type="text" name="city" id="city" placeholder="Ville">
                        </div>
                        <!-- Form Group -->
                        <div class="form-group col-lg-3 col-md-12 col-sm-12 btn-box">
                          <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Chercher</span></button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Job Search Form -->
    
                  <!-- Popular Search -->
                  <div class="popular-searches">
                    <span class="title">Recherches Populaires : </span>
                    <a href="#">Designer</a>,
                    <a href="#">Developer</a>,
                    <a href="#">Web</a>,
                    <a href="#">IOS</a>,
                    <a href="#">PHP</a>,
                    <a href="#">Senior</a>,
                    <a href="#">Engineer</a>,
                  </div>
                  <!-- End Popular Search -->
                </div>
              </div>
    
              <div class="image-column col-lg-5 col-md-12">
                <div class="image-box">
                  <figure class="main-image wow fadeIn" data-wow-delay="500ms"><img src="{{ asset('images/resource/banner-img-1.png') }}" alt=""></figure>
    
                  
                  <div class="info_block anm wow fadeIn" data-wow-delay="1000ms" data-speed-x="2" data-speed-y="2">
                    <span class="icon flaticon-email-3"></span>
                    <p>Work Inquiry From <br>Ali Tufan</p>
                  </div>
    
    
                  <div class="info_block_two anm wow fadeIn" data-wow-delay="2000ms" data-speed-x="1" data-speed-y="1">
                    <p>10k+ Candidates</p>
                    <div class="image"><img src="images/resource/multi-peoples.png" alt=""></div>
                  </div>
    
    
                  <div class="info_block_three anm wow fadeIn" data-wow-delay="1500ms" data-speed-x="4" data-speed-y="4">
                    <span class="icon flaticon-briefcase"></span>
                    <p>Creative Agency</p>
                    <span class="sub-text">Startup</span>
                    <span class="right_icon fa fa-check"></span>
                  </div>
    
    
                  <div class="info_block_four anm wow fadeIn" data-wow-delay="2500ms" data-speed-x="3" data-speed-y="3">
                    <span class="icon flaticon-file"></span>
                    <div class="inner">
                      <p>Upload Your CV</p>
                      <span class="sub-text">It only takes a few seconds</span>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner Section-->
    
        <!-- Job Categories -->
        <section class="job-categories">
          <div class="auto-container">
            <div class="sec-title text-center">
              <h2>Catégories</h2>
            </div>
    
            <div class="row wow fadeInUp">

                @if ($categories->isNotEmpty())
                    @foreach ($categories as $category)
                    <!-- Category Block -->
                    <div class="category-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-money-1"></span>
                            <h4><a href="{{ route('liste.find').'?category='.$category->id }}"> {{ $category->name }} </a></h4>
                            <!--<p> Postulant(s)</p> -->
                        </div>
                        </div>
                    </div>
                    @endforeach
                @endif
    
            </div>
          </div>
        </section>
        <!-- End Job Categories -->
    
        <!-- Job Section -->
        <section class="job-section">
          <div class="auto-container">
            <div class="sec-title text-center">
              <h2>Offres d'emploi</h2>
              <div class="text">Trouvez l'emploi qui vous convient</div>
            </div>
    
            <div class="row wow fadeInUp">

                @if ($featuredjobs->isNotEmpty())
                    @foreach ($featuredjobs as $featuredjob)
                        <!-- Job Block -->
                        <div class="job-block col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box">
                            <div class="content">
                                <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-1.png') }}" alt=""></span>
                                <h4><a href="{{ route('jobDetail', $featuredjob->id) }}"> {{ $featuredjob->title }} </a></h4>
                                <ul class="job-info">
                                <li><span class="icon flaticon-briefcase"></span> {{ $featuredjob->company_name }} </li>
                                <li><span class="icon flaticon-map-locator"></span> {{ $featuredjob->company_location }} </li>
                                <li><span class="icon flaticon-clock-3"></span> {{\Carbon\Carbon::parse($featuredjob->created_at)->format('d M, Y')}}</li>
                                @if (!is_null($featuredjob->salary))
                                <li><span class="icon flaticon-money"></span> {{ $featuredjob->salary }} </li>
                                @endif
                                </ul>
                                <ul class="job-other-info">
                                <li class="time"> {{ $featuredjob->jobType->name }} </li>
                                </ul>
                                <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                            </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
    
          <!--  <div class="btn-box">
              <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Voir plus</span></a>
            </div> -->
          </div>
        </section>
        <!-- End Job Section -->
    
        <!-- Testimonial Section -->
        <section class="testimonial-section">
          <div class="container-fluid">
            <!-- Sec Title -->
            <div class="sec-title text-center">
              <h2>Témoignages de nos clients</h2>
              <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
            </div>
    
            <div class="carousel-outer wow fadeInUp">
    
              <!-- Testimonial Carousel -->
              <div class="testimonial-carousel owl-carousel owl-theme">
    
                <!--Testimonial Block -->
                <div class="testimonial-block">
                  <div class="inner-box">
                    <h4 class="title">Bon thème</h4>
                    <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                    <div class="info-box">
                      <div class="thumb"><img src="{{ asset('images/resource/testi-thumb-1.png') }}" alt=""></div>
                      <h4 class="name">Nicole Wells</h4>
                      <span class="designation">Web Developer</span>
                    </div>
                  </div>
                </div>
    
                <!--Testimonial Block -->
                <div class="testimonial-block">
                  <div class="inner-box">
                    <h4 class="title">Grande qualité!</h4>
                    <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                    <div class="info-box">
                      <div class="thumb"><img src="{{ asset('images/resource/testi-thumb-2.png') }}" alt=""></div>
                      <h4 class="name">Gabriel Nolan</h4>
                      <span class="designation">Consultant</span>
                    </div>
                  </div>
                </div>
    
                <!--Testimonial Block -->
                <div class="testimonial-block">
                  <div class="inner-box">
                    <h4 class="title">Design Impressionnant </h4>
                    <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                    <div class="info-box">
                      <div class="thumb"><img src="{{ asset('images/resource/testi-thumb-3.png') }}" alt=""></div>
                      <h4 class="name">Ashley Jenkins</h4>
                      <span class="designation">Designer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Testimonial Section -->
    
        <!--Clients Section-->
        <section class="clients-section">
          <div class="sponsors-outer wow fadeInUp">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
              <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('images/clients/1-1.png') }}" alt=""></a></figure>
              </li>
              <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('images/clients/1-2.png') }}" alt=""></a></figure>
              </li>
              <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('images/clients/1-3.png') }}" alt=""></a></figure>
              </li>
              <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('images/clients/1-4.png') }}" alt=""></a></figure>
              </li>
              <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('images/clients/1-5.png') }}" alt=""></a></figure>
              </li>
              <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('images/clients/1-6.png') }}" alt=""></a></figure>
              </li>
              <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('images/clients/1-7.png') }}" alt=""></a></figure>
              </li>
            </ul>
          </div>
        </section>
        <!-- End Clients Section-->
    
        <!-- About Section -->
        <section class="about-section">
          <div class="auto-container">
            <div class="row">
              <!-- Content Column -->
              <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column wow fadeInUp">
                  <div class="sec-title">
                    <h2>Un Millier d'emploi. Trouver celui qui vous convient.</h2>
                    <div class="text">Trouver des emplois depuis chez vous. Obtenez votre propre estimation de salaire. Lire les commentaires sur plus de 10,000 entreprises dans le monde.</div>
                  </div>
                  <ul class="list-style-one">
                    <li>Contribuez à la baisse du taux de chomage</li>
                    <li>Monnayez votre savoir-faire</li>
                    <li>Utilisez vos mains</li>
                  </ul>
                  <a href="{{ route('liste.find') }}" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Démarrer</span></a>
                </div>
              </div>
    
              <!-- Image Column -->
              <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <figure class="image wow fadeInLeft"><img src="images/resource/image-2.jpg" alt=""></figure>
    
                <!-- Count Employers -->
                <div class="count-employers wow fadeInUp">
                  <div class="check-box"><span class="flaticon-tick"></span></div>
                  <span class="title">100k+ Employeurs</span>
                  <figure class="image"><img src="{{ asset('images/resource/multi-logo.png') }}" alt=""></figure>
                </div>
              </div>
            </div>
    
    
            <!-- Fun Fact Section -->
            <div class="fun-fact-section">
              <div class="row">
                <!--Column-->
                <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                  <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4">0</span>M</div>
                  <h4 class="counter-title">4 millions d'utilisateurs</h4>
                </div>
    
                <!--Column-->
                <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                  <div class="count-box"><span class="count-text" data-speed="3000" data-stop="12">0</span>k</div>
                  <h4 class="counter-title">Plus de 12k d'offres d'emplois</h4>
                </div>
    
                <!--Column-->
                <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                  <div class="count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span>M</div>
                  <h4 class="counter-title">Plus de 20 millions d'histoires partagées</h4>
                </div>
              </div>
            </div>
            <!-- Fun Fact Section -->
          </div>
        </section>
        <!-- End About Section -->
    
        <!-- News Section -->
         <section class="news-section">
          <div class="auto-container">
            <div class="sec-title text-center">
              <h2>Recent News Articles</h2>
              <div class="text">Fresh job related news content posted each day.</div>
            </div>
    
            <div class="row wow fadeInUp">
               
              <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image"><img src="{{ asset('images/resource/news-1.jpg') }}" alt="" /></figure>
                  </div>
                  <div class="lower-content">
                    <ul class="post-meta">
                      <li><a href="#">20 Juillet 2024</a></li>
                      <li><a href="#">12 Commentaires</a></li>
                    </ul>
                    <h3><a href="blog-single.html">Attract Sales And Profits</a></h3>
                    <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                    <a href="#" class="read-more">Lire plus <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
    
               
              <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image"><img src="{{ asset('images/resource/news-2.jpg') }}" alt="" /></figure>
                  </div>
                  <div class="lower-content">
                    <ul class="post-meta">
                      <li><a href="#">25 Juin 2024</a></li>
                      <li><a href="#">12 Commentaires</a></li>
                    </ul>
                    <h3><a href="blog-single.html">5 Tips For Your Job Interviews</a></h3>
                    <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                    <a href="#" class="read-more">Lire plus <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
    
               
              <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image"><img src="{{ asset('images/resource/news-3.jpg') }}" alt="" /></figure>
                  </div>
                  <div class="lower-content">
                    <ul class="post-meta">
                      <li><a href="#">30 Juin 2024</a></li>
                      <li><a href="#">12 Commentaires</a></li>
                    </ul>
                    <h3><a href="blog-single.html">An Overworked Newspaper Editor</a></h3>
                    <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                    <a href="#" class="read-more">Lire plus <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> 
        <!-- End News Section -->
    
        <!-- App Section -->
         <section class="app-section">
          <div class="auto-container">
            <div class="row">
               
              <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="bg-shape"></div>
                <figure class="image wow fadeInLeft"><img src="{{ asset('images/resource/mobile-app.png') }}" alt=""></figure>
              </div>
    
              <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight">
                  <div class="sec-title">
                    <span class="sub-title">DOWNLOAD & ENJOY</span>
                    <h2>Get the Superio Job<br> Search App</h2>
                    <div class="text">Search through millions of jobs and find the right fit. Simply<br> swipe right to apply.</div>
                  </div>
                  <div class="download-btn">
                    <a href="#"><img src="{{ asset('images/icons/apple.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('images/icons/google.png') }}" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
         
    
          
        <section class="call-to-action">
          <div class="auto-container">
            <div class="outer-box wow fadeInUp">
              <div class="content-column">
                <div class="sec-title">
                  <h2>Recruiting?</h2>
                  <div class="text">Advertise your jobs to millions of monthly users and search 15.8 million<br> CVs in our database.</div>
                  <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Start Recruiting Now</span></a>
                </div>
              </div>
    
              <div class="image-column" style="background-image: url({{ asset('images/resource/image-1.png') }});">
                <figure class="image"><img src="{{ asset('images/resource/image-1.png') }}" alt=""></figure>
              </div>
            </div>
          </div>
        </section> 
        <!-- End Call To Action -->

@endsection
