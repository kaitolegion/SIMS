<div class="modal fade" id="ChangeProfilePic" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-headers bg-primary text-white">
                <span class="modal-title lead pl-3 small">Update Profile</span>
                <button class="fa fa-times bg-transparent border-0 float-right pr-4 text-white" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/student/profile/upload" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="photo" class="small">
                    <input type="submit" name="submit" class="mt-3 float-right btn btn-primary btn-sm" value="Upload">
                </form>
            </div>
        </div>
    </div>
</div>