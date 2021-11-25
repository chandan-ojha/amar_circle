<!doctype html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Amar Circle</title>
    @foreach($logos as $logo)
        <link rel="icon" type="image/png" href="{{asset('storage/'.$logo->url_logo)}}">
    @endforeach
</head>
<body>

{{--<div class="preloader">--}}
{{--    <div class="spinner">--}}
{{--    </div>--}}
{{--</div>--}}


<header class="header-area header-style-two">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="top-header-left">
                        <p><span>Call Now At:</span> <a href="#">+8801719-119115, +8809639-122100</a></p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="top-header-right">
                        <div class="login-signup-btn">
{{--                            <p><a href="#">Login</a> <span>or</span> <a href="#">Register</a></p>--}}
                        </div>
                        <ul class="social">
                            @foreach($Social_medias as $Social_media)
                            <li><a href="{{$Social_media->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$Social_media->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$Social_media->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{$Social_media->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="bahama-mobile-nav">
            <div class="logo">
                <a href="index-2.html">
                    <script type="text/javascript" style="display:none">
                        //<![CDATA[
                        window.__mirage2 = {petok: "a7510b923d6f577fd4fa8c7a473308bdf7936ff1-1626293214-1800"};
                        //]]>
                    </script>

                    <script type="text/javascript"
                            src="../../../ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                    @foreach($logos as $logo)
                        <img src="{{asset('storage/'.$logo->main_logo)}}" alt="logo" width="60" height="50">
                    @endforeach
                </a>
            </div>
        </div>
        <div class="bahama-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="">
                        @foreach($logos as $logo)
                            <img src="{{asset('storage/'.$logo->main_logo)}}" alt="logo" width="100" height="80">
                        @endforeach
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>

                            <li class="nav-item"><a href="{{url('/package')}}" class="nav-link">Package</a></li>

                            <li class="nav-item"><a href="{{url('/services')}}" class="nav-link">Services</a></li>

                            <li class="nav-item"><a href="{{url('/payment')}}" class="nav-link">Payment</a></li>

                            <li class="nav-item"><a href="{{url('/team')}}" class="nav-link">Our Team</a></li>

                            <li class="nav-item"><a href="" class="nav-link">Entertainment <i
                                        class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="" class="nav-link">FTP server  <i
                                                class="fa fa-arrow-right"></i></a>
                                        <ul class="dropdown-menu">
                                            @foreach($entertainments as $entertainment )
                                                <li class="nav-item"><a href="{{$entertainment->ftp_server}}" target="_blank" class="nav-link">{{$entertainment->ftp_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    <li class="nav-item"><a href="" class="nav-link">Live Tv  <i
                                                class="fa fa-arrow-right"></i></a>
                                        <ul class="dropdown-menu">
                                            @foreach($entertainments as $entertainment )
                                                <li class="nav-item"><a href="{{$entertainment->live_tv}}" target="_blank" class="nav-link">{{$entertainment->tv_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    <li class="nav-item"><a href="" class="nav-link">Torrent  <i
                                                class="fa fa-arrow-right"></i></a>
                                        <ul class="dropdown-menu">
                                            @foreach($entertainments as $entertainment )
                                                <li class="nav-item"><a href="{{$entertainment->torrent}}" target="_blank" class="nav-link">{{$entertainment->torrent_name}}</a></li>
                                            @endforeach
                                        </ul>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About Us</a></li>

                            <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>


<div class="home-slides owl-carousel owl-theme">
    @foreach($sliders as $slide )
    <div class="banner-section item-bg1 jarallax" data-jarallax='{"speed": 0.2}'>
        <div class="container">
            <div class="hero-content">
                <!-- <img src="{{ Voyager::image( $slide->image) }}" alt="">  -->
                <span class="sub-title">{{$slide->title}}</span>
                <h1>{{$slide->subtitle}}</h1>
                <p>{{$slide->description}}</p>
                <a href="{{$slide->link}}" class="btn btn-primary">Request A Quote</a>
             
            </div>
        </div>
    </div>
    @endforeach
</div>


<section class="boxes-area">
    <div class="container">
        <div class="row">
            @foreach($services as $service )
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-box">
                        <div class="icon">
                            <i class="{{$service->icon}}"></i>
                        </div>
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->description}}</p>
                        <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/1.png" alt="image">
                            <img src="assets/img/shape-image/1.png" alt="image">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title"><i class="flaticon-care-about-environment"></i> About Amar Circle</span>
                    @foreach($abouts as $about )
                        <h2>{{$about->about_title_1}} </h2>
                        <p>{{$about->about_1st_summary_1}} </p>
                        <p>{{$about->about_1st_summary_2}}</p>
                        <p>{{$about->about_1st_summary_3}}</p>
                    @endforeach
                    <a href="{{url('/about')}}" class="btn btn-primary">Learn More Us</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-main-image">
                    @foreach($abouts as $about )
                        <img src="{{asset('storage/'.$about->about_photo_1st)}}" alt="image">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="packages-area ptb-100 pb-0 jarallax" data-jarallax='{"speed": 0.2}'>
    <div class="container">
        <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-resume"></i>
</span>
<span>Amar Circle Packages</span>
</span>
            <h2>The tree core price you it just valuable but not at many prices</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-packages-box">
                    <h3>TV Plus for Best Familytime</h3>
                    <a href="#" class="btn btn-primary">View Plans</a>
                    <div class="image-box">
                        <img src="assets/img/shape-image/1.png" alt="image">
                        <img src="assets/img/shape-image/1.png" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-packages-box">
                    <h3>Talk Weekends & Unlimited</h3>
                    <a href="#" class="btn btn-primary">View Plans</a>
                    <div class="image-box">
                        <img src="assets/img/shape-image/1.png" alt="image">
                        <img src="assets/img/shape-image/1.png" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-packages-box">
                    <h3>Amar Circle WIFI for More Power</h3>
                    <a href="#" class="btn btn-primary">View Plans</a>
                    <div class="image-box">
                        <img src="assets/img/shape-image/1.png" alt="image">
                        <img src="assets/img/shape-image/1.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-area ptb-100">
    <div class="container">
        <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-technical-support"></i>
</span>
<span>Amar Circle Services</span>
</span>
            <h2>Explore the next Isp unlimited possibilities</h2>
        </div>
        <div class="row">
            @foreach($services as $service )
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-box">
                        <div class="icon">
                            <i class="{{$service->icon}}"></i>
                        </div>
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->description}}</p>
                        <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/1.png" alt="image">
                            <img src="assets/img/shape-image/1.png" alt="image">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>


