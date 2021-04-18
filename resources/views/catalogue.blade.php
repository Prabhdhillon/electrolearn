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
            <div class="row video-row mx-auto">

                <div class="col"><img src="{{ asset('images/video.png') }}" class="video-img"></div>
                <div class="col">
                    <h6 class="video-title">Streaming for Bignners</h6>
                    <h6 class="video-instructor">By Micheal G.</h6>
                    <h6 class="video-time">1hr20min</h6>
                    <p class="video-discription">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Integer vulputate sed sapien sed sollicitudin.
                        non aliquam arcu finibus vel.</p>
                    <button class="video-btn btn">BIGNNER</button>

                </div>
            </div>
            <div class="row video-row mx-auto">

                <div class="col"><img src="{{ asset('images/video.png') }}" class="video-img"></div>
                <div class="col">
                    <h6 class="video-title">Streaming for Bignners</h6>
                    <h6 class="video-instructor">By Micheal G.</h6>
                    <h6 class="video-time">1hr20min</h6>
                    <p class="video-discription">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Integer vulputate sed sapien sed sollicitudin.
                        non aliquam arcu finibus vel.</p>
                    <button class="video-btn btn">BIGNNER</button>

                </div>
            </div>
        </div>
        <!--VIDEOS ends-->

        <div class="buttons container">

            <p class="buttons-para ">Showing 10 courses from 132 courses</p>
            <button class="button-prev btn me-4">Previous</button>
            <button class="button-next btn">Next</button>
        </div>
    @endsection
