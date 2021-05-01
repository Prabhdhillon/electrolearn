@extends("layout.auth")
@section('title')
    Course OverView
@endsection
@section('content')
    <div class="course-view">
        <div class="container">
            <div class="main-heading text-center">
                <img class="img-fluid img-instructor" src="/{{ $course->thumbnail }}" alt="">
                <h1>{{ $course->title }}</h1>
            </div>

            {{-- course --}}
            <div class="course">
                <div class="course-subtitle">
                    <div>by Michael Grzesiek</div>
                    
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
            @forelse ($videos as $video)
                <x-video src="images/thumbnail-dual.png" title="{{$video->title}}" meta="4 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
                
            </div>
            @empty

            @endforelse
            {{-- /row --}}

        </div>
    </div>


@endsection
