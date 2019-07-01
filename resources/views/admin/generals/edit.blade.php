@extends('admin.layouts.admin')

@section('title', 'Languages')

@section('content')
    <div class="row x_panel">
        @include('admin.forms.lng_selector', ['lngs'=>$lngs])
        {{ Form::open(['route'=>['admin.generals.update',$generals[0]->u_id],'enctype'=>'multipart/form-data', 'method' => 'put','class'=>'form-horizontal form-label-left']) }}
        @foreach($generals as $general)
            @if($general->lng)
                <div class="row lng-form" id="{{ $general->l_id }}"
                     @if(!$general->lng->default) style="display: none" @endif>

                    @include('admin.forms.text', ['label' => 'address',
                        'name'=>'address',
                        'lng'=>$general->lng,
                        'value'=>$general->address,
                        'required'=>0])

                    @include('admin.forms.text', ['label' => 'Email',
                        'name'=>'email',
                        'lng'=>$general->lng,
                        'value'=>$general->email,
                        'required'=>0])

                    @include('admin.forms.text', ['label' => 'Telefon',
                        'name'=>'phone',
                        'lng'=>$general->lng,
                        'value'=>$general->phone,
                        'required'=>0])

                </div>
            @endif
        @endforeach
        @include('admin.forms.file_image', ['label' => 'Sekil',
               'name'=>'image',
               'required'=>0])

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