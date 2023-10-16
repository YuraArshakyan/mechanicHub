<!DOCTYPE html>
<html lang="en">
@include('common.header')
<body>
<div class="boxed_wrapper">

<!--Start Preloader -->
<div class="preloader"></div>
<!--End Preloader -->

<!--Start top bar area-->
@include('common.1.topbar')
<!--End top bar area-->

<!--Start mainmenu area-->
@include('common.1.mainmenue')
<!--End mainmenu area-->
        <!--Start contact map area-->
        <section class="contact-map-area">
            <div class="container-fluid">
                <div class="google-map-inner">
                    <div
                        class="google-map"
                        id="contact-google-map"
                        data-map-lat="{{$configs[2]->value}}"
                        data-map-lng="{{$configs[3]->value}}"
                        data-icon-path="images/resources/map-marker.png"
                        data-map-title="Brooklyn, New York, United Kingdom"
                        data-map-zoom="12"
                        data-markers='{
                            "marker-1": [{{$configs[2]->value}}, {{$configs[3]->value}}, "<h4>Head Office</h4><p>44/77 Alabama, a western U.S.A</p>"]
                        }'>
                    </div>
                </div>
            </div>
        </section>
        <!--End contact map area-->
<!--Start contact area-->
<section class="get-touch-area">
    <div class="container">
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item hvr-grow-shadow text-center">
                    <div class="icon-holder">
                        <span class="flaticon-magnifying-glass"></span>
                    </div>
                    <div class="text-holder">
                        <h3>Visit Our Place</h3>
                        <span class="border"></span>
                        {!!nl2br(str_replace(' ','&nbsp;', $configs[5]->value))!!}
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item hvr-grow-shadow text-center">
                    <div class="icon-holder">
                        <span class="flaticon-telephone"></span>
                    </div>
                    <div class="text-holder">
                        <h3>Quick Contact</h3>
                        <span class="border"></span>
                        <p>Ph: {{$configs[0]->value}}<br> Email: {{$configs[1]->value}}</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item hvr-grow-shadow text-center">
                    <div class="icon-holder">
                        <span class="flaticon-transport"></span>
                    </div>
                    <div class="text-holder">
                        <h3>Tow - Truck</h3>
                        <span class="border"></span>
                        <p>We have Truck Tow service also, our team<br> ready to help you 24/7.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End contact area-->

<!--Start contact form area-->
<section class="contact-form-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="col-lg-8 col-md-7">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h1>Send Message Us</h1>
                                <span class="border"></span>
                            </div>
                            <form id="contact-form" name="contact_form" class="default-form" action="sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="form_name" value="" placeholder="Your Name*" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="form_email" value="" placeholder="Your Mail*" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="form_phone" value="" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="form_subject" value="" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="form_message" placeholder="Your Message.." required=""></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="thm-btn bgclr-1" type="submit" data-loading-text="Please wait...">send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="contact-form-right clearfix">
                            <div class="sec-title">
                                <h1>Working Hours</h1>
                                <span class="border"></span>
                            </div>
                            <ul class="working-hours">
                                {!!$configs[6]->value!!}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
    <!--Start footer area-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-widget martop-minus pd-bottom50">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="images/footer/footer-logo.png" alt="Awesome Footer Logo">
                            </a>
                        </div>
                        <div class="our-info">
                            <p>Mechanic HUB  was founded in 1998. Delivering the highest degree of customer satisfaction through superior workmanship and service. Car owners often lack visibility regarding the quality and price.</p>
                            <a class="thm-btn" href="#">Get quote now</a>
                        </div>

                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-widget pd-bottom50">
                        <div class="title">
                            <h3>Latest Blog Post</h3>
                        </div>
                        <ul class="latest-blog">
                            <li>
                                <div class="text-holder">
                                    <a href="#">Find latest news about our new and used car for easy to choose best one.</a>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>Aug 21, 2015</span>
                                </div>
                            </li>
                            <li>
                                <div class="text-holder">
                                    <a href="#">Car kids grill the car experts, Esspecially intoduced for childrens.</a>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>July 17, 2015</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-widget mar-bottom">
                        <div class="title">
                            <h3>Get In Contact</h3>
                        </div>
                        <ul class="footer-contact-info">
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-maps-and-flags"></span>
                                </div>
                                <div class="text-holder">
                                    <h5>Rock St 12, Newyork City, USA</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-phone-receiver"></span>
                                </div>
                                <div class="text-holder">
                                    <h5>Phone +44 567 890123</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-envelope"></span>
                                </div>
                                <div class="text-holder">
                                    <h5>Mail@MechanicHub.com</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-fax"></span>
                                </div>
                                <div class="text-holder">
                                    <h5>(526) 326-985-7423</h5>
                                </div>
                            </li>
                        </ul>
                        <div class="map">
                            <a href="#">Find Us On Map</a>
                        </div>
                    </div>
                </div>
                <!--Start single footer widget-->
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-widget clearfix">
                        <div class="title">
                            <h3>Working Hours</h3>
                        </div>
                        <ul class="working-hours">
                            <li>Monday: <span>9:30 am - 6.00 pm</span></li>
                            <li>Tuesday: <span>9:30 am - 6.00 pm</span></li>
                            <li>Wednesday: <span>9:30 am - 6.00 pm</span></li>
                            <li>Thursday: <span>9:30 am - 6.00 pm</span></li>
                            <li>Friday: <span>9:30 am - 6.00 pm</span></li>
                            <li>Saturday: <span>9:30 am - 6.00 pm</span></li>
                            <li>Sunday: <span class="closed">Closed</span></li>
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
            </div>
        </div>
    </footer>
    <!--End footer area-->

    <!--Start footer bottom area-->
    <section class="footer-bottom-area style-three">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright-text">
                        <p>Copyright @ 2017 <a href="#">Steelthemes</a>, All Right Reserved</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="footer-social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End footer bottom area-->

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-chevron-circle-up"></span></div>

<!-- main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Wow Script -->
<script src="js/wow.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validation.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<!-- jQuery timepicker js -->
<script src="assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
<!-- Bootstrap bootstrap touchspin js -->
<!-- jQuery ui js -->
<script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- Html 5 light box script-->
<script src="assets/html5lightbox/html5lightbox.js"></script>


<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="js/custom.js"></script>





</body>
</html>
