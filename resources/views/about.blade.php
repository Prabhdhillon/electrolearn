@extends("layout.auth")

@section('title')
    ElectroLearn
@endsection

@section('content')
<div class="about container">

<h1 class="about-title heading mt-5 ">About Us</h1>

</div>

<div class="makers container">
    <div class="row row-makers">
        <div class="col-md-4 col-sm-12 col-makers-img"><img class="img-makers img-fluid" src="{{ asset('images/tushar.jpeg') }}"></div>
        <div class="col-md-8 col-sm-12 col-makers-content">
            <h1 class="makers-name">Tushar Arora</h1>
            <h3 class="makers-specifications">Laravel | PHP | ReactJs | Full Stack Developer </h3>
            <p class="makers-discription ">
            I am a Full Stack Laravel Developer with experience of more than 3 years.
             I have worked on more than 10+ Web Development Projects. 
            Along with this I am a Motion Graphic Designer and a Freelance Videographer and Photographer.
            </p>
        </div>
    </div>
    <div class="row row-makers">
        <div class="col-md-4 col-sm-12 col-makers-img"><img class="img-makers img-fluid" src="{{ asset('images/prabh.png') }}"></div>
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