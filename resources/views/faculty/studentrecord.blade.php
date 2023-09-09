@extends('layouts.faculty-layout.app')
@section('title', 'Student Records')
@section('contents')
<div class="card shadow">
        <div class="card-header py-3">
          <a data-toggle="modal" data-target="#AddStudentModal" class="btn btn-primary btn-sm">Add Student</a>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right">
            <div class="input-group">
              <input id="search" type="text" class="form-control small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            </div>
          </form>
        </div>
<div class="card-body">
  <div class="table-responsive small">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Campus</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
  

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a data-toggle="modal" data-target="#EditStudentModal" class="btn btn-circle btn-warning btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                    <a data-toggle="modal" data-target="#DeleteStudentModal" class="btn btn-circle btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                </tr>
          
            </tbody>
        </table>
  </div>
</div>

    <div class="card-header py-3">
      <div id="pagination" class="small float-right">
      </div>  
    </div>

</div>
@include('layouts.admin-layout.modal.addstudentmodal')
@endsection