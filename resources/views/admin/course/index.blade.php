@extends('layout.admin')

@section('title')
    Courses
@endsection



@section('content')

    <div class="container mt-5">
        @forelse ($courses as $course)
            <section class="row mb-5">
                <div class="col-md-5">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Settings</h3>
                        <div class="block-options">
                            <a href="/admin/courses/{{ $course->slug }}/edit" class="btn btn-warning">Edit</a>
                            <a href="/admin/courses/{{ $course->slug }}/delete" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                    <a class="block block-rounded block-transparent d-md-flex align-items-md-stretch bg-image"
                        href="/admin/courses/{{ $course->slug }}/videos" data-toggle="click-ripple">

                        <div class="block-content block-content-full bg-gd-fruit-op">
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
        @if (session()->has('delete'))
            <div class="alert alert-danger mt-3">
                {{ session()->get('delete') }}
            </div>
        @endif
    </div>





@endsection
