@extends('layout.admin')
@section('title')
    Videos
@endsection
@section('content')
    <div class="container">
        <h2> {{ $course->title }}</h2>
        <div class="font-w600" style="font-size:24px;">Videos:</div>
        <a href="/admin/courses/{{ $course->slug }}/videos/new" class="btn btn-primary mt-3">Upload Videos</a>
        @forelse ($videos as $video)
            <div class="block block-rounded block-bordered mt-4">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Settings</h3>
                    <div class="block-options">
                        <a href="/admin/courses/{{ $course->slug }}/videos/{{ $video->slug }}/edit"
                            class="btn btn-warning">Edit</a>
                        <a href="/admin/courses/{{ $course->slug }}/videos/{{ $video->slug }}/delete"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-borderless table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-center w-25 d-none d-md-table-cell">
                                    <a class="item item-circle bg-primary text-white font-size-h2 mx-auto"
                                        href="javascript:void(0)">
                                        {{ $loop->index + 1 }}
                                    </a>
                                </td>
                                <td>
                                    <div class="py-4">

                                        <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
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
