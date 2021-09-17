<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EPW 2021 | Interview Announcement</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box" style="width:600px;max-width:100%">
  <div class="register-logo mt-5">
    <a href="" class="font-weight-bold">Interview Announcement EPW 2022</a>
  </div>

  <div class="card mx-2 mb-4">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Check your Student Number (NRP) for the announcement</p>
      <form action="/InterviewAnnouncement" method="POST">
        @csrf
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" name="nrp" placeholder="Drop your student number ..." autofocus>
          <span class="input-group-append">
            <button type="submit" class="btn btn-info btn-flat">Check!</button>
          </span>
        </div>
      </form>
      @if (session()->has('message'))
        @if (session('message') == 'No Data')
          <div class="invitation mt-3">
            <p class="mb-0 text-center">Sorry, you are not yet eligible to be a part of EPW 2022.<br>Please don't be discouraged.<br>You have a lot of chances to contribute in other events!</p>
          </div>
        @else
          <div class="invitation mt-3">
            <p>Dear, <strong>{{ session('message') }}</strong></p>
            <p class="mb-0">Thanks for your participation in the Staff Open Recruitment EPW 2022.</p>
            <p>Here are the instructions for your interview, please follow the instructions below.</p>

            <div class="text-left">
              <p class="mb-0">Please join the interview using the link below :</p>
              <div class="text-center my-2">
                <a href="https://epwits.com/InterviewEPW2022" target="_blank">epwits.com/InterviewEPW2022</a>
              </div>
              <p class="mb-0">You must join the interview on</p>
              <p class="text-center"><strong>{{ session('date') }}</strong> at <strong>{{ session('time') }}</strong></p>
              <p>Your breakout room is : <strong>BREAKOUT {{ session('breakout') }}</strong></p>
            </div>
            <p>
              If you have any questions or problems, please contact<br>
              <a href="http://line.me/ti/p/~raihan_000" target="_blank">Raihan (Line : raihan_000)</a><br>
              <a href="http://line.me/ti/p/~anjelitarsptr" target="_blank">Anjelita (Line : anjelitarsptr)</a>
            </p>

            <p>Thank You</p>
            <p>Sincerely, EPW 2022</p>
          </div>
        @endif
      @endif
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
