@extends('layout.admin')
@section('title')
    Change Password
@endsection
@section('content')


    <!-- Page Content -->
    <div class="content">
        @include('errors')
        <form action="" method="post" enctype="multipart/form-data">
            @csrf

            <x-admin.input label="Enter Old Password" id="password" type="password" placeholder="Old Password" />
            <x-admin.input label="Enter New Password" id="new_password" type="password" placeholder="New Password" />
            <x-admin.input label="Confirm New Password" id="new_password_confirmation" type="password"
                placeholder="Confirm New Password" />
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
