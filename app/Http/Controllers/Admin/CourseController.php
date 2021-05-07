<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where("author_id", auth()->user()->id)->get();
        return view("admin.course.index")->with("courses", $courses);
    }

    public function create()
    {
        return view("admin.course.create");
    }
    public function store()
    {

        $validatedRequest = request()->validate([
            'title' => 'required|min:3|max:120',
            'description' => 'required',
            'tools' => 'required|min:3|max:100',
            'thumbnail' => 'required|file|max:5000|mimes:jpg,bmp,png'
        ]);

        $course = new Course($validatedRequest);
        $course->thumbnail = request()->file("thumbnail")->store("uploads");
        $course->slug = Str::kebab($course->title);
        $course->author_id = Auth::user()->id;

        $course->save();
        return redirect()->back()->with("success", "Upload Successful!");
    }
    public function edit(Course $course)
    {
        return view("admin.course.edit", compact('course'));
    }
    public function update(Course $course)
    {
        $course = Course::where("id", $course->id)->first();
        $course->title = request()->input('title');
        $course->description = request()->input('description');
        $course->tools = request()->input('tools');
        if (request()->hasFile('thumbnail')) {
            $course->thumbnail = request()->file('thumbnail')->store('uploads');
        }
        $course->save();
        return redirect()->back()->with("success", "Course Updated Successfully!");
    }
    public function delete(Course $course)
    {
        $course = Course::where("id", $course->id)->delete();
        return redirect()->back()->with("delete", "Course Deleted!");
    }
}
