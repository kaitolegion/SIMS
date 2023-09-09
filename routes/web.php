<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentRegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    
});

Route::controller(AdminController::class)->group(function () {
   
     Route::middleware('admin')->group(function () {
        // Auth::routes();
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('dashboard/studentrecord', 'studentrecord')->name('studentrecord');

        // students
        Route::post('dashboard.addstudent', 'addstudent')->name('student.add');
        Route::post('dashboard/studentrecord/edit/{id}', 'editstudent');
        Route::post('dashboard/studentrecord/delete/{id}', 'deletestudent');

        // faculty
        Route::post('dashboard.addfaculty', 'addfaculty')->name('faculty.add');
        Route::post('dashboard/facultyrecord/edit/{id}', 'editfaculty');
        Route::post('dashboard/facultyrecord/delete/{id}', 'deletefaculty');



        Route::get('dashboard/facultyrecord', 'facultyrecord')->name('facultyrecord');
        Route::get('dashboard/staffrecord', 'staffrecord')->name('staffrecord');
        Route::get('dashboard/developer', 'developer')->name('developer');
        Route::get('dashboard/profile', 'profile')->name('profile');
        Route::get('dashboard/activitylog', 'activitylog')->name('activitylog');
    
        Route::post('totalstudents', 'totalStudents')->name('totalStudents');
       

        Route::get('logouts', 'logouts')->middleware('admin')->name('logouts');


     });
});

Route::controller(StudentRegisterController::class)->group(function () {
        Route::get('register', 'register')->name('register');
        Route::get('register/course', 'course')->name('course');
        Route::post('register', 'registerSave')->name('register.save');
        Route::post('registerdb', 'registerDB')->name('register.database');
    
});

Route::controller(StudentController::class)->group(function () {
    Route::middleware('auth:student')->group(function () {
    // Route::middleware('admin')->group(function () {
        Route::get('student', 'student')->name('student');
        Route::get('student/profile', 'profile')->name('profile');
        Route::get('logout', 'logout')->middleware('student')->name('logout');

        // upload profile picture

        Route::post('/student/profile/upload', 'storeprofilepic');
    // });
    });

});


Route::controller(FacultyController::class)->group(function () {
   
    Route::middleware('faculty')->group(function () {
        Route::get('faculty', 'faculty')->name('faculty');
       // Route::get('faculty/studentrecord', '_facultyrecord')->name('facultyrecord');
        // Route::get('student/profile', 'profile')->name('profile');
        // Route::get('logout', 'logout')->middleware('student')->name('logout');

        // // upload profile picture

        // Route::post('/student/profile/upload', 'storeprofilepic');
    });

});



// Route::group(['middleware' => ['auth']], function() {
//     /**
//     * Logout Route
//     */
//     Route::get('logout', 'AdminController@logout')->name('logout.logout');
//  });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });



  // dashboard

