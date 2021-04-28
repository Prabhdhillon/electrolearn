@extends('layout.admin')

@section('title')
    Courses
@endsection



@section('content')

    <div class="container mt-5">
        @forelse ($courses as $course)
            <div class="col-md-4"><img src="/{{ $course->thumbnail }}" class="img-screen" alt=""></div>
            <section class="row">
                <div class="col-md-8">
                    <h3>{{ $course->title }}</h3>

                    <h5>By {{ auth()->user()->name }}</h5>
                    <p style="word-break: break-all;font-size:18px;">{{ $course->description }}</p>
                    <a href="/admin/course/{{ $course->slug }}/videos" class="btn btn-primary">Videos</a>
                    <a href="/admin/course/{{ $course->slug }}/videos/edit" class="btn btn-warning">Edit</a>
                    <a href="/admin/course/{{ $course->slug }}/videos" class="btn btn-danger">Delete</a>
                </div>
            </section>
        @empty
            <h1>Sorry there are no courses!</h1>
        @endforelse
    </div>




@endsection
