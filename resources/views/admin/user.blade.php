@extends('layout/baseadmin')

@section('title','Halaman User')

@section('pageU','active')

@section('content')


@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('status') }}
    <button type="button" class="close mt-1" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<div class="container mt-4">
  <form class="navbar-form offset-7" method="GET" action="{{ url('/admin/user') }}">
    <div class="input-group no-border">
      <input type="text" value="" class="form-control" placeholder="Search..."  name="find">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
    </div>
  </form>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">User List</h4>
              <p class="card-category">This is list user</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                  @foreach ($users as $user)
                    <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ ucfirst($user->name) }}</td>
                    <td>{{ ucfirst($user->email) }}</td>
                    @if($user->role_id == 1)
                      <td>Admin</td>
                    @else
                      <td>Member</td>
                    @endif
                    <td>
                      <form method="POST" action="{{ url('/user') }}/{{$user->id}}" class="float-left mr-1">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-sm btn-primary btnA">
                          @if($user->role_id == 1)
                          Set to Member
                          @else
                          Set to Admin
                          @endif
                        </button>
                      </form>
                      <form method="POST" action="{{ url('/user') }}/{{$user->id}}" >
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">
                          Delete
                        </button>
                      </form>
                    </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection