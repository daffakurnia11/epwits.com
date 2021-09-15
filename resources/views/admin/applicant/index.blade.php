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
            <li class="breadcrumb-item active">Applicants</li>
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
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Lists of EPW 2022 Staff Applicants</h3>
        </div>
        <div class="card-body">
          <table id="shortlinkList" class="table table-bordered table-hover">
            <thead>
              <tr class="text-center">
                <th>No.</th>
                <th>Name</th>
                <th>NRP</th>
                <th>Email</th>
                <th>Line_id</th>
                <th>Motivation</th>
                <th>Register at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($applicants as $applicant)
              <tr>
                <td class="text-center text-nowrap align-middle">{{ $loop->iteration }}</td>
                <td class="text-nowrap align-middle">{{ $applicant->name }}</td>
                <td class="text-center text-nowrap align-middle">{{ $applicant->nrp }}</td>
                <td class="text-nowrap align-middle">{{ $applicant->email }}</td>
                <td class="text-nowrap align-middle">{{ $applicant->line_id }}</td>
                <td class="text-wrap align-middle">{{ $applicant->motivation }}</td>
                <td class="text-nowrap align-middle">{{ $applicant->created_at->diffForHumans() }}</td>
                <td class="text-center text-nowrap align-middle">
                  <form action="/admin/applicant/{{ $applicant->nrp }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/admin/applicant/{{ $applicant->nrp }}" class="btn btn-sm btn-info"><i class="fas fa-fw fa-eye"></i></a>
                    {{-- <button type="submit" class="btn btn-sm btn-danger" style="border-color: none" onclick="confirm('Are you sure to delete this link?')"><i class="fas fa-fw fa-trash"></i></button> --}}
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr class="text-center">
                <th>No.</th>
                <th>Name</th>
                <th>NRP</th>
                <th>Email</th>
                <th>Line_id</th>
                <th>Motivation</th>
                <th>Register at</th>
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