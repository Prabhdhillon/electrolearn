@extends('layout.admin')
@section('title')
    Edit Video
@endsection
@section('content')


    <!-- Page Content -->
    <div class="content">

        <form method="POST" action="/admin/courses/{{ $course->slug }}/videos/{{ $video->slug }}"
            enctype="multipart/form-data">
            @csrf
            @method("PUT")
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
                <label for="file">Upload Video</label>
                <input type="file" name="file" id="file" class="form-control" value="{{ $video->file }}" />
            </div>
            <div class="form-group">
                <label for="thumbnail">Upload Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" value="{{ $video->thumbnail }}" />
            </div>


            <div class="form-group-button">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                <a href="{{ url()->previous() }}" class="btn btn-warning mt-3">Go back</a>
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
