@extends('layout')

@section('title', 'A propos')

@section('content')

        <!-- Header Span -->
        <span class="header-span"></span>

        <!--Page Title-->
        <section class="page-title">
            <div class="auto-container">
              <div class="title-outer">
                <h1>A Propos</h1>
                <ul class="page-breadcrumb">
                  <li><a href="{{ route('home') }}">Accueil</a></li>
                  <li>A Propos</li>
                </ul>
              </div>
            </div>
          </section>
          <!--End Page Title-->
      
          <!-- About Section Three -->
          <section class="about-section-three">
            <div class="auto-container">
              <div class="images-box">
                <div class="row">
                  <div class="column col-lg-3 col-md-6 col-sm-6">
                    <figure class="image"><img src="{{ asset('images/resource/about-img-1.jpg') }}" alt=""></figure>
                  </div>
                  <div class="column col-lg-3 col-md-6 col-sm-6">
                    <figure class="image"><img src="{{ asset('images/resource/about-img-2.jpg') }}" alt=""></figure>
                    <figure class="image"><img src="{{ asset('images/resource/about-img-3.jpg') }}" alt=""></figure>
                  </div>
                  <div class="column col-lg-3 col-md-6 col-sm-6">
                    <figure class="image"><img src="{{ asset('images/resource/about-img-4.jpg') }}" alt=""></figure>
                    <figure class="image"><img src="{{ asset('images/resource/about-img-5.jpg') }}" alt=""></figure>
                  </div>
                  <div class="column col-lg-3 col-md-6 col-sm-6">
                    <figure class="image"><img src="{{ asset('images/resource/about-img-6.jpg') }}" alt=""></figure>
                  </div>
                </div>
              </div>
      
              <!-- Fun Fact Section -->
              <div class="fun-fact-section">
                <div class="row">
                  <!--Column-->
                  <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4">0</span>M</div>
                    <h4 class="counter-title">Plus de 4 millions d'utilisateurs actifs chaque jours </h4>
                  </div>
      
                  <!--Column-->
                  <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="count-box"><span class="count-text" data-speed="3000" data-stop="12">0</span>k</div>
                    <h4 class="counter-title">Plus de 12k d'emplois ouvert</h4>
                  </div>
      
                  <!--Column-->
                  <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span>M</div>
                    <h4 class="counter-title">Plus de 20 millions d'histoires partagées</h4>
                  </div>
                </div>
              </div>
              <!-- Fun Fact Section -->
      
              <div class="text-box">
                <h4>A propos de Superio</h4>
                <p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously eel valiantly petted this along across highhandedly much.</p>
                <p>Repeatedly dreamed alas opossum but dramatically despite expeditiously that jeepers loosely yikes that as or eel underneath kept and slept compactly far purred sure abidingly up above fitting to strident wiped set waywardly far the and pangolin horse approving paid chuckled cassowary oh above a much opposite far much hypnotically more therefore wasp less that hey apart well like while superbly orca and far hence one.Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy.</p>
              </div>
            </div>
          </section>
          <!-- End About Section Three -->
      
          <!-- Call To Action Two -->
          <section class="call-to-action-two" style="background-image: url({{ asset('images/background/1.jpg') }});">
            <div class="auto-container">
              <div class="sec-title light text-center">
                <h2>Ton emploi de reve t'attend</h2>
                <div class="text">Plus d'1 million interactions, 50,000 histoires de réussite pour vous encourager.</div>
              </div>
      
              <div class="btn-box">
                <a href="#" class="theme-btn btn-style-three">Rechercher ton emploi</a>
                <a href="#" class="theme-btn btn-style-two">Travailler maintenant</a>
              </div>
            </div>
          </section>
          <!-- End Call To Action -->
      
          <!-- Testimonial Section Two -->
          <section class="testimonial-section-two">
            <div class="container-fluid">
              <div class="testimonial-left"><img src="{{ asset('images/resource/testimonial-left.png') }}" alt=""></div>
              <div class="testimonial-right"><img src="{{ asset('images/resource/testimonial-right.png') }}" alt=""></div>
              <!-- Sec Title -->
              <div class="sec-title text-center">
                <h2>Témoignages de nos Clients</h2>
                <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
              </div>
      
              <div class="carousel-outer">
                <!-- Testimonial Carousel -->
                <div class="testimonial-carousel owl-carousel owl-theme">
      
                  <!--Testimonial Block -->
                  <div class="testimonial-block-two">
                    <div class="inner-box">
                      <div class="thumb"><img src="{{ asset('images/resource/testi-thumb-1.png') }}" alt=""></div>
                      <h4 class="title">Great quality!</h4>
                      <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                      <div class="info-box">
                        <h4 class="name">Brooklyn Simmons</h4>
                        <span class="designation">Web Developer</span>
                      </div>
                    </div>
                  </div>
      
                  <!--Testimonial Block -->
                  <div class="testimonial-block-two">
                    <div class="inner-box">
                      <div class="thumb"><img src="{{ asset('images/resource/testi-thumb-1.png') }}" alt=""></div>
                      <h4 class="title">Great quality!</h4>
                      <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                      <div class="info-box">
                        <h4 class="name">Brooklyn Simmons</h4>
                        <span class="designation">Web Developer</span>
                      </div>
                    </div>
                  </div>
      
                  <!--Testimonial Block -->
                  <div class="testimonial-block-two">
                    <div class="inner-box">
                      <div class="thumb"><img src="{{ asset('images/resource/testi-thumb-1.png') }}" alt=""></div>
                      <h4 class="title">Great quality!</h4>
                      <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                      <div class="info-box">
                        <h4 class="name">Brooklyn Simmons</h4>
                        <span class="designation">Web Developer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Testimonial Section -->
      
          <!-- Work Section -->
          <section class="work-section style-two">
            <div class="auto-container">
              <div class="sec-title text-center">
                <h2> Comment ça marche? </h2>
                <div class="text">Travaillez pour n'importe qui, n'importe où...</div>
              </div>
      
              <div class="row">
                <!-- Work Block -->
                <div class="work-block col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                    <figure class="image"><img src="{{ asset('images/resource/work-1.png') }}" alt=""></figure>
                    <h5>Evaluation Gratuite de CV</h5>
                    <p>Employers on average spend 31 seconds scanning resumes to identify potential matches.</p>
                  </div>
                </div>
      
                <!-- Work Block -->
                <div class="work-block col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                    <figure class="image"><img src="{{ asset('images/resource/work-2.png') }}" alt=""></figure>
                    <h5>Job Fit Scoring</h5>
                    <p>Employers on average spend 31 seconds scanning resumes to identify potential matches.</p>
                  </div>
                </div>
      
                <!-- Work Block -->
                <div class="work-block col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                    <figure class="image"><img src="{{ asset('images/resource/work-3.png') }}" alt=""></figure>
                    <h5>Vous Vous Ferez Aidez à chaque étape du Processus</h5>
                    <p>Employers on average spend 31 seconds scanning resumes to identify potential matches.</p>
                  </div>
                </div>
      
              </div>
            </div>
          </section>
          <!-- End Work Section -->
      
          <!--Clients Section-->
          <section class="clients-section">
            <div class="sponsors-outer">
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

@endsection