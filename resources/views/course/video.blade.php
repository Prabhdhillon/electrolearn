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
                <a href="{{ URL::to('catalogue/{$course->slug' . $previous) }}"><button type="submit"
                        class="btn btn-secondary">Previous</button></a>
                <a href="{{ URL::to('catalogue/{$course->slug}/video/{$video->slug}' . $next) }}"><button type="submit"
                        class="btn btn-secondary">Next</button></a>
            </div>
            <div class="button-group">
                <div class="course-player-links"> {{ $previous->title }}</div>
                <div class="course-player-links"> {{ $next->title }}</div>
            </div>
        </div>
    </div>
@endsection
