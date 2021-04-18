<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseVideoController extends Controller
{
    public function index(){
        return view ("course.video");
    }
}
