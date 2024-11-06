@extends('admin')

@section('title', 'Editer les informations de lutilisateur')

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
                              <div class="form-group col-lg-6 col-md-12">
                                <label> Salaire(FCFA) </label>
                                <input class="form-control @error('salary') is-invalid @enderror" type="number" name="salary" id="salary" placeholder="100.000 FCFA" value="{{ old('salary',$user->salary) }}">
                                @error('salary')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                              </div>

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
                              </div>
        
                              <!-- Input -->
                              <div class="form-group col-lg-6 col-md-12">
                                <label>Dernier Diplome</label>
                                <input class="form-control @error('diplome') is-invalid @enderror" type="text" name="diplome" id="diplome" placeholder="diplome" value="{{ old('diplome',$user->diplome) }}">
                                @error('diplome')
                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                @enderror
                              </div>
        
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