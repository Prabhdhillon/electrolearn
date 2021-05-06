@extends("layout.auth")

@section('title')
    Electrolearn
@endsection

@section('content')
    <div class="catalogue container">

        <h1 class="catalogue-title heading mt-5 ">Instructors</h1>
    </div>
    <!--CATALOGUE ends-->

    <!--VIDEOS start-->
    <div class="video container">

        @forelse ($users as $user)
            <div class="row video-row mx-auto">
                <div class="col-md-6 col-sm-12">
                    <img src="/{{ $user->profile }}" class="instructor-img img-fluid">
                </div>
                <div class="col-md-5 col-sm-12 content-box">
                    <h6 class="video-title">{{ $user->name }}</h6>
                    <p class="video-discription">
                        {{ $user->description }}
                    </p>
                    <a href="/instructors/{{ $user->slug }}"><button class="video-btn btn">Profile</button></a>
                </div>
            </div>
        @empty
            <h3>Sorry, there are no instructors.</h3>
        @endforelse



    </div>


    <!--VIDEOS ends-->

    {{-- <div class="buttons container">

        <div class="button-group">
            <button class="button button-secondary">Previous</button>
            <button class="button button-active">Next</button>
        </div>
    </div> --}}


@endsection
