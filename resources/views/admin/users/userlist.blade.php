@extends('admin')

@section('title', 'Tous les utilisateurs')

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
              <h4>Users</h4>

              <div class="chosen-outer">
              </div>
            </div>

            <div class="widget-content">
              <div class="table-outer">
                <table class="default-table manage-job-table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Téléphone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @if ($users->isNotEmpty())
                        @foreach ($users as $user)
                        <tr>
                            <td>
                              <h6> {{ $user->id }}</h6>
                            </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{  $user->phone }} </td>
                            <td>
                              <div class="option-box">
                                <ul class="option-list">
                                  {{--<li><button><a href="{{ route('admin.users.edit', $user->id) }}" data-text="Editer"><span class="la la-pencil"></span></a></button></li>--}}
                                  <li><button><a href="{{ route('admin.users.delete', $user->id) }}" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')" data-text="Supprimer"><span class="la la-trash"></span></a></button></li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
            <div>
                {{ $users->links() }}
              </div>
          </div>
        </div>
      </div>
    </div>

@endsection