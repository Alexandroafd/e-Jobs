@extends('layout')

@section('title', 'Contact')

@section('content')

    <!-- Header Span -->
    <span class="header-span"></span>

        <!-- Map Section -->
        <section class="map-section">
            <div class="map-outer">
              <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/contact-map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
              </div>
            </div>
          </section>
          <!-- End Map Section -->
      
      
          <!-- Contact Section -->
          <section class="contact-section">
            <div class="auto-container">
              <div class="upper-box">
                <div class="row">
                  <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                      <span class="icon"><img src="{{ asset('images/icons/placeholder.svg') }}" alt=""></span>
                      <h4>Addresse</h4>
                      <p>Abomey-Calavi<br> Bénin.</p>
                    </div>
                  </div>
                  <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                      <span class="icon"><img src="{{ asset('images/icons/smartphone.svg') }}" alt=""></span>
                      <h4>Appelez ici</h4>
                      <p><a href="#" class="phone">229 123 456 78</a></p>
                    </div>
                  </div>
                  <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                      <span class="icon"><img src="{{ asset('images/icons/letter.svg') }}" alt=""></span>
                      <h4>Email</h4>
                      <p><a href="#">admin@public.com</a></p>
                    </div>
                  </div>
                </div>
              </div>
      
      
              <!-- Contact Form -->
              <div class="contact-form default-form">
                <h3>Laisser un Message</h3>
                <!--Contact Form-->
                <form method="post" action="#" id="email-form">
                  <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <div class="response"></div>
                    </div>
      
                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                      <label>Votre Nom</label>
                      <input type="text" name="name" class="name" placeholder="Votre Nom*" required>
                    </div>
      
                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                      <label>Votre Email</label>
                      <input type="email" name="email" class="email" placeholder="Votre Email*" required>
                    </div>
      
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <label>Objet</label>
                      <input type="text" name="objet" class="objet" placeholder="Objet *" required>
                    </div>
      
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <label>Votre Méssage</label>
                      <textarea name="message" placeholder="Evrivez votre méssage..." required=""></textarea>
                    </div>
      
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <button class="theme-btn btn-style-one" type="button" id="submit" name="submit-form">Envoyez le Méssage</button>
                    </div>
                  </div>
                </form>
              </div>
              <!--End Contact Form -->
            </div>
          </section>
          <!-- Contact Section -->
      
          <!-- Call To Action -->
          <section class="call-to-action style-two">
            <div class="auto-container">
              <div class="outer-box">
                <div class="content-column">
                  <div class="sec-title">
                    <h2>Recrutement ?</h2>
                    <div class="text">Annoncez vos emplois à des millions d'utilisateurs et plus de 15.8 millions candidats<br> CVs dans notre base de données.</div>
                    <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Commencez le Recrutement Maintenant</span></a>
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