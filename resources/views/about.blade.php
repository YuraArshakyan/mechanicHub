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
@section('activePage2', 'current')
@include('common.'.$configs[7] -> value.'.mainmenue'.$configs[7] -> value)
<!--End mainmenu area-->

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>About Us</h1>
	            </div>
	        </div>
	    </div>
	</div>
    <div class="breadcrumb-botton">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="left">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start call to action area-->
@include('common.about')
<!--End call to action area-->

<!--Start contact info area-->
<section class="contact-info-area">
    <div class="container">
        <div class="title text-center">
            <h2>Are you having any problems in your vehicle, don’t worry</h2>
            <p>Contact Us! We promise we can help you! Call Now! +91 44 567 890123</p>
        </div>
        <div class="row">
            <!--Start single box-->
            <div class="col-md-4">
                <div class="single-box">
                    <div class="top">
                        <h3><span class="flaticon-telephone"></span> 24/7 Customer Support</h3>
                    </div>
                    <div class="text">
                        <h1>{{$configs[0]->value}}</h1>
                        <p>MechanicHub is your ONE STOP solution bringing best car services.</p>
                    </div>
                </div>
            </div>
            <!--End single box-->
            <!--Start single box-->
            <div class="col-md-4">
                <div class="single-box">
                    <div class="top">
                        <h3><span class="flaticon-clock"></span> Working Hours</h3>
                    </div>
                    <ul class="working-hour">
                        <li>Week Days : <span>09:00am - 08:00pm</span></li>
                        <li>Satday : <span>10:00am - 06:00pm</span></li>
                        <li>Sunday : <span><b>Closed</b></span></li>
                    </ul>
                </div>
            </div>
            <!--End single box-->
            <!--Start single box-->
            <div class="col-md-4">
                <div class="single-box">
                    <div class="top">
                        <h3><span class="flaticon-location-pin"></span>Location</h3>
                    </div>
                    <div class="text">
                        <h1>{{$configs[5]->value}}</h1>
                    </div>
                    <div class="newsletter-form">
                    </div>
                </div>
            </div>
            <!--End single box-->
        </div>
    </div>
</section>
<!--End contact info area-->

<!--Start choosing area-->
<section class="choosing-area">
    <div class="sec-title text-center">
        <h1>Why Choose Us</h1>
        <span class="border center"></span>
    </div>
    <div class="container">
        <div class="row">
            <!--Start single industry expertise item-->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-avatar"></span>
                    </div>
                    <div class="content">
                        <h3>100% Transparency</h3>
                        <p>We ensure that you get well detailed break-up of each repair work.</p>
                        <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single industry expertise item-->
            <!--Start single industry expertise item-->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-wrench"></span>
                    </div>
                    <div class="content">
                        <h3>Genuine Spare Parts</h3>
                        <p>We useuthorzed genine spare parts & accessories to ensure.</p>
                        <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single industry expertise item-->
            <!--Start single industry expertise item-->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-factory"></span>
                    </div>
                    <div class="content">
                        <h3>Quality Services</h3>
                        <p>You can avail our free pickup & drop so that you can just sit & relax.</p>
                        <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single industry expertise item-->
        </div>
        <div class="row">
            <!--Start single industry expertise item-->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-maintenance"></span>
                    </div>
                    <div class="content">
                        <h3>Friendly & Helpfull</h3>
                        <p>Friendly & helpful professinal group of people in Mechanichub.</p>
                        <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single industry expertise item-->
            <!--Start single industry expertise item-->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-medal"></span>
                    </div>
                    <div class="content">
                        <h3>Free Pickup & Drop</h3>
                        <p>You can avail our free pickup & drop so that you can just sit & relax.</p>
                        <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single industry expertise item-->
            <!--Start single industry expertise item-->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-item">
                    <div class="icon-holder">
                        <span class="flaticon-motor"></span>
                    </div>
                    <div class="content">
                        <h3>Zero Upselling</h3>
                        <p>You can see servicing cost upfront our Service Calculator.</p>
                        <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single industry expertise item-->
        </div>
    </div>
</section>
<!--End choosing area-->

<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="title pull-left">
                        <h1>We provide them access to customers, schedule flexibility, and high-quality parts.</h1>
                    </div>
                    <div class="button pull-right">
                        <a class="thm-btn" href="#">Get a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slogan area-->

<!--Start footer area-->
@include('common.footer')
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
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
