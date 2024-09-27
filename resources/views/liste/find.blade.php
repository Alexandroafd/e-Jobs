@extends('layout')

@section('Title', 'Liste des emplois')

@section('content')

<div class="page-wrapper">

    <!--Page Title-->
    <section class="page-title style-two">
      <div class="auto-container">
        <!-- Job Search Form -->
        <div class="job-search-form">
          <form method="get" action=" {{ route('liste.find') }} ">
            <div class="row">
              <!-- Form Group -->
              <div class="form-group col-lg-4 col-md-12 col-sm-12">
                <span class="icon flaticon-search-1"></span>
                <input value="{{ Request::get('title') }}" type="text" name="title" id="title" placeholder="Nom de l'emploi">
              </div>

              <!-- Form Group -->
              <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                <span class="icon flaticon-map-locator"></span>
                <input value="{{ Request::get('city') }}" type="text" name="city" id="city" placeholder="Ville">
              </div>

              <!-- Form Group -->
              <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                <span class="icon flaticon-briefcase"></span>
                <select {{ Request::get('category_id') ? 'sélectionné' : '' }} name="category" id="category" class="chosen-select">
                  <option value="">Catégorie</option>
                  @if ($categories)
                    @foreach ($categories as $category)
                        <option {{ $category->id }} > {{ $category->name }} </option>
                    @endforeach  
                  @endif
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
      </div>
    </section>
    <!--End Page Title-->

    <!-- Listing Section -->
    <section class="ls-section">
      <div class="auto-container">
        <div class="filters-backdrop"></div>

        <div class="row">
          <!-- Content Column -->
          <div class="content-column col-lg-12">
            <div class="ls-outer">
              <!-- ls Switcher -->
             <!-- <div class="ls-switcher">
                <div class="showing-result">
                  <div class="top-filters">
                    <div class="form-group">
                      <select class="chosen-select">
                        <option>Type d'Emploi</option>
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
                        <option>Date Posté</option>
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
                        <option>Niveau d'expérience</option>
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
                        <option>Salaire estimé</option>
                        <option>Nouvel Emploi</option>
                        <option>Freelance</option>
                        <option>Temps Plein</option>
                        <option>Stage</option>
                        <option>Temps Partiel</option>
                        <option>Temporaire</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="sort-by">
                  <select class="chosen-select">
                    <option>Nouvel Emploi</option>
                    <option>Freelance</option>
                    <option>Temps Plein</option>
                    <option>Stage</option>
                    <option>Temps Partiel</option>
                    <option>Temporaire</option>
                  </select>

                  <select class="chosen-select">
                    <option>Voir 10</option>
                    <option>Voir 20</option>
                    <option>Voir 30</option>
                    <option>Voir 40</option>
                    <option>Voir 50</option>
                    <option>Voir 60</option>
                  </select>
                </div>
              </div> -->

              <div class="row">

                @if ($jobs->isNotEmpty())
                    @foreach ($jobs as $job)
                        <!-- Job Block -->
                        <div class="job-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                            <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-2.png') }}" alt=""></span>
                            <h4><a href="{{ route('jobDetail', $job->id) }}"> {{ $job->title }} </a></h4>
                            <ul class="job-info">
                                <li><span class="icon flaticon-briefcase"></span> {{ $job->company_name }} </li>
                                <li><span class="icon flaticon-map-locator"></span> {{ $job->company_location }} </li>
                                <li><span class="icon flaticon-clock-3"></span> {{\Carbon\Carbon::parse($job->created_at)->format('d M, Y')}} </li>
                                @if (!is_null($job->salary))
                                <li><span class="icon flaticon-money"></span> {{ $job->salary }} </li>
                                @endif
                            </ul>
                            <ul class="job-other-info">
                                <li class="time"> {{ $job->jobtype->name }} </li>
                            </ul>
                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                            </div>
                        </div>
                        </div>
                    @endforeach
                    <div>
                        {{--{{ $jobs->withQueryString()->links() }}  --}}  
                    </div>                    
                @else
                <div class="job-block col-lg-6 col-md-12 col-sm-12"> Aucun résulat ne correspond à votre recherche !</div>      
                @endif
              </div>
              <div>
                {{ $jobs->links() }}
              </div>
              <!-- Pagination -->
              <!-- <nav class="ls-pagination">
                <ul>
                  <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#" class="current-page">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
              </nav> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Listing Page Section -->

  </div><!-- End Page Wrapper -->

@endsection