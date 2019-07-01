@extends('admin.layouts.admin')

@section('title', 'Languages')

@section('content')
    <div class="row x_panel">
        @include('admin.forms.lng_selector', ['lngs'=>$lngs])
        {{ Form::open(['route'=>['admin.menus.update', $menusL[0]->u_id],'enctype'=>'multipart/form-data', 'method' => 'put', 'class'=>'form-horizontal form-label-left']) }}
        @foreach($menusL as $menu)
            @if($menu->lng)
            <div class="row lng-form" id="{{ $menu->l_id }}" @if(!$menu->lng->default) style="display: none" @endif>

            @include('admin.forms.number', ['label'=>'Ordering',
            'name'=>'ordering',
            'lng'=>$menu->lng,
            'value'=>$menu->ordering,
            'required'=>0])

                @include('admin.forms.text', ['label' => 'Title',
                'name'=>'title',
                'lng'=>$menu->lng,
                'value'=>$menu->title,
                'required'=>0])

                @include('admin.forms.text', ['label' => 'Description',
                'name'=>'description',
                'lng'=>$menu->lng,
                'value'=>$menu->description,
                'required'=>0])

                @include('admin.forms.text', ['label' => 'Keyword',
                'name'=>'keyword',
                'lng'=>$menu->lng,
                'value'=>$menu->keyword,
                'required'=>0])

                @include('admin.forms.text', ['label' => 'Name',
                'name'=>'name',
                'lng'=>$menu->lng,
                'value'=>$menu->name,
                'required'=>0])

                @include('admin.forms.ckeditor', ['label' => 'Text',
                'name'=>'text',
                'lng'=>$menu->lng,
                'value'=>$menu->text,
                'required'=>0])

                @include('admin.forms.text', ['label' => 'Url tag',
                'name'=>'url_tag',
                'lng'=>$menu->lng,
                'value'=>$menu->url_tag,
                'required'=>0])
            </div>
            @endif
        @endforeach

        @include('admin.forms.file_image', ['label' => 'Picture',
            'name'=>'picture',
            'required'=>0])

        @include('admin.forms.file_image', ['label' => 'Arxa fon',
                'name'=>'bg_image',
                'required'=>0])

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sub_id">
                    Alt menu
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="select2_group form-control" name="sub_id" id="sub_id">
                        <option value="0">---</option>
                        @foreach($menus as $option)
                            <option value="{{ $option->u_id }}"
                                    @if($menu->sub_id == $option->u_id) selected @endif>{{ $option->name }}</option>
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