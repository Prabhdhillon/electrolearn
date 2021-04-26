@extends('layout.admin')
@section('title')
    Courses
@endsection
@section('content')

    @forelse ($courses as $course)
        <a href="/admin/course/{{ $course->slug }}/videos">
            <h1>{{ $course->title }}</h1>
        </a>
    @empty
        <h1>Sorry there are no courses!</h1>
    @endforelse

@endsection
