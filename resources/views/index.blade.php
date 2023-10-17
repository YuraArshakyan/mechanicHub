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
    @section('activePage1', 'current')
    <!--End mainmenu area-->

    <!--Start rev slider wrapper-->
    @include('common.1.slidebar')
    <!--End rev slider wrapper-->

    <!--Start call to action area-->
    @include('common.about')
    <!--End call to action area-->

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

    <!--Start service area-->
    <section class="service-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Our Services</h1>
                <span class="border center"></span>
            </div>
            <div class="row">
                <!--Start single service item-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-service-item text-center">
                        <div class="icon-holder">
                            <span class="flaticon-car-wheel"></span>
                        </div>
                        <div class="text-holder">
                            <a href="ser-single1-wheel-works.html"><h3>Wheel Works</h3></a>
                            <p>We guarantee the best price on tires and offer free services like tire rotations and flat
                                repairs</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
                <!--Start single service item-->
                <!--End single service item-->
                <!--Start single service item-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-service-item text-center">
                        <div class="icon-holder">
                            <span class="flaticon-air-conditioner"></span>
                        </div>
                        <div class="text-holder">
                            <a href="ser-single3-air-conditioner.html"><h3>Air Conditioner</h3></a>
                            <p>A car cooler is an auto mobile window evaporative cooler, sometimes as a swamp
                                cooler.</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="hr-line"></div>
                </div>
            </div>
            <div class="row">
                <!--Start single service item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-service-item text-center">
                        <div class="icon-holder">
                            <span class="flaticon-engine"></span>
                        </div>
                        <div class="text-holder">
                            <a href="ser-single5-engine-works.html"><h3>Engine Works</h3></a>
                            <p>Engine Service is an auto mobile window and talent and high quality paint and
                                materials.</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
                <!--Start single service item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-service-item text-center">
                        <div class="icon-holder">
                            <span class="flaticon-essential-oil"></span>
                        </div>
                        <div class="text-holder">
                            <a href="ser-single6-lube-oil-filters.html"><h3>lube Oil & Filters</h3></a>
                            <p>Oil carries away much of your engine's heat standard cooling, it also plays a key role in
                                cooling.</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
                <!--Start single service item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-service-item text-center">
                        <div class="icon-holder">
                            <span class="flaticon-disc-brake"></span>
                        </div>
                        <div class="text-holder">
                            <a href="ser-single7-lube-oil-filters.html"><h3>Brake Repairs</h3></a>
                            <p>Brake hoses transfer the brake from the master cylinder to the brake calipers or wheel
                                cylinders.</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
                <!--Start single service item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-service-item text-center">
                        <div class="icon-holder">
                            <span class="flaticon-timing-belt"></span>
                        </div>
                        <div class="text-holder">
                            <a href="ser-single8-belts-hoses.html"><h3>Belts & Hoses</h3></a>
                            <p>Our mechanic to inspect the brake hoses every time you get a tire rotation or brake
                                service.</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
            </div>
        </div>
    </section>
    <!--End service area-->

    <!--Start project area-->
    <section class="project-area">
        <div class="container-fluid">
            <div class="row mar0">
                <!--Start single project item-->
                <div class="single-project-item span-20per">
                    <div class="img-holder">
                        <img src="images/projects/1.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a class="zoom" href="images/projects/1.jpg" data-rel="prettyPhoto"
                                       title="MechanicHub Project">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                    <div class="bottom">
                                        <a href="gallery-single.html">Replace The Air Filter</a>
                                        <p>Repairs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="single-project-item span-20per">
                    <div class="img-holder">
                        <img src="images/projects/2.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a class="zoom" href="images/projects/2.jpg" data-rel="prettyPhoto"
                                       title="MechanicHub Project">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                    <div class="bottom">
                                        <a href="gallery-single.html">Replace The Air Filter</a>
                                        <p>Repairs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="single-project-item span-20per">
                    <div class="img-holder">
                        <img src="images/projects/3.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a class="zoom" href="images/projects/3.jpg" data-rel="prettyPhoto"
                                       title="MechanicHub Project">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                    <div class="bottom">
                                        <a href="gallery-single.html">Replace The Air Filter</a>
                                        <p>Repairs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="single-project-item span-20per">
                    <div class="img-holder">
                        <img src="images/projects/4.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a class="zoom" href="images/projects/4.jpg" data-rel="prettyPhoto"
                                       title="MechanicHub Project">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                    <div class="bottom">
                                        <a href="gallery-single.html">Replace The Air Filter</a>
                                        <p>Repairs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="single-project-item span-20per">
                    <div class="img-holder">
                        <img src="images/projects/5.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a class="zoom" href="images/projects/5.jpg" data-rel="prettyPhoto"
                                       title="MechanicHub Project">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                    <div class="bottom">
                                        <a href="gallery-single.html">Replace The Air Filter</a>
                                        <p>Repairs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
            </div>
        </div>
    </section>
    <!--End project area-->

    <!--Start slogan area-->
    <section class="slogan-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="title pull-left">
                            <h1>We provide them access to customers, schedule flexibility, and high-quality parts.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan area-->

    <!--Start testimonial area-->
    <section class="testimonial-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Our Satisfied Customers</h1>
                <span class="border center"></span>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-testimonial-item">
                        <div class="img-holder">
                            <img src="images/testimonial/1.jpg" alt="Awesome Image">
                        </div>
                        <div class="top">
                            <div class="left pull-left">
                                <h3> Santa Cruz - <span>London</span></h3>
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
                            <p>“ They did all the repairs and it cost me about 1/3 of the price. I was actually really
                                happy with the work that was done.”</p>
                        </div>
                        <div class="bottom">
                            <div class="left pull-left">
                                <h3>Changed Oil and Filter</h3>
                            </div>
                            <div class="right pull-right">
                                <img src="images/testimonial/brand-1.png" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-testimonial-item">
                        <div class="img-holder">
                            <img src="images/testimonial/2.jpg" alt="Awesome Image">
                        </div>
                        <div class="top">
                            <div class="left pull-left">
                                <h3>E. Douglas - <span>London</span></h3>
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
                            <p>“These guys are just the coolest company ever! They were aware of our transported for
                                road and tail as complex special.”</p>
                        </div>
                        <div class="bottom">
                            <div class="left pull-left">
                                <h3>Basic Inspection</h3>
                            </div>
                            <div class="right pull-right">
                                <img src="images/testimonial/brand-2.png" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-testimonial-item">
                        <div class="img-holder">
                            <img src="images/testimonial/3.jpg" alt="Awesome Image">
                        </div>
                        <div class="top">
                            <div class="left pull-left">
                                <h3>Emilia Crane - <span>London</span></h3>
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
                            <p>“Their performance on our project was successful. Exceptional quality & was delivered in
                                time and budget.”</p>
                        </div>
                        <div class="bottom">
                            <div class="left pull-left">
                                <h3>Brake Pads Replacement</h3>
                            </div>
                            <div class="right pull-right">
                                <img src="images/testimonial/brand-3.png" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="more-button">
                        <a href="#">See more reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End testimonial area-->

    <!--Start appoinment area-->
    <section class="appoinment-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="appoinment">
                        <div class="sec-title">
                            <h1>Get an Appoinment</h1>
                            <span class="border"></span>
                        </div>
                        <form class="appoinment-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-label">
                                        <label>Name*</label>
                                    </div>
                                    <div class="input-box">
                                        <input type="text" name="name" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-label">
                                        <label>Email*</label>
                                    </div>
                                    <div class="input-box">
                                        <input type="email" name="mail" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-label">
                                        <label>Make / Model</label>
                                    </div>
                                    <div class="input-box">
                                        <input type="text" name="model" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-label">
                                        <label>Services*</label>
                                    </div>
                                    <div class="input-box">
                                        <select class="selectmenu">
                                            <option selected="selected">Select services</option>
                                            <option>Wheel Works</option>
                                            <option>Air Conditioner</option>
                                            <option>Engine Works</option>
                                            <option>lube Oil & Filters</option>
                                            <option>Brake Repairs</option>
                                            <option>Belts & Hoses</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-label">
                                        <label>Schedule Date</label>
                                    </div>
                                    <div class="input-box">
                                        <input type="text" name="date" placeholder="" id="datepicker">
                                        <div class="icon-box">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-label">
                                        <label>Schedule Time</label>
                                    </div>
                                    <div class="input-box">
                                        <input type="text" name="time" placeholder="">
                                        <div class="icon-box">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <button class="thm-btn" type="submit">Submit now</button>
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <div class="text">
                                        <p>*Our Team is available 6 days a week, Mon- Sat from 6 AM to 5 PM, Sun -
                                            Holiday</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="img-holder">
                <img src="images/resources/appoinment.png" alt="Awesome Image">
            </div>
        </div>
    </section>
    <!--End appoinment area-->

{{--    <!--Start latest blog area-->--}}
{{--    @include('common.lastNews')--}}
{{--    <!--End latest blog area-->--}}

    <!--Start model area-->
    @include('common.models')
    <!--Emd model area-->

    <!--End footer bottom area-->
    @include('common.footer')
    <!--Start footer area-->
