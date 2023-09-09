<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    public function __construct() {
        $this->middleware('guest:student')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

        
        // login route
        public function login() {
            //  if(Auth::guard('admin')->check()) {
            //     return redirect()->route('dashboard');
                
            // }
            // if (Auth::guard('student')->check()) {
            //     return redirect('student');
            // }

            return view('/auth/login');
        }

        // public function checkLogin(Request $request) {
        //     $input = $request->all();
        //     dd($input);
        // }
        // public function logintest(Request $request) {
            
            
   
        // }


    
       // login action 
       public function loginAction(Request $request) {

        $input = $request->all();
        Validator::make ($request->all(), [
            'email' => 'required',
            'password' => 'required|min:3',
            'role_id' => 'required'
        ], [
            'password.required' => 'The password is required',
            'password.min' => 'Password must be at least 3 characters',
            'email.required' => 'The username is required.',
            'role_id.required' => 'Select access roles is required'
        ])->validate();

        $credentials = [
            'email' => $input['email'],
            'password' => $input['password'],
        ];

        // STUDENT login using (email, password)
        // if ($input['role_id'] == 0) {
        //     $input = $request->all();
        //     $student = student::query()
        //     ->where('email_add', '=', $request->input('email'))
        //     ->where('date_of_birth', '=', $request->input('password'))
        //     ->first();

        //     if($student === null) {
        //         return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
        //             'approve' => 'student Invalid username and password. Please try again.',
        //         ]);
        //     } else {
        //         return redirect()->route('student');
        //     }
        // } 

        if ($input['role_id'] == 0) {
            $studentfield = filter_var($credentials['email'], FILTER_VALIDATE_EMAIL) ? 'email_add' : 'student_id';
            if(Auth::guard('student')->attempt([$studentfield => $credentials['email'], 'password' => $credentials['password']])) {
                return redirect()->route('student');
            } else {
                return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                    'approve' => 'student Invalid username and password. Please try again.',
                ]);
            }
        } 

            if ($input['role_id'] == 1) {
                if(Auth::guard('faculty')->attempt(['username' => $credentials['username'] , 'password' => $credentials['password']])){
                    return redirect('faculty');
                } else {
                    return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                        'approve' => 'faculty Invalid username and password. Please try again.',
                    ]);
                }
            }


            if ($input['role_id'] == 2) {
                if(auth()->attempt($credentials)){
                    return redirect('staff');
                } else {
                    return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                        'approve' => 'Staff Invalid username and password. Please try again.',
                    ]);
                }
            } 
            if ($input['role_id'] == 3) {
                $adminfield = filter_var($credentials['email'], FILTER_VALIDATE_EMAIL) ? 'email_add' : 'username';
                if(Auth::guard('admin')->attempt([$adminfield => $credentials['email'], 'password' => $credentials['password']])){
                    return redirect()->route('dashboard');

                  // return dd(Auth::guard('admin')->check());
                }
                else {
                   
                    return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                        'approve' => 'Admin Invalid username and password. Please try again.',
                    ]);
                   // dd(Auth::guard('admin')->attempt([$adminfield => $credentials['email'], 'password' => $credentials['password']]));
                   $user = Auth::guard('admin');
                   dd($user->user());
                }
            }


        // save session input
        session(['email' => $request->input('email')]);
    
       }


}
