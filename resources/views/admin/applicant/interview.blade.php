@extends('admin.layouts.main')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">EPW 2022 Interview Announcement</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/applicant">Applicants</a></li>
            <li class="breadcrumb-item active">Interview</li>
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
          <h3 class="card-title">Lists of EPW 2022 Interview Announcement</h3>
        </div>
        <div class="card-body">
          <table id="shortlinkList" class="table table-bordered table-hover">
            <thead>
              <tr class="text-center">
                <th>No.</th>
                <th>Name</th>
                <th>NRP</th>
                <th>Breakout</th>
                <th>Day, Date</th>
                <th>Time</th>
                <th>Staff Acceptance</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($schedules as $applicant)
              <tr>
                <td class="text-center text-nowrap align-middle">{{ $loop->iteration }}</td>
                <td class="text-nowrap align-middle">{{ $applicant->name }}</td>
                <td class="text-nowrap align-middle">{{ $applicant->nrp }}</td>
                <td class="text-nowrap align-middle">{{ $applicant->breakout }}</td>
                <td class="text-nowrap align-middle">{{ $applicant->date }}</td>
                <td class="text-nowrap align-middle">{{ $applicant->time }}</td>
                <td class="text-center text-nowrap align-middle">
                  @if ($applicant->acceptance)
                    <p class="mb-0">Accepted!</p>
                  @else
                    <form action="/admin/acceptance/{{ $applicant->nrp }}" method="POST">
                      @csrf
                      @method('PATCH')
                      <input type="hidden" name="nrp" value="{{ $applicant->nrp }}">
                      <a href="/admin/applicant/{{ $applicant->nrp }}" class="btn btn-sm btn-info"><i class="fas fa-fw fa-eye"></i></a>
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-check"></i> Accept!</button>
                    </form>
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr class="text-center">
                <th>No.</th>
                <th>Name</th>
                <th>NRP</th>
                <th>Breakout</th>
                <th>Day, Date</th>
                <th>Time</th>
                <th>Staff Acceptance</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection