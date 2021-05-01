<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Video;

class CatalogueController extends Controller
{
    public function catalogue()
    {
        $courses = Course::get();
        return view("catalogue")->with("courses", $courses);
    }
    public function showCourse(Course $course, User $user)
    {

        $course = Course::where("author_id", $user->name)->get();
        return view("course.view", compact("course"));
    }
}
