@extends('layouts.student-layout.app')
  
@section('title', 'DSSC | Student portal')

@section('contents')
<div class="card shadow mt-4">
    
    <div class="card-body">
    <p class="text-center">First Semester</p>
       <table class="table small col-md-6 border mx-auto"> 
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Subject Name</th>
                <th>Course</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($firstsem as $subjectlist) 
            <tr>
                <td>{{ $subjectlist->subject_id }}</td>
                <td>ITP 122</td>
                <td>{{ $subjectlist->subject_name }}</td>
                <td>@if ($subjectlist->course_id == '1') BSIT @else @endif-{{Auth::guard('student')->user()->yearlevel_id}}</td>
                <td>@if ($subjectlist->semester_id == '1') 1st @else @endif</td>
            </tr>
            @endforeach
        </tbody>
        </table>     
    </div>


    <div class="card-body">
    <p class="text-center">Second Semester</p>
       <table class="table small col-md-6 border mx-auto"> 
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Subject Name</th>
                <th>Course</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($secondsem as $subjectlist) 
            <tr>
                <td>{{ $subjectlist->subject_id }}</td>
                <td>ITP 122</td>
                <td>{{ $subjectlist->subject_name }}</td>
                <td>@if ($subjectlist->course_id == '1') BSIT @else @endif-{{Auth::guard('student')->user()->yearlevel_id}}</td>
                <td>@if ($subjectlist->semester_id == '2') 2nd @else @endif</td>
            </tr>
        @endforeach
           
        </tbody>
        </table>     
    </div>
</div>


@endsection