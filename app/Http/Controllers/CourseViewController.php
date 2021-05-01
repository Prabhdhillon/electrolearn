<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class CourseViewController extends Controller
{
    public function index(Course $course)
    {
        $videos = Video::where("course_id", $course->id)->get();

        return view("admin.video.index", compact('course', 'videos'));
        
    }
}
