<section class="about-section__block text-center pt-80">
    <div class="container">
        <div class="row text-center pb-50 pb-xs-30">
            <div class="col-md-8 col-md-offset-2">
                <div class="heding_sec">
                    <h2>{{ $team->title }}</h2>
                    <span class="bot_line"></span>
                    <p>
                        {{ $team->description }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="images/{{ $team->image }}" alt="{{ $team->title }}">
            </div>
        </div>
    </div>
</section>