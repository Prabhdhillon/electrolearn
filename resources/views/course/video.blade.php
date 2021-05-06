@extends("layout.auth")
@section('title')
    Electrolearn
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
                @isset($previous)
                    <div>
                        <a href="/catalogue/{{ $course->slug }}/video/{{ $previous->slug }}"><button type="submit"
                                class="btn btn-secondary">Previous</button></a>
                        <div class="course-player-links"> {{ $previous->title }}</div>
                    </div>
                @else
                    <div></div>
                @endisset

                @isset($next)
                    <div>
                        <a href="/catalogue/{{ $course->slug }}/video/{{ $next->slug }}"><button type="submit"
                                class="btn btn-primary">Next</button></a>
                        <div class="course-player-links"> {{ $next->title }}</div>
                    </div>
                @endisset
            </div>

        </div>
    </div>
@endsection
