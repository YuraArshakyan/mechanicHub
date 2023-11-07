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
    @section('activePage3', 'current')
    @include('common.'.$configs[7] -> value.'.mainmenue'.$configs[7] -> value)
    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h1>Our Services</h1>
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
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start service area-->
    <section class="service-area service-page">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <!--Start single service item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service-item text-center">
                            <div class="img-holder">
                                <img src="images/services/{{$service->photo}}" alt="Awesome Image" style="width: 270px; height: 200px;">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{route('ser-single', $service->id)}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            @auth()
                                                <a href="{{url('edit'. '/' . $service->title  . '/' . $service->id . '/' . 5)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="{{route('ser-single', $service->id)}}"><h3>{!!$service->title!!}</h3></a>
                                <p style="max-height: 200px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis">{{$service->text}}</p>
                            </div>
                        </div>
                    </div>
                    <!--End single service item-->
                    @if($service->id % 3 == 0 && $service->id != $max_id)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hr-line"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>
    <!--End service area-->

    <!--Start features area-->
    <section class="features-area">
        <div class="container">
            <div class="row">
                <!--Start signle features item-->
                <div class="col-md-4">
                    <div class="single-features-item">
                        <div class="overlay" style="background-image: url(images/resources/single-featured-bg.jpg);">
                            <div class="box">
                                <div class="box-content">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="iocn-box">
                            <span class="flaticon-document"></span>
                        </div>
                        <div class="text-box">
                            <h3>Get a Quote</h3>
                            <p> Receive a free, fast, fair & transparent<br> price quote.</p>
                        </div>
                    </div>
                </div>
                <!--End signle features item-->
                <!--Start signle features item-->
                <div class="col-md-4">
                    <div class="single-features-item">
                        <div class="overlay" style="background-image: url(images/resources/single-featured-bg.jpg);">
                            <div class="box">
                                <div class="box-content">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="iocn-box">
                            <span class="flaticon-calendar"></span>
                        </div>
                        <div class="text-box">
                            <h3>Book Appoinment</h3>
                            <p>Provide your home or office location. Tell<br>us when to meet you there.</p>
                        </div>
                    </div>
                </div>
                <!--End signle features item-->
                <!--Start signle features item-->
                <div class="col-md-4">
                    <div class="single-features-item">
                        <div class="overlay" style="background-image: url(images/resources/single-featured-bg.jpg);">
                            <div class="box">
                                <div class="box-content">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="iocn-box">
                            <span class="flaticon-car-repair"></span>
                        </div>
                        <div class="text-box">
                            <h3>Get Your Car Fixed</h3>
                            <p>No more waiting in repair shops, we will<br> reach your destination in one call.</p>
                        </div>
                    </div>
                </div>
                <!--End signle features item-->
            </div>
        </div>
    </section>
    <!--End features area-->

    <!--Start model area-->
    <section class="model-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>We Service Most Makes and Models</h1>
                <span class="border center"></span>
            </div>
            <div class="row">
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item">
                        <img src="images/model/1.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-center">
                        <img src="images/model/2.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-center">
                        <img src="images/model/3.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-center">
                        <img src="images/model/4.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-center">
                        <img src="images/model/5.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-right">
                        <img src="images/model/6.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
            </div>

            <div class="row">
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item">
                        <img src="images/model/7.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-center">
                        <img src="images/model/8.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-center">
                        <img src="images/model/9.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-center">
                        <img src="images/model/10.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-center">
                        <img src="images/model/11.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
                <!--Start single model item-->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="single-model-item text-right">
                        <img src="images/model/12.png" alt="Model">
                    </div>
                </div>
                <!--End single model item-->
            </div>

        </div>
    </section>
    <!--Emd model area-->

    <!--Start footer area-->
@include('common.footer')
