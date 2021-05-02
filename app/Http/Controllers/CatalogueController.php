<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{
    public function catalogue()
    {
        $courses = Course::with("user")->get();
        return view("catalogue")->with("courses", $courses);
    }
}
