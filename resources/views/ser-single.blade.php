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

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Wheel Works</h1>
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
                        <li class="active">Service Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start service single area-->
<section id="service-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                @foreach($services as $service)
                    <div class="service-single-content">
                        <!--Start top content -->
                        <div class="row top-content">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="text-holder">
                                    <div class="sec-title">
                                        <h1>{!!$service->title!!}</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="text">
                                        <p class="top">{!! nl2br(str_replace(' ', '&nbsp; ', $service->text)) !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="img-box">
                                    <div class="single-img-box">
                                        <img src="/images/services/{{$service->photo}}" alt="Awesome Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End top content -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="border"></div>
                            </div>
                        </div>
                        <!--Start middle content-->
                        <div class="row middle-content">
                            <div class="sec-title">
                                <h1>Why Choose Us</h1>
                                <span class="border"></span>
                            </div>
                            <div class="col-md-5">
                                <div class="video-holder">
                                    <img src="/images/services/single-service/{{$choose[0]->photo}}" alt="Awesome Video Gallery">
                                    <div class="overlay-gallery">
                                        <div class="icon-holder">
                                            <div class="icon">
                                                <a class="html5lightbox" title="MechanicHub Video Gallery" href="https://www.youtube.com/watch?v=i3F91KKbGd0">
                                                    <img src="/images/icon/play-btn-1.png" alt="Play Button">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text-holder">
                                    <div class="text">
                                        <p>{{$choose[0]->title}}</p>
                                        <ul>
                                            {!!$choose[0]->text!!}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End middle content-->
                        <!--Start bottom content-->
                        <div class="row bottom-content">
                            <div class="col-md-12">
                                <div class="accordion-box">
                                    <!--Start single accordion box-->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn"><h4>We handle a wide range of car services</h4></div>
                                        <div class="accord-content">
                                            <p>The master-builder of human happiness one rejects, dislikes avoid pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure packages and web page editors now use uncover this mistaken idea and I will give you a complete of the truth, the master-builder of human happiness.</p>
                                        </div>
                                    </div>
                                    <!--End single accordion box-->
                                    <!--Start single accordion box-->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn active"><h4>We handle a wide range of car services</h4></div>
                                        <div class="accord-content collapsed">
                                            <p>The master-builder of human happiness one rejects, dislikes avoid pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure packages and web page editors now use uncover this mistaken idea and I will give you a complete of the truth, the master-builder of human happiness.</p>
                                        </div>
                                    </div>
                                    <!--End single accordion box-->
                                    <!--Start single accordion box-->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn"><h4>Pipe Connection</h4></div>
                                        <div class="accord-content">
                                            <p>The master-builder of human happiness one rejects, dislikes avoid pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure packages and web page editors now use uncover this mistaken idea and I will give you a complete of the truth, the master-builder of human happiness.</p>
                                        </div>
                                    </div>
                                    <!--End single accordion box-->
                                </div>
                            </div>
                        </div>
                        <!--End bottom content-->
                    </div>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="service-single-sidebar">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <ul class="service-lists">
                            <li class="active"><a href="{{route('ser-single', 1)}}">Wheel Works</a></li>
{{--                            <li><a href="ser-single2-painting-works.html">Painting Works</a></li>--}}
                            <li><a href="{{route('ser-single', 3)}}">Air Conditioner</a></li>
{{--                            <li><a href="{{route('ser-single', 3)}}">Water Service</a></li>--}}
                            <li><a href="{{route('ser-single', 5)}}">Engine Works</a></li>
                            <li><a href="{{route('ser-single', 6)}}">lube Oil & Filters</a></li>
                            <li><a href="{{route('ser-single', 7)}}">Brake Repairs</a></li>
                            <li><a href="{{route('ser-single', 8)}}">Belts & Hoses</a></li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Our Brochures</h3>
                        </div>
                        <ul class="brochures-dwn-link">
                            <li>
                                <a href="#">
                                    <div class="icon-holder">
                                        <span class="flaticon-pdf-file-symbol"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h5>Research Results</h5>
                                        <span>Download.pdf</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="icon-holder">
                                        <span class="flaticon-file"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h5>Material Engineering</h5>
                                        <span>Download.txt</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-testimonial">
                            <div class="text-box">
                                <p>They have got my project on time with competition well organized and very experienced team of professional engineers and good leaders.</p>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/images/testimonial/2.png" alt="Client Photo">
                                </div>
                                <div class="title-box">
                                    <h4>Mark Vilton - <span>Villo Ceo</span></h4>
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
                        </div>
                    </div>
                    <!--End single sidebar-->
                </div>
            </div>

        </div>
    </div>
</section>
<!--End service single area-->

<!--Start footer area-->
@include('common.footer')
