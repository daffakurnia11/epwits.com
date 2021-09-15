<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ApplicantController;
use App\Http\Controllers\Admin\ShortlinkController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Models\Applicant;

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

// FOR MAIN WEBSITE
Route::get('/', [ApplicantController::class, 'create']);
Route::post('/applicantsubmit', [ApplicantController::class, 'store']);
Route::get('/InterviewAnnouncement', [ApplicantController::class, 'interviewAnnouncement']);
Route::post('/InterviewAnnouncement', [ApplicantController::class, 'interviewSchedule']);
Route::get('/StaffAnnouncement', [ApplicantController::class, 'staffAnnouncement']);
Route::post('/StaffAnnouncement', [ApplicantController::class, 'welcomeparty']);

// FOR AUTHENTICATION
Route::get('/login', [AdminController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout']);

// FOR ADMIN ACCESS
Route::prefix('admin')->middleware(['auth', 'checkRole:Dev,Admin'])->group(function () {
  Route::resource('applicant', ApplicantController::class);
  Route::get('/', [AdminController::class, 'dashboard']);
  Route::resource('user', UserController::class);
  Route::put('/changepass', [UserController::class, 'changepass']);
  Route::get('/priority', [ApplicantController::class, 'priority']);
  // Interview Schedule
  Route::get('/interview', [AdminController::class, 'interview']);
  Route::patch('/acceptance/{applicant:nrp}', [AdminController::class, 'acceptance']);

  Route::resource('shortlink', ShortlinkController::class);
});

// FOR SHORT LINKS
Route::get('/{shortlink:short}', [ShortlinkController::class, 'show']);
