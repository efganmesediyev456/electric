
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
                <div class="item slide{{ $key }} active">
                    <div class="row">
                        <div class="container">
                            <div class="col-md-4 col-sm-5 text-center hidden-sm hidden-md hidden-lg"> <img data-animation="animated zoomInLeft" src="images/{{$sliders[0]->image}}" alt=""> </div>
                            <div class="col-md-8 col-sm-7 text-left">
                                <h1 data-animation="animated bounceInLeft" class="">Welcome To <span>Best Electrical Services</span></h1>
                                <p data-animation="animated bounceInLeft" class="">Lorem Ipsum is simply dummy text of the industry<span> industry's standard dummy text.</span></p>
                                <a class="btn btn-hero" data-animation="animated bounceInLeft" href="contact.html">Contact Us</a>
                            </div>
                            <div class="col-md-4 col-sm-5 text-right hidden-xs"> <img data-animation="animated zoomInLeft" src="{{ route('home')}}/images/{{$slider->image}}" alt=""> </div>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>
            <!-- End Wrapper for slides--> <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i><span class="sr-only">Next</span> </a>
        </div>
    </div>
</div>