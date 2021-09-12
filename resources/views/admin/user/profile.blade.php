@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Hello, {{ auth()->user()->name }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">My Profile</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          @if (session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">


          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Profile Configuration</h3>
            </div>
            <form action="/admin/user/{{ auth()->user()->id }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Full Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your full name" name="name" value="{{ old('name', $user->name) }}">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email" value="{{ old('email', $user->email) }}">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update!</button>
              </div>
            </form>
          </div>

        </div>
        <div class="col-lg-6">

          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Password Configuration</h3>
            </div>
            <form action="/admin/changepass" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="oldpass">Old Password</label>
                  <input type="password" class="form-control @error('oldpass') is-invalid @enderror" id="oldpass" placeholder="Enter your old pasword" name="oldpass">
                  @error('oldpass')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password1">New Password</label>
                  <input type="password" class="form-control @error('password1') is-invalid @enderror" id="password1" placeholder="Enter your new password" name="password1">
                  @error('password1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password2">Repeat Password</label>
                  <input type="password" class="form-control @error('password2') is-invalid @enderror" id="password2" placeholder="Enter your new password again" name="password2">
                  @error('password2')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Change!</button>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->


@endsection