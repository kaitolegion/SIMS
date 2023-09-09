@extends('layouts.student-layout.app')
@section('title', 'Profile')
@section('contents')

<div class="card shadow mt-4 mb-4 col-md-9 mx-auto justify-content-center">

<div class="card-body">
        <div class="ml-4">
        <div class="row">
            <div class="col-md-4 text-center">
            <img src="{{ asset('resource/img/dssc_logo.png') }}" style="width: 150px; height: 150px" class="img-circle" >
            <div class="mt-2">
            <a class="text-decoration-none mt-2 small" data-toggle="modal" data-target="#ChangeProfilePic" href="">Change profile</a>
            </div>
            <div class="mt-2">
            <p class="small mt-2"><b>ID:</b> {{Auth::guard('student')->user()->student_id}}</p>
            </div>
            </div>
                <div class="mt-2 col-md-5">
                    <h5 class="font-weight-bold">{{Auth::guard('student')->user()->firstname}} {{Auth::guard('student')->user()->lastname}}</h5>
                    <p class="small"><b>Course:</b> {{Auth::guard('student')->user()->course}}</p>
                    <p class="small"><b>Year Level:</b> {{Auth::guard('student')->user()->yearlevel_id}}</p>
                    <h6 class="font-weight-bold">Date of Birth:</h6>
                    <p class="small">{{Auth::guard('student')->user()->date_of_birth}}</p>
                    <p class="small">Age: 21</p>
                    <h6 class="font-weight-bold">Gender:</h6>
                    <p class="small">{{Auth::guard('student')->user()->gender}}</p>
                    <h6 class="font-weight-bold">Contact Details:</h6>
                    <p class="small">{{Auth::guard('student')->user()->email_add}}</p>
                    <p class="small">+63{{Auth::guard('student')->user()->contact_num}}</p>
                    <h6 class="font-weight-bold">Address:</h6>
                    <p class="small">{{Auth::guard('student')->user()->address}}</p>
                    <h6 class="font-weight-bold">Campus</h6>
                    <p class="small">@if (Auth::guard('student')->user()->campus_id == 1) Main 
                        @elseif (Auth::guard('student')->user()->campus_id == 2) Sulop
                        @elseif (Auth::guard('student')->user()->campus_id == 3) Matanao
                        @else
                        
                    @endif</p>
                </div>
                <div class="mt-2 text-right col-md-3">
                <a class="text-decoration-none mt-2 small" data-toggle="modal" data-target="#EditPersonalInfo" href="">Edit</a>
                
                </div>
                
            </div>
            
        </div>
       
    </div>

  <!-- modal for upload profile pic -->
  @include('layouts.student-layout.modal.profilepic')
<!-- end modal for edit student -->
@include('layouts.student-layout.modal.studentedit')
</div>
@endsection