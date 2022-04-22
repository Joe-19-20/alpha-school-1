<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//for home
Route::get('/', [HomeController::class, 'index'])->name('home');

// for voyager admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});

//for common blades
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', function () { return view('contact');})->name('contact');
Route::get('/events', [UserController::class,'events'])->name('events');
Route::get('/courses', [UserController::class,'courses'])->name('courses');
Route::get('/teachers', [UserController::class,'teachers'])->name('teachers');

// for details 
Route::get('/course-single/{id}', [UserController::class,'CourseView'])->name('course-single');
Route::get('/teacher-single/{id}', [UserController::class,'TeacherView'])->name('teacher-single');
Route::get('/event-single/{id}', [UserController::class,'EventView'])->name('event-single');


//for application
Auth::routes();
Route::get('apply/{id}', [UserController::class,'applyCourse'])->name('apply')->middleware('auth');
Route::post('booking', [UserController::class,'bookCourse'])->name('booking');





