<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   

    public function __contruct() {
        $this->middleware('auth:student');
    }
    public function student() {
        $firstsem_subject = DB::table('subject')->where('semester_id','1')->where('yearlevel_id', '1')->get();
        $secondsem_subject = DB::table('subject')->where('semester_id','2')->where('yearlevel_id', '1')->get();
        return view('student.student', ['firstsem' => $firstsem_subject, 'secondsem' => $secondsem_subject]);
    }

    public function profile() {
        // $student = DB::table('students')->get();
        return view('student.profile');
    }

    public function storeprofilepic(Request $request) {
        dd($request);
    }


    public function loginStudentAction(Request $request) {

        $input = $request->all();

        $credentials = [
            'email' => $input['email'],
            'password' => $input['password'],
        ];
    }




     // logout student
     public function logout(Request $request)
     {
         Auth::guard('student')->logout();
         $request->session()->invalidate();
         return redirect('/login');
     }
}
