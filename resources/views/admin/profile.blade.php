@extends('layout.admin')
@section('title')
    Profile
@endsection
@section('content')

    <div class="container">
        <div class="block-content">
            @foreach ($users as $user)
                <div style="width:250px;height:250px;background-color:red;">

                </div>
                <br>
                <h3 class="font-w600 pr-3">Name: <h4 class="font-w300"> {{ $user->name }}</h4>
                </h3>
                <br><br>
                <h3 class="font-w600">Bio:<div class="font-w300"> {{ $user->description }}</div>
                </h3>
                <br><br>
                <h3 class=" font-w600">Specialisations:<h4 class="font-w300"> {{ $user->specs }}</h4>
                </h3>
                <br><br>
            @endforeach
        </div>
    </div>
@endsection
