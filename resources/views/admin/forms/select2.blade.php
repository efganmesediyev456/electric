<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{ $name.$lng->u_id }}">
        {{ $label }}
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="{{ $name.$lng->u_id }}" name="{{ $name.$lng->u_id }}[]" class="select2" multiple="multiple" style="width: 100%" autocomplete="off" @if($required) required @endif>
            @foreach($options as $option)
                <option @if($option->u_id == $s_option->u_id) selected="selected" @endif value="{{ $option->u_id }}">{{ $option->title }}</option>
            @endforeach
        </select>
    </div>
</div>