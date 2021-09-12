@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">EPW 2022 Short Link</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/shortlink">Short Link</a></li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Create EPW 2022 Short Link</h3>
        </div>
        <form action="/admin/shortlink" method="POST">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="original">Original URL</label>
              <input type="text" class="form-control @error('original') is-invalid @enderror" id="original" name="original" placeholder="Enter the original URL" value="{{ old('original') }}" autofocus>
              @error('original')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Link Name</label>
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
                  <label for="short">Short Link</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">epwits.com/</span>
                    </div>
                    <input type="text" class="form-control @error('short') is-invalid @enderror" id="short" name="short" placeholder="Enter the short link" value="{{ old('short') }}">
                    @error('short')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create!</button>
          </div>
        </form>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection