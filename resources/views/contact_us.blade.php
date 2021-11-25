@extends('layout.master')
@section('title','Amar Circle- Contact Us')
@section('layout.contant')

    <section class="contact-info-box-area ptb-100 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-contact-info">
                        <div class="icon">
                            <i class="flaticon-place"></i>
                        </div>
                        <h3>Address</h3>
                        @foreach($contacts as $contact )
                        <p>{{$contact->address}} <br> </p>
                        @endforeach
                        <div class="image-box">
                            <img src="assets/img/shape-image/1.png" alt="image">
                            <img src="assets/img/shape-image/1.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-contact-info">
                        <div class="icon">
                            <i class="flaticon-address-book"></i>
                        </div>
                        <h3>Email</h3>
                        @foreach($contacts as $contact )
                            <p>{{$contact->email}} <br> </p>
                        @endforeach
                        <div class="image-box">
                            <img src="assets/img/shape-image/1.png" alt="image">
                            <img src="assets/img/shape-image/1.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="single-contact-info">
                        <div class="icon">
                            <i class="flaticon-signal"></i>
                        </div>
                        <h3>Phone</h3>
                        @foreach($contacts as $contact )
                            <p>{{$contact->phone}} <br> </p>
                        @endforeach
                        <div class="image-box">
                            <img src="assets/img/shape-image/1.png" alt="image">
                            <img src="assets/img/shape-image/1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Send Message</span>
                <h2>Drop us message for any query</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>
            </div>
            <div class='justify-content-lg-center'>
            <form method="POST" action="{{url('/message')}}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="name" id="name" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email Address" name="email" id="email" required data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" id="phone_number" required data-error="Please enter your number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Type Your Message Here" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>


@endsection
