@extends("layout.auth")

@section('title')
    ElectroLearn
@endsection

@section('content')
    <div class="about container">

        <h1 class="about-title heading mt-5 ">About Us</h1>

    </div>

    <<<<<<< HEAD <div class="makers container">
        <div class="row row-makers">
            <div class="col-md-4 col-sm-12 col-makers-img"><img class="img-makers img-fluid"
                    src="{{ asset('images/tushar.jpeg') }}"></div>
            <div class="col-md-8 col-sm-12 col-makers-content">
                <h1 class="makers-name">Tushar Arora</h1>
                <h3 class="makers-specifications">Full Stack Laravel Developer </h3>
                <p class="makers-discription ">
                    A Full Stack Developer with 3 years of experience in Laravel, PHP, and Sql.
                    Developed more than 5 Full Stack Projects. Also, a part time Videographer and
                    Photographer.
                </p>
            </div>
        </div>
        <div class="row row-makers">
            <div class="col-md-4 col-sm-12 col-makers-img"><img class="img-makers img-fluid"
                    src="{{ asset('images/prabh.png') }}"></div>
            <div class="col-md-8 col-sm-12 col-makers-content">
                <h1 class="makers-name">Prabhjot</h1>
                <h3 class="makers-specifications">ReactJs | Laravel | Full Stack Developer </h3>
                <p class="makers-discription ">
                    I am a Full Stack Developer with experience of more than 2 years.
                    I have worked on more than 5+ Web Development Projects.
                    Along with this I am a UI/UX Designer.
                </p>
            </div>


        </div>
        </div>
    @endsection
