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

        return view("admin.video.index", compact("course"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.video.create");
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
            'file' => 'required|file|',
            'thumbnail' => 'required|file|max:2000',
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
    public function show($course)
    {

        return view("admin.video.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("admin.video.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
