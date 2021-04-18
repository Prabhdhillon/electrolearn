<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseViewController extends Controller
{
    public function index()
    {
        return view("course.view");
    }
}
