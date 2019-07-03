<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Electricshop</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/elektrik/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="{{asset('css/elektrik/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Linear icons CSS-->
    <link href="{{asset('css/elektrik/icon-font.min.css')}}" rel="stylesheet">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{asset('css/elektrik/slicknav.min.css')}}">
    <!-- Owl Carousel -->
    <link href="{{asset('css/elektrik/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/elektrik/owl.theme.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/elektrik/style.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{asset('css/elektrik/animate.css')}}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
    @yield('topbar')
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#" data-popupalt-original-title="null" title="#"></a> </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="navbar navbar-default desktop">
                        <div class="navbar-collapse">
                            <!-- Main Menu -->
                            <ul id="nav" class="nav menu navbar-nav">
                               @yield('menu')
                            </ul>
                            <!-- End Main Menu -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<!-- Banner Wrapper Start -->
@yield('sliders')
<!-- Banner Wrapper End -->
<!-- cta Wrapper Start -->
<div class="cta-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="cta-inner cta-text"> Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you? </div>
            </div>
            <div class="col-sm-5">
                <div class="cta-inner cta"> <img src="images/cta-phone-icon.png" alt="">
                    <h3>Get Free Consultation <span>1-012-345-678</span></h3>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="cta-inner cta-btn"> <a href="#">Call Us Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a> </div>
            </div>
        </div>
    </div>
</div>
<!-- cta Wrapper End -->
<!-- Our Services Start -->
<section class="our-services-wrapper">
    <div class="container">
        <div class="title">
            <h2>Our Services</h2>
            <span class="title-border-color"><i class="fa fa-bolt" aria-hidden="true"></i></span>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-service">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="our-services-icon"> <span><img src="images/services-icon1.png" alt=""></span></div>
                            <div class="our-services-text">
                                <h3>Electrical Maintenance</h3>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-service">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="our-services-icon"> <span><img src="images/services-icon2.png" alt=""></span></div>
                            <div class="our-services-text">
                                <h3>Lighting and Repair</h3>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-service">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="our-services-icon"> <span><img src="images/services-icon3.png" alt=""></span></div>
                            <div class="our-services-text">
                                <h3>Electrical Installation</h3>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-service">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="our-services-icon"> <span><img src="images/services-icon4.png" alt=""></span></div>
                            <div class="our-services-text">
                                <h3>Air Conditioning</h3>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-service">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="our-services-icon"> <span><img src="images/services-icon5.png" alt=""></span></div>
                            <div class="our-services-text">
                                <h3>Electrical Safety</h3>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-service">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="our-services-icon"> <span><img src="images/services-icon6.png" alt=""></span></div>
                            <div class="our-services-text">
                                <h3>Electrical Upgrades</h3>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Services End -->
<!-- About Wrapper Start -->
@yield('abouts')
<!-- About Wrapper End -->
<!-- Join Wrapper Start -->
<div class="join-wrapper">
    <div class="container">
        <h3>Fast Electrician Services <span>Benefits Of Electrician</span></h3>
        <a href="javascript:void(0)">Join Us Now</a>
    </div>
</div>
<!-- Join Wrapper End -->
<!-- Our Team Wrapper Start -->
<section class="our-team-wrapper">
    <div class="container">
        <div class="title">
            <h2>Our Team</h2>
            <span class="title-border-color"><i class="fa fa-bolt" aria-hidden="true"></i></span>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="team-item">
                    <div class="team-item-image"> <img src="images/out-team1.jpg" alt="">
                        <div class="team-item-detail">
                            <div class="team-social-links"> <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
                        </div>
                    </div>
                    <div class="team-item-descr font-alt">
                        <div class="team-item-name">Robin Williams</div>
                        <div class="team-item-role">Founder</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-item">
                    <div class="team-item-image"> <img src="images/out-team2.jpg" alt="">
                        <div class="team-item-detail">
                            <div class="team-social-links"> <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
                        </div>
                    </div>
                    <div class="team-item-descr font-alt">
                        <div class="team-item-name">Robin Williams</div>
                        <div class="team-item-role">Founder</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-item">
                    <div class="team-item-image"> <img src="images/out-team3.jpg" alt="">
                        <div class="team-item-detail">
                            <div class="team-social-links"> <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
                        </div>
                    </div>
                    <div class="team-item-descr font-alt">
                        <div class="team-item-name">Robin Williams</div>
                        <div class="team-item-role">Founder</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-item">
                    <div class="team-item-image"> <img src="images/out-team4.jpg" alt="">
                        <div class="team-item-detail">
                            <div class="team-social-links"> <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
                        </div>
                    </div>
                    <div class="team-item-descr font-alt">
                        <div class="team-item-name">Robin Williams</div>
                        <div class="team-item-role">Founder</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Team Wrapper End -->
