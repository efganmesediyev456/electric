@extends('admin.layouts.admin')

@section('title', 'Languages')

@section('content')
    <div class="row x_panel">
        @include('admin.forms.lng_selector', ['lngs'=>$lngs])
        {{ Form::open(['route'=>['admin.news.store'],'enctype'=>'multipart/form-data', 'method' => 'post','class'=>'form-horizontal form-label-left']) }}
        @foreach($lngs as $lng)
            <div class="row lng-form" id="{{ $lng->u_id }}" @if(!$lng->default) style="display: none" @endif>

                @include('admin.forms.text', ['label' => 'Basliq',
                'name'=>'title',
                'lng'=>$lng,
                'value'=>old('title'.$lng->u_id),
                'required'=>$lng->default])

                @include('admin.forms.text', ['label' => 'Name',
                'name'=>'name',
                'lng'=>$lng,
                'value'=>old('name'.$lng->u_id),
                'required'=>$lng->default])

                @include('admin.forms.textarea', ['label' => 'Haqqinda',
                'name'=>'description',
                'lng'=>$lng,
                'value'=>old('description'.$lng->u_id),
                'required'=>$lng->default])


                @include('admin.forms.ckeditor', ['label' => 'Text',
               'name'=>'text',
               'lng'=>$lng,
               'value'=>old('text'.$lng->u_id),
               'required'=>$lng->default])

            </div>

        @endforeach

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cats">
                Categoriya
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="cats" name="categories[]" class="select2" multiple="multiple" style="width: 100%"
                        autocomplete="off">
                    @foreach($options as $option)
                        <option value="{{ $option->u_id }}">{{ $option->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">


        @include('admin.forms.file_image', ['label' => 'picture',
                'name'=>'image',
                'required'=>1])

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> {{ __('views.admin.users.edit.cancel') }}</a>
                <button type="submit" class="btn btn-success"> {{ __('views.admin.users.edit.save') }}</button>
            </div>
        </div>
        {{Form::close()}}
    </div>
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/users/edit.css')) }}
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/users/edit.js')) }}
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