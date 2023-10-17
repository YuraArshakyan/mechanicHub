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
@include('common.1.mainmenue')
<!--End mainmenu area-->

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Customer Reviews</h1>
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
                        <li class="active">Customer Reviews</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start testimonial area-->
<section class="testimonial-page">
    <div class="container">
        <div class="row masonary-layout">
            @foreach($reviews as $review)
                <!--Start single item-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-testimonial-item">
                        <div class="img-holder">
                            <img src="images/testimonial/{{$review->photo}}" alt="Awesome Image">
                        </div>
                        <div class="top">
                            <div class="left pull-left">
                                <h3>{{$review->name}}</h3>
                            </div>
                            <div class="right pull-right">
                                <div class="review-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>{{$review->comment}}</p>
                        </div>
                        <div class="bottom">
                            <div class="left pull-left">
                                <h3>{{$review->services}}</h3>
                            </div>
                            <div class="right pull-right">
                                <img src="images/testimonial/{{$review->car}}" alt="Awesome Image">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="button pull-right_edit pull-right col-xs-5">
                                <a class="thm-btn" href="#">Delete</a>
                            </div>
                            <div class="button pull-right_edit pull-left col-xs-5">
                                <a class="thm-btn" href="{{url('edit'. '/' . 'reviews' . '/' . $review->id . '/' . 4)}}">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            @endforeach
                <div class="col-xs-12">
                    <div class="button pull-right_edit">
                        <a class="thm-btn" href="#">Add</a>
                    </div>
                </div>
        </div>
    </div>
</section>
<!--End testimonial area-->

<!--Start footer area-->
@include('common.footer')

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
