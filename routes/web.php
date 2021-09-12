<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\Admin\ShortlinkController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', [ApplicantController::class, 'create']);
Route::post('/applicantsubmit', [ApplicantController::class, 'store']);

Route::get('/login', [AdminController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout']);

Route::prefix('admin')->middleware(['auth', 'checkRole:Dev,Admin'])->group(function () {
  Route::resource('applicant', ApplicantController::class);
  Route::get('/', [AdminController::class, 'dashboard']);
  Route::resource('user', UserController::class);
  Route::put('/changepass', [UserController::class, 'changepass']);
  Route::get('/priority', [ApplicantController::class, 'priority']);

  Route::resource('shortlink', ShortlinkController::class);
});

Route::get('/{shortlink:short}', [ShortlinkController::class, 'show']);
