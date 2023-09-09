<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/x-icon" href="{{ asset('resource/img/dssc_logo.png') }}">
  <title>DSSC | Enrollment</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('resource/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('resource/css/sb-admin-2.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">DSSC | Enrollment!</h1>
              </div>
              <form action="{{ route('register.save') }}" method="POST" class="user">
                @csrf
                <!-- FIRSTNAME INPUT -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input name="firstname" value="{{old('firstname',session('firstname'))}}" type="text" class="form-control form-control-user @error('firstname')is-invalid @enderror" placeholder="First Name">
                  @error('firstname')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                
                <!-- MIDDLE NAME INPUT -->
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input name="middlename" value="{{ old('middlename', session('middlename'))}}" type="text" class="form-control form-control-user @error('middlename')is-invalid @enderror" placeholder="Middle Name">
                  @error('middlename')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                </div>

                 <!-- LASTNAME INPUT -->
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input name="lastname" value="{{ old('lastname', session('lastname'))}}" type="text" class="form-control form-control-user @error('lastname')is-invalid @enderror" placeholder="Last Name">
                  @error('lastname')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                
                <!-- PHONE INPUT -->
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input name="contactnum" maxlength="11" value="{{ old('contactnum', session('contactnum'))}}" type="text" class="form-control form-control-user @error('contactnum')is-invalid @enderror" placeholder="09xxxxxxxxx">
                  @error('contactnum')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                </div>


                <!-- EMAIL INPUT -->
               
                <div class="form-group">
                  <input name="email_reg" value="{{ old('email_reg', session('email_reg'))}}" type="email" class="form-control form-control-user @error('email_reg')is-invalid @enderror"  placeholder="Email Address">
                  @error('email_reg')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              <!-- CAMPUS SELECTION -->
              <div class="form-group">
                <select name="campus" class="custom-select form-control form-control-select @error('campus')is-invalid @enderror">
                  <option value="" selected disabled hidden>Select Campus...</option>
                  <option value="1" @if (old("campus", session("campus")) == '1') selected @else @endif>Main</option>
                  <option value="2" @if (old("campus", session("campus")) == '2') selected @else @endif>Sulop</option>
                  <option value="3" @if (old("campus", session("campus")) == '3') selected @else @endif>Matanao</option>
                </select>
                @error('campus')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
               </div>

                <!-- GENDER SELECTION -->
               <div class="form-group row">
                 <div class="col-sm-6 mb-3 mb-sm-0">
                  <select name="gender" class="custom-select form-control form-control-select  @error('gender')is-invalid @enderror">
                    <option disabled="disabled" selected="selected">Gender</option>
                    <option value="Male" @if (old("gender", session("gender")) == 'male') selected @else @endif>Male</option>
                    <option value="Female" @if (old("gender", session("gender")) == 'female') selected @else @endif>Female</option>
                  </select> 
                  @error('gender')
                  <span class="invalid-feedback">{{ $message }}</span>
                 @enderror
                  </div>
                   <!-- DATE OF BIRTH -->
                  <div class="col-sm-6 mb-2 mb-sm-0">
                  <input name="dateofbirth" value="{{ old('dateofbirth', session('dateofbirth'))}}" type="date" class="form-control form-control-user  @error('dateofbirth')is-invalid @enderror" placeholder="Date of Birth">
                  @error('dateofbirth')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                  </div>
                </div>
                 <!-- ADDRESS ROW -->
                <div class="form-group row">

                
                   <!-- ADDRESS province -->
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input name="state" value="{{ old('state', session('state'))}}" type="text" class="form-control form-control-user  @error('state')is-invalid @enderror" placeholder="State or Province">
                  @error('state')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                  </div>
                   <!-- ADDRESS CITY -->
                  <div class="col-sm-6 mb-sm-0">
                  <input name="city" value="{{ old('city', session('city'))}}" type="text" class="form-control form-control-user  @error('city')is-invalid @enderror" placeholder="City">
                  @error('city')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                  </div>
              
                </div>
                 <!-- ADDRESS Street -->
                 <div class="form-group row">
                 <div class="col-sm-6 mb-3 mb-sm-0">
                 <input name="street" value="{{ old('street', session('street'))}}" type="text" class="form-control form-control-user  @error('street')is-invalid @enderror" placeholder="Street">
                  @error('street')
                  <span class="invalid-feedback">{{ $message }}</span>
                 @enderror
                  </div>
                 

                  <!-- ADDRESS province -->
                  <div class="col-sm-6 mb-2 mb-sm-0">
                  <input name="zipcode" value="{{ old('zipcode', session('zipcode'))}}" type="text" class="form-control form-control-user  @error('zipcode')is-invalid @enderror" placeholder="Zip Code (Optional)">
                  @error('zipcode')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                  </div>
                  </div>

                 <!-- SUBMIT-->
                <div class="form-group row">
                  <div class="ml-3 mt-2 form-group">
                   <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input name="remember" type="checkbox" class="custom-control-input @error('privacypolicy')is-invalid @enderror" id="customCheck">
                        <label class="custom-control-label" for="customCheck">I have read and agree to the privacy policy, terms of service and community guidelines.</label>
                      </div>
                    </div>
                   </div>
                  </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Next</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Already Enrolled? Login!</a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 d-none d-lg-block">
            <div class="mx-auto text-center w-50 mt-5">
            <img class="logo-img w-75">
            <p class="text-gray-900 mt-2 mb-4">Davao del Sur State College</p>
            <p class="text-gray-900 mt-2 mb-4">For incoming first year, Choose the right course you fit in.</p>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('resource/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('resource/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('resource/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('resource/js/sb-admin-2.js') }}"></script>
</body>
</html>