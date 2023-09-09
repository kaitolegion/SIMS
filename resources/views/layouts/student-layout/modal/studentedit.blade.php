

<div class="modal fade" id="EditPersonalInfo" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xm" role="document">
            <div class="modal-content">
                <div class="modal-headers bg-primary text-white">
                    <span class="modal-title lead pl-3 small">Update Profile</span>
                    <button class="fa fa-times bg-transparent border-0 float-right pr-4 text-white" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                
                <form method="POST" class="user" action="/student/profile/upload" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label class="small">Birthdate</label>
                                <input type="date" class="form-control small" name="photo">
                            </div>
                            <div class="col-6">
                            <label class="small">Gender</label>
                                <input type="text" class="form-control small" name="photo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="small">Email</label>
                     <input type="text" class="form-control small" name="photo">
                     </div>
                     <div class="form-group">
                       <label class="small">Phone</label>
                        <input type="text" class="form-control small" name="photo">
                     </div>
                     <input type="submit" name="submit" class="mt-3 float-right btn btn-primary btn-sm" value="Edit">
                </form>
                </div>
            </div>
        </div>
    </div>