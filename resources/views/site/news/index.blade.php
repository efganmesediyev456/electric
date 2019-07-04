@extends('layouts.site')

@section('topbar')
    {!! $topbar !!}
@endsection
{{--@section('test')--}}
    {{--{!! $test !!}--}}
{{--@endsection--}}

{{--@section('general_header')--}}
    {{--{!! $general !!}--}}
{{--@endsection--}}

{{--@section('menu')--}}
    {{--{!! $menu !!}--}}
{{--@endsection--}}

@section('content')


    <div class="breadcromb-wrapper">
        <div class="breadcromb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcromb-left">
                        <h3>@lang('site.blog')</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcromb-text">
        <div class="container">
            <ul>
                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Blog</li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Our Blog</li>
            </ul>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper news-wrapper">
        <div class="container">
            <div class="row">
                @foreach($newses as $n)
                    <div class="col-md-4 col-sm-6">
                        <div class="news-section-single">
                            <div class="news-img-main">
                                <div class="news-img"><img style="width: 350px;height: 350px;" class="img-responsive" src="{{asset('images/'.$n->image)}}" alt="" data-popupalt-original-title="null" title="{{$n->title}}">
                                    <div class="news-list">
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $n->created_at->format('d-F, Y') }}</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="news-head">
                                <h3>{{$n->description}}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

@endsection
@section('footer')
    {!! $footer !!}
@endsection