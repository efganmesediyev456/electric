<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group parent">
        @foreach($lngs as $lng)
            <div class="col-md-4 col-sm-4 col-xs-6 radio_container">
                <label>
                    <span class="country @if($lng->default) active @endif ">{{ $lng->org_name }}</span>
                    <input type="radio" @if($lng->default) checked @endif
                    class="form-control col-md-7 col-xs-12 radio-inline @error('l_id') parsley-error @enderror"
                           name="l_id" value="{{ $lng->u_id }}" required>
                    <span class="checkmark"></span>
                </label>
            </div>
        @endforeach
    </div>
</div>