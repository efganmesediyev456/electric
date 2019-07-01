@extends('layouts.site')

@section('topbar')
    {!! $topbar !!}
@endsection

@section('general_header')
    {!! $general !!}
@endsection

@section('menu')
    {!! $menu !!}
@endsection
@section('content')
    <section class="inner-intro bg-img overlay-bg-color light-color parallax parallax-background">

        <div class="container">

            <div class="row title">

                <h2 class="h2">{{ $seo->title }}</h2>

                <div class="page-breadcrumb"> <a>@lang('site.esas')</a>/<span>{{ $seo->title }}</span> </div>

            </div>

        </div>

    </section>

    <!-- Intro Section -->

    <div class="other-assocatoins ptb-80">

        <div class="container">

            <div class="row text-center">

            </div>

            <div class="row">

                <div class="col-sm-12 anim-section mb-30">
                </div>

            </div>
        </div>

    </div>
@endsection
@section('footer')
    {!! $footer !!}
@endsection