<!-- Latest Projects Wrapper Start -->
<section class="latest-projects-wrapper">
    <div class="container">
        <div class="title">
            <h2>Latest Projects</h2>
            <span class="title-border-color"><i class="fa fa-bolt" aria-hidden="true"></i></span>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="project-box border"> <img src="images/latest-projects-icon1.png" alt="">
                    <h3>Electrical Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod voluptatem</p>
                </div>
                <div class="project-box"> <img src="images/latest-projects-icon2.png" alt="">
                    <h3>Electrical Installation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod voluptatem</p>
                </div>
            </div>
            <div class="col-sm-5 hidden-sm">
                <div class="project-box-img"> <img src="images/latest-project-img.png" alt=""> </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="project-box border"> <img src="images/latest-projects-icon3.png" alt="">
                    <h3>Electrical Interior</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod voluptatem</p>
                </div>
                <div class="project-box"> <img src="images/latest-projects-icon4.png" alt="">
                    <h3>Electrical Lighting</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod voluptatem</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Projects Wrapper End -->
<!-- Testimonials Wrapper Start -->
<section class="testimonials-wrapper">
    <div class="container">
        <div class="title">
            <h2>Testimonials</h2>
            <span class="title-border-color"><i class="fa fa-bolt" aria-hidden="true"></i></span>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                <div id="testimonials" class="owl-carousel">
                    <div class="item">
                        <div class="testimonials-main">
                            <div class="testimonials-inner">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                            <div class="testimonials-text">
                                <p class="client-name">Client Name</p>
                                <p>Designation</p>
                            </div>
                            <div class="testimonial-img"> <img src="images/testimonials1.png" alt=""> </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-main">
                            <div class="testimonials-inner">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                            <div class="testimonials-text">
                                <p class="client-name">Client Name</p>
                                <p>Designation</p>
                            </div>
                            <div class="testimonial-img"> <img src="images/testimonials2.png" alt=""> </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-main">
                            <div class="testimonials-inner">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                            <div class="testimonials-text">
                                <p class="client-name">Client Name</p>
                                <p>Designation</p>
                            </div>
                            <div class="testimonial-img"> <img src="images/testimonials3.png" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Wrapper End -->
<!-- Counters Wrapper Start -->
<div class="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter">
                    <div class="counter-icon-box"><img src="images/counter-icon1.png" alt=""></div>
                    <div class="counter-right">
                        <div class="number animateNumber" data-num="60"> <span>60</span></div>
                        <h3>Countries Reached</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter">
                    <div class="counter-icon-box"><img src="images/counter-icon2.png" alt=""></div>
                    <div class="counter-right">
                        <div class="number animateNumber" data-num="90"> <span>90</span></div>
                        <h3>Site Inspection</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter last">
                    <div class="counter-icon-box"><img src="images/counter-icon3.png" alt=""></div>
                    <div class="counter-right">
                        <div class="number animateNumber" data-num="54127"> <span>54127</span></div>
                        <h3>Projects Completed</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter last">
                    <div class="counter-icon-box"><img src="images/counter-icon4.png" alt=""></div>
                    <div class="counter-right">
                        <div class="number animateNumber" data-num="54127"> <span>54127</span></div>
                        <h3>Qualified Staff</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters Wrapper End -->
