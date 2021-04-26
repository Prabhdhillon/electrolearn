@extends('layout.admin')
@section('title')
    Profile
@endsection
@section('content')

    <div class="container">
        <div class="block-content">

            <div style="width:250px;height:250px;background-color:red;">
            </div>
            <br>
            <h3 class="font-w600 pr-3">Name: <div class="font-w300"> {{ $user->name }}</div>
            </h3>
            <br><br>
            <h3 class="font-w600">Bio:<div class="font-w300"> {{ $user->description }}</div>
            </h3>
            <br><br>
            <h3 class=" font-w600">Specialisations:<div class="font-w300"> {{ $user->specs }}</div>
            </h3>
            <br><br>

        </div>
    </div>
@endsection
