@extends('layout.admin')
@section('title')
    Edit Course
@endsection
@section('content')


    <!-- Page Content -->
    <div class="content">

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Enter the Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $video->title }}" />
            </div>
            <div class="form-group">
                <label for="description">Bio</label>
                <textarea type="text" name="description" id="description"
                    class="form-control">{{ $video->description }}</textarea>

            </div>
            <div class="form-group">
                <label for="tools">Tools</label>
                <input type="text" name="tools" id="tools" class="form-control" value="{{ $video->tools }}" />
            </div>
            <div class="form-group">
                <label for="thumbnail">Upload Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" value="{{ $video->thumbnail }}" />
            </div>


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
