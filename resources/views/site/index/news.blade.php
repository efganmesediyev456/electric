<section class="latest__block ptb ptb-sm-80 gray-bg">
    <div class="container">
        <div class="row text-center pb-50 pb-xs-30">
            <div class="col-md-12">
                <div class="heding_sec">
                    <h2>@lang('site.news_index')</h2>
                    <span class="bot_line"></span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($news as $item)
            <div class="col-md-4 mb-sm-30 mb-xs-30">
                <div class="img-scale">
                    <figure>
                        <img src="images/{{ $item->image }}" alt="{{ $item->title }}">
                    </figure>
                    <div class="latest__block-post">
                        <div class="meta-post">
                            {{ date('d.m.Y', strtotime($item->created_at)) }}
                        </div>
                        <h3 class="latest__block-title"><a href="{{ route('home.news_detail',[$item->lng->short_name, $item->name]) }}" title="Nevroloqların Milli Assosiasiyasının üzvləri ilə görüş">{{ $item->title }}</a></h3>
                        <p>
                            {{ $item->description }}
                        </p>
                        <div class="flat-link flat-arrow sm  ">
                            <a href="{{ route('home.news_detail',[$item->lng->short_name, $item->name]) }}" class="more_btn__block">@lang('site.more') <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>