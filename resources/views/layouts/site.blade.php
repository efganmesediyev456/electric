<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seo->title }}</title>
    <meta property="og:title" content="{{ $seo->title }}" />
    <meta property="og:image" content="{{ route('home') }}/images/{{ $seo->picture }}" />
    <meta property="og:description" content="{{ $seo->description }}" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ionicons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet" type="text/css">
    <!--Light box-->
    <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css">
    <!-- carousel -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="{{ asset('css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootsnav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index1.css') }}" rel="stylesheet">
    <!--Theme Color-->
    <link href="{{ asset('css/default.css') }}" rel="stylesheet" id="theme-color" type="text/css">
</head>

<body>
    <!--loader-->
    <div id="preloader">
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>
    <!--loader-->

    <!--Header Section Start Here
		==================================-->
    <header class="header__block">
        @yield('topbar')
        @yield('general_header')
        <div class="navgation__block stricky-header__top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu__block">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                            </div>

                            <!--===Navigation===-->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav mobile-menu">
                                    @yield('menu')
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header End Here-->

    <!--  Main Banner Start Here-->
    @yield('sliders')
    <!--top Section start Here-->
    @yield('abouts')
    @yield('team')
    @yield('news')
    @section('content')
        <!--top Section End Here-->
    <!--About Section Start Here-->


    <!--Blog section Start-->

    <!--Blog section End-->

    <!--form Section-->
    <section class="bottom-section ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-sm-30 mb-xs-30">
                    <div class="contact_block-text">
                        <strong>@lang('site.index_sual')</strong>
                        <p>
                            @lang('site.contect_with_us')
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    {{ Form::open(['route'=>['home'], 'method' => 'post']) }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="name" type="text" name="name" placeholder="@lang('site.name')">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="email" type="text" name="email" placeholder="@lang('site.email')">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-field">
                                    <textarea class="form-full" id="message" rows="7" name="message" placeholder="@lang('site.message')"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-xs-15 text-right">
                                <button class="btn-text submit_qury" type="submit" id="submit">
                                    @lang('site.send')
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
    @show
    <!--form Section End-->
    <!--Footer Section Start-->
    @yield('footer')
    <!--Footer Section End-->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.easing.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-ui.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl.carousel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.appear.js') }}" type="text/javascript"></script>

    <!-- revolution Js -->

    <script type="text/javascript" src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.revolution.js') }}"></script>

    <!-- revolution Js -->

    <script src="{{ asset('js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/appointment-index-page.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    @yield('script')
</body>

</html>
