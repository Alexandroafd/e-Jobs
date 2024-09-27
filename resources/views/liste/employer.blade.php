@extends('layout')

@section('title', 'Liste des employeurs')

@section('content')

    <span class="header-span"></span>
    
        <!--Page Title-->
        <section class="page-title">
            <div class="auto-container">
              <!-- Job Search Form -->
              <div class="job-search-form">
                <form method="post" action="">
                  <div class="row">
                    <!-- Form Group -->
                    <div class="form-group col-lg-4 col-md-12 col-sm-12">
                      <span class="icon flaticon-search-1"></span>
                      <input type="text" name="field_name" placeholder="Nom, Mots Clef">
                    </div>
      
                    <!-- Form Group -->
                    <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                      <span class="icon flaticon-map-locator"></span>
                      <input type="text" name="field_name" placeholder="Ville">
                    </div>
      
                    <!-- Form Group -->
                    <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                        <span class="icon flaticon-briefcase"></span>
                        <select class="chosen-select">
                        <option value="">Toutes les Categories</option>
                        <option value="44">Comptabilité / Finance</option>
                        <option value="106">Automobile</option>
                        <option value="46">Service Clientèle</option>
                        <option value="48">Design</option>
                        <option value="47">Developement</option>
                        <option value="45">Soins et Santé</option>
                        <option value="105">Marketing</option>
                        <option value="107">Management des Projets</option>
                        </select>
                    </div> 
      
                    <!-- Form Group -->
                    <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                      <button type="submit" class="theme-btn btn-style-one">Chercher</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Job Search Form -->
      
              <!-- <div class="top-filters">
                <div class="form-group">
                  <select class="chosen-select">
                    <option>Entreprise</option>
                    <option>Nouvel Emploi</option>
                    <option>Freelance</option>
                    <option>Temps Plein</option>
                    <option>Stage</option>
                    <option>Temps Partiel</option>
                    <option>Temporaire</option>
                  </select>
                </div>
      
                <div class="form-group">
                  <select class="chosen-select">
                    <option>Date de création</option>
                    <option>Nouvel Emploi</option>
                    <option>Freelance</option>
                    <option>Temps Plein</option>
                    <option>Stage</option>
                    <option>Temps Partiel</option>
                    <option>Temporaire</option>
                  </select>
                </div>
              </div> -->
            </div>
          </section>
          <!--End Page Title-->
      
          <!-- Listing Section -->
          <section class="ls-section">
            <div class="auto-container">
              <div class="filters-backdrop"></div>
      
              <div class="row">
      
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                  <div class="ls-outer">
                    <!--<button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button> -->
      
                    <!-- ls Switcher -->
                  <!--  <div class="ls-switcher">
                      <div class="showing-result">
                        <div class="text">Showing <strong>41-60</strong> of <strong>944</strong> employer</div>
                      </div>
                      <div class="sort-by">
                        <select class="chosen-select">
                          <option>New Jobs</option>
                          <option>Freelance</option>
                          <option>Full Time</option>
                          <option>Internship</option>
                          <option>Part Time</option>
                          <option>Temporary</option>
                        </select>
      
                        <select class="chosen-select">
                          <option>Show 10</option>
                          <option>Show 20</option>
                          <option>Show 30</option>
                          <option>Show 40</option>
                          <option>Show 50</option>
                          <option>Show 60</option>
                        </select>
                      </div>
                    </div> -->
      
      
                    <div class="row">
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-1.png" alt=""></span>
                          <h4><a href="#">Netflix</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-2.png" alt=""></span>
                          <h4><a href="#">Opendoor</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-3.png" alt=""></span>
                          <h4><a href="#">Checkr</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-4.png" alt=""></span>
                          <h4><a href="#">Mural</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-5.png" alt=""></span>
                          <h4><a href="#">Astronomer</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-6.png" alt=""></span>
                          <h4><a href="#">Figma</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-7.png" alt=""></span>
                          <h4><a href="#">Stripe</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-8.png" alt=""></span>
                          <h4><a href="#">Invision</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-9.png" alt=""></span>
                          <h4><a href="#">Upwork</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-10.png" alt=""></span>
                          <h4><a href="#">Segment</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-11.png" alt=""></span>
                          <h4><a href="#">Medium</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
                      <!-- Company Block Four -->
                      <div class="company-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                          <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                          <span class="featured">Featured</span>
                          <span class="company-logo"><img src="images/resource/company-logo/6-12.png" alt=""></span>
                          <h4><a href="#">Udemy</a></h4>
                          <ul class="job-info">
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-briefcase"></span> Accounting / Finance</li>
                          </ul>
                          <div class="job-type">Open Jobs – 2</div>
                        </div>
                      </div>
      
      
                    </div>
      
                    <!-- Pagination -->
                    <nav class="ls-pagination">
                      <ul>
                        <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="current-page">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--End Listing Page Section -->

@endsection