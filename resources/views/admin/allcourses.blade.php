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
                    <p>By {{ auth()->user()->name }}</p>
                    <p>{{ $course->description }}</p>
                </div>

            </div><br>
        @empty
            <h1>Sorry there are no courses!</h1>
        @endforelse




    @endsection
