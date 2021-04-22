@extends("layout.admin")
@section('title')
    Upload Videos
@endsection
@section('content')


    <!-- Page Content -->
    <div class="content">
        <form action=""></form>
        <x-admin.admin-upload label="Enter the Title" id="title" type="text" placeholder="Enter the Title" />
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4"
                placeholder="Enter the video description"></textarea>
        </div>
        <x-admin.admin-upload label="Enter the Tools Used" id="tools" type="text" placeholder="Enter the Tools" />
        <div class="form-group">
            <label for="file">Upload Video:</label>
            <input type="file" id="file" name="file">
        </div>
        <div>
            <label for="thumbnail">Upload Thumbnail:</label>
            <input type="file" id="thumbnail" name="thumbnail">
        </div>
        <div class="form-group-button">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>

        </div>
        </form>
    </div>

    <!-- END Page Content -->
@endsection
