<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $courses = Course::with("user")->get();
        return view("welcome")->with("courses", $courses);
    }
    public function about()
    {
      
        return view("about");
    }
}
