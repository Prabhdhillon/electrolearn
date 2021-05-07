    @extends("layout.auth")

    @section('title')
        Electrolearn
    @endsection

    @section('content')


        <!--CATALOGUE starts-->
        <div class="catalogue container">

            <h1 class="catalogue-title heading mt-5 ">Courses</h1>

        </div>
        <!--CATALOGUE ends-->

        <!--VIDEOS start-->
        <div class="video container">
            @forelse($courses as $course)
                <div class="row video-row mx-auto mt-5">
                    <div class="col-md-6 col-sm-12"><img src="/{{ $course->thumbnail }}" class="video-img img-fluid">
                    </div>
                    <div class="col-md-6 col-sm-12 content-box">
                        <h6 class="video-title">{{ $course->title }}</h6>
                        <h6 class="video-instructor">By {{ $course->user->name }}</h6>
                        <p class="video-discription">
                            @php $length = 100; @endphp
                            {{ Str::substr($course->description, 0, $length) }}
                            @if (Str::length($course->description) > $length)
                                ...
                            @endif
                        </p>
                        <a href="/catalogue/{{ $course->slug }}" class="video-link"><button
                                class="video-btn btn">START</button></a>
                    </div>
                </div>
            @empty
                <div class="empty-div mt-5">
                    <h3 style="text-align:center">Sorry, there are no Courses yet.</h3>
                </div>
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
