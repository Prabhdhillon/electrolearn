@extends('layout.admin')

@section('content')
    <div class="mb-3">
        <label for="name"></label>
        <input id="name" name="name" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description"></label>
        <input id="description" name="description" type="text" class="form-control">
    </div>

@endsection
