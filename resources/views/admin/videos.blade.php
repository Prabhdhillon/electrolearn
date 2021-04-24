@extends("layout.admin")
@section('title')
    Upload Videos
@endsection
@section('content')


    <!-- Page Content -->
    <div class="content">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Enter the Title" id="title" type="text" placeholder="Enter the title" />

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"
                    placeholder="Enter the video description"></textarea>
                @error('description')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="file">Upload Video</label>
                <input type="file" id="file" name="file">
                @error('file')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="thumbnail">Upload Thumbnail</label>
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
