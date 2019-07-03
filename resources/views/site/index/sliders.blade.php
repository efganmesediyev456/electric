
<div class="banner-wrapper">
    <div id="first-slider" class="">
        <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- Item 1 -->
                @foreach($sliders as $key=>$slider)
                <div class="item {{'slide'.($key+1)}}

                        @if($key==0)
                        {{'active'}}
                        @endif

                        ">
                    <div class="row">
                        <div class="container">
                            <div class="col-md-4 col-sm-5 text-center hidden-sm hidden-md hidden-lg"> <img data-animation="animated zoomInLeft" src="images/{{$slider->image}}" alt=""> </div>
                            <div class="col-md-8 col-sm-7 text-left">
                                <h1 data-animation="animated bounceInLeft" class="">{{$slider->text_bir}}<span>{{$slider->text_iki}}</span></h1>
                                <p data-animation="animated bounceInLeft" class="">{{$slider->text_uc}}</p>
                                <a class="btn btn-hero" data-animation="animated bounceInLeft" href="{{route('home').'/'.$lng.'/'.$slider->button_path}}">{{$slider->button_text}}</a>
                            </div>
                            <div class="col-md-4 col-sm-5 text-right hidden-xs"> <img data-animation="animated zoomInLeft" src="images/{{$slider->image}}" alt=""> </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Item 2 -->

                <!-- Item 3 -->

            </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i><span class="sr-only">Next</span> </a>
        </div>
    </div>
</div>