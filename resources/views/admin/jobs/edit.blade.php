@extends('admin')

@section('title', 'Editer les emplois')

@section('content')

        <!-- User Sidebar -->
        <div class="user-sidebar">

            <div class="sidebar-inner">
              <ul class="navigation">
                <li><a href="{{ route('admin.dashboard') }}"> <i class="la la-home"></i> Dashboard </a></li>
                <li class="active"><a href="{{ route('admin.users.userlist') }}"><i class="la la-user-tie"></i> Users </a></li>
                <li><a href="{{ route('admin.jobs') }}"><i class="la la-briefcase"></i> Jobs </a></li>
                <li><a href="{{ route('admin.jobsApplied') }}"><i class="la la-file-invoice"></i> Jobs Applications </a></li> 
                <li><a href="{{ route('auth.logout') }}"><i class="la la-sign-out"></i>Logout</a></li>
              </ul>
            </div>
        </div>
        <!-- End User Sidebar -->

        @if (Session::has('success'))
          <div class="bg-success py-4 mb-4 rounded">
              <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('success') }} </p>
          </div>
      @endif

      @if (Session::has('error'))
          <div class="bg-danger py-4 mb-4 rounded">
              <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('error') }} </p>
          </div>
      @endif 

    <div class="row">
        <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
                <div class="tabs-box">
                    <div class="widget-title">
                        <h4>Update Jobs</h4>
                        <div>
                            <form class="default-form" method="post" action="{{ route('admin.jobs.update', $job->id) }}">
                                @csrf
                              <div class="row">
                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12">
                                  <label>Titre de l'emploi</label>
                                  <input value="{{ $job->title }}" class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" placeholder="Title">
                                  @error('title')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                  @enderror
                                </div>
          
                                <!-- About Company -->
                                <div class="form-group col-lg-12 col-md-12">
                                  <label>Description</label>
                                  <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description de l'emploi">{{ $job->description }}</textarea>
                                  @error('description')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                  @enderror
                                </div>
          
          
                                <!-- Input -->
                                <div class="form-group col-lg-6 col-md-12">
                                  <label>Addresse Email de l'entreprise</label>
                                  <input value="{{ $job->company_email }}" class="form-control @error('company_email') is-invalid @enderror" type="text" name="company_email" id="company_email" placeholder="Email">
                                  @error('company_email')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                  @enderror
                                </div>
          
                                <!-- Input -->
                                <div class="form-group col-lg-6 col-md-12">
                                  <label>Nom de l'entreprise</label>
                                  <input value="{{ $job->company_name }}" class="form-control @error('company_name') is-invalid @enderror" type="text" name="company_name" id="company_name" placeholder="Nom">
                                  @error('company_name')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                  @enderror
                                </div>
          
                                <!-- Search Select -->
                                <div class="form-group col-lg-6 col-md-12">
                                  <label>Catégorie </label>
                                  <select name="category" id="category" data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4">
                                    @if ($categories->isNotEmpty())
                                        @foreach ($categories as $category)
                                        <option {{ ($job->category_id == $category->id) ? 'sélectionné' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>  
                                        @endforeach  
                                    @endif
                                  </select>
                                </div>
          
                                <div class="form-group col-lg-6 col-md-12">
                                  <label>Type d'emploi</label>
                                  <select name="job_type" id="job_type" data-placeholder="JobType" class="chosen-select">
                                    @if ($jobTypes->isNotEmpty())
                                        @foreach ($jobTypes as $jobType)
                                        <option {{ ($job->job_type == $jobType->id) ? 'sélectionné' : '' }} value="{{ $jobType->id }}">{{ $jobType->name }}</option>  
                                        @endforeach  
                                     @endif
                                  </select>
                                </div>
          
                                <!-- Input -->
                                <div class="form-group col-lg-6 col-md-12">
                                  <label>Salaire</label>
                                  <input value="{{ $job->salary }}" class="form-control @error('salary') is-invalid @enderror" type="text" name="salary" id="salary" placeholder="10k">
                                  @error('salary')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                  @enderror
                                </div>
          
                                <div class="form-group col-lg-6 col-md-12">
                                  <label>Experience</label>
                                  <select name="experience" id="experience" class="chosen-select">
                                    <option value="1" {{ ($job->experience == 1) ? 'sélectionné' : '' }}>1 an</option>
                                    <option value="2" {{ ($job->experience == 2) ? 'sélectionné' : '' }}>2 ans</option>
                                    <option value="3" {{ ($job->experience == 3) ? 'sélectionné' : '' }}>3 ans</option>
                                    <option value="4" {{ ($job->experience == 4) ? 'sélectionné' : '' }}>4 ans</option>
                                    <option value="5" {{ ($job->experience == 5) ? 'sélectionné' : '' }}>5 ans</option>
                                    <option value="6" {{ ($job->experience == 6) ? 'sélectionné' : '' }}>6 ans</option>
                                    <option value="7" {{ ($job->experience == 7) ? 'sélectionné' : '' }}>7 ans</option>
                                    <option value="8" {{ ($job->experience == 8) ? 'sélectionné' : '' }}>5 ans</option>
                                    <option value="9" {{ ($job->experience == 9) ? 'sélectionné' : '' }}>9 ans</option>
                                    <option value="10" {{ ($job->experience == 10) ? 'sélectionné' : '' }}>10 ans</option>
                                    <option value="+10" {{ ($job->experience == +10) ? '+10' : '' }}>+10 ans</option>
                                  </select> 
                                </div>
          
                                <div class="form-group col-lg-6 col-md-12">
                                  <label>Genre</label>
                                  <select name="genre" id="genre" class="chosen-select">
                                    <option value="1" {{ ($job->genre == 1) ? 'sélectionné' : '' }}>Masculin</option>
                                    <option value="2" {{ ($job->genre == 2) ? 'sélectionné' : '' }}>Féminin</option>
                                  </select>
                                </div>
    
                                <!-- Input -->
                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Site Web</label>
                                    <input value="{{ $job->company_website }}" class="form-control @error('title') is-invalid @enderror" type="text" name="company_website" placeholder="Site web">
                                    @error('company_website')
                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                    @enderror
                                </div>
          
                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12">
                                  <label>Date limite</label>
                                  <input value="{{ $job->date_limite }}" class="form-control @error('date_limite') is-invalid @enderror" type="text" name="date_limite" id="date_limite" placeholder="06.04.2020">
                                </div>
                                @error('date_limite')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
    
                                <!-- Input -->
                                <div class="form-group col-lg-6 col-md-12">
                                  <label>Pays</label>
                                  <input value="{{ $job->country }}" class="form-control @error('country') is-invalid @enderror" type="text" name="country" id="country" placeholder="Pays">
                                  @error('country')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                  @enderror
                                </div>
          
                                <!-- Input -->
                                <div class="form-group col-lg-6 col-md-12">
                                  <label>Ville</label>
                                  <input value="{{ $job->city }}" class="form-control @error('city') is-invalid @enderror" type="text" name="city" id="city" placeholder="Ville">
                                  @error('city')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                  @enderror
                                </div>
          
                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12">
                                  <label>Addresse Complete de l'entreprise</label>
                                  <input value="{{ $job->address }}" class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" placeholder="Abomey-Calavi, Pavé CEB.">
                                  @error('address')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                  @enderror
                                </div>

                                <div class="form-group col-lg-4 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember-me" value="" id="remember">
                                        <label for="isFeatured" class="remember"> Offre d'emploi? </label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-12">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" value="1" id="status-active">
                                        <label for="status" class="form-check-label"> Active </label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-12">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" value="0" id="status-block">
                                        <label for="status" class="form-check-label"> Bloquer </label>
                                    </div>
                                </div>
                                
                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12">
                                  <label>Localisation</label>
                                  <input value="{{ $job->location }}" class="form-control @error('location') is-invalid @enderror" type="text" name="company_location" placeholder="Abomey-Calavi, Pavé CEB.">
                                   @error('location')
                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                   @enderror
                                </div>
          
                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12">
                                  <button class="theme-btn btn-style-three">Chercher la Localisation</button>
                                </div>
          
          
                                <div class="form-group col-lg-12 col-md-12">
                                  <div class="map-outer">
                                    <div class="map-canvas map-height" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/resource/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                    </div>
                                  </div>
                                </div>
          
                                <!-- Input -->
                                <div class="form-group col-lg-12 col-md-12 text-right">
                                  <button class="theme-btn btn-style-one">Modifier l'emploi</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection