@extends('layout.admin')
@section('title')
    Edit Profile
@endsection
@section('content')


    <!-- Page Content -->
    <div class="content">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" />
            </div>
            <div class="form-group">
                <label for="description">Bio</label>
                <textarea type="text" name="description" id="description"
                    class="form-control">{{ $user->description }}</textarea>

            </div>
            <div class="form-group">
                <label for="specs">Specifications</label>
                <input type="text" name="specs" id="specs" class="form-control" value="{{ $user->specs }}" />
            </div>
            <div class="form-group">
                <label for="profile">Profile</label>
                <input type="file" name="profile" id="profile" class="form-control" value="{{ $user->profile }}" />
            </div>
            {{-- <x-admin.input label="Enter Name" id="name" type="text" placeholder="Enter Name" /> --}}
            {{-- <x-admin.input label="Bio" id="description" type="textarea" placeholder="Enter About Yourself" />
                <x-admin.input label="Specialisations" id="specs" type="text" placeholder="Enter Your Specialisations" />
                <x-admin.input label="Upload Profile Picture" id="profile" type="file" /> --}}


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
