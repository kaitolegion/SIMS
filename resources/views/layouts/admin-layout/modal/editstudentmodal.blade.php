<!-- modal for edit student -->
<div class="modal fade" id="EditStudentModal_{{ $student->student_id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-headers pt-3">
                    <span class="modal-title pl-3 font-weight-bold">Edit student</span>
                    <button class="fa fa-times bg-transparent border-0 float-right pr-4" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div> 
                
               
            <div class="modal-body">
            <form class="user" method="POST" action="{{ url('dashboard/studentrecord/edit', $student->student_id) }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label class="labels">Firstname:</label>
                    <input type="text" name="firstname" class="form-control form-control-sm form-control-modal @error('firstname')is-invalid @enderror" value="{{ $student->firstname }}" placeholder="Firstname">
                </div>
                <div class="col-md-6">
                    <label class="labels">Middlename:</label>
                    <input type="text" name="middlename" class="form-control form-control-sm form-control-modal @error('middlename')is-invalid @enderror" value="{{ $student->middlename }}" placeholder="Middlename (Optional)">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label class="labels">Lastname:</label>
                    <input type="text" name="lastname" class="form-control form-control-sm form-control-modal @error('lastname')is-invalid @enderror" placeholder="Lastname" value="{{ $student->lastname }}">
                </div>
                <div class="col-md-6">
                    <label class="labels">Date of Birth:</label>
                    <input type="text" name="dateofbirth" class="form-control form-control-sm form-control-modal @error('dateofbirth')is-invalid @enderror" value="{{ $student->date_of_birth }}" placeholder="Date of Birth">
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label class="labels">Gender:</label>
                    <select name="gender" class="form-control form-control-sm form-control-modal @error('gender')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Select Gender</option>
                        <option value="Male" @if ($student->gender == 'Male') selected @else @endif>Male</option>
                        <option value="Female" @if ($student->gender == 'Female') selected @else @endif>Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="labels">Contact #:</label>
                    <input type="tel" maxlength="11" name="contact_num" class="form-control form-control-sm form-control-modal @error('contact_num')is-invalid @enderror" value="{{ $student->contact_num }}" placeholder="Contact #">
                </div>
           
            </div>

            <div class="row mt-2">
               <div class="col">
                <label class="labels">Address (Street, City, Province, Zipcode):</label>
                <input type="text" name="address" class="form-control form-control-sm form-control-modal @error('address')is-invalid @enderror" value="{{ $student->address }}" placeholder="Address">
                </div>
            </div>

            <div class="row mt-2 mb-2">
                <div class="col-md-6">
                    <label class="labels">Email Address:</label>
                    <input type="text" name="email_add" class="form-control form-control-sm form-control-modal @error('email_add')is-invalid @enderror" placeholder="Email Address" value="{{ $student->email_add }}">
                </div>
                
                <div class="col-md-6">
                    <label class="labels">Campus:</label>
                    <select name="campus" class="form-control form-control-sm form-control-modal @error('campus')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Select Campus</option>
                        <option value="1" @if ($student->campus_id == '1') selected @else @endif>Main</option>
                        <option value="2" @if ($student->campus_id == '2') selected @else @endif>Sulop</option>
                        <option value="3" @if ($student->campus_id == '3') selected @else @endif>Matanao</option>
                    </select>
                </div>
            </div>

            <div class="row mt-2 mb-2">
                <div class="col-md-6">
                    <label class="labels">Username:</label>
                    <input type="text" name="username" class="form-control form-control-sm form-control-modal @error('username')is-invalid @enderror" value="{{ $student->username }}" placeholder="Username">
                </div>
                <div class="col-md-6">
                    <label class="labels">Password:</label>
                    <input type="password" name="password" value="{{ $student->password }}" class="form-control form-control-sm form-control-modal @error('password')is-invalid @enderror" placeholder="Password">
                </div>
                
            </div>

            <div class="row mt-2 mb-2">
                
                <div class="col-md-3">
                    <label class="labels">Courses:</label>
                    <select name="course" class="form-control form-control-sm form-control-modal @error('course')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Choose course</option>
                        <option value="BSIT" @if ($student->course == 'BSIT') selected @else @endif>Bachelor Science in Information Technology</option>
                        <option value="BSIS" @if ($student->course == 'BSIS') selected @else @endif>Bachelor Science in Information System</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="labels">Year Level:</label>
                    <select name="yearlevel" class="form-control form-control-sm form-control-modal @error('yearlevel')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Year Level</option>
                        <option value="1" @if ($student->yearlevel_id == '1') selected @else @endif>1st Year</option>
                        <option value="2" @if ($student->yearlevel_id == '2') selected @else @endif>2nd Year</option>
                        <option value="3" @if ($student->yearlevel_id == '3') selected @else @endif>3rd Year</option>
                        <option value="4" @if ($student->yearlevel_id == '4') selected @else @endif>4th Year</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="labels">Status:</label>
                    <select name="status" class="form-control form-control-sm form-control-modal @error('status')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Status</option>
                        <option value="approved" @if ($student->status == 'approved') selected @else @endif>Approved</option>
                        <option value="pending" @if ($student->status == 'pending') selected @else @endif>Pending</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="labels">Evaluation:</label>
                    <select name="evaluation" class="form-control form-control-sm form-control-modal @error('evaluation')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Evaluation</option>
                        <option value="passed" @if ($student->evaluation == 'passed') selected @else @endif>Passed</option>
                        <option value="failed" @if ($student->evaluation == 'failed') selected @else @endif>Failed</option>
                    </select>
                </div>
            </div>
            
            <input class="btn btn-warning btn-sm mt-2 float-right" type="submit" value="Edit" id="success">
            <button class="btn btn-secondary btn-sm mt-2 float-right mr-2" data-dismiss="modal" type="button">Close</button>
            </div>
            </form>
        </div>
    </div> 
</div>
<!-- end modal for edit student -->