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
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">Short Link</li>
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
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lists of EPW 2022 Short Link</h3>
        </div>
        <div class="card-body">
          <table id="shortlinkList" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th>No.</th>
              <th>Name</th>
              <th>Short link</th>
              <th>Original</th>
              <th>Visited</th>
              <th>Created By</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($links as $link)
              <tr>
                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $link->name }}</td>
                <td class="text-wrap align-middle">
                  <a href="/{{ $link->short }}" target="_blank">epwits.com/{{ $link->short }}</a> 
                </td>
                <td class="text-wrap align-middle">
                  <a href="{{ $link->original }}" target="_blank">{{ $link->original }}</a> 
                </td>
                <td class="text-center align-middle">
                  {{ $link->visited }}
                </td>
                <td class="text-nowrap align-middle">
                  {{ $link->user->name }}
                </td>
                <td class="text-center text-nowrap align-middle">
                  <form action="/admin/shortlink/{{ $link->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/{{ $link->short }}" class="btn btn-sm btn-info" target="_blank"><i class="fas fa-fw fa-eye"></i></a>
                    <a href="/admin/shortlink/{{ $link->id }}/edit" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-pencil-alt"></i></a>
                    <button type="submit" class="btn btn-sm btn-danger" style="border-color: none" onclick="confirm('Are you sure to delete this link?')"><i class="fas fa-fw fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
              <th>No.</th>
              <th>Name</th>
              <th>Short link</th>
              <th>Original</th>
              <th>Visited</th>
              <th>Created By</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection