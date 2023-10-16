@include('common.header')

<body>
<div class="boxed_wrapper">

    <!--Start Preloader -->
    <div class="preloader"></div>
    <!--End Preloader -->

    <!--Start top bar area-->
    @include('common.4.topbar4')
    <!--End top bar area-->

    <!--Start mainmenu area-->
    @include('common.4.mainmenue4')
    @section('activePage1', 'current')
    <!--End mainmenu area-->

    <!--Start rev slider wrapper-->
    @include('common.4.slidebar4')
    <!--End rev slider wrapper-->

    <!--Start welcome area v2-->
    <section class="welcome-area-v2 home4">
        <div class="container">
            <div class="row">
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-tool-2"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Vehicle Inspection</h3>
                            <p> Receive a free, fast, fair &amp; transparent price quote.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-car-repair"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Diagnostic Services</h3>
                            <p>Provide your home or office location. Tell us when to meet you there.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-tool-3"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Serrvice Upgrades</h3>
                            <p>No more waiting in repair shops, we will reach your destination in one call.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->

            </div>
        </div>
    </section>
    <!--End welcome area v2-->

    <!--Start call to action area-->
    @include('common.about')
    <!--End call to action area-->

    <!--Start choose us area-->
    <section class="choose-us-area">
        <div class="right-img-holder">
            <img src="images/resources/choose-img.png" alt="Awesome Image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mar-left-minus">
                    <div class="img-holder">
                        <img src="images/resources/choose-bg.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="text-box">
                        <div class="sec-title">
                            <h1>Why Choose Us</h1>
                            <span class="border"></span>
                        </div>
                        <div class="more-features-content">
                            <ul>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-factory"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Best Material Used</h3>
                                        <p>Denouncing pleasure and praising pain was born and give you a complete
                                            account of the system.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-people"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Expert Mechanics</h3>
                                        <p>There anyone who loves or pursues or desires to obtain pain of itself and
                                            expound teachings.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-medal"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Certified Detailers</h3>
                                        <p>Take a trivials example, which of us ever seds laborious physical exercise
                                            great explorer of the truth.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End choose us area-->

    <!--Start repair service area-->
    <section class="repair-service-area-v2">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Auto Repair Services</h1>
                <span class="border center"></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service-carousel">
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/resources/repair-service-v2-1.jpg" alt="Awesome Image">
                                <div class="box">
                                    <h3>$1200</h3>
                                    <p>20% Off</p>
                                </div>
                            </div>
                            <div class="text-holder text-center">
                                <h3>Wheel Alignment</h3>
                                <div class="text">
                                    <p>We guarantee the best price on all tires & offer free services like tire
                                        rotations.</p>
                                </div>
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/resources/repair-service-v2-2.jpg" alt="Awesome Image">
                                <div class="box">
                                    <h3>$4500</h3>
                                    <p>35% Off</p>
                                </div>
                            </div>
                            <div class="text-holder text-center">
                                <h3>Full Car Painting</h3>
                                <div class="text">
                                    <p>Auto body painting means you can pursue entry level positions with team. </p>
                                </div>
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/resources/repair-service-v2-3.jpg" alt="Awesome Image">
                                <div class="box">
                                    <h3>$2300</h3>
                                    <p>0% Off</p>
                                </div>
                            </div>
                            <div class="text-holder text-center">
                                <h3>Air Conditioner</h3>
                                <div class="text">
                                    <p>A car cooler is an auto mobile window will evaporative cooler & sometimes.</p>
                                </div>
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                        <!--End single item-->

                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/resources/repair-service-v2-1.jpg" alt="Awesome Image">
                                <div class="box">
                                    <h3>$1200</h3>
                                    <p>20% Off</p>
                                </div>
                            </div>
                            <div class="text-holder text-center">
                                <h3>Wheel Alignment</h3>
                                <div class="text">
                                    <p>We guarantee the best price on all tires & offer free services like tire
                                        rotations.</p>
                                </div>
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/resources/repair-service-v2-2.jpg" alt="Awesome Image">
                                <div class="box">
                                    <h3>$4500</h3>
                                    <p>35% Off</p>
                                </div>
                            </div>
                            <div class="text-holder text-center">
                                <h3>Full Car Painting</h3>
                                <div class="text">
                                    <p>Auto body painting means you can pursue entry level positions with team. </p>
                                </div>
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/resources/repair-service-v2-3.jpg" alt="Awesome Image">
                                <div class="box">
                                    <h3>$2300</h3>
                                    <p>0% Off</p>
                                </div>
                            </div>
                            <div class="text-holder text-center">
                                <h3>Air Conditioner</h3>
                                <div class="text">
                                    <p>A car cooler is an auto mobile window will evaporative cooler & sometimes.</p>
                                </div>
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                        <!--End single item-->

                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/resources/repair-service-v2-1.jpg" alt="Awesome Image">
                                <div class="box">
                                    <h3>$1200</h3>
                                    <p>20% Off</p>
                                </div>
                            </div>
                            <div class="text-holder text-center">
                                <h3>Wheel Alignment</h3>
                                <div class="text">
                                    <p>We guarantee the best price on all tires & offer free services like tire
                                        rotations.</p>
                                </div>
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/resources/repair-service-v2-2.jpg" alt="Awesome Image">
                                <div class="box">
                                    <h3>$4500</h3>
                                    <p>35% Off</p>
                                </div>
                            </div>
                            <div class="text-holder text-center">
                                <h3>Full Car Painting</h3>
                                <div class="text">
                                    <p>Auto body painting means you can pursue entry level positions with team. </p>
                                </div>
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/resources/repair-service-v2-3.jpg" alt="Awesome Image">
                                <div class="box">
                                    <h3>$2300</h3>
                                    <p>0% Off</p>
                                </div>
                            </div>
                            <div class="text-holder text-center">
                                <h3>Air Conditioner</h3>
                                <div class="text">
                                    <p>A car cooler is an auto mobile window will evaporative cooler & sometimes.</p>
                                </div>
                                <a href="#">Make an Appointment</a>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End repair service area-->

    <!--Start latest work area-->
    <section class="latest-work-area-v2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title pull-left">
                        <h1>Our Latest Works</h1>
                        <span class="border"></span>
                    </div>
                    <ul class="project-filter post-filter pull-right">
                        <li class="active" data-filter=".filter-item"><span>View All</span></li>
                        <li data-filter=".diagnostics"><span>Diagnostics</span></li>
                        <li data-filter=".engine"><span>Engine</span></li>
                        <li data-filter=".repairs"><span>Repairs</span></li>
                        <li data-filter=".wheel"><span>Wheel Service</span></li>
                        <li data-filter=".air"><span>Air Conditioner</span></li>
                    </ul>
                </div>
            </div>
            <div class="row project-content masonary-layout filter-layout">
                <!--Start single project item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter-item engine repairs">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v3-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="gallery-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder text-center">
                            <a href="gallery-single.html">New Engine Fixing</a>
                            <p>Engine, Repairs</p>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter-item diagnostics air repairs">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v3-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="gallery-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder text-center">
                            <a href="gallery-single.html">Engine Diagnostic</a>
                            <p>Diagnostics, Engine</p>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter-item wheel diagnostics air">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v3-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="gallery-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder text-center">
                            <a href="gallery-single.html">Wheel Alignment</a>
                            <p>Repairs, Wheel</p>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter-item wheel engine diagnostics">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v3-4.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="gallery-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder text-center">
                            <a href="gallery-single.html">Tire Reparing</a>
                            <p>Wheel, Diagnostics</p>
                        </div>
                    </div>
                </div>
                <!--End single project item-->

                <!--Start single project item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter-item engine repairs">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v3-5.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="gallery-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder text-center">
                            <a href="gallery-single.html">Free Oil Changing</a>
                            <p>Wheel, Diagnostics</p>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter-item diagnostics air repairs">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v3-6.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="gallery-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder text-center">
                            <a href="gallery-single.html">Tire Reparing</a>
                            <p>Repairs, Wheel</p>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter-item wheel diagnostics air">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v3-7.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="gallery-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder text-center">
                            <a href="gallery-single.html">Tubeles Wheel Fix</a>
                            <p>Diagnostics, Engine</p>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter-item wheel engine diagnostics">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v3-8.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="gallery-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder text-center">
                            <a href="gallery-single.html">Car Washing</a>
                            <p>Engine, Repairs</p>
                        </div>
                    </div>
                </div>
                <!--End single project item-->
            </div>
        </div>
    </section>
    <!--End latest work area-->

    <!--Start testimonial area v2-->
    <section class="testimonial-area-v3" style="background-image:url(images/testimonial/testimonial-bg-v3.jpg);">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Customer Feedback</h1>
                <span class="border center"></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel-3">
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/testimonial/1.png" alt="Image">
                            </div>
                            <div class="text-holder">
                                <p>“ These guys are just the coolest company ever! They were aware of our transported
                                    for road and tail and complex. ”</p>
                                <h3>Santa Cruz - <span>London</span></h3>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/testimonial/2.png" alt="Image">
                            </div>
                            <div class="text-holder">
                                <p>“ Their performance on our project was extremely successful. Exceptional quality &
                                    was delivered in time and within budget. ”</p>
                                <h3>Emilia Crane - <span>Newyork</span></h3>
                            </div>
                        </div>
                        <!--End single item-->


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End testimonial area v2-->

    <!--Start latest blog area-->
    @include('common.lastNews')
    <!--End latest blog area-->

    <!--Start model area-->
    @include('common.models')
    <!--Emd model area-->
    <!--End footer bottom area-->
    @include('common.footer')
    <!--Start footer area-->
</div>
