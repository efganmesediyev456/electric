<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{ $name.$lng->u_id }}">
            {{ $label }}
            @if($required)
                <span class="required">*</span>
            @endif
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="{{$name.$lng->u_id}}" class="ck" id="text"
                      rows="5" @if($required) required @endif> {!! $value !!}</textarea>
            <script src="/electric/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script src="/electric/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
            <script>
                $('.ck').ckeditor();
                config.disallowedContent = 'br';
                // $('.textarea').ckeditor(); // if class is prefered.
            </script>
        </div>
    </div>
</div>