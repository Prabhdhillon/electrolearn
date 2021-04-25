<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function __invoke()
  {
    return view("admin.home");
  }

  public function profile()
  {
    return view("admin.profile");
  }
  public function edit_profile()
  {

    return view("admin.editprofile");
  }
  public function all_courses()
  {
    $courses = Course::get();
    return view("admin.allcourses")->with("courses", $courses);
  }

  public function upload_course()
  {
    return view("admin.courses");
  }
  public function store()
  {

    $validatedRequest = request()->validate([
      'title' => 'required|min:3|max:120',
      'description' => 'required',
      'tools' => 'required|min:3|max:100',
      'thumbnail' => 'required|file|max:2000'
    ]);

    $course = new Course($validatedRequest);
    $course->thumbnail = request()->file("thumbnail")->store("uploads");
    $course->slug = Str::kebab($course->title);
    $course->author_id = Auth::user()->id;
    $course->save();

    // return redirect()->back();

  }
  public function upload_videos()
  {
    return view("admin.videos");
  }
  public function store_videos()
  {
    $validatedRequest = request()->validate([
      'title' => 'required|min:3|max:120',
      'description' => 'required',
      'file' => 'required|file|',
      'thumbnail' => 'required|file|max:2000',
    ]);

    $video = new Video($validatedRequest);

    $video->file = request()->file("file")->store("uploads");
    $video->thumbnail = request()->file("thumbnail")->store("uploads");
    $video->slug = Str::kebab($video->title);
    $video->author_id = Auth::user()->id;
    $video->course_id;
    $video->save();
  }
}
