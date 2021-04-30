<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Course;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseVideoController;
use App\Http\Controllers\Admin\ProfileController;
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
Route::get('/catalogue/{course}', [CatalogueController::class, 'showCourse'])->middleware("auth");

Route::get("/home", fn () => redirect("/"));

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

Route::middleware("auth")->prefix("/admin")->group(function () {
  Route::get("/home", HomeController::class);
  Route::get("/profile", [ProfileController::class, 'profile']);
  Route::get("/edit-profile", [ProfileController::class, 'edit_profile']);
  Route::post("/edit-profile", [ProfileController::class, 'update_profile']);

  Route::get("/courses", [CourseController::class, 'index']);
  Route::get("/courses/new", [CourseController::class, 'create']);
  Route::post("/courses/new", [CourseController::class, 'store'])->name("course_create_submit");
  Route::get("/courses/{course}/edit", [CourseController::class, 'edit']);
  Route::get("/courses/{course}/videos/{video}/edit", [CourseVideoController::class, 'edit']);
  Route::post("/courses/{course}/edit", [CourseController::class, 'update']);
  Route::get("/courses/{course}/delete", [CourseController::class, 'delete']);

  Route::get("/courses/{course}/videos", [CourseVideoController::class, 'index']);
  Route::get("/courses/{course}/videos/new", [CourseVideoController::class, 'create']);
  Route::post("/courses/{course}/videos/new", [CourseVideoController::class, 'store']);
  Route::get("/resetpassword", [AdminAuthController::class, 'change_password']);
  Route::post("/resetpassword", [AdminAuthController::class, 'handlePassword']);
});
