<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EPW 2022 Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/vendor/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/vendor/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/adminlte.min.css">

  {{-- <link rel="shortcut icon" href="/img/full-logo.png" type="image/x-icon">
  <link rel="canonical" href="https://vettalkindonesia.com/">
  <meta name="canonical" href="https://vettalkindonesia.com/" />
  <meta name="description" content="Vettalk.id merupakan salah satu perusahaan yang bergerak di bidang konsultasi klinik hewan berbasis digital dan mengutamakan digital marketing dalam menggapai pemilik hewan dengan mudah menggunakan platform yang ada saat ini sehingga sangat cocok untuk usaha klinik di era Revolusi Industri 4.0." />
  <meta name="author" content="Vettalk.id" />
  <meta name="keywords" content="Vettalk.id,Vettalk Indonesia,Klinik Hewan,Konsultasi,Digital marketing" />
  <meta name="robots" content="index,follow" />
  <meta name="theme-color" content="#1c46b7" /> --}}
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.layouts.navbar')

  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      In collaboration with <a href="https://breakpoint.id">Breakpoint</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://epwits.com">EPW ITS 2022</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/vendor/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/vendor/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/vendor/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/vendor/jszip/jszip.min.js"></script>
<script src="/vendor/pdfmake/pdfmake.min.js"></script>
<script src="/vendor/pdfmake/vfs_fonts.js"></script>
<script src="/vendor/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/vendor/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/vendor/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#shortlinkList").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "colvis"]
    }).buttons().container().appendTo('#shortlinkList_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>
