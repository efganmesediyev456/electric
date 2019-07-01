<footer>
    <div class="main_footer__block pb-0 pt-60">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer_box__block">
                        <h4>{{ $about->title }}</h4>
                        {!! $about->description !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_box__block">
                        <h4>@lang('site.last_ads')</h4>
                        <ul>
                            @foreach($ads as $ad)
                            <li>
                                <a href="{{ route('home.advert',[$ad->lng->short_name,$ad->url_tag]) }}">{{ $ad->title }}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_box__block address-box">
                        <h4>@lang('site.contact')</h4>
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>
                                    @lang('site.call_us') {{ $general->phone }}
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <a href="mailto:{{ $general->email }}">{{ $general->email }}</a>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    {{ $general->address }}
                                </p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyriight_block ptb-15 mt-25">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('home',[$general->lng->short_name]) }}" class="footer__block-logo"><img src="{{ route('home') }}/images/{{ $general->image }}" alt=""></a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>
                            @lang('site.all_right_reserved') © {{ date('Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>