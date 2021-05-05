@extends("layout.auth")

@section('title')

@endsection

@section('content')
    <!--INSTRUCTOR starts-->
    <div class="instructor container">
        <img src="{{ asset('images/person2.png') }}" class="instructor-img">
        <h1 class="instructor-title heading mt-4">Michael Grezniek</h1>
        <p class="instructor-discription mt-4">Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Integer vulputate sed sapien sed sollicitudin.
            Sed aliquet est sapien, non aliquam arcu finibus vel. Vestibulum eu tincidunt eros.
            Praesent ullamcorper ipsum nisi. Sed vel imperdiet diam, et pretium justo. Donec viverra,
            orci nec venenatis consequat,
            nibh urna pharetra mauris, a mattis erat eros vitae orci. Vivamus in consectetur lorem.</p>
    </div>
    <!--INSTRUCTOR ends-->

    <!--VIDEOS start-->
    <div class="video container">
        <div class="row video-row mx-auto">
            <div class="col"><img src="{{ asset('images/thumbnail-audio.png') }}" class="video-img"></div>
            <div class="col">
                <h6 class="video-title">Michael Grezniek</h6>
                <h6 class="video-instructor">By Micheal G.</h6>
                <p class="video-discription">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptates vero a, ducimus blanditiis

                </p>
                {{-- <p class="video-discription"> @php $length = 100; @endphp
                    {{ Str::substr($course->description, 0, $length) }}
                    @if (Str::length($course->description) > $length)
                        ...
                    @endif
                </p> --}}
                <button class="video-btn btn">BEGIN</button>

            </div>
        </div>


    </div>
    <!--VIDEOS ends-->

    <div class="buttons container">


        <button class="button-secondary button me-4">Previous</button>
        <button class="button-active button">Next</button>
    </div>
@endsection
