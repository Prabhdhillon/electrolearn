<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>

    @if ($type == 'textarea')
        <textarea type="{{ $type }}" name="{{ $id }}" id="{{ $id }}" class="form-control"
            placeholder="{{ isset($placeholder) ? $placeholder : '' }}"></textarea>
    @else
        <input type="{{ $type }}" name="{{ $id }}" id="{{ $id }}" class="form-control"
            placeholder="{{ isset($placeholder) ? $placeholder : '' }}" />
    @endif
    @error($id)
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
