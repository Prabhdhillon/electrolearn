@extends("layout.auth")

@section('title')
    Instructor
@endsection

@section('content')
    <div class="catalogue container">

        <h1 class="catalogue-title heading mt-5 ">Instructors</h1>
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
            <div class="col-md-6 col-sm-12"><img src="{{ asset('images/person2.png') }}" class="instructor-img img-fluid">
            </div>
            <div class="col-md-6 col-sm-12 content-box">
                <h6 class="video-title">Lorem, ipsum.</h6>
                <h6 class="video-instructor">By </h6>
                <p class="video-discription">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    te molestiae sed est eius necessitatibus ab obcaecati temporibus perspiciatis repellendus.



                </p>
                <a href=""><button class="video-btn btn">Profile</button></a>
            </div>
        </div>



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
