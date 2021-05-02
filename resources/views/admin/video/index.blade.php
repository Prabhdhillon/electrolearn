@extends('layout.admin')
@section('title')
    Videos
@endsection
@section('content')
    <!-- Hero -->
    <div class="bg-dark bg-image" style="background-image: url('/media/photos/photo23@2x.jpg');">
        <div class="bg-black-75">
            <div class="content content-full content-top">
                <div class="py-4 text-center">
                    <h1 class="font-w700 text-white mb-2">
                        {{ $course->title }}
                    </h1>
                    <h2 class="h3 font-w400 text-white-75">
                        {{ $course->description }}
                    </h2>
                    <a href="/admin/courses/{{ $course->slug }}/videos/create" class="btn btn-primary mt-3">Upload
                        Videos</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <div class="container">
        @forelse ($videos as $video)
            <div class="block block-rounded block-bordered mt-4">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Settings</h3>
                    <div class="block-options">
                        <a href="/admin/courses/{{ $course->slug }}/videos/{{ $video->slug }}/edit"
                            class="btn btn-warning">Edit</a>
                        <form class="d-inline" method="POST"
                            action="/admin/courses/{{ $course->slug }}/videos/{{ $video->slug }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-borderless table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-center w-25 d-none d-md-table-cell">
                                    <a class="item item-circle bg-primary text-white font-size-h2 mx-auto"
                                        href="/admin/courses/{{ $course->slug }}/videos/{{ $video->slug }}">
                                        {{ $loop->index + 1 }}
                                    </a>
                                </td>
                                <td>
                                    <div class="py-4">

                                        <a class="link-fx h4 mb-2 d-inline-block text-dark"
                                            href="/admin/courses/{{ $course->slug }}/videos/{{ $video->slug }}">
                                            {{ $video->title }}
                                        </a>
                                        <p class="text-muted mb-0">
                                            {{ $video->description }}
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        @empty

        @endforelse
        @if (session()->has('delete'))
            <div class="alert alert-danger mt-3">
                {{ session()->get('delete') }}
            </div>
        @endif


    </div>

@endsection
