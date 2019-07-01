<section class="top_section__block">
    <div class="container">
        <div class="row">
            @foreach($abouts as $about)
            <div class="col-md-4 col-sm-12">
                <div class="single_top__block">
                    <div class="icon-box__block">
                        <i class="flaticon-stethoscope"></i>
                    </div>
                    <div class="single_text__block">
                        <h3>{{ $about->title }}</h3>
                        <p>
                            {!! $about->description !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>