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

                <div class="page-breadcrumb"><a
                            href="{{ route('home') }}">@lang('site.esas')</a>/<span>{{ $seo->title }}</span></div>

            </div>

        </div>

    </section>



    <!-- End Intro Section -->



    <!-- Blog Post Section -->

    <section class="ptb ptb-sm-80">

        <div class="container">

            <div class="row">

                <!-- Post Item -->

                <div class="col-sm-9">

                    <div class="row">

                        <div class="col-md-12 blog-post-hr">
                            @foreach($newses as $item)

                                <div class="blog-post mb-45">

                                    <div class="post-media"><img src="{{ route('home') }}/images/{{ $item->image }}"
                                                                 alt="{{ $item->title }}"/> <span
                                                class="event-calender blog-date"> {{ date('d', strtotime($item->created_at)) }} <span>{{ date('M', strtotime($item->created_at)) }}</span> </span>
                                    </div>

                                    <div class="post-meta"><span>@lang('site.by') <a>{{ $item->user->name }}</a>

                                    <div class="post-more-link pull-right">

                                        <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i
                                                        class="fa fa-facebook"></i> </a> <a href="#"
                                                                                            class="twitter-icon"> <i
                                                        class="fa fa-twitter"></i> </a> <a href="#"
                                                                                           class="googleplus-icon"> <i
                                                        class="fa fa-google-plus"></i> </a> <a href="#"
                                                                                               class="linkedin-icon"> <i
                                                        class="fa fa-linkedin"></i> </a></div>

                                        <a class="btn btn-md btn-color-line xs-hidden"> <i
                                                    class="ion-android-share-alt"></i></a>
                                    </div>

                                    </div>

                                    <div class="post-header">

                                        <h2>
                                            <a href="{{ route('home.news_detail', [$item->lng->short_name, $item->name]) }}">{{ $item->title }}</a>
                                        </h2>

                                    </div>

                                    <div class="post-entry">

                                        {!! $item->description !!}

                                    </div>

                                    <div class="post-more-link pull-left"><a
                                                href="{{ route('home.news_detail', [$item->lng->short_name, $item->name]) }}"
                                                class="btn btn-md btn-color-line">@lang('site.read_more')</a></div>

                                </div>

                                <hr/>
                            @endforeach

                        </div>

                    </div>


                    <!-- Pagination Nav -->

                    <div class="pagination-nav text-left mt-60 mtb-xs-30">

                        <ul>
                            @if($newses->currentPage() != 1)
                                <li><a href="{{ $newses->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
                            @endif
                            @for($i = 1; $i<=$newses->lastPage(); $i++)
                                @if($newses->currentPage() == $i)
                                    <li class="active"><a>{{ $i }}</a></li>
                                @else
                                    <li><a href="{{ $newses->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endfor
                            @if($newses->currentPage() != $newses->lastPage())
                                <li><a href="{{ $newses->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
                            @endif
                        </ul>

                    </div>

                    <!-- End Pagination Nav -->


                </div>

                <!-- End Post Item -->


                <!-- Sidebar -->

                <div class="col-sm-3 mt-sm-60">

                    <div class="sidebar-widget">

                        <h5>@lang('site.search')</h5>

                        <div class="widget-search pt-15">
                            <form action="{{ route('search', app()->getLocale()) }}" method="get">
                            <input class="form-full input-lg" type="text" value="" placeholder="@lang('site.burada_axtar')"
                                   name="query" id="query">
                            </form>
                        </div>

                    </div>

                    <div class="sidebar-widget">

                        <h5>@lang('site.last_visits')</h5>

                        <hr>

                        <ul class="widget-post pt-15">

                            @foreach($randNewses as $randItem)
                                <li><a href="{{ route('home.news_detail', [$randItem->lng->short_name, $randItem->name]) }}"
                                       class="widget-post-media"> <img
                                                src="{{ route('home') }}/images/{{ $randItem->image }}"
                                                alt="{{ $randItem->title }}"> </a>

                                    <div class="widget-post-info">

                                        <h6>
                                            <a href="{{ route('home.news_detail', [$randItem->lng->short_name, $randItem->name]) }}">{{ $randItem->title }}</a>
                                        </h6>

                                        <div class="post-meta"><span></span>
                                            <span>{{ date('d.M.Y', strtotime($randItem->created_at)) }}</span></div>

                                    </div>

                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
@section('footer')
    {!! $footer !!}
@endsection