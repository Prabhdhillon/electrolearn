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
            <x-admin.input label="Description" id="description" type="textarea" placeholder="Enter video description" />
            <x-admin.input label="Upload Video" id="file" type="file" />
            <x-admin.input label="Upload Thumbnail" id="thumbnail" type="file" />
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
