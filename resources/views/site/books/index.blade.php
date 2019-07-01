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

                <h2 class="h2">{{$seo->title}}</h2>

                <div class="page-breadcrumb"> <a>@lang('site.esas')</a>/<span>{{$seo->title}}</span> </div>

            </div>

        </div>

    </section>

    <!-- Intro Section -->

    <div class="faq ptb-80">

        <div class="container">

            <div class="row text-center">

                <div class="col-sm-12 mb-30">

                    <h2>{{$seo->title}}</h2>

                </div>

            </div>

            <div class="row">

                <div class="col-sm-12 anim-section mb-30">

                    <div class="panel-group" id="accordion">
                        @foreach($books as $book)

                        <div class="panel panel-default">

                            <div class="panel-heading">

                                <h4 class="panel-title">

                                    <div class="fg">{{ $book->name }} <a href="{{ route('home.books.download',[$book->lng->short_name, $book->name]) }} "><i class="fa fa-plus collape-plus"></i></a><a target="_blank" href="{{ route('home.books.read',[$book->lng->short_name, $book->name]) }}"><i class="fa fa-plus collape-plus"></i></a></div>

                                </h4>

                            </div>

                        </div>
                        @endforeach

                    </div>

                </div>

                <div class="pagination-nav text-left mt-60 mtb-xs-30">

                    <ul>
                        @if($books->currentPage() != 1)
                            <li><a href="{{ $books->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
                        @endif
                        @for($i = 1; $i<=$books->lastPage(); $i++)
                            @if($books->currentPage() == $i)
                                <li class="active"><a>{{ $i }}</a></li>
                            @else
                                <li><a href="{{ $books->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endfor
                        @if($books->currentPage() != $books->lastPage())
                            <li><a href="{{ $books->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
                        @endif
                    </ul>

                </div>

            </div>

        </div>
    </div>
@endsection
@section('footer')
    {!! $footer !!}
@endsection