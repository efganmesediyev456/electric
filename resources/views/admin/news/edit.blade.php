@extends('admin.layouts.admin')

@section('title', 'Languages')

@section('content')
    <div class="row x_panel">
        @include('admin.forms.lng_selector', ['lngs'=>$lngs])
        {{ Form::open(['route'=>['admin.news.update',$newses[0]->u_id],'enctype'=>'multipart/form-data', 'method' => 'put','class'=>'form-horizontal form-label-left']) }}
        @foreach($newses as $news)
            <div class="row lng-form" id="{{ $news->lng->u_id }}" @if(!$news->lng->default) style="display: none" @endif>

                @include('admin.forms.text', ['label' => 'Basliq',
                    'name'=>'title',
                    'lng'=>$news->lng,
                    'value'=>$news->title,
                    'required'=>0])

                @include('admin.forms.text', ['label' => 'Name',
                        'name'=>'name',
                        'lng'=>$news->lng,
                        'value'=>$news->name,
                        'required'=>0])

                @include('admin.forms.textarea', ['label' => 'Haqqinda',
                            'name'=>'description',
                            'lng'=>$news->lng,
                            'value'=>$news->description,
                            'required'=>0])


                @include('admin.forms.ckeditor', ['label' => 'Text',
                       'name'=>'text',
                       'lng'=>$news->lng,
                       'value'=>$news->text,
                       'required'=>0])
            </div>

        @endforeach

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cats">
                Categoriya
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="cats" name="categories[]" class="select2" multiple="multiple" style="width: 100%" autocomplete="off">
                    @foreach($options as $option)
                        <option @if($newses[0]->categories()->select()->where('u_id', $option->u_id)->first()) selected @endif value="{{ $option->u_id }}">{{ $option->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">


        @include('admin.forms.file_image', ['label' => 'picture',
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