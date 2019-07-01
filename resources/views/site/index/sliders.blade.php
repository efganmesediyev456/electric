<div class="main-banner banner_up">
    <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        <div id="rev_slider_34_1" class="rev_slider fullwidthabanner" data-version="5.0.7">
            <ul>
                <!-- SLIDE  -->
                @foreach($sliders as $key=>$slider)
                <li data-index="rs-{{ $key }}">
                    <!-- MAIN IMAGE -->
                    <img src="images/{{ $slider->image }}" alt="" class="rev-slidebg">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title tp-resizeme " id="slide-129-layer-1" data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']" data-y="['top','top','top','center']" data-voffset="['165','135','105','0']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="['600','600','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="banner-text">
                            <h2>{{ $slider->title }}</h2>
                            <p>
                                {{ $slider->description }}
                            </p>
                            <a class="btn more-btn read-more" href="{{ route('home',[$slider->lng->short_name]) }}/{{ $slider->button_path }}">{{ $slider->button_text }}</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
</div>