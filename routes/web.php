<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\accoutApprovalcontroller;
use App\Http\Controllers\Admin\addcoursecontroller;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/support', [PagesController::class, 'support']);
Route::get('/courses', [PagesController::class, 'courses']);


// Student
Route::get('/student/register', [StudentController::class, 'register'])->name('student.register');
Route::get('/student/mycourse', [StudentController::class, 'Mycourse'])->middleware('student.auth');
Route::post('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::get('/student/login', [StudentController::class, 'login'])->name('student.login');
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard')->middleware('student.auth');
Route::post('/student/check', [StudentController::class, 'check'])->name('student.check');
Route::get('/student/logout', [StudentController::class, 'logout'])->name('student.logout');

// Volunteer
Route::post('/volunteer/create', [VolunteerController::class, 'create'])->name('volunteer.create');
Route::post('/volunteer/check', [VolunteerController::class, 'check'])->name('volunteer.login');
Route::get('/volunteer/dashboard', [VolunteerController::class, 'dashboard'])->name('volunteer.dashboard')->middleware('admin.auth','approved');
Route::get('/volunteer/register', [VolunteerController::class, 'register'])->name('volunteer.register');
Route::get('/volunteer/login', [VolunteerController::class, 'login'])->name('admin.login');
Route::get('/volunteer/post', [VolunteerController::class, 'post']);
Route::post('/volunteer/create/post', [VolunteerController::class, 'create_post'])->name('volunteer.post');
Route::get('/volunteer/message', [VolunteerController::class, 'message'])->name('volunteer.message');
// Admin
Route::get('/admin/dashboard', [accoutApprovalcontroller::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/volunteer/pending', [accoutApprovalcontroller::class, 'volunteer']);
Route::get('/admin/volunteer/show/{id}', [accoutApprovalcontroller::class, 'show'])->name('admin.show');
Route::get('/admin/volunteer/delete/{id}' ,[accoutApprovalcontroller::class, 'delete'])->name('admin.delete');
Route::get('/admin/volunteer/approve/{id}', [accoutApprovalcontroller::class, 'approve'])->name('admin.approve');
Route::get('/volunteer/courses', [addcoursecontroller::class, 'addCourse']);
Route::post('/volunteer/addcourse', [addcoursecontroller::class, 'add_course'])->name('add.course');
// // POST 
// Route::get('/volunteer/web', [WebController::class, 'webDev'])->middleware('admin.auth');
// Route::post('/volunteer/webpost', [WebController::class, 'post_web'])->name('web.post');
// Route::get('/volunteer/web/edit/{id}',[WebController::class, 'web_edit'])->middleware('admin.auth');
// Route::post('/volunteer/web/update/{id}', [WebController::class, 'update'])->name('volunteer.web.edit');
// Route::get('/volunteer/web/delete/{id}', [WebController::class, 'destroy'])->middleware('admin.auth');


// Route::get('/volunteer/baking', [BakingController::class, 'baking'])->middleware('admin.auth');
// Route::post('/volunteer/bakingpost', [BakingController::class, 'post_baking'])->name('baking.post');
// Route::get('/volunteer/baking/edit/{id}',[BakingController::class, 'baking_edit'])->middleware('admin.auth');
// Route::post('/volunteer/baking/update/{id}', [BakingController::class, 'update'])->name('volunteer.baking.edit');
// Route::get('/volunteer/baking/delete/{id}', [BakingController::class ,'destroy'])->middleware('admin.auth');

// Route::get('/volunteer/tailoring', [TailoringController::class, 'tailor'])->middleware('admin.auth');
// Route::post('/volunteer/tailoringpost', [TailoringController::class, 'tailoring_post'])->name('tailoring.post');
// Route::get('/volunteer/tailoring/edit/{id}',[TailoringController::class, 'tailoring_edit'])->middleware('admin.auth');
// Route::post('/volunteer/tailoring/update/{id}', [TailoringController::class, 'update'])->name('volunteer.tailoring.edit');
// Route::get('/volunteer/tailoring/delete/{id}', [TailoringController::class ,'destroy'])->middleware('admin.auth');


Route::get('/web',[StudentController::class,'studentData'])->name('student_profile');