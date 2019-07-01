<div class="top-part__block ptb-15">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <p>
                     @lang('site.welcome')
                </p>
            </div>
            <div class="col-sm-4 lng-box">
                @foreach($lngs as $lng)
                    <a href="{{ route('home') }}/{{ $lng->short_name }}" title="{{ $lng->short_name }}">
                        <img @if($lng->short_name == app()->getLocale()) class="active-lang"  @endif  src="{{ route('home') }}/images/{{ $lng->icon }}" alt="">
                    </a>
                @endforeach
            </div>
            <div class="col-sm-3">
                <div class="social-link__block text-right">
                    @foreach($socials as $social)
                        <a href="{!! $social->link !!}"><img src="{{ route('home') }}/images/{{ $social->icon }}"></a>
                    @endforeach
                    {{--<a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-linkedin"></i></a>--}}
                    <a href="#" class="search-header"><i class="fa fa-search"></i>
                        <div class="search-input-header">
                        <form action="{{ route('search', app()->getLocale()) }}" method="get">
                            <input type="text" placeholder="@lang('site.search')"
                                   name="query">
                        </form>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>