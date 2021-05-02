<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        return view("course.video");
    }
}
