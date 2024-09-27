@extends('admin')

@section('title', 'Editer les informations de lutilisateur')

@section('content')

        <!-- User Sidebar -->
        <div class="user-sidebar">

            <div class="sidebar-inner">
              <ul class="navigation">
                <li><a href="{{ route('admin.dashboard') }}"> <i class="la la-home"></i> Dashboard </a></li>
                <li class="active"><a href="{{ route('admin.users.userlist') }}"><i class="la la-user-tie"></i> Users </a></li>
               <!-- <li><a href="dashboard-post-job.html"><i class="la la-paper-plane"></i>Post a New Job</a></li> -->
                <li><a href="{{ route('admin.jobs') }}"><i class="la la-briefcase"></i> Jobs </a></li>
                <li><a href="{{ route('admin.jobsApplied') }}"><i class="la la-file-invoice"></i> Jobs Applications </a></li> 
                <!-- <li><a href="dashboard-resumes.html"><i class="la la-bookmark-o"></i>Shortlisted Resumes</a></li> 
                <li><a href="dashboard-packages.html"><i class="la la-box"></i>Packages</a></li>
                <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i>Messages</a></li>
                <li><a href="dashboard-resume-alerts.html"><i class="la la-bell"></i>Resume Alerts</a></li>
                <li><a href="dashboard-change-password.html"><i class="la la-lock"></i>Change Password</a></li>
                <li><a href="dashboard-company-profile.html"><i class="la la-user-alt"></i>View Profile</a></li> -->
                <li><a href="{{ route('auth.logout') }}"><i class="la la-sign-out"></i>Logout</a></li>
               <!-- <li><a href="index.html"><i class="la la-trash"></i>Delete Profile</a></li> -->
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
                        <h4>Update Users</h4>
                        <form class="default-form" action="{{ route('admin.users.update', $user->id) }}" method="post">
                            @csrf
                            <div class="row">
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <label>Nom</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Jérome" value="{{ old('name',$user->name) }}">
                                @error('name')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                              </div>
        
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <label>Titre</label>
                                <input class="form-control @error('jobTitle') is-invalid @enderror" type="text" name="jobTitle" id="jobTitle" placeholder="devellopeur" value="{{ old('jobTitle',$user->jobTitle) }}">
                                @error('jobTitle')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                              </div>
        
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <label>Téléphone</label>
                                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" placeholder="0 123 456 7890" value="{{ old('phone',$user->phone) }}">
                                @error('phone')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                              </div>
        
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <label>Addresse Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" placeholder="email" value="{{ old('email',$user->email) }}">
                                @error('email')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                              </div>
        
                              <!-- Input -->
                              <!--<div class="form-group col-lg-6 col-md-12">
                                <label>Website</label>
                                <input type="text" name="name" placeholder="www.jerome.com">
                              </div>-->
        
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <label> Salaire(FCFA) </label>
                                <input class="form-control @error('salary') is-invalid @enderror" type="number" name="salary" id="salary" placeholder="100.000 FCFA" value="{{ old('salary',$user->salary) }}">
                                @error('salary')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                                <!--<select class="chosen-select">
                                  <option>40-70 K</option>
                                  <option>50-80 K</option>
                                  <option>60-90 K</option>
                                  <option>70-100 K</option>
                                  <option>100-150 K</option>
                                </select> -->
                              </div>
        
                              <!-- Input -->
                              <!--<div class="form-group col-lg-3 col-md-12">
                                <label>Expected Salary($)</label>
                                <select class="chosen-select">
                                  <option>120-350 K</option>
                                  <option>40-70 K</option>
                                  <option>50-80 K</option>
                                  <option>60-90 K</option>
                                  <option>70-100 K</option>
                                  <option>100-150 K</option>
                                </select>
                              </div>-->
        
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <label>Expérience</label>
                                <input class="form-control @error('experience') is-invalid @enderror" type="text" name="experience" id="experience" placeholder="5-10 ans" value="{{ old('experience',$user->experience) }}">
                                @error('experience')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                              </div>
        
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <label>Age</label>
                                <input class="form-control @error('age') is-invalid @enderror" type="number" name="age" id="age" placeholder="20 ans" value="{{ old('age',$user->age) }} ans">
                                @error('age')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                                <!--<select class="chosen-select">
                                  <option>23 - 27 Years</option>
                                  <option>24 - 28 Years</option>
                                  <option>25 - 29 Years</option>
                                  <option>26 - 30 Years</option>
                                </select>-->
                              </div>
        
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <label>Dernier Diplome</label>
                                <input class="form-control @error('diplome') is-invalid @enderror" type="text" name="diplome" id="diplome" placeholder="diplome" value="{{ old('diplome',$user->diplome) }}">
                                @error('diplome')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                              </div>
        
                              <!-- Search Select -->
                              <!--<div class="form-group col-lg-6 col-md-12">
                                <label>Categories </label>
                                <select data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4">
                                  <option value="Banking">Banking</option>
                                  <option value="Digital&Creative">Digital & Creative</option>
                                  <option value="Retail">Retail</option>
                                  <option value="Human Resources">Human Resources</option>
                                  <option value="Management">Management</option>
                                </select>
                              </div> -->
        
                              <!-- Input -->
                             <!-- <div class="form-group col-lg-6 col-md-12">
                                <label>Allow In Search & Listing</label>
                                <select class="chosen-select">
                                  <option>Yes</option>
                                  <option>No</option>
                                </select>
                              </div> -->
        
                              <!-- About Company -->
                              <div class="form-group col-lg-12 col-md-12">
                                <label>Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description"> {{ old('description',$user->description) }} </textarea>
                                @error('description')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                              </div>
        
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <button class="theme-btn btn-style-one">
                                    Update
                                </button>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection