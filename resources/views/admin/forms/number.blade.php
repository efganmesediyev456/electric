<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{ $name.$lng->u_id }}">
            {{ $label }}
            @if($required)
                <span class="required">*</span>
            @endif
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="{{ $name.$lng->u_id }}" type="number"
                   class="form-control col-md-7 col-xs-12 @error($name.$lng->u_id) parsley-error @enderror"
                   name="{{ $name.$lng->u_id }}" value="{{ $value }}" @if($required) required @endif>
            @error($name.$lng->u_id)
            <ul class="parsley-errors-list filled">
                {{ $message }}
            </ul>
            @enderror
        </div>
    </div>
</div>