@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">EPW 2022 Staff Applicants</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/applicant">Applicants</a></li>
            <li class="breadcrumb-item active">Information</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      @if (session()->has('resetSuccess'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          {{ session('resetSuccess') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Detail Information of {{ $applicant->name }}</h3>
            </div>
            <div class="card-body">
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Name</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->name }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Student Number</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->nrp }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Email</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->email }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Line ID</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->line_id }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Motivation</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->motivation }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Register at</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->created_at->diffForHumans() }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Timestamp</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->created_at }}
                </div>
              </div>

            </div>
          </div>
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Files of {{ $applicant->name }}</h3>
            </div>
            <div class="card-body">
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Screenshot</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  <a href="{{ asset('/files/screenshot/' . $applicant->screenshot) }}" target="_blank">See the screenshot image</a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Curriculum Vitae</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  <a href="{{ asset('/files/cv/' . $applicant->cv) }}" target="_blank">Download the Curriculum Vitae</a>
                </div>
              </div>
              @if ($applicant->portfolio)
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Portfolio</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  <a href="{{ $applicant->portfolio }}" target="_blank">Direct to the Portfolio</a>
                </div>
              </div>
              @endif

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Priority Choice of {{ $applicant->name }}</h3>
            </div>
            <div class="card-body">
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Fundraising</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->fundraising }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Sponsorship</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->sponsorship }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>EPC</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->epc }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>SNOW</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->snow }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Big Event</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->big_event }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Technical</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->technical }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>IT</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->itdev }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Media</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->media }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Creative</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->creative }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Public Relation</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->public_relation }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-4 col-md-3">
                  <strong>Secretarial</strong>
                  <strong class="float-right d-none d-sm-block">:</strong>
                </div>
                <div class="col-sm-8 col-md-9">
                  {{ $applicant->choice->secretarial }}
                </div>
              </div>

            </div>
          </div>

          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Interview Schedule</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Breakout Room</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter the link name" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Schedule</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter the link name" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection