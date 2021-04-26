@extends('layout.admin')
@section('title')
    Edit Profile
@endsection
@section('content')


    <!-- Page Content -->
    <div class="content">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Enter Name" id="name" type="text" placeholder="Enter Name" />
            <x-admin.input label="Bio" id="description" type="textarea" placeholder="Enter About Yourself" />
            <x-admin.input label="Specialisations" id="specs" type="text" placeholder="Enter Your Specialisations" />
            <x-admin.input label="Upload Profile Picture" id="profile" type="file" />


            <div class="form-group-button">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </div>
            @if (session()->has('success'))
                <div class="alert alert-success mt-3">
                    {{ session()->get('success') }}
                </div>
            @endif
        </form>
    </div>

    <!-- END Page Content -->
@endsection
