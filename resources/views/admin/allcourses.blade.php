@extends('layout.admin')

@section('title')
    Courses
@endsection



@section('content')

    <div class="container mt-5">
        @forelse ($courses as $course)
            <section class="row mb-5">
                <div class="col-md-6">
                    <a class="block block-rounded block-transparent d-md-flex align-items-md-stretch bg-image"
                        style="background-image: url('assets/media/photos/photo24.jpg');"
                        href="be_pages_education_course.html" data-toggle="click-ripple">
                        <div class="block-content block-content-full bg-black-50">
                            <span
                                class="d-inline-block py-1 px-2 rounded bg-black-75 font-size-sm font-w700 text-uppercase text-white">
                                JavaScript
                            </span>
                            <div class="py-6">
                                <div class="font-size-sm mb-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <h3 class="font-w700 text-white mb-1">Learn Vue 2: Step By Step</h3>
                            </div>
                            <span class="font-size-sm font-w700 text-uppercase text-white-75">
                                35 Lessons | Beginner
                            </span>
                        </div>
                    </a>
                </div>
            </section>
        @empty
            <h1>Sorry there are no courses!</h1>
        @endforelse
    </div>




@endsection
