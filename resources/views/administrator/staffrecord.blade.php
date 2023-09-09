@extends('layouts.admin-layout.app')
@section('title', 'Staff Records')
@section('contents')
<!-- DataTales Example -->
<div class="card shadow mb-4">
      <div class="card-header py-3">
          <a href="" data-toggle="modal" data-target="#AddStudentModal" class="btn btn-primary btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Staff</a>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right">
            <div class="input-group">
              <input id="searching" type="text" class="form-control small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            </div>
          </form>
        </div>
<div class="card-body">
  <div class="table-responsive small">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Staff ID</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($staffs as $staff)
                <tr>
                    <td>{{$staff->staff_id}}</td>
                    <td>{{$staff->firstname}} {{$staff->middlename}} {{$staff->lastname}}</td>
                    <td>{{$staff->date_of_birth}}</td>
                    <td>{{$staff->gender}}</td>
                    <td>{{$staff->email_add}}</td>
                    <td>{{$staff->contact_num}}</td>
                    <td><a data-toggle="modal" data-target="#EditStudentModal" class="btn btn-circle btn-warning btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                    <a data-toggle="modal" data-target="#DeleteStudentModal" class="btn btn-circle btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
    <div class="card-header py-3">
      <div id="pagination" class="small float-right">
      </div>  
    </div>
</div>
@endsection