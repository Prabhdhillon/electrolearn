@extends("layout.auth")

@section('title')
    Electrolearn
@endsection

@section('content')
    <div class="instructor-top container">

        <h1 class="instructor-title heading mt-5 ">Instructors</h1>
    </div>
    <!--CATALOGUE ends-->

    <!--VIDEOS start-->
    <div class="instructor container">

        @forelse ($users as $user)
            <div class="row instructor-row mx-auto">
                <div class="col-md-6 col-sm-12 col-img">
                    <img src="/{{ $user->profile }}" class="instructor-img img-fluid">
                </div>
                <div class="col-md-5 col-sm-12 instructor-content-box">
                    <h6 class="instructor-name">{{ $user->name }}</h6>
                    <p class="instructor-discription">
                        {{ $user->description }}
                    </p>
                    <p class="instructor-specs">
                        {{ $user->specs }}
                    </p>
                    <a href="/instructors/{{ $user->slug }}" class="instructor-link-btn" ><button class="instructor-btn btn">Profile</button></a>
                </div>
            </div>
        @empty

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
