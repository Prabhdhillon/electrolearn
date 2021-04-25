@extends('layout.admin')
@section('title')
    Courses
@endsection
@section('content')

    @forelse ($courses as $course)
        <h1>{{ $course->title }}</h1>
    @empty
        <h1>Sorry there are no courses!</h1>
    @endforelse

@endsection
