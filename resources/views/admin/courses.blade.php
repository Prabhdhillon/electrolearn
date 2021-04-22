@extends("layout.admin")

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Main Title</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item">Generic</li>
                        <li class="breadcrumb-item active" aria-current="page">Blank</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">Page Subtitle</h2>
        <p>Your content..</p>


        <div class="form-group">
            <label for="example-text-input">Title</label>
            <input type="text" class="form-control" id="example-text-input" name="example-text-input"
                placeholder="Text Input">
        </div>
        <div class="form-group">
            <label for="example-email-input">Author</label>
            <input type="email" class="form-control" id="example-email-input" name="example-email-input"
                placeholder="Emai Input">
        </div>
        <div class="form-group">
            <label for="example-textarea-input">Description</label>
            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4"
                placeholder="Textarea content.."></textarea>
        </div>
    </div>
    </div>
    <!-- END Page Content -->
@endsection
