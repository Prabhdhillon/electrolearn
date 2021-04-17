<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseVideoController;
use App\Http\Controllers\CourseViewController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', [AuthController::class, 'login'])->name("login");
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::get('/register', [AuthController::class, 'register'])->name("register");
Route::post('/register', [AuthController::class, 'handleRegister']);
Route::get('/course-overview', [CourseViewController::class, 'index'])->name("coursovereview");
Route::get('/course', [CourseVideoController::class, 'index']);

