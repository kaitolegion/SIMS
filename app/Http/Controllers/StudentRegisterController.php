<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class StudentRegisterController extends Controller
{
    
    // register route
    public function register() {
        
        if(Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('/auth/studentregister');
        }
    }
    // register validator and save input data
    public function registerSave(Request $request) {
        Validator::make($request->all(), [
            'firstname' => 'required|regex:/^[a-zA-Z ]+$/',
            'lastname' => 'required|regex:/^[a-zA-Z ]+$/',
            'middlename' => 'required|regex:/^[a-zA-Z ]+$/',
            'dateofbirth' => 'required',
            'gender' => 'required',
            'email_reg' => ['required', 'email', 'regex:/(.*)@(gmail.com|dssc.edu.ph)/i'],
            'contactnum' => 'required|numeric|digits:11',
            'campus' => 'required',
            'street' => 'regex:/^[a-zA-Z ]+$/',
            'city' => 'required|regex:/^[a-zA-Z ]+$/',
            'state' => 'required|regex:/^[a-zA-Z ]+$/',
            // 'privacypolicy' => 'required'
        ], [
            'contactnum.digits' => 'The number field must 11 digits.',
            'contactnum.numeric' => 'The number field must be numeric.',
            'email_reg.required' => 'The email address is required',
            'email_reg.email' => 'The email address field is invalid',
            'email_reg.regex' => 'The email address field is invalid',
            'dateofbirth.required' => 'The date of birth field is required.'
        ])->validate();

        session(['firstname' => $request->input('firstname')]);
        session(['middlename' => $request->input('middlename')]);
        session(['lastname' => $request->input('lastname')]);
        session(['dateofbirth' => $request->input('dateofbirth')]);
        session(['gender' => $request->input('gender')]);
        session(['email_reg' => $request->input('email_reg')]);
        session(['street' => $request->input('street')]);
        session(['city' => $request->input('city')]);
        session(['state' => $request->input('state')]);
        session(['zipcode' => $request->input('zipcode')]);
        session(['contactnum' => $request->input('contactnum')]);
        session(['campus' => $request->input('campus')]);
        session(['gender' => $request->input('gender')]);
        return redirect('register/course');
    }




    public function registerDB(Request $request) {
        Validator::make($request->all(), [
            'course' => 'required',
        ], [
            'course.required' => 'The course field is required.'
        ])->validate();
        $nextid = DB::getPdo()->lastInsertId();
       
        student::create([
            'student_id' => $nextid,
            'firstname' => session('firstname'),
            'middlename' => session('middlename'),
            'lastname' => session('lastname'),
            'course' =>  $request->course,
            'year_level' =>  '1',
            'status' =>  'pending',
            'date_of_birth' => session('dateofbirth'),
            'username' => $request->username,
            'gender' => session('gender'),
            'email_add' =>  session('email_reg'),
            'contact_num' =>  session('contactnum'),
            'campus_id' => session('campus'),
            'address' => session('street').' '.session('city').' '.session('state').' '.session('zipcode'),
        ]);

        return redirect('register/success');
    }

    public function show(Request $request)
    {
    $data = $request -> input();
    } 



    // course route

    public function course() {
      //  $users = DB::table('users')->select('firstname')->get();
      $firstname = session('firstname');
      $middlename = session('middlename');
      $lastname = session('lastname');
      $dateofbirth = session('dateofbirth');
      $gender = session('gender');
      $email_add = session('email_reg');
      $contact_num = session('contactnum');
      $campus = session('campus');
      $street = session('street');
      $city = session('city');
      $state = session('state');
      if (
        isset($firstname) &&
        isset($middlename) &&
        isset($lastname) &&
        isset($dateofbirth) &&
        isset($gender) &&
        isset($contact_num) &&
        isset($email_add) &&
        isset($campus) &&
        isset($street) &&
        isset($city) &&
        isset($state) 
      )
      {
        return view('auth.register.course')-> with('show');
      } else {
        return redirect('register');
      }
      
       
    }
}
