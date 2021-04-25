<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $id }}" class="form-control" id="{{ $id }}"
        placeholder="{{ isset($placeholder) ? $placeholder : '' }}">
    {{-- @error($id)
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror --}}
</div>
