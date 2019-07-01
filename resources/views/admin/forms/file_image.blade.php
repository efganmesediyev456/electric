<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{ $name }}">
            {{ $label }}
            @if($required)
                <span class="required">*</span>
            @endif
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="{{ $name }}" type="file" accept="image/*" class="col-md-7 col-xs-12"
                   name="{{ $name }}" @if($required) required @endif>
            @error($name)
            <ul class="parsley-errors-list filled">
                {{ $message }}
            </ul>
            @enderror
        </div>
    </div>
</div>