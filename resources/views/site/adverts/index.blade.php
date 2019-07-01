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

                <h2 class="h2">{{ $seo->name }}</h2>

                <div class="page-breadcrumb"> <a href="{{ route('home') }}">@lang('site.esas')</a>/<span>{{ $seo->name }}</span> </div>

            </div>

        </div>

    </section>

    <!-- Intro Section -->

    <!-- Gallery Section -->

    <div class="gallery ptb">

        <div class="container">

            <div class="row text-center">

                <div class="col-xs-12 mb-30">

                    <h2>{{ $seo->name }}</h2>

                    <p class="lead">{{ $seo->description }}</p>

                </div>

            </div>



            <!--Gallery -->

            <div class="row">

                <div id="gallery" class="isotope gallery">

                    @foreach($adverts as $advert)
                    <div class="item">

                        <div class="gallery-item nf-col-padding">

                            <div class="gallery-item-img"> <img src="{{ route('home') }}/images/{{ $advert->image }}" alt="{{ $advert->title }}" />


                            </div>

                            <div class="gallery-item-info text-left story-title">

                                <h5>{{ $advert->title }}</h5>

                                <p><a href="{{ route('home.advert',[$advert->lng->short_name, $advert->url_tag]) }}">{{ $advert->description }}</a></p>
                                <p>{{ date('d.M.Y', strtotime($advert->created_at)) }}</p>

                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>

            </div>

            <!--End Gallery-->

            <!-- Pagination Nav -->

            <div class="pagination-nav text-center mtb-60 mtb-xs-30">

                <ul>
                    @if($adverts->currentPage() != 1)
                        <li><a href="{{ $adverts->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
                    @endif
                    @for($i = 1; $i<=$adverts->lastPage(); $i++)
                        @if($adverts->currentPage() == $i)
                            <li class="active"><a>{{ $i }}</a></li>
                        @else
                            <li><a href="{{ $adverts->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor
                    @if($adverts->currentPage() != $adverts->lastPage())
                        <li><a href="{{ $adverts->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
                    @endif
                </ul>

            </div>
        </div>

    </div>
@endsection
@section('footer')
    {!! $footer !!}
@endsection