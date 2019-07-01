@extends('admin.layouts.admin')

@section('title', 'Languages')

@section('content')
    <div class="row x_panel">
        {{ Form::open(['route'=>['admin.lngs.update', 'lng'=>$lng],'enctype'=>'multipart/form-data', 'method' => 'put','class'=>'form-horizontal form-label-left']) }}
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="short_name">
                    Dilin kodu
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="short_name" type="text"
                           class="form-control col-md-7 col-xs-12 @error('short_name') parsley-error @enderror"
                           name="short_name" value="{{ $lng->short_name }}" required>
                    @error('short_name')
                    <ul class="parsley-errors-list filled">
                        {{ $message }}
                    </ul>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="org_name">
                    Adı
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="org_name" type="text"
                           class="form-control col-md-7 col-xs-12 @error('org_name') parsley-error @enderror"
                           name="org_name" value="{{ $lng->org_name }}" required>
                    @error('org_name')
                    <ul class="parsley-errors-list filled">
                        {{ $message }}
                    </ul>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="form-group">
                <label for="icon" class="control-label col-md-3 col-sm-3 col-xs-12">Icon</label>
                <input accept="image/*" type="file" value="{{ $lng->icon }}" name="icon" class="col-md-7 col-xs-12 @error('icon') parsley-error @enderror">
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="default">
                    Əsas dil
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="default" type="checkbox" @if($lng->default) checked @endif value="{{ $lng->default }}" class="col-md-7 col-xs-12"
                           name="default">
                    @error('default')
                    <ul class="parsley-errors-list filled">
                        {{ $message }}
                    </ul>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> {{ __('views.admin.users.edit.cancel') }}</a>
                <button type="submit" class="btn btn-success"> {{ __('views.admin.users.edit.save') }}</button>
            </div>
        </div>
        {{Form::close()}}
    </div>
@endsection