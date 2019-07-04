@extends('layouts.site')

@section('topbar')
    {!! $topbar !!}
@endsection


@section('content')

    <div class="breadcromb-wrapper">
        <div class="breadcromb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcromb-left">
                        <h3>Single Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcromb-text">
        <div class="container">
            <ul>
                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Blog</li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Single Blog</li>
            </ul>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper blog-single-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="blog-post">
                        <!--Start single blog post-->
                        <div class="single-blog-post">
                            <div class="img-holder"> <img src="{{asset('images/blog-single.jpg')}}" alt=""> </div>
                            <div class="text-holder">
                                <h3 class="blog-title">{{$advert->title}}</h3>
                                <div class="meta-box"> <span class="thm-clr">Post Info</span>
                                    <ul class="meta-info">
                                        <li><span class="thm-clr">By:</span> <a href="#">{{$advert->user->name}}</a></li>
                                        <li><span class="thm-clr">On:</span> <a href="#">{{$advert->created_at->format('d-F, Y')}}</a></li>
                                        <li><span class="thm-clr">Category:</span>

                                            @foreach($advert->categories as $cat)
                                            <a href="#">{{$cat->title}}</a>
                                                @endforeach
                                        </li>
                                    </ul>
                                </div>
                                <div class="text">
                                    {!! $advert->text !!}
                                      </div>
                                <!--Start author slogan-->
                                {{--<div class="author-slogan">--}}
                                    {{--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>--}}
                                    {{--<div class="border-box"></div>--}}
                                    {{--<div class="author-info">--}}
                                        {{--<h3>Richard Venanda</h3>--}}
                                        {{--<span class="thm-clr">CEO/Founder</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <!--End author slogan-->
                                <!--Start bottom content box-->
                                {{--<div class="bottom-content-box">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-6">--}}
                                            {{--<div class="img-box"> <img src="{{asset('images/caption-img.jpg')}}" alt=""> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-6">--}}
                                            {{--<div class="text-box">--}}
                                                {{--<p class="mar-btm">Explain you how this mistaken idea denouncing pleasure will give you a complete account of the system, and expound the the pain of itself occur great.</p>--}}
                                                {{--<p>The master-builder of human happiness which toil and pain can procure him some seds great pleasure take a of ever.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <!--End bottom content box-->
                                <!--Start tag box-->
                                {{--<div class="tag-box">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12">--}}
                                            {{--<div class="left pull-left">--}}
                                                {{--<ul>--}}
                                                    {{--<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>--}}
                                                    {{--<li><a href="#">18</a></li>--}}
                                                    {{--<li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a></li>--}}
                                                    {{--<li><a href="#">6</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<div class="tag pull-right">--}}
                                                {{--<p><span>Tags:</span> Electric, Repair, Maintenance</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <!--End tag box-->
                            </div>
                        </div>
                        <!--End single blog post-->
                        <!--Start author box-->
                        {{--<div class="author-box">--}}
                            {{--<div class="title">--}}
                                {{--<h3>About Author</h3>--}}
                            {{--</div>--}}
                            {{--<div class="inner-content">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                        {{--<div class="img-holder"> <img src="{{asset('images/author.jpg')}}" alt=""> </div>--}}
                                        {{--<div class="text-holder">--}}
                                            {{--<h3>Lilly Anderson</h3>--}}
                                            {{--<p>We will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>--}}
                                            {{--<ul class="social-link">--}}
                                                {{--<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                                                {{--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                                                {{--<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>--}}
                                                {{--<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!--End author box-->
                        <!--Start comment box-->
                        {{--<div class="inner-comment-box">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="title">--}}
                                        {{--<h3>Read Comments</h3>--}}
                                    {{--</div>--}}
                                    {{--<!--Start single comment box-->--}}
                                    {{--<div class="single-comment-box">--}}
                                        {{--<div class="img-holder"> <img src="{{asset('images/comment1.jpg')}}" alt=""> </div>--}}
                                        {{--<div class="text-holder">--}}
                                            {{--<div class="top">--}}
                                                {{--<div class="date pull-left">--}}
                                                    {{--<h5>Steven Rich &ndash; Sep17, 2016:</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="review-box pull-right">--}}
                                                    {{--<ul>--}}
                                                        {{--<li><i class="fa fa-star"></i></li>--}}
                                                        {{--<li><i class="fa fa-star"></i></li>--}}
                                                        {{--<li><i class="fa fa-star"></i></li>--}}
                                                        {{--<li><i class="fa fa-star"></i></li>--}}
                                                        {{--<li><i class="fa fa-star"></i></li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="text">--}}
                                                {{--<p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!--End single comment box-->--}}
                                    {{--<!--Start single comment box-->--}}
                                    {{--<div class="single-comment-box mar-left">--}}
                                        {{--<div class="img-holder"> <img src="{{asset('images/comment2.jpg')}}" alt=""> </div>--}}
                                        {{--<div class="text-holder">--}}
                                            {{--<div class="top">--}}
                                                {{--<div class="date pull-left">--}}
                                                    {{--<h5>William Cobus &ndash; Aug21, 2016:</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="review-box pull-right">--}}
                                                    {{--<ul>--}}
                                                        {{--<li><i class="fa fa-star"></i></li>--}}
                                                        {{--<li><i class="fa fa-star"></i></li>--}}
                                                        {{--<li><i class="fa fa-star"></i></li>--}}
                                                        {{--<li><i class="fa fa-star"></i></li>--}}
                                                        {{--<li><i class="fa fa-star-half-o"></i></li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="text">--}}
                                                {{--<p>There anyone who loves or pursues or desires to obtain pain itself, because it is pain, because occasionally circumstances occur some great pleasure.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!--End single comment box-->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!--End comment box-->
                        <!--Start add comment box-->
                        {{--<div class="add-comment-box">--}}
                            {{--<div class="title">--}}
                                {{--<h3>Add Your Comments</h3>--}}
                            {{--</div>--}}
                            {{--<div class="add-rating-box">--}}
                                {{--<h4>Your Rating</h4>--}}
                                {{--<ul>--}}
                                    {{--<li> <a href="#"> <i class="fa fa-star"></i> </a> </li>--}}
                                    {{--<li> <a href="#"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </a> </li>--}}
                                    {{--<li> <a href="#"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </a> </li>--}}
                                    {{--<li> <a href="#"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </a> </li>--}}
                                    {{--<li> <a href="#"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </a> </li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<form id="add-comment-form" action="#" novalidate>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<div class="field-label">First Name*</div>--}}
                                                {{--<input name="fname" value="" placeholder="" required aria-required="true" type="text">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<div class="field-label">Last Name*</div>--}}
                                                {{--<input name="lname" value="" placeholder="" required aria-required="true" type="text">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<div class="field-label">Email*</div>--}}
                                                {{--<input name="form_email" value="" placeholder="" required aria-required="true" type="email">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<div class="field-label">Your Comments*</div>--}}
                                                {{--<textarea name="comment" placeholder="" required aria-required="true"></textarea>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<button class="btn-one thm-bg-clr" type="submit">Submit Now</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        <!--End add comment box-->
                    </div>
                </div>

                <!--Start sidebar Wrapper-->
                <div class="col-xl-4 col-lg-5 col-md-9 col-sm-12">
                    <div class="sidebar-wrapper">
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <form class="search-form" action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->




                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Categories</h3>
                            </div>

                            <ul class="categories clearfix">
                                @foreach($categories as $c)
                                <li><a href="#">{{$c->title}} <span>({{$c->newses->count()}})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar comment">
                            <div class="sec-title">
                                <h3>Recent Comments</h3>
                            </div>
                            <div class="comment-box">
                                <!--Start single item-->
                                <div class="single-item">
                                    <div class="date-box">
                                        <p>August 17, 2017</p>
                                    </div>
                                    <div class="single-box">
                                        <div class="left-content pull-left">
                                            <div class="inner-content">
                                                <div class="img-holder"> <img src="{{asset('images/comment-1.jpg')}}" alt="">
                                                    <div class="overlay-style-one">
                                                        <div class="box">
                                                            <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="title-holder">
                                                    <h5>Mark Mitchael</h5>
                                                    <p>It is long established fact</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-content pull-right">
                                            <div class="read-comment"> <a href="#"><span class="fa fa-long-arrow-right"></span></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="single-item mar-top">
                                    <div class="date-box">
                                        <p>July 08, 2017</p>
                                    </div>
                                    <div class="single-box">
                                        <div class="left-content pull-left">
                                            <div class="inner-content">
                                                <div class="img-holder"> <img src="{{asset('images/comment-2.jpg')}}" alt="">
                                                    <div class="overlay-style-one">
                                                        <div class="box">
                                                            <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="title-holder">
                                                    <h5>Steve Bowerman</h5>
                                                    <p>When looking at its layout</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-content pull-right">
                                            <div class="read-comment"> <a href="#"><span class="fa fa-long-arrow-right"></span></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Popular Post</h3>
                            </div>
                            <ul class="popular-post">
                                <li>
                                    <div class="img-holder"> <img src="{{asset('images/popular-post-1.jpg')}}" alt="">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h5 class="post-title"><a href="#">Lorem Ipsum is simply dummy <br>text of the printing?</a></h5>
                                        <h6 class="post-date"><i class="fa fa-calendar thm-clr" aria-hidden="true"></i> April 18, 2017</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder"> <img src="{{asset('images/popular-post-2.jpg')}}" alt="">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h5 class="post-title"><a href="#">Lorem Ipsum is simply dummy <br>text of the printing?</a></h5>
                                        <h6 class="post-date"><i class="fa fa-calendar thm-clr" aria-hidden="true"></i> February 14, 2017</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder"> <img src="{{asset('images/popular-post-3.jpg')}}" alt="">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h5 class="post-title"><a href="#">Lorem Ipsum is simply dummy <br>text of the printing?</a></h5>
                                        <h6 class="post-date"><i class="fa fa-calendar thm-clr" aria-hidden="true"></i> January 16, 2017</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single-sidebar-->
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Tags</h3>
                            </div>
                            <ul class="popular-tag">
                                <li><a href="#">Electric</a></li>
                                <li><a href="#">Repair</a></li>
                                <li><a href="#">Maintainance</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Electric</a></li>
                                <li><a href="#">Repair</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                        <!--End single-sidebar-->
                    </div>
                </div>
                <!--End Sidebar Wrapper-->
            </div>
        </div>
    </div>
@endsection
@section('footer')
    {!! $footer !!}
@endsection