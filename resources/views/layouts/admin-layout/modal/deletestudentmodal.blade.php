<!-- modal for delete  -->
<div class="modal fade" id="DeleteStudentModal_{{ $student->student_id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title lead">Delete</h5>
                <button class="fa fa-times bg-transparent border-0" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('dashboard/studentrecord/delete', $student->student_id) }}" method="POST">
            <div class="modal-body">
            @csrf
            <input id="id" name="id" hidden value="">
            <p>Are you sure you want to delete ? {{ $student->student_id }}</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- end modal for delete  -->