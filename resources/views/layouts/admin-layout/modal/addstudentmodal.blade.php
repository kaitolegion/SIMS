<!-- modal for add student -->
<div class="modal fade" id="AddStudentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-headers pt-3">
                    <span class="modal-title lead pl-3 small font-weight-bold">Add new student</span>
                    <button class="fa fa-times bg-transparent border-0 float-right pr-4" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            <form class="user" method="POST" action="{{ route('student.add') }}">
                @csrf
            <div class="row">
                <div class="col-md-6">
                    <label class="labels small">Firstname:</label>
                    <input type="text" name="firstname" class="form-control form-control-sm form-control-modal @error('firstname')is-invalid @enderror" value="{{ old('firstname', session('firstname'))}}" placeholder="Firstname">
                </div>
                <div class="col-md-6">
                    <label class="labels small">Middlename:</label>
                    <input type="text" name="middlename" class="form-control form-control-sm form-control-modal @error('middlename')is-invalid @enderror" value="{{ old('middlename', session('middlename'))}}" placeholder="Middlename (Optional)">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label class="labels small">Lastname</label>
                    <input type="text" name="lastname" class="form-control form-control-sm form-control-modal @error('lastname')is-invalid @enderror" placeholder="Lastname" value="{{ old('lastname', session('lastname'))}}">
                </div>
                <div class="col-md-6">
                    <label class="labels small">Date of Birth</label>
                    <input type="date" name="dateofbirth" class="form-control form-control-sm form-control-modal @error('dateofbirth')is-invalid @enderror" value="{{ old('dateofbirth', session('dateofbirth'))}}" placeholder="Date of Birth">
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label class="labels small">Gender</label>
                    <select name="gender" class="form-control form-control-sm form-control-modal @error('gender')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Select Gender</option>
                        <option value="Male" @if (old("gender", session("gender")) == 'Male') selected @else @endif>Male</option>
                        <option value="Female" @if (old("gender", session("gender")) == 'Female') selected @else @endif>Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="labels small">Contact #</label>
                    <input type="tel" maxlength="11" name="contact_num" class="form-control form-control-sm form-control-modal @error('contact_num')is-invalid @enderror" value="{{ old('contact_num', session('contact_num'))}}" placeholder="Contact #">
                </div>
           
            </div>

            <div class="row mt-2">
               <div class="col">
                <label class="labels small">Address (Street, City, Province, Zipcode)</label>
                <input type="text" name="address" class="form-control form-control-sm form-control-modal @error('address')is-invalid @enderror" value="{{ old('address', session('address'))}}" placeholder="Address">
                </div>
            </div>

            <div class="row mt-2 mb-2">
                <div class="col-md-6">
                    <label class="labels small">Email Address</label>
                    <input type="text" name="email_add" class="form-control form-control-sm form-control-modal @error('email_add')is-invalid @enderror" placeholder="Email Address" value="{{ old('email_add', session('email_add'))}}">
                </div>
                
                <div class="col-md-6">
                    <label class="labels small">Campus</label>
                    <select name="campus" class="form-control form-control-sm form-control-modal @error('campus')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Select Campus</option>
                        <option value="1" @if (old("campus", session("campus")) == '1') selected @else @endif>Main</option>
                        <option value="2" @if (old("campus", session("campus")) == '2') selected @else @endif>Sulop</option>
                        <option value="3" @if (old("campus", session("campus")) == '3') selected @else @endif>Matanao</option>
                    </select>
                </div>
            </div>

            <div class="row mt-2 mb-2">
                <div class="col-md-6">
                    <label class="labels small">Username</label>
                    <input type="text" name="username" class="form-control form-control-sm form-control-modal @error('username')is-invalid @enderror" value="{{ old('username', session('username'))}}" placeholder="Username">
                </div>
                <div class="col-md-6">
                    <label class="labels small">Password</label>
                    <input type="text" name="password" class="form-control form-control-sm form-control-modal @error('password')is-invalid @enderror" placeholder="Password">
                </div>
                
            </div>

            <div class="row mt-2 mb-2">
                
                <div class="col-md-3">
                    <label class="labels small">Courses</label>
                    <select name="course" class="form-control form-control-sm form-control-modal @error('course')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Choose course</option>
                        <option value="BSIT" @if (old("course", session("course")) == 'BSIT') selected @else @endif>Bachelor Science in Information Technology</option>
                        <option value="BSIS" @if (old("course", session("course")) == 'BSIS') selected @else @endif>Bachelor Science in Information System</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="labels small">Year Level</label>
                    <select name="yearlevel" class="form-control form-control-sm form-control-modal @error('yearlevel')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Year Level</option>
                        <option value="1" @if (old("yearlevel", session("yearlevel")) == '1') selected @else @endif>1st Year</option>
                        <option value="2" @if (old("yearlevel", session("yearlevel")) == '2') selected @else @endif>2nd Year</option>
                        <option value="3" @if (old("yearlevel", session("yearlevel")) == '3') selected @else @endif>3rd Year</option>
                        <option value="4" @if (old("yearlevel", session("yearlevel")) == '4') selected @else @endif>4th Year</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="labels small">Status</label>
                    <select name="status" class="form-control form-control-sm form-control-modal @error('status')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Status</option>
                        <option value="approved" @if (old("status", session("status")) == 'approved') selected @else @endif>Approved</option>
                        <option value="pending" @if (old("status", session("status")) == 'pending') selected @else @endif>Pending</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="labels small">Evaluation</label>
                    <select name="evaluation" class="form-control form-control-sm form-control-modal @error('evaluation')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Evaluation</option>
                        <option value="passed" @if (old("evaluation", session("evaluation")) == 'passed') selected @else @endif>Passed</option>
                        <option value="failed" @if (old("evaluation", session("evaluation")) == 'failed') selected @else @endif>Failed</option>
                    </select>
                </div>
            </div>
            
            <input class="btn btn-primary btn-sm mt-2 float-right" type="submit" value="Add" id="success">
            <button class="btn btn-secondary btn-sm mt-2 float-right mr-2" data-dismiss="modal" type="button">Close</button>
            </div>
            </form>
        </div>
    </div> 
</div>
<!-- end modal for add student -->