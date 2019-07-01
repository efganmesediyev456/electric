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

                <div class="page-breadcrumb"><a>@lang('site.esas')</a>/<span>{{ $seo->title }}</span></div>

            </div>

        </div>

    </section>

    <!-- End Intro Section -->

    <!-- Contact Section -->

    <section class="ptb ptb-sm-80">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2 text-center">

                    <h2>{{ $seo->title }}</h2>

                    <p class="lead">{{ $seo->description }}</p>

                </div>

            </div>

            <div class="row">

                <div class="col-sm-12 contact pb-60 pt-30">

                    <div class="row text-center">

                        <div class="col-sm-4 pb-xs-30"><i class="ion-android-call icon-circle pos-s"></i> <a
                                    href="tel: {{ $about->phone }}" class="mt-15 i-block">{{ $about->phone }}</a></div>

                        <div class="col-sm-4 pb-xs-30"><i class="ion-ios-location icon-circle pos-s"></i>

                            <p class="mt-15">{{ $about->address }}</p>

                        </div>

                        <div class="col-sm-4 pb-xs-30"><i class="ion-ios-email icon-circle pos-s"></i> <a
                                    href="mailto:{{ $about->email }}" class="mt-15 i-block">{{ $about->email }}</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Map Section -->

        <div class="map">

            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.9417795957247!2d49.81309535050543!3d40.43228806251659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403087cd4c638f7f%3A0x47df4c6edcc33a55!2zMzEgWcmZaHlhIEjDvHNleW5vdiwgQmFrxLEsINCQ0LfQtdGA0LHQsNC50LTQttCw0L0!5e0!3m2!1sru!2s!4v1561306939137!5m2!1sru!2s"  frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>

        <!-- Map Section -->

        <div class="container contact-form pt-80 mt-up">

            <div class="row">

                <div class="col-sm-12">

                    <h4>@lang('site.index_sual')</h4>

                    <p>@lang('site.contect_with_us')</p>

                    <!-- Contact FORM -->

                    {{ Form::open(['route'=>['home'], 'method' => 'post','class'=>'contact-form mt-45']) }}

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="row">

                                <div class="form-field col-sm-6">

                                    <input class="input-sm form-full" id="name" type="text" name="name"
                                           placeholder="@lang('site.name')">

                                </div>

                                <div class="form-field col-sm-6">

                                    <input class="input-sm form-full" id="email" type="text" name="email"
                                           placeholder="@lang('site.email')">

                                </div>

                            </div>
                        </div>

                        <div class="col-sm-12">

                            <div class="form-field">

                                <textarea class="form-full" id="message" rows="7" name="message"
                                          placeholder="@lang('site.message')"></textarea>

                            </div>

                        </div>

                        <div class="col-sm-12 mt-30">

                            <button class="btn btn-md btn-color-line" type="submit" id="submit"
                                    name="button">@lang('site.send')</button>

                        </div>

                    </div>

                {{ Form::close() }}

                <!-- END Contact FORM -->

                </div>

            </div>

        </div>

    </section>
@endsection
@section('footer')
    {!! $footer !!}
@endsection