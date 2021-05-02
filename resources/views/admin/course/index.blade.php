@extends('layout.admin')

@section('title')
    Courses
@endsection

@php

$colors = collect(['bg-gd-dusk-op', 'bg-gd-fruit-op', 'bg-gd-aqua-op', 'bg-gd-sublime-op', 'bg-gd-sea-op', 'bg-gd-lake-op']);

@endphp


@section('content')
    <div class="bg-dark bg-image" style="background-image: url('/media/photos/photo21@2x.jpg');">
        <div class="bg-black-75">
            <div class="content content-full content-top">
                <div class="py-4 text-center">
                    <h1 class="font-w700 text-white mb-2">
                        Welcome To Electrolearn
                    </h1>
                    <h2 class="h3 font-w400 text-white-75">
                        The Biggest Platform For Students and Teachers
                    </h2>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h3 class="font-w700">Your Courses</h3>
        <section class="row mb-5">
            @forelse ($courses as $course)
                <div class="col-md-6" style="position: relative;">
                    <div style="position:absolute; z-index: 100; left: 30px; bottom: 43px;">
                        <a href="/admin/courses/{{ $course->slug }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/admin/courses/{{ $course->slug }}/delete" class="btn btn-danger">Delete</a>
                    </div>

                    <a class="block block-rounded block-transparent d-md-flex align-items-md-stretch bg-image"
                        href="/admin/courses/{{ $course->slug }}/videos" data-toggle="click-ripple">

                        <div class="block-content block-content-full {{ $colors->random() }}">
                            <div class="py-6">
                                <h3 class="font-w700 text-white mb-1">{{ $course->title }}</h3>
                            </div>
                        </div>
                    </a>

                </div>

            @empty
                <h1>Sorry there are no courses!</h1>
            @endforelse
        </section>
        @if (session()->has('delete'))
            <div class="alert alert-danger mt-3">
                {{ session()->get('delete') }}
            </div>
        @endif
    </div>





@endsection
