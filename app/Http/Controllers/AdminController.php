<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Campus;
use App\Models\student;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;

class AdminController extends Controller
{


    public function __contruct() {
        $this->middleware('admin');
    }

    public function totalStudents() {
        $students = DB::table('students')->get(); 
        return $students->count(); 
    }


    // edit student data
    public function editstudent(Request $request, $id){
        $students = student::find($id);
        $students->firstname = $request->input('firstname');
        $students->middlename = $request->input('middlename');
        $students->lastname = $request->input('lastname');
        $students->date_of_birth = $request->input('dateofbirth');
        $students->gender = $request->input('gender');
        $students->contact_num = $request->input('contact_num');
        $students->address = $request->input('address');
        $students->email_add = $request->input('email_add');
        $students->campus_id = $request->input('campus');
        $students->username = $request->input('username');
        if ($students->password == $request->input('password')) {
            $students->password = $request->input('password');
            // $students->password = "fuck";
        } else {
           
            $students->password = Hash::make($request->input('password'));
            // $students->password = 'bweset';
            
        }
        
        $students->course = $request->input('course');
        $students->yearlevel_id = $request->input('yearlevel');
        $students->status = $request->input('status');
        $students->evaluation = $request->input('evaluation');
        $students->update();
        return redirect()->back()->with('success','Student Updated Successfully');
    }
 // delete student 
    public function deletestudent($id) {
        $students = student::find($id);
        $students->delete();
        return redirect('/dashboard/studentrecord')->with('success', 'Student Delete successfully!');
    }


    public function dashboard() {
        $totalstudent = DB::table('students')->get()->count();
        $totalfaculty = DB::table('faculty')->get()->count();
        $totalstaff = DB::table('staff')->get()->count();
        $totalmain = DB::table('students')->where('campus_id', 1)->get()->count();
        $totalsulop = DB::table('students')->where('campus_id', 2)->get()->count();
        $totalmatanao = DB::table('students')->where('campus_id', 3)->get()->count();
        $totalpassed = DB::table('students')->where('evaluation', 'passed')->get()->count();
        $totalfail = DB::table('students')->where('evaluation', 'failed')->get()->count();
        $totalpending = DB::table('students')->where('status', 'pending')->get()->count();
        // select * from students where campus_id = 1;
        return view('administrator.dashboard', ['totalpending' => $totalpending, 'totalpassed' => $totalpassed, 'totalfail' => $totalfail, 'totalmain' => $totalmain, 'totalsulop' => $totalsulop, 'totalmatanao' => $totalmatanao, 'totalstudents' => $totalstudent, 'totalstaff' => $totalstaff, 'totalfaculty' => $totalfaculty]);
    }

    public function studentrecord() {
        $students = DB::table('students')->get();
        return view('administrator.studentrecord', ['students' => $students]);

    }
 // add student 
    public function addstudent(Request $request) {
        Validator::make ($request->all(), [
            'firstname' => 'required',
            'middlename' => '',
            'lastname' => 'required',
            'course' => 'required',
            'dateofbirth' => 'required',
            'gender' => 'required',
            'contact_num' => 'required',
            'address' => 'required',
            'email_add' => ['required', 'email', 'regex:/(.*)@(gmail.com|dssc.edu.ph)/i'],
            'password' => 'required',
            'campus' => 'required',
            'status' => 'required',
            'evaluation' => 'required',
            'yearlevel' => 'required',
            
        ])->validate();

        $nextid = DB::getPdo()->lastInsertId();
        $birthdate = Carbon::createFromFormat('Y-m-d', $request->dateofbirth)->format('m/d/Y');
        student::create([
            'student_id' => $nextid,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'course' =>  $request->course,
            'yearlevel_id' => $request->yearlevel,
            'date_of_birth' => $birthdate,
            'gender' => $request->gender,
            'email_add' =>  $request->email_add,
            'contact_num' =>  $request->contact_num,
            'campus_id' => $request->campus,
            'address' => $request->address,
            'status' => $request->status,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'evaluation' => $request->evaluation,
        ]);

        return redirect()->back()->with('success','Student Added Successfully!');
        return redirect()->back()->with('error','Error');

        // save session
        session(['firstname' => $request->input('firstname')]);
        session(['middlename' => $request->input('middlename')]);
        session(['lastname' => $request->input('lastname')]);
        session(['dateofbirth' => $request->input('dateofbirth')]);
        session(['course' => $request->input('course')]);
        session(['gender' => $request->input('gender')]);
        session(['contact_num' => $request->input('contact_num')]);
        session(['email_add' => $request->input('email_add')]);
        session(['campus' => $request->input('campus')]);
        session(['username' => $request->input('username')]);
        session(['status' => $request->input('status')]);
        session(['evaluation' => $request->input('evaluation')]);
        session(['yearlevel' => $request->input('yearlevel')]);
    }