<!-- News Wrapper Start -->
<section class="news-wrapper">
    <div class="container">
        <div class="title">
            <h2>News & Guides</h2>
            <span class="title-border-color"><i class="fa fa-bolt" aria-hidden="true"></i></span>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="news-section-single">
                    <div class="news-img-main">
                        <div class="news-img"><img src="images/news-img1.jpg" alt="" data-popupalt-original-title="null" title="">
                            <div class="news-list">
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> November 16, 2016</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i> 8</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-head">
                        <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="news-section-single">
                    <div class="news-img-main">
                        <div class="news-img"><img src="images/news-img2.jpg" alt="" data-popupalt-original-title="null" title="">
                            <div class="news-list">
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> November 16, 2016</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i> 8</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-head">
                        <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="news-section-single">
                    <div class="news-img-main">
                        <div class="news-img"><img src="images/news-img3.jpg" alt="" data-popupalt-original-title="null" title="">
                            <div class="news-list">
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> November 16, 2016</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i> 8</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-head">
                        <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Wrapper End -->
<!-- Footer Wrapper Start -->
<footer class="footer-wrapper">
    <div class="container">
        <div class="row">
            <div class="search-wrapper">
                <div class="col-sm-6">
                    <div class="search-inner-text">
                        <h3>Want to know about our offers first? <span>Subscribe our newsletter</span></h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="footer-search-form">
                        <div class="form">
                            <input placeholder="Your Email Address" id="exampleInputName" class="form-control first" type="text">
                            <input class="bttn" value="Subscribe" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="intro">
                    <div class="flogo"><img src="images/footer-logo.png" alt=""></div>
                    <p class="intro-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="extralinks">
                    <h4 class="title">Information</h4>
                    <div class="extralinks-cols">
                        <ul class="extralinks-col">
                            <li> <a href="javascript:void(0)">Customer Service</a> </li>
                            <li> <a href="javascript:void(0)">Privacy Policy</a> </li>
                            <li> <a href="javascript:void(0)">Site Map</a> </li>
                            <li> <a href="javascript:void(0)">Advanced Search</a></li>
                            <li> <a href="javascript:void(0)">Orders and Returns</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="extralinks">
                    <h4 class="title">Usefull Links</h4>
                    <div class="extralinks-cols">
                        <ul class="extralinks-col">
                            <li> <a href="javascript:void(0)">About Us</a> </li>
                            <li> <a href="javascript:void(0)">Services</a> </li>
                            <li> <a href="javascript:void(0)">Blog</a> </li>
                            <li> <a href="javascript:void(0)">Gallery</a></li>
                            <li> <a href="javascript:void(0)">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="address">
                    <h4 class="title">Contact Us</h4>
                    <div class="extralinks-cols">
                        <ul class="extralinks-col">
                            <li> <span class="fcontact-icon fa fa-clock-o"></span> Mon - Sat 9:00 a.m. - 6:00 p.m. <br>
                                Sunday Closed </li>
                            <li><span class="fcontact-icon fa fa-map-marker"></span>11th Floor, 645 Hudson Street, NY 10018 USA</li>
                            <li><span class="fcontact-icon fa fa-phone"></span>012 345 6789</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-cta-wrapper">
            <div class="row">
                <div class="col-sm-9">
                    <img src="images/footer-cta-icon.png" alt="">
                    <h3>Do you need any help for electrical maintenance?</h3>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class="col-sm-3"> <a href="javascript:void(0)" class="pull-right">Get A Quote</a> </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Wrapper End -->
<!-- Copyright Wrapper End -->
<div class="copyright-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <p>&copy; Copyright <span id="year"></span>, ElectricalShop | All Rights Reserved.</p>
            </div>
            <div class="col-sm-5">
                <ul class="footer-social-icons">
                    <li class="facebook"><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="linkedin"><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li class="pinterest"><a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                    <li class="google-plus"><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li class="youtube"><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <li class="dribbble"><a href="javascript:void(0)" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Copyright Wrapper End -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/elektrik/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/elektrik/plugins.js')}}"></script>
<script src="{{asset('js/elektrik/slicknav.min.js')}}"></script>
<script src="{{asset('js/elektrik/bootstrap.min.js')}}"></script>
<script src="{{asset('js/elektrik/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/elektrik/owl.carousel.js')}}"></script>
<script src="{{asset('js/elektrik/wow.min.js')}}"></script>
<script src="{{asset('js/elektrik/slider.js')}}"></script>
<script src="{{asset('js/elektrik/custom.js')}}"></script>
</body>

</html>
