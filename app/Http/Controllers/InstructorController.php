<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class InstructorController extends Controller
{
    public function instructor()
    {
        $courses = Course::get();
        return view("instructor")->with("courses", $courses);
    }
}