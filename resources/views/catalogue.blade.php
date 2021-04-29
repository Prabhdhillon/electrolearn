    @extends("layout.auth")

    @section('title')
        Catalogue
    @endsection

    @section('content')


        <!--CATALOGUE starts-->
        <div class="catalogue container">

            <h1 class="catalogue-title heading mt-5 ">Courses</h1>
            <div class="search-box mx-auto">
                <form class="catalogue-search ">

                    <i class="fa fa-search ms-2"></i>

                    <input type="search" placeholder="Search for anything..." class="gsearch my-auto" name="gsearch">
                </form>
            </div>
        </div>
        <!--CATALOGUE ends-->

        <!--VIDEOS start-->
        <div class="video container">


            @forelse($courses as $course)
                <div class="row video-row mx-auto">
                    <div class="col"><img src="/{{ $course->thumbnail }}" class="video-img"></div>
                    <div class="col">
                        <h6 class="video-title">{{ $course->title }}</h6>
                        <h6 class="video-instructor">By Micheal G.</h6>
                        <div class="video-time">1hr20min</div>
                        <p class="video-discription">
                            @php $length = 100; @endphp
                            {{ Str::substr($course->description, 0, $length) }}
                            @if (Str::length($course->description) > $length)
                                ...
                            @endif
                        </p>
                        <button class="video-btn btn">START</button>
                    </div>
                </div>
            @empty
                No courses to show!
            @endforelse


        </div>
        <!--VIDEOS ends-->

        <div class="buttons container">

            <p class="buttons-para">Showing 10 courses from 132 courses</p>
            <div class="button-group">
                <button class="button button-secondary">Previous</button>
                <button class="button button-active">Next</button>
            </div>
        </div>
    @endsection
