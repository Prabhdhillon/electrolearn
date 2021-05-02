@extends("layout.auth")
@section('title')
    Course
@endsection
@section('content')
    <div class="course-player">
        <div class="container">
            <div class="video-js-responsive-container vjs-hd">
                <video class="video-js course-video" data-setup="{}" controls poster="/{{ $video->thumbnail }}">
                    <source src="/{{ $video->file }}" type="video/mp4" />
                </video>
            </div>

            <div class="course-player-title">{{ $video->title }}</div>
            <div class="course-player-paragraph">
                <p>{{ $video->description }}</p>




            </div>
            <div class="button-group button-group-margin">
                <button type="submit" class="btn btn-secondary">Previous</button>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
            <div class="button-group">
                <div class="course-player-links">0. Introduction</div>
                <div class="course-player-links">1. Styled Components</div>
            </div>
        </div>
    </div>
@endsection
