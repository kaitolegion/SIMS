@extends('layouts.admin-layout.app')
@section('title', 'Faculty Records')
@section('contents')


@if(session()->has('success'))
  <div class="alert alert-success" role="alert" id="success-alert">
        <span class="small"> <i class="fa fa-user"></i> {{ session()->get('success') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>

@elseif ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert" id="success-alert">
        <span class="small"><i class="fas fa-exclamation-triangle"></i> {{ $error }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
@endforeach
@endif

<div class="card shadow mb-4">
      <div class="card-header py-3">
          <a data-toggle="modal" data-target="#AddFacultyModal" href="" class="btn btn-primary btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Faculty</a>
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
                    <th class="text-nowrap">Faculty ID</th>
                    <th class="text-nowrap">FullName</th>
                    <th class="text-nowrap">Department</th>
                    <th class="text-nowrap">Position</th>
                    <th class="text-nowrap">DOB</th>
                    <th class="text-nowrap">Gender</th>
                    <th class="text-nowrap">Email</th>
                    <th class="text-nowrap">Contact #</th>
                    <th class="text-nowrap">Username</th>
                    <th class="text-nowrap">Password</th>
                    <th class="text-nowrap">Created</th>
                    <th class="text-nowrap">Updated</th>
                    <th class="text-nowrap">Actions</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($faculty as $faculty)
                <tr>
                    <td class="text-nowrap">{{$faculty->faculty_id}}</td>
                    <td class="text-nowrap">{{$faculty->firstname}} {{$faculty->middlename}} {{$faculty->lastname}}</td>
                    <td class="text-nowrap">{{$faculty->department}}</td>
                    <td class="text-nowrap">{{$faculty->position}}</td>
                    <td class="text-nowrap">{{$faculty->date_of_birth}}</td>
                    <td class="text-nowrap">{{$faculty->gender}}</td>
                    <td class="text-nowrap">{{$faculty->email_add}}</td>
                    <td class="text-nowrap">{{$faculty->contact_num}}</td>
                    <td class="text-nowrap">{{$faculty->username}}</td>
                    <td class="text-nowrap">{{$faculty->password}}</td>
                    <td class="text-nowrap">{{$faculty->created_at}}</td>
                    <td class="text-nowrap">{{$faculty->updated_at}}</td>
                    <td class="text-nowrap"><a data-toggle="modal" data-target="#EditFacultyModal_{{ $faculty->faculty_id }}" class="btn btn-circle btn-warning btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                    <a data-toggle="modal" data-target="#DeleteFacultyModal_{{ $faculty->faculty_id }}" class="btn btn-circle btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    @include('layouts.faculty-layout.modal.deletefacultymodal')
                    @include('layouts.faculty-layout.modal.editfacultymodal')
                  </td>
               
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
@include('layouts.admin-layout.auto_close_alert')
@include('layouts.faculty-layout.modal.addfacultymodal')
@endsection