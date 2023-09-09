<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SIMS - Login</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('resource/img/dssc_logo.png') }}">

  <!-- Custom fonts for this template-->
  <link href="{{ asset('resource/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('resource/css/sb-admin-2.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6">
                <div class="mx-auto text-center w-50 mt-5 d-none d-lg-block">
                    <img class="logo-img w-75">
                    <p class="text-gray-900 mt-2 mb-4">Davao del Sur State College</p>
                </div>
                <div class="mx-auto text-center w-50 mt-3 d-block d-lg-none">
                    <img class="logo-img w-50">
                    <p class="text-gray-900 mt-3">Login | Student Information Management System</p>
                </div>
              </div>
              <div class="col-lg-6 mb-3">
                <div class="pl-6 pr-6">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 mt-5 d-none d-lg-block">SIMS Login</h1>
                  </div>
                  <form action="{{ route('login.action') }}" method="POST" class="user">
                    @csrf
                    @if ($errors->any())
                      <div class="alert alert-danger alert-dismissible fade show">
                          <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                         
                      </div>
                    @endif

                    <!-- USERNAME  -->
                    <div class="form-group">
                      <input name="email" value="{{ old('email', session('email'))}}" type="text" class="form-control form-control-user  @error('email')is-invalid @enderror" aria-describedby="emailHelp" placeholder="Username or Email or Student ID">
                    </div>

                    <!-- PASSWORD -->
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user  @error('password')is-invalid @enderror" placeholder="Password">
                      
                    </div>

                    <!-- ROLES SELECTION -->
                    <div class="form-group">
                      <select name="role_id" class="form-control form-control-select @error('role_id')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Access roles</option>
                        <option value="0">Student</option>
                        <option value="1">Faculty</option>
                        <option value="2">Staff</option>
                        <option value="3">Administrator</option>
                      </select>
                      </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <button name="login" type="submit" class="btn btn-primary btn-block btn-user">Login</button>
                 
                  <hr>
                  <div class="text-center">
                    <a class="small" data-toggle="modal" data-target="#forgotpass" href="">Can't Login?</a>
                    <label> | </label>
                    <a class="small" href="{{ route('register') }}">Enroll Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('auth.forgot')
</form>
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('resource/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('resource/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('resource/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('resource/js/sb-admin-2.js') }}"></script>
</body>
</html>