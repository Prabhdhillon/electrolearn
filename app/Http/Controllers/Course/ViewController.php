<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Video;

class ViewController extends Controller
{
    public function showCourse(Course $course, Video $video)
    {
        $course->load("videos");
        return view("course.view", compact("course", "video"));
    }
}
