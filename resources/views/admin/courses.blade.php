@extends('layout.admin')
@section('title')
    Upload Course
@endsection
@section('content')


    <!-- Page Content -->
    <div class="content">
        <form action="{{ route('course_create_submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Enter the Title" id="title" type="text" placeholder="Enter the Title" />
            <x-admin.input label="Description" id="description" type="textarea" placeholder="Enter your description" />
            <x-admin.input label="Tools" id="tools" type="text" placeholder="Enter the Tools Used" />
            <div class="form-group">
                <label for="thumbnail">Upload Thumbnail:</label>
                <input type="file" id="thumbnail" name="thumbnail">
                @error('thumbnail')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group-button">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </div>
        </form>
    </div>

    <!-- END Page Content -->
@endsection
