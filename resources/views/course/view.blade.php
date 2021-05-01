@extends("layout.auth")
@section('title')
    Course OverView
@endsection
@section('content')
    <div class="course-view">
        <div class="container">
            <div class="main-heading text-center">
                <img class="img-fluid" src="{{ asset('images/video-streaming.png') }}" alt="">
                <h1>{{ $course->title }}</h1>
            </div>

            {{-- course --}}
            <div class="course">
                <div class="course-subtitle">
                    <div>by Michael Grzesiek</div>
                    <div>1hr32min</div>
                </div>
                <div class="course-info">
                    <div class="course-info-paragraph">
                        Learn the basics of streaming by the popular twitch streamer Michael Grzesiek, better known as
                        Shroud.
                        He is
                        a professional CS:GO and PUBG Player. This course is aimed for beginners and enthusiasts. We cover
                        basic
                        tools like OBS and Stream Labs. For advanced users, we offer special lessons for AutoHotKey to use a
                        secondary keyboard for shortcuts to improve your streaming.
                    </div>
                    <div class="course-info-heading">Tools Used</div>
                    <div class="course-info-paragraph">OBS, Stream Labs OBS, Photoshop, After Effects, AutoHotKey</div>
                </div>
            </div>
            {{-- /course --}}

            {{-- row --}}
            <div class="row">
                <x-video src="images/thumbnail-dual.png" title="Dual Monitor Setup" meta="4 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
                <x-video src="images/thumbnail-audio.png" title="Microphone Audio" meta="6 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
                <x-video src="images/thumbnail-obs.png" title="The OBS Setup" meta="5 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
                <x-video src="images/thumbnail-dual.png" title="Dual Monitor Setup" meta="4 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
                <x-video src="images/thumbnail-audio.png" title="Microphone Audio" meta="6 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
                <x-video src="images/thumbnail-obs.png" title="The OBS Setup" meta="5 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
                <x-video src="images/thumbnail-dual.png" title="Dual Monitor Setup" meta="4 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
                <x-video src="images/thumbnail-audio.png" title="Microphone Audio" meta="6 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
                <x-video src="images/thumbnail-obs.png" title="The OBS Setup" meta="5 Min"
                    description="Multiple monitors are necessary for streaming. Shroud covers the basics of computer setups." />
            </div>
            {{-- /row --}}

        </div>
    </div>


@endsection
