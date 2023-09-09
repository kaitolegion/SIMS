<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('resource/img/dssc_logo.png') }}">
        <link href="{{ asset('resource/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="{{ asset('resource/css/sb-admin-2.css') }}" rel="stylesheet">
        <title>@yield('title')</title>
    </head>

<body class="antialiased">
        <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
@include('layouts.student-layout.navbar')
  <!-- Main Content -->
  <div id="content">
              <div class="container-fluid">
                      @yield('contents')
              </div>
  </div>
</div>

<script src="{{ asset('resource/js/pagination.js') }}"></script>
<script src="{{ asset('resource/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('resource/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('resource/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('resource/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('resource/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('resource/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('resource/js/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('resource/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('resource/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('resource/js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ asset('resource/js/demo/chart-bar-demo.js') }}"></script>
</body>
</html>