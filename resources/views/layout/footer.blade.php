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
                        <input type="email" class="newsletter-input" placeholder="Your Email Address" name="EMAIL" required autocomplete="off">
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
