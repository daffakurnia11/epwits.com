<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EPW 2021 | Open Recruitment Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/adminlte.min.css">
  <style>
    input[type=radio], .label-number label {
      width: 20px
    }
  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box" style="width:900px;max-width:100%">
  <div class="register-logo mt-5">
    <a href="" class="font-weight-bold">Staff Open Recruitment EPW 2022</a>
  </div>

  <div class="card mx-2 mb-4">
    <div class="card-body register-card-body">
      @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @else
      <p class="login-box-msg">Please register yourself!</p>
      @endif

      <form action="/applicantsubmit" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}">
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <input type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" placeholder="Student ID (NRP)" value="{{ old('nrp') }}">
              @error('nrp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <input type="text" class="form-control @error('line_id') is-invalid @enderror" name="line_id" placeholder="Line ID" value="{{ old('line_id') }}">
              @error('line_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <textarea class="form-control @error('motivation') is-invalid @enderror" name="motivation" rows="3" placeholder="Write your motivation ...">{{ old('motivation') }}</textarea>
              @error('motivation')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>
        
        <div class="priority-choice" style="width:100%; overflow-x: auto;">
          <label for="">Priority Choice</label>
          <p>Please choose your priority, smallest is your priority</p>
          <div class="row justify-content-end">
            <div class="col-6 col-sm-9 d-flex label-number">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">1</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">2</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">3</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">4</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">5</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">6</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">7</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">8</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">9</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">10</label>
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <label class="d-block text-center">11</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('fundraising') text-danger @enderror">Fundraising</span><br>
              @error('fundraising')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="fundraising" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('sponsorship') text-danger @enderror">Sponsorship</span><br>
              @error('sponsorship')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="sponsorship" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('epc') text-danger @enderror">EPC</span><br>
              @error('epc')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="epc" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('snow') text-danger @enderror">SNOW</span><br>
              @error('snow')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="snow" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('big_event') text-danger @enderror">Big Event</span><br>
              @error('big_event')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="big_event" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('technical') text-danger @enderror">Technical</span><br>
              @error('technical')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="technical" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('itdev') text-danger @enderror">IT</span><br>
              @error('itdev')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="itdev" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('media') text-danger @enderror">Media</span><br>
              @error('media')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="media" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('creative') text-danger @enderror">Creative</span><br>
              @error('creative')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="creative" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('public_relation') text-danger @enderror">Public Relation</span><br>
              @error('public_relation')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="public_relation" value="11">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-3">
              <span class="@error('secretarial') text-danger @enderror">Secretarial</span><br>
              @error('secretarial')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-6 col-sm-9 d-flex">
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="1">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="2">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="3">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="4">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="5">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="6">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="7">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="8">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="9">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="10">
              </div>
              <div class="form-group mx-2 mx-md-3 d-inline">
                <input type="radio" name="secretarial" value="11">
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <label for="screenshot" class="d-block">Follow EPW 2022 Instagram (<span class="text-danger">format : jpg/png</span>)</label>
              <input type="file" class="d-block" name="screenshot" id="screenshot">
              @error('screenshot')
                <small class="text-danger">
                  {{ $message }}
                </small>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <label for="cv" class="d-block">Upload your CV (<span class="text-danger">format : pdf</span>)</label>
              <input type="file" class="d-block" name="cv" id="cv">
              @error('cv')
                <small class="text-danger">
                  {{ $message }}
                </small>
              @enderror
            </div>
          </div>
          <div class="col-12">
            <div class="form-group mb-3">
              <label for="portfolio" class="d-block">Upload your Portfolio (<span class="text-danger">for Creative and IT Division</span>)</label>
              <input type="text" class="form-control @error('portfolio') is-invalid @enderror" id="portfolio" name="portfolio" placeholder="Drop your link" value="{{ old('portfolio') }}">
              @error('portfolio')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>
        
        <div class="row">
          <button type="submit" class="btn btn-primary btn-block w-auto px-5 ml-auto mt-4">Register</button>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte.min.js"></script>
</body>
</html>
