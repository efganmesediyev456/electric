@extends('admin.layouts.admin')

@section('title', 'Languages')

@section('content')
    <div class="row x_panel">
        @include('admin.forms.lng_selector', ['lngs'=>$lngs])
        {{ Form::open(['route'=>['admin.sliders.update', $sliders[0]->u_id],'enctype'=>'multipart/form-data', 'method' => 'put','class'=>'form-horizontal form-label-left']) }}
        @foreach($sliders as $slider)
            @if($slider->lng)
                <div class="row lng-form" id="{{ $slider->l_id }}"
                     @if(!$slider->lng->default) style="display: none" @endif>

                    @include('admin.forms.text', ['label' => 'Basliq',
                            'name'=>'title',
                            'lng'=>$slider->lng,
                            'value'=>$slider->title,
                            'required'=>0])

                    @include('admin.forms.textarea', ['label' => 'description',
                            'name'=>'description',
                            'lng'=>$slider->lng,
                            'value'=>$slider->description,
                            'required'=>0])

                    @include('admin.forms.text', ['label' => 'Duyme yazisi',
                            'name'=>'button_text',
                            'lng'=>$slider->lng,
                            'value'=>$slider->button_text,
                            'required'=>0])

                    @include('admin.forms.text', ['label' => 'Duyme linki',
                            'name'=>'button_path',
                            'lng'=>$slider->lng,
                            'value'=>$slider->button_path,
                            'required'=>0])

                    @include('admin.forms.text', ['label' => 'Text 1',
                            'name'=>'text_bir',
                            'lng'=>$slider->lng,
                            'value'=>$slider->text_bir,
                            'required'=>0])



                    @include('admin.forms.text', ['label' => 'Text 2',
                            'name'=>'text_iki',
                            'lng'=>$slider->lng,
                            'value'=>$slider->text_iki,
                            'required'=>0])
                    @include('admin.forms.text', ['label' => 'Text 3',
                            'name'=>'text_uc',
                            'lng'=>$slider->lng,
                            'value'=>$slider->text_uc,
                            'required'=>0])

                </div>
            @endif
        @endforeach
        <img style="margin-top:15px;margin-bottom: 15px;" class="col-md-6 col-md-offset-3 my-2"  src="{{asset('images/'.$slider->image)}}">

        @include('admin.forms.file_image', ['label' => 'Sekil',
                       'name'=>'image',
                       'required'=>0])

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> {{ __('views.admin.users.edit.cancel') }}</a>
                <button type="submit" class="btn btn-success"> {{ __('views.admin.users.edit.save') }}</button>
            </div>
        </div>
        {{Form::close()}}
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