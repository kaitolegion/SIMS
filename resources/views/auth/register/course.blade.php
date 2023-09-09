<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="{{ asset('resource/img/dssc_logo.png') }}">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Course</title>
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
              <h1 class="h4 text-gray-900 mb-1">Choose your Course</h1>
                <h1 class="h4 text-gray-900 mb-4">{{ old('firstname', session('firstname'))}} {{ old('lastname', session('lastname'))}}!</h1>
              </div>
              <form action="{{ route('register.database') }}" method="POST" class="user">
                @csrf

                <!-- username -->
                <div class="form-group">
                  <label class="small pl-2">Username</label>
                    <div class="col-md-15">
                    <input name="username" value="{{ old('username', session('username'))}}" type="text" class="form-control form-control-user  @error('username')is-invalid @enderror" placeholder="Username">
                      @error('username')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              <!-- CAMPUS SELECTION -->
              <div class="form-group">
                <label class="small pl-2">Available Courses</label>
                <select name="course" class="form-control form-control-select @error('course')is-invalid @enderror">
                  <option value="" selected disabled hidden>Select Course</option>

                  @if (session("campus") == '1') 
                  <option value="BSIT">Bachelor of Science in Information Technology</option>
                  <option value="BSIS">Bachelor of Science in Information System</option>
                  <option value="BSAB">Bachelor of Science in Agri-Business</option>
                  <option value="BEED">Bachelor of Elementary Education</option>
                  <option value="BSED-English">Bachelor of Secondary Education - Major in English</option>
                  <option value="BSED-Math">Bachelor of Secondary Education - Major in Mathematics</option>
                  <option value="BSED-Science">Bachelor of Secondary Education - Major in General Science</option>
                  <option value="BSED-Filipino">Bachelor of Secondary Education - Major in Filipino</option>
                  <option value="BTLED-HE">Bachelor in Technology and Livelihood Education - Major in Home Economics</option>
                  <option value="BSA-ANSCI">Bachelor of Science in Agriculture - Major in Animal Science</option>
                  <option value="BSA-CP">Bachelor of Science in Agriculture - Major in Crop Protection</option>
                  <option value="BSA-HORT">Bachelor of Science in Agriculture - Major in Horticulture</option>
                  <option value="BSAF">Bachelor of Science in Agroforestry</option>
                  <option value="BSAIS">Bachelor of Science in Accounting Information System</option>
                  <option value="BSDevCom">Bachelor of Science in Development Communication</option>
                  <option value="BSABE">Bachelor of Science in Agricultural Biosystem Engineering</option>
                  <option value="BPA">Bachelor of Public Administration</option>
                  <option value="BIT">Bachelor of Industrial Technology - Major in Electrical Technology</option>
                  <option value="BSBio">Bachelor of Science in Biology Major in Biodiversity or Medical Biology</option>
                  <option value="BSES">Bachelor of Science in Environmental Science</option>
                  <option value="BSFT">Bachelor of Science in Food Technology</option>
                  <option value="BSMath">Bachelor of Science in Mathematics</option>
                  <option value="BSVetTech">Bachelor's of Science in Veterinary Technology</option>
                  <option value="DIT">Diploma in Information Technology - 3 years</option>
                  <option value="ACT">Associate in Computing Technology - 2 years</option>
                  <option value="CAS">Certificate in Agricultural Sciences</option>
                  @elseif (session("campus") == '2')
                  <option value="BPA">Bachelor in Public Administration</option>
                  <option value="BSAB">Bachelor of Science in Agribusiness</option>
                  <option value="BSIT">Bachelor of Science in Information Technology</option>
                  <option value="CAS">Certificate in Agricultural Sciences - 2 years</option>
                  @elseif (session("campus") == '3')
                  <option value="CAS">Certificate in Agricultural Sciences - 2 years</option>
                  @else
                  <option value="none">none</option>
                  
                  @endif

                </select>
                @error('course')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
               </div>

               <div class="form-group row">
                <div class="col-lg-6">
                  <label class="text-muted small">Birth Certificate PSA/NSO</label>
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label small" for="customFile">Document file</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label class="text-muted small">Form 137</label>
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label small" for="customFile">Document file</label>
                  </div>
                </div>
              </div>
          
                <!-- <div class="form-group row">
                  <div class="ml-3 mt-2 form-group">
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input name="remember" type="checkbox" class="custom-control-input @error('privacypolicy')is-invalid @enderror" id="customCheck">
                        <label class="custom-control-label" for="customCheck">I have read and agree to the privacy policy, terms of service and community guidelines.</label>
                      </div>
                    </div>
                   </div>
                  </div> -->
                <button type="submit" class="btn btn-primary btn-user btn-block">Submit Enroll Now</button>
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
  <script src="{{ asset('resource/js/sb-admin-2.min.js') }}"></script>
</body>
</html>