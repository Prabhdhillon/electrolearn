@extends("layout.auth")

@section('title')
    Electrolearn
@endsection

@section('content')
    <!--INSTRUCTOR starts-->
    <div class="instructor container">
        <img src="/{{ $user->profile }}" class="instructor-img">
        <h1 class="instructor-title heading mt-4">{{ $user->name }}</h1>
        <p class="instructor-discription mt-4">{{ $user->description }}</p>
    </div>
    <!--INSTRUCTOR ends-->

    <!--VIDEOS start-->
    <div class="video container">
        @forelse ($courses as $course)
            <div class="row video-row mx-auto">
                <div class="col"><img src="/{{ $course->thumbnail }}" class="video-img"></div>
                <div class="col">
                    <h6 class="video-title">{{ $course->title }}</h6>
                    <p class="video-discription">
                        {{ $course->description }}
                    </p>
                    {{-- <p class="video-discription"> @php $length = 100; @endphp
                    {{ Str::substr($course->description, 0, $length) }}
                    @if (Str::length($course->description) > $length)
                        ...
                    @endif
                </p> --}}
                    <a href="/catalogue/{{ $course->slug }}"> <button class="video-btn btn">BEGIN</button></a>

                </div>
            </div>
        @empty
            <h3>Sorry, there are currently no courses.</h3>
        @endforelse



    </div>
    <!--VIDEOS ends-->

    {{-- <div class="buttons container">


        <button class="button-secondary button me-4">Previous</button>
        <button class="button-active button">Next</button>
    </div> --}}
@endsection
