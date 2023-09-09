<!-- modal for add student -->
<div class="modal fade" id="ViewDocumentStudentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-headers pt-3">
                    <span class="modal-title lead pl-3 small font-weight-bold">View Document</span>
                    <button class="fa fa-times bg-transparent border-0 float-right pr-4" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            <form class="user" method="POST" action="{{ route('student.add') }}">
                @csrf
            <div class="row">
                
                <div class="col-lg-6 border text-center">
                        <p class="modal-title lead pl-3 small font-weight-bold">Birth Certificate</p>
                        <img src="https://www.pdffiller.com/preview/415/69/415069452/large.png" id="imagepreview" style="width: 300px; height: 400px;" >
                </div>
                <div class="col-lg-6 mx-auto border text-center">
                        <p class="modal-title lead pl-3 small font-weight-bold">Form 137</p>
                        <img src="https://imgv2-2-f.scribdassets.com/img/document/25820240/original/017c4007fa/1686710616?v=1" id="imagepreview" style="width: 300px; height: 400px;" >
                </div>
            </div>

            <div class="row mt-2">
                
            </div>

            <button class="btn btn-secondary btn-sm mt-2 float-right mr-2" data-dismiss="modal" type="button">Close</button>
            </div>
            </form>
        </div>
    </div> 
</div>
<!-- end modal for add student -->