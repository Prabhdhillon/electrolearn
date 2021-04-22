<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
      return view("admin.home");
    }
    public function upload_course(){
      return view("admin.courses");
    }
    public function upload_videos(){
      return view("admin.videos");
    }
}
