<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CatalogueController extends Controller
{
    public function catalogue()
    {
        $courses = Course::get();
        return view("catalogue")->with("courses", $courses);
    }
    public function showCourse(Course $course)
    {
        return view("course.view", compact("course"));
    }
}
