<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/x-icon" href="{{ asset('resource/img/dssc_logo.png') }}">
  <title>SIMS | Dashboard</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('resource/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('resource/css/sb-admin-2.css') }}" rel="stylesheet">
  <link href="{{ asset('resource/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- sidebar -->
            <div class="">
            @include('layouts.admin-layout.sidebar')
            </div>
        <!-- end sidebar -->
        
        <!-- navbar and content  -->
            <div id="content-wrapper" class="flex-column d-flex vh-100">
               <!-- navbar  -->
               <div class="">
               @include('layouts.admin-layout.navbar')
              </div>
                <!-- end navbar  -->
                <!-- main  -->
                <div class="vh-100 overflow-auto">
                <div id="content" class="mt-4 h-100">
                  <div class="container-fluid">
                      @yield('contents')
                  </div>
                </div>
                </div>
                <!-- end main  -->
              
            </div>

            <!-- end navbar and content  -->
    </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<script src="{{ asset('resource/js/bootstrap-show-password.js') }}"></script>
<script src="{{ asset('resource/js/counter.js') }}"></script>
<script src="{{ asset('resource/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('resource/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('resource/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('resource/js/sb-admin-2.js') }}"></script>

<script src="{{ asset('resource/js/pagination.js') }}"></script>
<script src="{{ asset('resource/js/demo/datatables.js') }}"></script>
<script src="{{ asset('resource/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('resource/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>


</body>
</html>