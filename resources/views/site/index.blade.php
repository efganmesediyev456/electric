@extends('layouts.site')

@section('topbar')
    {!! $topbar !!}
@endsection

{{--@section('general_header')--}}
    {{--{!! $general !!}--}}
{{--@endsection--}}

{{--@section('menu')--}}
    {{--{!! $menu !!}--}}
{{--@endsection--}}
@section('sliders')
    {!! $slider !!}
@endsection
@section('abouts')
    {!! $about !!}
@endsection


@section('services')
    {!! $services !!}
@endsection


@section('team')
    {!! $team !!}
@endsection

@section('news')
    {!! $news !!}
@endsection

{{--@section('test')--}}
    {{--{!! $test !!}--}}
{{--@endsection--}}

@section('content')
    @parent
@endsection

@section('footer')
    {!! $footer !!}
@endsection