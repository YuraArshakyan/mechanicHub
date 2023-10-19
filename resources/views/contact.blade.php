<!DOCTYPE html>
<html lang="en">
@include('common.header')
@section('activePage5', 'current')
<body>
<div class="boxed_wrapper">

    <!--Start Preloader -->
    <div class="preloader"></div>
    <!--End Preloader -->

    <!--Start top bar area-->
    @include('common.1.topbar')
    <!--End top bar area-->

    <!--Start mainmenu area-->
    @include('common.'.$configs[7] -> value.'.mainmenue'.$configs[7] -> value)
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
                <div class="col-md-6">
                    <div class="single-item hvr-grow-shadow text-center">
                        <div class="icon-holder">
                            <span class="flaticon-magnifying-glass"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Visit Our Place</h3>
                            <span class="border"></span>
                            <p>{!!nl2br(str_replace(' ','&nbsp;', $configs[5]->value))!!}</p>
                            @auth()
                                <a class="thm-btn btn-info" href="{{url('edit'. '/' . 'Location' . '/' . 6 . '/' . 7)}}">Edit</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-6">
                    <div class="single-item hvr-grow-shadow text-center">
                        <div class="icon-holder">
                            <span class="flaticon-telephone"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Quick Contact</h3>
                            <span class="border"></span>
                            <p>Ph: {{$configs[0]->value}}<br> Email: {{$configs[1]->value}}</p>
                            @auth()
                                <a class="thm-btn btn-info" href="{{url('edit'. '/' . 'contacts' . '/' . 1 . '/' . 7)}}">Edit</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                {{--            <div class="col-md-4">--}}
                {{--                <div class="single-item hvr-grow-shadow text-center">--}}
                {{--                    <div class="icon-holder">--}}
                {{--                        <span class="flaticon-transport"></span>--}}
                {{--                    </div>--}}
                {{--                    <div class="text-holder">--}}
                {{--                        <h3>Tow - Truck</h3>--}}
                {{--                        <span class="border"></span>--}}
                {{--                        <p>We have Truck Tow service also, our team<br> ready to help you 24/7.</p>--}}
                {{--                    </div>--}}
                {{--                    <a class="thm-btn btn-primary" href="{{url('edit'. '/' . 'contacts' . '/' . 2 . '/' . 7)}}">Edit</a>--}}
                {{--                </div>--}}
                {{--            </div>--}}
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
                                <form id="contact-form" name="contact_form" class="default-form" action="{{route('message')}}" method="get">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Your Name*" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="phone" placeholder="Your phone*" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="message" placeholder="Your Message.." required=""></textarea>
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
                                @auth()
                                    <a class="thm-btn btn-primary" href="{{url('edit'. '/' . 'contacts' . '/' . 7 . '/' . 7)}}">Edit</a>
                                @endauth
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start footer area-->
    @include('common.footer')
    <!--End footer area-->

    <!--Start footer bottom area-->

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