<section class="pricing-area ptb-100 pt-0">
    <div class="container">
        <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-resume"></i>
</span>
<span>Amar Circle Pricing</span>
</span>
            <h2>Discover our best plans</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
        </div>
        <div class="row">
            @foreach($packages as $package )
                @foreach($offer as $offers )
                    @if($package->package_name==$offers->offerpackage_name)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-pricing-table active">
                                <div class="pricing-header">
                                    <div class="icon">
                                        <i class="flaticon-online-shop"></i>
                                    </div>
                                    <span>TV + Internet</span>
                                    <h3>{{$package->package_name}}</h3>
                                </div>
                                <ul class="pricing-features-list">
                                    <li><i class="flaticon-check-mark"></i> {{$package->full_spreed}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->loss_spreed}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->cable_name}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->real_ip}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->cashe_server}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->ftp_server}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->support}}</li>
                                </ul>
                                <div class="price">
                                    <span>From</span>
                                    <span>Taka</span>
                                    {{$package->package_price}}
                                    <span>/mo</span>
                                </div>
                                <a href="#" class="view-plans-btn">View Plans</a>
                                <div class="image-box">
                                    <img src="assets/img/shape-image/2.png" alt="image">
                                    <img src="assets/img/shape-image/2.png" alt="image">
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-pricing-table">
                                <div class="pricing-header">
                                    <div class="icon">
                                        <i class="flaticon-online-shop"></i>
                                    </div>
                                    <span>Internet</span>
                                    <h3>{{$package->package_name}}</h3>
                                </div>
                                <ul class="pricing-features-list">
                                    <li><i class="flaticon-check-mark"></i> {{$package->full_spreed}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->loss_spreed}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->cable_name}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->real_ip}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->cashe_server}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->ftp_server}}</li>
                                    <li><i class="flaticon-check-mark"></i> {{$package->support}}</li>
                                </ul>
                                <div class="price">
                                    <span>From</span>
                                    <span>Taka</span>
                                    {{$package->package_price}}
                                    <span>/mo</span>
                                </div>
                                <a href="#" class="view-plans-btn">View Plans</a>
                                <div class="image-box">
                                    <img src="assets/img/shape-image/2.png" alt="image">
                                    <img src="assets/img/shape-image/2.png" alt="image">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach

        </div>
    </div>
</section>


<section class="tv-show-area">
    <div class="container-fluid p-0">
        <div class="tv-show-slides owl-carousel owl-theme">
            <div class="single-tv-show">
                <img src="assets/img/tv-show-img1.jpg" alt="image">
                <h3>Our Ultimate TV Experience</h3>
                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"></a>
            </div>
            <div class="single-tv-show">
                <img src="assets/img/tv-show-img2.jpg" alt="image">
                <h3>Fast Internet Speeds</h3>
                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"></a>
            </div>
            <div class="single-tv-show">
                <img src="assets/img/tv-show-img3.jpg" alt="image">
                <h3>Channel Lineups</h3>
                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"></a>
            </div>
        </div>
    </div>
