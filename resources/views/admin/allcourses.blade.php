@extends('layout.admin')

@section('title')
    Courses
@endsection



@section('content')

    <div class="container mt-5">
        @forelse ($courses as $course)
            <section class="row mb-5">
                <div class="col-md-5">
                    <a class="block block-rounded block-transparent d-md-flex align-items-md-stretch bg-image"
                        href="/admin/course/{{ $course->slug }}/videos" data-toggle="click-ripple"><img
                            src="/{{ $course->thumbnail }}" alt="">
                        <div class="block-content block-content-full bg-black-50">

                            <div class="py-6">

                                <h3 class="font-w700 text-white mb-1">{{ $course->title }}</h3>
                            </div>

                        </div>
                    </a>
                </div>
            </section>
        @empty
            <h1>Sorry there are no courses!</h1>
        @endforelse
    </div>
    {{-- <a href="/admin/course/{{ $course->slug }}/videos" class="btn btn-primary">Videos</a>
    <a href="/admin/course/{{ $course->slug }}/videos/edit" class="btn btn-warning">Edit</a>
    <a href="/admin/course/{{ $course->slug }}/videos" class="btn btn-danger">Delete</a> --}}



@endsection
