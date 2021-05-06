@extends("layout.auth")
@section('title')

@endsection
@section('content')
    <div class="course-view">
        <div class="container">
            <div class="main-heading text-center">

                <img class="img-fluid img-instructor mt-5" src="/{{ $course->thumbnail }}" alt="">
                <h1>{{ $course->title }}</h1>
            </div>

            {{-- course --}}
            <div class="course">
                <div class="course-subtitle">
                    <div>By {{ $course->user->name }}</div>

                </div>
                <div class="course-info">
                    <div class="course-info-paragraph">
                        @php $length = 500; @endphp
                        {{ Str::substr($course->description, 0, $length) }}
                        @if (Str::length($course->description) > $length)
                            ...
                        @endif
                    </div>
                    <div class="course-info-heading">Tools Used</div>
                    <div class="course-info-paragraph">{{ $course->tools }}</div>
                </div>
            </div>
            {{-- /course --}}

            {{-- row --}}
            <div class="row">
                @forelse ($course->videos as $video)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="/catalogue/{{ $course->slug }}/video/{{ $video->slug }}" class="video-link">
                            <div class="lecture mx-auto">
                                <img class="lecture-image" src="/{{ $video->thumbnail }}" alt="">
                                <div class="lecture-info">
                                    <div class="lecture-title">
                                        {{ $video->title }}
                                    </div>
                                    <div class="lecture-description">
                                        {{ $video->description }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty

                @endforelse
            </div>
            {{-- /row --}}
        </div>
    </div>


@endsection
