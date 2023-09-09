<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    //

    public function faculty() {
        return view('faculty.faculty');
    }
    public function facultyrecord() {
        return view('faculty.studentrecord');
    }


}
