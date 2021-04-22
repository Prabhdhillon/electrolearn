<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $id }}" id="{{ $id }}" class="form-control"
        placeholder="{{ isset($placeholder) ? $placeholder : '' }}">

    @error($id)
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
