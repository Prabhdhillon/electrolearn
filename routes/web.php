<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Course;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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

Route::get("/", function () {
  return view("welcome");
});

Route::get('/login', [AuthController::class, 'login'])->middleware("guest")->name("login");
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::get('/register', [AuthController::class, 'register'])->middleware("guest")->name("register");
Route::post('/register', [AuthController::class, 'handleRegister']);
Route::get('/course-overview', [Course\ViewController::class, 'index'])->middleware("auth")->name("home");
Route::get('/course', [Course\VideoController::class, 'index'])->middleware("auth");
Route::get('/instructor', [InstructorController::class, 'instructor'])->middleware("auth")->name("instructor");
Route::get('/catalogue', [CatalogueController::class, 'catalogue'])->middleware("auth")->name("catalogue");

Route::get("/admin/newuser", [AdminAuthController::class, 'register']);
Route::post("/admin/newuser", [AdminAuthController::class, 'handleRegister']);

Route::get("/admin/login", [AdminAuthController::class, 'login']);
Route::post("/admin/login", [AdminAuthController::class, 'handleLogin']);

Route::get("/admin/signout", function () {
  Auth::logout();
  return redirect("admin/login");
});
Route::get("/signout", function () {
  Auth::logout();
  return redirect("/login");
});

Route::middleware("auth")->group(function () {
  Route::get("/admin/home", HomeController::class);
  Route::get("/admin/profile", [HomeController::class, 'profile']);
  Route::get("/admin/edit-profile", [HomeController::class, 'edit_profile']);
  Route::get("/admin/courses", [HomeController::class, 'all_courses']);
  Route::get("/admin/courses/new", [HomeController::class, 'upload_course']);
  Route::post("/admin/courses/new", [HomeController::class, 'store'])->name("course_create_submit");
  Route::get("/admin/courses/{course}/videos", [HomeController::class, '']);
  Route::get("/admin/courses/{course}/videos/new", [HomeController::class, 'upload_videos']);
  Route::post("/admin/courses/{course}/videos/new", [HomeController::class, 'store_videos']);
  Route::get("/admin/courses/{course}", HomeController::class);
  Route::get("/admin/courses/{course}/upload", HomeController::class);
  Route::get("/admin/change-password", [AdminAuthController::class, 'change_password']);
  Route::post("/admin/change-password", [AdminAuthController::class, 'handlePassword']);
});