</section>


<section class="why-choose-us-area ptb-100 bg-fcfcfc">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="why-choose-us-content">
                    <span>Amar Circle Offer</span>
                    <h2>More Great Reasons to Choose Bahama</h2>
                    <p>The speed of data, as it travels from the Internet to your computer, is measured in megabits per
                        second (Mbps). Different activities require different speeds.</p>
                    <ul>
                        <li>50% off on professional installation</li>
                        <li>10 hours of cloud DVR service</li>
                        <li>HD included</li>
                        <li>Speed good for 6-8 devices at the same time</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Request A Quote</a>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="why-choose-us-image">
                    <img src="assets/img/offer-img1.png" alt="image">
                    <div class="text">
                        <div class="inner-text">
                            <span>Spend</span>
                            <h3>$12.00</h3>
                            <span>Up to</span>
                            <h3>$56.00</h3>
                            <span>Per Second</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-wifi-1"></i>
</span>
<span>Amar Circle News Update</span>
</span>
            <h2>What’s news update is <br>coming</h2>
        </div>
        <div class="row">
            <div class="blog-slides owl-carousel owl-theme">
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="assets/img/blog-img1.jpg" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="fas fa-user-tie"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock"></i> January 23, 2021</li>
                            </ul>
                            <h3><a href="#">I Used The Web For A Day On A 50 MB Budget</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec
                                libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="assets/img/blog-img2.jpg" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="fas fa-user-tie"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock"></i> January 25, 2021</li>
                            </ul>
                            <h3><a href="#">The hardest leadership advice to follow</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec
                                libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="assets/img/blog-img3.jpg" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="fas fa-user-tie"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock"></i> January 27, 2021</li>
                            </ul>
                            <h3><a href="#">The Most Popular New Top Business Apps</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec
                                libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="assets/img/blog-img4.jpg" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="fas fa-user-tie"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock"></i> January 27, 2021</li>
                            </ul>
                            <h3><a href="#">How to change yourself for the better</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec
                                libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="offer-area ptb-100 jarallax" data-jarallax='{"speed": 0.2}'>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="offer-content">
                    <span class="sub-title">Cost a little get a best</span>
                    <h2>200 Mbps + BahamaTV</h2>
                    <ul class="list">
                        <li><i class="flaticon-online-shop"></i> 160+ Channels</li>
                        <li><i class="flaticon-router"></i> Internet</li>
                    </ul>
                    <div class="price">
                        <span class="old-price">$42.99/mo</span>
                        <span class="new-price">$35.99/mo</span>
                    </div>
                    <ul class="features-list">
                        <li>Line rental and Bahama Talk included</li>
                        <li>+ one-off $9.95 set-up fee</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Request A Quote</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="offer-time">
                    <h2>Hurry! This offer ends in:</h2>
                    <div id="timer">
                        <div id="days"></div>
                        <div id="hours"></div>
                        <div id="minutes"></div>
                        <div id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        @foreach($logos as $logo)
                            <img src="{{asset('storage/'.$logo->main_logo)}}" alt="logo" height="150" width="170">
                        @endforeach
                    </div>
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="newsletter-input" placeholder="Your Email Address" name="EMAIL"
                               required autocomplete="off">
                        <button type="submit"><i class="flaticon-paper-plane"></i></button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Customer Services</h3>
                    <ul class="services-widget-list">
                        <li><a href="#">My Bahama</a></li>
                        <li><a href="#">Bahama Media</a></li>
                        <li><a href="#">Connection and Configuration</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Video Tutorials</a></li>
                        <li><a href="#">Bahama Application</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="links-widget-list">
                        <li><a href="#">Coverage Map</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">License</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Our Partners</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Get In Touch</h3>
                    <div class="widget-contact-info">
                        <p>
                            <a href="#">1 (800) 216 20 20</a>
                            <span>(Customer service and support)</span>
                            <a href="#">1 (800) 216 20 20</a>
                            <span>(For new customers)</span>
                            1600 Harrison ave, office 203 New York, NY 309090
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <p><i class="far fa-copyright"></i> Copyright Amar Circle 2021 All Rights Reserved</p>
        </div>
    </div>
</footer>

<div class="go-top"><i class="fas fa-arrow-up"></i></div>

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/popper.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/parallax.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/main.js"></script>
</body>
</html>

