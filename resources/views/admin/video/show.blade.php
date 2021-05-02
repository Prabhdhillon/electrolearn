@extends('layout.admin')
@section('title')
    Videos
@endsection
@section('content')
    <div class="container">
        <h2> {{ $video->title }}</h2>
        <div class="video-js-responsive-container vjs-hd">
            <video class="video-js course-video" data-setup="{}" controls poster="/{{ $video->thumbnail }}">
                <source src="/{{ $video->file }}" type="video/mp4" />
            </video>
        </div>

        @if (session()->has('delete'))
            <div class="alert alert-danger mt-3">
                {{ session()->get('delete') }}
            </div>
        @endif


    </div>

@endsection
