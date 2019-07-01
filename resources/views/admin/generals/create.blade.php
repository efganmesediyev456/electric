@extends('admin.layouts.admin')

@section('title', 'Languages')

@section('content')
    <div class="row x_panel">
        @include('admin.forms.lng_selector', ['lngs'=>$lngs])
        {{ Form::open(['route'=>['admin.generals.store'],'enctype'=>'multipart/form-data', 'method' => 'post','class'=>'form-horizontal form-label-left']) }}
        @foreach($lngs as $lng)
            <div class="row lng-form" id="{{ $lng->u_id }}"
                 @if(!$lng->default) style="display: none" @endif>

                @include('admin.forms.text', ['label' => 'address',
                    'name'=>'address',
                    'lng'=>$lng,
                    'value'=>old('address'.$lng->u_id),
                    'required'=>$lng->default])

                @include('admin.forms.text', ['label' => 'Email',
                    'name'=>'email',
                    'lng'=>$lng,
                    'value'=>old('email'.$lng->u_id),
                    'required'=>$lng->default])

                @include('admin.forms.text', ['label' => 'Telefon',
                    'name'=>'phone',
                    'lng'=>$lng,
                    'value'=>old('phone'.$lng->u_id),
                    'required'=>$lng->default])


            </div>
        @endforeach
        @include('admin.forms.file_image', ['label' => 'Sekil',
               'name'=>'image',
               'required'=>1])

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary"
                   href="{{ URL::previous() }}"> {{ __('views.admin.users.edit.cancel') }}</a>
                <button type="submit"
                        class="btn btn-success"> {{ __('views.admin.users.edit.save') }}</button>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $('input[type="radio"]').on('click', function () {
            var forms = $('.lng-form');
            for (var i = 0; i < forms.length; i++) {
                if ($(forms[i]).attr('id') != $(this).val()) {
                    $(forms[i]).css('display', 'none');
                } else $(forms[i]).css('display', 'block');
            }
        })
    </script>
@endsection