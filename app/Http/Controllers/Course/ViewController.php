<?php

namespace App\Http\Controllers\Course;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function index()
    {
        return view("course.view");
    }
}
