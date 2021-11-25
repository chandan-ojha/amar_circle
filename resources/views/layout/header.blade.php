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
    <title>@yield('title')</title>

    @foreach($logos as $logo)
        <link rel="icon" type="image/png" href="{{asset('storage/'.$logo->url_logo)}}">
    @endforeach
</head>
<body>

<!-- <div class="preloader">
    <div class="spinner"></div>
</div> -->


<header class="header-area">
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
                <a href="index.html">
                    <script type="text/javascript" style="display:none">
                        //<![CDATA[
                        window.__mirage2 = {petok:"23232c13110725180504a859297da8241eb06053-1626293218-1800"};
                        //]]>
                    </script>
                    <script type="text/javascript" src="../../../ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                    @foreach($logos as $logo)
                        <img src="{{asset('storage/'.$logo->main_logo)}}" alt="logo" width="60" height="50">
                    @endforeach
                </a>
            </div>
        </div>
        <div class="bahama-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
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

                            <li class="nav-item"><a href="{{url('/contactus')}}" class="nav-link">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>
