<!-- modal for add student -->
<div class="modal fade" id="AddFacultyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-headers pt-3">
                    <span class="modal-title lead pl-3 small font-weight-bold">Add New Faculty</span>
                    <button class="fa fa-times bg-transparent border-0 float-right pr-4" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            <form class="user" method="POST" action="{{ route('faculty.add') }}">
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
                    <label class="labels small">Lastname:</label>
                    <input type="text" name="lastname" class="form-control form-control-sm form-control-modal @error('lastname')is-invalid @enderror" placeholder="Lastname" value="{{ old('lastname', session('lastname'))}}">
                </div>
                <div class="col-md-6">
                    <label class="labels small">Date of Birth:</label>
                    <input type="date" name="dateofbirth" class="form-control form-control-sm form-control-modal @error('dateofbirth')is-invalid @enderror" value="{{ old('dateofbirth', session('dateofbirth'))}}" placeholder="Date of Birth">
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label class="labels small">Gender:</label>
                    <select name="gender" class="form-control form-control-sm form-control-modal @error('gender')is-invalid @enderror">
                        <option disabled="disabled" selected="selected">Select Gender</option>
                        <option value="Male" @if (old("gender", session("gender")) == 'Male') selected @else @endif>Male</option>
                        <option value="Female" @if (old("gender", session("gender")) == 'Female') selected @else @endif>Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="labels small">Contact #:</label>
                    <input type="tel" maxlength="11" name="contact_num" class="form-control form-control-sm form-control-modal @error('contact_num')is-invalid @enderror" value="{{ old('contact_num', session('contact_num'))}}" placeholder="Contact #">
                </div>
           
            </div>

            <div class="row mt-2 mb-2">
                <div class="col-md-6">
                    <label class="labels small">Email Address:</label>
                    <input type="text" name="email_add" class="form-control form-control-sm form-control-modal @error('email_add')is-invalid @enderror" placeholder="Email Address" value="{{ old('email_add', session('email_add'))}}">
                </div>
                <div class="col-md-6">
                    <label class="labels small">Department:</label>
                    <input type="text" name="department" class="form-control form-control-sm form-control-modal @error('department')is-invalid @enderror" placeholder="Department" value="{{ old('department', session('department'))}}">
                </div>
                
            </div>

            <div class="row mt-2 mb-2">
                <div class="col-md-6">
                    <label class="labels small">Position:</label>
                    <input type="text" name="position" class="form-control form-control-sm form-control-modal @error('position')is-invalid @enderror" placeholder="Position">
                </div>
                <div class="col-md-6">
                    <label class="labels small">Username:</label>
                    <input type="text" name="username" class="form-control form-control-sm form-control-modal @error('username')is-invalid @enderror" value="{{ old('username', session('username'))}}" placeholder="Username">
                </div>
               
                
            </div>

            <div class="row mt-2 mb-2">
                <div class="col">
                    <label class="labels small">Password:</label>
                    <input type="text" name="password" class="form-control form-control-sm form-control-modal @error('password')is-invalid @enderror" value="{{ old('password', session('password'))}}" placeholder="New Password">
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