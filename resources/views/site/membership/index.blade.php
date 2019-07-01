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
                <h1 class="h2">{{ $seo->name }}</h1>
                <div class="page-breadcrumb"><a href="{{route('home')}}">@lang('site.esas')</a>/<span>{{ $seo->name }}</span></div>
            </div>
        </div>
    </section>
    <section class="appointment-section pos-r pt-80">
        <div class="booking-section">
            <div class="container">
                <div class="col-sm-6 col-sm-offset-3 text-center mb-30">
                    <h2>{{ $seo->name }}</h2>
                    <p class="lead">{{ $seo->description }}</p>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="left-block"><img src="{{ route('home') }}/images/appointment.png" alt=""/></div>
                        <div class="right-block ">
                            <div class="appointment">
                                <form action="{{ route('home.membermail', $seo->lng->short_name) }}" method="post">
                                    <div class="form-field-wrapper">
                                        <label for="name">@lang('site.name')</label>
                                        <input type="text" name="name" id="name" class="input-sm form-full">

                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="surname">@lang('site.surname')</label>
                                        <input type="text" name="surname" id="surname" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="fathername">@lang('site.father_name')</label>
                                        <input type="text" name="father" id="fathername" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="date">@lang('site.birth_date')</label>
                                        <input name="date" type="text" class="input-sm form-full datepicker" id="date">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    <h5 style="padding: 0 10px">@lang('site.address_for_contact')</h5>
                                    <div class="form-field-wrapper">
                                        <label for="address">@lang('site.address') </label>
                                        <input name="address" type="text" id="address" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="email">@lang('site.email')</label>
                                        <input name="email" type="email" id="email" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="mobile">@lang('site.phone')</label>
                                        <input name="mobile" type="number" id="mobile" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="faks">@lang('site.faks')</label>
                                        <input name="faks" type="text" id="faks" class="input-sm form-full">
                                    </div>
                                    <h5 style="padding: 0 10px">@lang('site.work_place')</h5>
                                    <div class="form-field-wrapper">
                                        <label for="work_place">@lang('site.name_i')</label>
                                        <input name="name_i" type="text" id="work_place" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="place">@lang('site.place') </label>
                                        <input name="place" type="text" id="place" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="phone">@lang('site.phone') </label>
                                        <input name="w_phone" type="number" id="phone" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="w_faks">@lang('site.faks') </label>
                                        <input name="w_faks" type="text" id="w_faks" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="w_pos">@lang('site.position') </label>
                                        <input name="w_pos" type="text" id="w_pos" class="input-sm form-full">
                                    </div>
                                    <div class="form-field-wrapper">
                                        <label for="speciality">@lang('site.speciality') </label>
                                        <input name="w_spec" type="text" id="speciality" class="input-sm form-full">
                                        @csrf
                                    </div>
                                    {{--<div class="form-group checkbox-field">
                                        <label for="check_box" class="text-small">
                                            <input name="check" type="checkbox" id="check_box" required>
                                            <span class="ion-ios-checkmark-empty22 custom-check"></span> @lang('site.accept_nizam')</label>
                                    </div>--}}
                                    <div class="form-field-wrapper mt-40">
                                        <button name="submit" id="submit" type="submit"
                                                class="btn btn-md btn-color-line input-sm form-full">@lang('site.send')
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    {!! $footer !!}
@endsection