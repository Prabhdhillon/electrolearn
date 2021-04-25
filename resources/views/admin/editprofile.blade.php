@extends('layout.admin')
@section('title')
    Edit Profile
@endsection
@section('content')


    <!-- Page Content -->
    <div class="content">
        <form action="{{ route('course_create_submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Enter Name" id="title" type="text" placeholder="Enter Name" />
            <x-admin.input label="Description" id="description" type="textarea" placeholder="Enter About Yourself" />
            <x-admin.input label="Specialisations" id="specs" type="text" placeholder="Enter Your Specialisations" />
            <x-admin.input label="Upload Profile pIcture" id="profile" type="file" />


            <div class="form-group-button">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </div>
        </form>
    </div>

    <!-- END Page Content -->
@endsection
