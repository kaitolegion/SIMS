@extends('layouts.admin-layout.app')
@section('title', 'Student Records')
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

<div class="card shadow">
        <div class="card-header py-3">
          <a data-toggle="modal" data-target="#AddStudentModal" class="btn btn-primary btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Student</a>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right">
            <div class="input-group">
              <input id="searching" type="text" class="form-control small" placeholder="Search for..." aria-label="Search">
            </div>
          </form>
        </div>
<div class="card-body">
  <div class="table-responsive small">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-nowrap">Student ID</th>
                    <th class="text-nowrap">FullName</th>
                    <th class="text-nowrap">Course</th>
                    <th class="text-nowrap">Year Level</th>
                    <th class="text-nowrap">Email Address</th>
                    <th class="text-nowrap">Phone</th>
                    <th class="text-nowrap">DOB (mm/dd/yy)</th>
                    <th class="text-nowrap">Gender</th>
                    <th class="text-nowrap">Address</th>
                    <th class="text-nowrap">Campus</th>
                    <th class="text-nowrap">Status</th>
                    <th class="text-nowrap">Evaluation</th>
                    <th class="text-nowrap">username</th>
                    <th class="text-nowrap">password</th>
                    <th class="text-nowrap">Created</th>
                    <th class="text-nowrap">Updated</th>
                    <th class="text-nowrap">Actions</th>
                </tr>
            </thead>
            <tbody>
  
            @foreach($students as $student)
                <tr>
                    <td>{{$student->student_id}}</td>
                    <td class="text-nowrap">{{$student->firstname}} {{$student->middlename}} {{$student->lastname}}</td>
                    <td>{{$student->course}}</td>
                    <td>{{$student->yearlevel_id}}</td>
                    <td>{{$student->email_add}}</td>
                    <td>{{$student->contact_num}}</td>
                    <td class="text-nowrap">{{$student->date_of_birth}}</td>
                    <td>{{$student->gender}}</td>
                    <td class="text-nowrap">{{$student->address}}</td>
                  @if ($student->campus_id == 1)<td>Main</td>
                  @elseif ($student->campus_id == 2)<td>Sulop</td>
                  @elseif ($student->campus_id == 3)<td>Matanao</td>
                  @else <td></td>
                  @endif
                    <td class="text-nowrap">{{$student->status}}</td>
                    <td class="text-nowrap">{{$student->evaluation}}</td>
                    <td class="text-nowrap">{{$student->username}}</td>
                    <td class="text-nowrap">{{$student->password}}</td>
                    <td class="text-nowrap">{{ $student->created_at}}</td>
                    <td class="text-nowrap">{{$student->updated_at}}</td>
                    <td class="text-nowrap">
                    <a data-toggle="modal" data-target="#ViewDocumentStudentModal" class="btn btn-circle btn-primary btn-sm"><i class="fas fa-eye"></i></a>&nbsp;
                    <a data-toggle="modal" data-target="#EditStudentModal_{{ $student->student_id }}" class="btn btn-circle btn-warning btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                    <a data-toggle="modal" data-target="#DeleteStudentModal_{{ $student->student_id }}" class="delete-button btn btn-circle btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    @include('layouts.admin-layout.modal.deletestudentmodal')
                    @include('layouts.admin-layout.modal.editstudentmodal')
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
@include('layouts.admin-layout.modal.addstudentmodal')
@include('layouts.admin-layout.modal.viewdocumentmodal')
@endsection