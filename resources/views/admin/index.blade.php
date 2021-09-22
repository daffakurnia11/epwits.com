@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Welcome, {{ auth()->user()->name }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Main Page</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="col-lg-3 pb-3">
          <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-link"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Short Links</span>
              <span class="info-box-number">
                {{ $shortlinks }}
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-lg-3 pb-3">
          <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-tie"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Applicants</span>
              <span class="info-box-number">
                {{ $applicants }}
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-lg-3 pb-3">
          <div class="info-box">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-graduate"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Staff Acceptance</span>
              <span class="info-box-number">
                {{ $staffs }}
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->


@endsection