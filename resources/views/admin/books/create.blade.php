@extends('admin.layouts.admin')

@section('title', 'Languages')

@section('content')
    <div class="row x_panel">
        {{ Form::open(['route'=>['admin.books.store'],'enctype'=>'multipart/form-data', 'method' => 'post','class'=>'form-horizontal form-label-left']) }}
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group parent">
                @foreach($lngs as $key=>$lng)
                    <div class="col-md-4 col-sm-4 col-xs-6 radio_container">
                        <label>
                            <span class="country @if($key==0) active @endif ">{{ $lng->org_name }}</span>
                            <input type="radio" @if($key==0) checked @endif
                            class="form-control col-md-7 col-xs-12 radio-inline @error('l_id') parsley-error @enderror"
                                   name="l_id" value="{{ $lng->u_id }}" required>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                    name
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="name" type="text"
                           class="form-control col-md-7 col-xs-12 @error('name') parsley-error @enderror"
                           name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <ul class="parsley-errors-list filled">
                        {{ $message }}
                    </ul>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="path">
                    path
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="path" type="file" class="col-md-7 col-xs-12"
                           name="path" required>
                    @error('path')
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