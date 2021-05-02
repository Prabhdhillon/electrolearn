<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Video;

class VideoController extends Controller
{
    public function index(Course $course, Video $video)

    {
        $video = Video::where("id", $video->id)->first();
        return view("course.video", compact("video"));
    }
}
