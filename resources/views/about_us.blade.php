@extends('layout.master')
@section('title','Amar Circle-About Us')
@section('layout.contant')

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

    <section class="our-coverage-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="coverage-area-content">
                        <span class="sub-title"><i class="flaticon-care-about-environment"></i> About Amar Circle</span>
                        @foreach($abouts as $about )
                            <h2>{{$about->about_title_2}} </h2>
                            <p>{{$about->about_2nd_summary_1}} </p>
                            <p>{{$about->about_2nd_summary_2}}</p>
                            <p>{{$about->about_2nd_summary_3}}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="coverage-area-map">
                        @foreach($abouts as $about )
                            <img src="{{asset('storage/'.$about->about_photo_2nd)}}" alt="image">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-area bg-image ptb-100 ">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-help"></i>
</span>
<span>Frequently Questions</span>
</span>
                <h2>Why you should choose <br>our services</h2>
            </div>
            <div class="row">
                @foreach($faqs as $faq)
                    @if($faq->id%2)
                        <div class="col-lg-6 col-md-12- p-1">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)"><i
                                                class="flaticon-add"></i> {{$faq->title}}</a>
                                        <p class="accordion-content">{{$faq->description}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6 col-md-12 p-1">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)"><i
                                                class="flaticon-add"></i> {{$faq->title}}</a>
                                        <p class="accordion-content">{{$faq->description}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>


    <section class="feedback-area ptb-100">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-help"></i>
</span>
<span>Feedback</span>
</span>
                <h2>What customer say about us</h2>
            </div>
            <div class="row">
                <div class="feedback-slides owl-carousel owl-theme">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-feedback-item">
                            <i class="flaticon-quote-left"></i>
                            <p>Lorem Ipsum is simply dummy text of printing Lorem Ipsum has been the du industry's
                                standard dummy text ever since the 1500s.</p>
                            <div class="client-info">
                                <h3>Paul Pogba</h3>
                                <span>CEO at ThemeForest</span>
                                <img src="assets/img/author1.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-feedback-item">
                            <i class="flaticon-quote-left"></i>
                            <p>Lorem Ipsum is simply dummy text of printing Lorem Ipsum has been the du industry's
                                standard dummy text ever since the 1500s.</p>
                            <div class="client-info">
                                <h3>Jason Roy</h3>
                                <span>CEO at ThemeForest</span>
                                <img src="assets/img/author2.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-feedback-item">
                            <i class="flaticon-quote-left"></i>
                            <p>Lorem Ipsum is simply dummy text of printing Lorem Ipsum has been the du industry's
                                standard dummy text ever since the 1500s.</p>
                            <div class="client-info">
                                <h3>Sarah Taylor</h3>
                                <span>CEO at ThemeForest</span>
                                <img src="assets/img/author3.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-feedback-item">
                            <i class="flaticon-quote-left"></i>
                            <p>Lorem Ipsum is simply dummy text of printing Lorem Ipsum has been the du industry's
                                standard dummy text ever since the 1500s.</p>
                            <div class="client-info">
                                <h3>James Anderson</h3>
                                <span>CEO at ThemeForest</span>
                                <img src="assets/img/author4.jpg" alt="image">
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
@endsection
