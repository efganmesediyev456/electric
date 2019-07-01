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

    <div class="clearfix"></div>

    <!-- End Intro Section -->



    <!-- Blog Post Section -->

    <section class="ptb ptb-sm-80">

        <div class="container">

            <div class="row">

                <!-- Post Bar -->


                <div class="col-sm-9 blog-post-hr post-section">


                    <div class="blog-post mb-30">
                        @if($advert)

                        <div class="post-meta"><span>@lang('site.by') <a>{{ $advert->user->name }}</a>,</span>

                            <div class="post-more-link pull-right">

                                <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a> <a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a> <a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a> <a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a></div>

                                <a class="btn btn-md btn-color-line "> <i class="ion-android-share-alt"></i></a>
                            </div>

                        </div>

                        <div class="post-header">

                            <h2>{{ $advert->title }}</h2>

                        </div>

                        <div class="post-media"> <img src="{{ route('home') }}/images/{{ $advert->image }}" alt=""> <span class="event-calender blog-date">{{ date('d', strtotime($advert->created_at)) }} <span>{{ date('M', strtotime($advert->created_at)) }}</span> </span> </div>

                        <div class="post-entry">
                            {!! $advert->text !!}
                        </div>
                        @else
                            <h2>@lang('site.ad_not_found')</h2>
                        @endif
                    </div>


                    <hr />

                </div>

                <!-- End Post Bar -->



                <!-- Sidebar -->

                <div class="col-sm-3 mt-sm-60">

                    <div class="sidebar-widget">

                        <h5>AXTAR</h5>

                        <div class="widget-search pt-15">

                            <form action="{{ route('search', app()->getLocale()) }}" method="get">
                                <input class="form-full input-lg" type="text" value="" placeholder="Search Here"
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

                <!-- End Sidebar -->

            </div>

        </div>

    </section>

    <!-- End Blog Post Section -->



    <!-- Post Next Prev Bar -->
    @if($advert)

    <section class="mb-60">

        <div class="container">

            <div class="item-nav">
                @if($prevAdvert)
                <a href="{{ route('home.advert',[$prevAdvert->lng->short_name, $prevAdvert->url_tag]) }}" class="item-prev">

                    <div class="prev-btn"><i class="fa fa-angle-left"></i></div>

                    <div class="item-prev-text ">

                        <h6>@lang('site.prev')</h6>

                    </div>

                </a>
                @endif
                    <a class="item-all-view">

                    <h6>{{ $seo->title }}</h6>

                </a>
                    @if($nextAdvert)
                    <a href="{{ route('home.advert',[$nextAdvert->lng->short_name, $nextAdvert->url_tag]) }}" class="item-next">

                    <div class="next-btn"><i class="fa fa-angle-right"></i></div>

                    <div class="item-next-text ">

                        <h6>@lang('site.next')</h6>

                    </div>

                </a>
                @endif
            </div>

        </div>

    </section>
@endif
@endsection
@section('footer')
    {!! $footer !!}
@endsection