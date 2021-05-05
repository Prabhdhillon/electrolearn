@extends("layout.auth")

@section('title')
    Electrolearn
@endsection

@section('content')
    <div class="introduction mt-5 container">
        <img class="mt-10 display-image" src="{{ asset('images/Course_Image.png') }}">
        <h1 class="mt-3 introduction-heading">Start Learning for FREE!</h1>
        <div class="row mt-3 mx-auto introduction-row">

           <a href="/login"> <button class="btn btn-sm introduction-btn mt-3 me-4">Login</button></a>
           <a href="/register"> <button class="btn btn-sm introduction-btn mt-3">Register</button></a>
        </div>
        <h5 class="mt-3 introduction-line">Made By <span class="electro">Electrobyte</span></h5>


    </div>

    <!--introducton saction ends-->
    <div class="shadow-divider"></div>



    <!--Discipline section starts-->
    <div class="discipline container">
        <h1 class="mt-3 heading discipline-heading">Disciplines At Electrolearn</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm"><img class="discipline-card" src="{{ asset('images/card-1.png') }}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm"><img class="discipline-card" src="{{ asset('images/card-2.png') }}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm"><img class="discipline-card" src="{{ asset('images/card-3.png') }}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm"><img class="discipline-card" src="{{ asset('images/card-4.png') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm "><img class="discipline-card" src="{{ asset('images/card-5.png') }}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm "><img class="discipline-card" src="{{ asset('images/card-6.png') }}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm "><img class="discipline-card" src="{{ asset('images/card-7.png') }}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm "><img class="discipline-card" src="{{ asset('images/card-8.png') }}">
            </div>
        </div>
    </div>

    <!--discipline section ends-->

    <div class="shadow-divider"></div>

    <!--plans section starts-->
    <div class="plans container">
        <h1 class="mt-3 heading plans-heading">Our Plans</h1>

        <div class="row">
            <div class=" col-md-4 col-sm plans-col">


                <div class="card plans-card mx-auto">
                    <p class=" plans-card-subtitle">MONTHLY</p>
                    <h5 class=" plans-card-title">Rs.1000</h5>
                    <i class="far fa-calendar-alt plans-card-icon"></i>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's.</p>
                        <a href="#" class="btn btn-primary plans-card-btn">START LEARNING</a>
                    </div>
                </div>


            </div>
            <div class=" col-md-4 col-sm">


                <div class="card plans-card mx-auto">
                    <p class="plans-card-subtitle">MONTHLY</p>
                    <h5 class=" plans-card-title">Rs.1000</h5>
                    <i class="far fa-calendar-alt plans-card-icon"></i>
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's .</p>
                        <a href="#" class="btn btn-primary plans-card-btn">START LEARNING</a>
                    </div>
                </div>
            </div>

            <div class=" col-md-4 col-sm">
                <div class=" card plans-card mx-auto">
                    <p class="plans-card-subtitle">MONTHLY</p>
                    <h5 class=" plans-card-title">Rs.1000</h5>
                    <i class="far fa-calendar-alt plans-card-icon"></i>
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's .</p>
                        <a href="#" class="btn btn-primary plans-card-btn">START LEARNING</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--Showcase starts-->
    <div class="showcase container-fluid">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img class="showcase-img" src="{{ asset('images/person2.png') }}">
                </div>
                <div class="col-md-6 col-sm-12">

                    <h3 class="showcase-heading heading">20k+ Students are in One Place</h3>


                    <p class="showcase-para">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus vel lacus sed lectus rutrum tincidunt non porttitor risus.
                        Cras egestas ipsum vitae dignissim mattis. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis
                        parturient montes, nascetur ridiculus mus. Curabitur at dolor ut enim viverra
                        sagittis id eget tellus. Morbi dignissim urna tincidunt, fermentum nulla sit amet,
                        consectetur nisi. Orci varius natoque penatibus et magnis dis
                        parturient montes, nascetur ridiculus mus. Curabitur at dolor ut enim viverra
                        sagittis id eget tellus. Morbi dignissim urna tincidunt, fermentum nulla sit amet,
                        consectetur nisi.</p>

                    <button class="btn-lg showcase-btn" type="button" name="button">DISCORD</button>
                    <button class="btn-lg showcase-btn" type="button" name="button">LEARN MORE</button>
                </div>
            </div>
        </div>
    </div>

    <!--Showcase ends-->

    <!--ORGANIZATION starts-->
    <div class="organization container">
        <img src="{{ asset('images/org-img.png') }}" class="organization-img">
        <h3 class="organization-subtitle">FREE EDUCATION INITIATIVE BY</h3>
        <h1 class="organization-title">ELECTROBYTE</h1>
        <img src="{{ asset('images/charity.svg') }}" class="charity-icon">
        <h4 class="charity-title">NON PROFIT ORGANIZATION</h4>
        <button class="organization-btn btn btn-lg">LEARN MORE</button>
    </div>
    <!--ORGANIZATION ends-->

    <div class="shadow-divider"></div>

    <!--TRENDING starts-->
    <div class="trending container">
        <h1 class="ternding-title heading">Trending Courses</h1>
        <div class="row trending-row">
            @foreach ($courses->slice(0, 3) as $course)
                <div class="col-lg-4 col-md-6 col-sm-12 trending-col">
                    <a href="/catalogue/{{ $course->slug }}" class="video-link">
                        <div class="trending-card mx-auto">
                            <img src="/{{ $course->thumbnail }} " class="trending-card-img ">
                            <h6 class="trending-card-title mt-2">{{ $course->title }}</h6>
                            <p class="trending-card-subtitle mt-2">By {{ $course->user->name }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
            {{-- @forelse ($courses as $course)

            @empty

            @endforelse --}}
        </div>
        <!--TRENDING ends-->

        <div class="shadow-divider"></div>

        <!--DONATIONS starts-->
        <div class="donations container">
            <div class="donations-row row">
                <div class="col-4 donations-col">
                    <img src="{{ asset('images/open-book.svg') }}" class="donations-icon">
                    <p class="donations-title">BOOKS DONATED</p>
                    <h1 class="donations-numbers">2.4K</h1>
                </div>
                <div class="col-4 donations-col">
                    <img src="{{ asset('images/presentation.svg') }}" class="donations-icon">
                    <p class="donations-title">LECTURES DONATED</p>
                    <h1 class="donations-numbers">4K</h1>
                </div>
                <div class="col-4 donations-col">
                    <img src="{{ asset('images/cereal.svg') }}" class="donations-icon">
                    <p class="donations-title">MEALS DONATED</p>
                    <h1 class="donations-numbers">3.6K</h1>
                </div>
            </div>
        </div>
    </div>
    <!--DONATIONS ends-->

@endsection
</div>
