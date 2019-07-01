@extends('admin.layouts.admin')

@section('title', 'Languages')

@section('content')
    <div class="row x_panel">
        @include('admin.forms.lng_selector', ['lngs'=>$lngs])
        {{ Form::open(['route'=>['admin.menus.store'],'enctype'=>'multipart/form-data', 'method' => 'post', 'class'=>'form-horizontal form-label-left']) }}
        @foreach($lngs as $lng)
            <div class="row lng-form" id="{{ $lng->u_id }}" @if(!$lng->default) style="display: none" @endif>

                @include('admin.forms.number', ['label'=>'Ordering',
                'name'=>'ordering',
                'value'=>old('ordering'.$lng->u_id),
                'lng'=>$lng,
                'required'=>$lng->default])

                @include('admin.forms.text', ['label' => 'Title',
                'name'=>'title',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default])

                @include('admin.forms.text', ['label' => 'Description',
                'name'=>'description',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default])

                @include('admin.forms.text', ['label' => 'Keyword',
                'name'=>'keyword',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default])

                @include('admin.forms.text', ['label' => 'Name',
                'name'=>'name',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default])

                @include('admin.forms.ckeditor', ['label' => 'Text',
                'name'=>'text',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>0])

                @include('admin.forms.text', ['label' => 'Url tag',
                'name'=>'url_tag',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default])

            </div>
        @endforeach

        @include('admin.forms.file_image', ['label' => 'Picture',
                'name'=>'picture',
                'required'=>1])

        @include('admin.forms.file_image', ['label' => 'Arxa fon',
                'name'=>'bg_image',
                'required'=>1])


        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sub_id">
                    Alt menu
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select required class="select2_group form-control" name="sub_id" id="sub_id">
                        <option value="0">---</option>
                        @foreach($menus as $option)
                            <option value="{{ $option->u_id }}">{{ $option->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary"
                   href="{{ URL::previous() }}"> {{ __('views.admin.users.edit.cancel') }}</a>
                <button type="submit"
                        class="btn btn-success"> {{ __('views.admin.users.edit.save') }}</button>
            </div>
        </div>
        {{ Form::close()}}
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