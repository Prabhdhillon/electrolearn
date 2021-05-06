<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class InstructorController extends Controller
{
    public function index()
    {
        $users = User::where('is_instructor', '!=', 0)->get();
        return view("showInstructors", compact("users"));
    }
    public function show(User $users)
    {
        return view("instructor", compact("users"));
    }
}
