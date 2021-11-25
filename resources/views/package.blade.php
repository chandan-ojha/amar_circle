@extends('layout.master')
@section('title','Amar Circle-Pakage')
@section('layout.contant')


    <section class="pricing-area ptb-100">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-resume"></i>
</span>
<span>Amar Circle Pricing</span>
</span>
                <h2>Discover our best plans</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
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
    </section>

    <section class="pricing-about-area ptb-100 pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="pricing-about-content">
                        <span>Amar Circle About</span>
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
@endsection
