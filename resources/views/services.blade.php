@extends('layout.master')
@section('title','Amar Circle-Services')
@section('layout.contant')


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


    <section class="why-choose-us-area ptb-100 bg-fcfcfc">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="why-choose-us-content">
                        <span>Amar Circle Offer</span>
                        <h2>More Great Reasons to Choose Bahama</h2>
                        <p>The speed of data, as it travels from the Internet to your computer, is measured in megabits
                            per second (Mbps). Different activities require different speeds.</p>
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
