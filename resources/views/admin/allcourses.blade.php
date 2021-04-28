@extends('layout.admin')
@section('title')
    Courses
@endsection
@section('content')


    <div class="container mt-5">
        @forelse ($courses as $course)
            <div class="container" style="display: flex">
                <div><img src="/{{ $course->thumbnail }}" style="width:230px;height:200px;" alt=""></div>
                <div style="margin-left:50px;">
                    <a href="/admin/course/{{ $course->slug }}/videos">
                        <h3>{{ $course->title }}</h3>
                    </a>
                    <h5>By {{ auth()->user()->name }}</h5>
                    <p style="word-break: break-all;font-size:18px;">{{ $course->description }}</p>
                </div>

            </div><br>
        @empty
            <div class="container">
                <h1>Sorry there are no courses!</h1>
            </div>

        @endforelse




    @endsection
