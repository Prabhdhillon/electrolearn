<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CourseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        // $videos = Video::where("course_id", $course->id)->get();
        $videos = $course->videos()->get();
        return view("admin.video.index", compact('course', 'videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course, Video $video)
    {

        // $video = Video::where("id", $video->id)->first();
        return view("admin.video.create", compact('course', 'video'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Course $course)
    {
        $validatedRequest = request()->validate([
            'title' => 'required|min:3|max:120',
            'description' => 'required',
            'file' => 'required|file|mimetypes:video/avi,video/mpeg,video/quicktime',
            'thumbnail' => 'required|file|max:2000|mimes:jpg,bmp,png',
        ]);

        $video = new Video($validatedRequest);
        $video->file = request()->file("file")->store("uploads");
        $video->thumbnail = request()->file("thumbnail")->store("uploads");
        $video->slug = Str::kebab($video->title);
        $video->author_id = Auth::user()->id;
        $video->course_id = $course->id;
        $video->save();
        return redirect()->back()->with("success", "Video Uploaded!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course, Video $video)
    {

        // $video = Video::where("id", $video->id)->first();
        return view("admin.video.show", compact('course', 'video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, Video $video)
    {

        return view("admin.video.edit", compact('course', 'video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course, Video $video)
    {
        $video = Video::where("id", $video->id)->first();
        $video->title = request()->input('title');
        $video->description = request()->input('description');
        if (request()->hasFile('file')) {
            $video->file = request()->file('file')->store('uploads');
        }
        if (request()->hasFile('thumbnail')) {
            $video->thumbnail = request()->file('thumbnail')->store('uploads');
        }
        $video->save();
        return redirect()->back()->with("success", "Video Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course, Video $video)
    {
        $course = Course::where("id", $course->id);
        $video = Video::where("id", $video->id)->delete();
        return redirect()->back()->with("delete", "Video Deleted!");
    }
}
