@foreach($menus as $menu)

    <li>
        <a href="{{ $menu->url() }}">{{ $menu->title }}
            @if($menu->hasChildren())
                <i class="fa fa-circle"></i>
            @endif
        </a>
        @if($menu->hasChildren())

            <ul class="dropdown">
                <li>
                    @include('site.index.menu',['menus'=>$menu->children()])
                </li>
            </ul>
        @endif
    </li>
@endforeach


{{--<li class="active"><a href="index.html">Home</a></li>--}}
{{--<li><a href="about-us.html">About US</a></li>--}}
{{--<li><a href="#">Services<i class="fa fa-circle"></i></a>--}}
    {{--<ul class="dropdown">--}}
        {{--<li><a href="services.html">Services</a></li>--}}
        {{--<li><a href="service-details.html">Service details</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}
{{--<li><a href="#">Pages<i class="fa fa-circle"></i></a>--}}
    {{--<ul class="dropdown">--}}
        {{--<li><a href="about-us.html">About Us</a></li>--}}
        {{--<li><a href="gallery.html">Gallery</a></li>--}}
        {{--<li><a href="our-team.html">Our Team</a></li>--}}
        {{--<li><a href="faq.html">FAQ</a></li>--}}
        {{--<li><a href="testimonials.html">Testimonials</a></li>--}}
        {{--<li><a href="404.html">404</a></li>--}}
        {{--<li><a href="coming-soon.html">Coming Soon</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}
{{--<li><a href="#">Blog<i class="fa fa-circle"></i></a>--}}
    {{--<ul class="dropdown">--}}
        {{--<li><a href="our-blog.html">Our Blog</a></li>--}}
        {{--<li><a href="single-blog.html">Single Blog</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}
{{--<li><a href="contact.html">Contact</a></li>--}}