     // delete faculty 
     public function deletefaculty($id) {
        $faculty = Faculty::find($id);
        $faculty->delete();
        return redirect('/dashboard/facultyrecord')->with('success', 'Faculty Delete successfully!');
    }



    public function facultyrecord() {
        $faculty = DB::table('faculty')->get();
        return view('administrator.facultyrecord', ['faculty' => $faculty]);
    }



    // edit faculty
    public function editfaculty(Request $request, $id){
        //$dob = Carbon::createFromFormat('Y-m-d', $request->input('dateofbirth'))->format('m/d/Y');
        $faculty = Faculty::find($id);
        $faculty->firstname = $request->input('firstname');
        $faculty->middlename = $request->input('middlename');
        $faculty->lastname = $request->input('lastname');
        $faculty->date_of_birth = $request->input('dateofbirth');
        $faculty->gender = $request->input('gender');
        $faculty->contact_num = $request->input('contact_num');
        $faculty->department = $request->input('department');
        $faculty->position = $request->input('position');
        $faculty->email_add = $request->input('email_add');
        $faculty->username = $request->input('username');
        $faculty->password = Hash::make($request->input('password'));
        $faculty->update();
        return redirect()->back()->with('success','Edit Faculty Successfully');
    }

     // add faculty 
     public function addfaculty(Request $request) {
        Validator::make ($request->all(), [
            'firstname' => 'required',
            'middlename' => '',
            'lastname' => 'required',
            'dateofbirth' => 'required',
            'gender' => 'required',
            'contact_num' => 'required',
            'email_add' => ['required', 'email', 'regex:/(.*)@(gmail.com|dssc.edu.ph)/i'],
            'position' => 'required',
            'department' => 'required',
            'username' => 'required',
            'password' => 'required',
            
        ])->validate();

        $nextid = DB::getPdo()->lastInsertId();
        $birthdate = Carbon::createFromFormat('Y-m-d', $request->dateofbirth)->format('m/d/Y');
        Faculty::create([
            'faculty_id' => $nextid,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'date_of_birth' => $birthdate,
            'gender' => $request->gender,
            'email_add' =>  $request->email_add,
            'contact_num' =>  $request->contact_num,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'position' => $request->position,
            'department' => $request->department,
        ]);

        return redirect()->back()->with('success','Faculty Added Successfully!');
        return redirect()->back()->with('error','Error');

        // save session
        session(['firstname' => $request->input('firstname')]);
        session(['middlename' => $request->input('middlename')]);
        session(['lastname' => $request->input('lastname')]);
        session(['dateofbirth' => $request->input('dateofbirth')]);
        session(['course' => $request->input('course')]);
        session(['gender' => $request->input('gender')]);
        session(['contact_num' => $request->input('contact_num')]);
        session(['email_add' => $request->input('email_add')]);
        session(['campus' => $request->input('campus')]);
        session(['username' => $request->input('username')]);
        session(['department' => $request->input('department')]);
        session(['position' => $request->input('position')]);
    }

    public function staffrecord() {
        $staff = DB::table('staff')->get();
        return view('administrator.staffrecord', ['staffs' => $staff]);
    }

    public function developer() {
        return view('administrator.developer');
    }

    public function profile() {
        return view('administrator.profile');
    }

    public function activitylog() {
        return view('administrator.activitylog');
    }

       // logout admin
       public function logouts(Request $request)
       {
           $request->session()->invalidate();
           return redirect('login')->with(Auth::guard('admin')->logout());
        // dd("ds");
       }



     
}
