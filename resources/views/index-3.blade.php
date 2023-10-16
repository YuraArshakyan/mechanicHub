@include('common.header')
<body>
<div class="boxed_wrapper">

    <!--Start Preloader -->
    <div class="preloader"></div>
    <!--End Preloader -->

    <!--Start top bar area-->
    @include('common.3.topbar3')
    <!--End top bar area-->

    <!--Start mainmenu area-->
    @include('common.3.mainmenue3')
    @section('activePage1', 'current')
    <!--End mainmenu area-->

    <!--Start rev slider wrapper-->
    @include('common.3.slidebar3')
    <!--End rev slider wrapper-->

    <!--Start welcome area-v2 -->
    <section class="welcome-area-v2">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Welcome to MechanicHUB</h1>
                <span class="border center"></span>
                <p>We started Mechanic HUB because we believed that the auto repair industry was broken<br> and we
                    trusted earning your trust. </p>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-tool-2"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Vehicle Inspection</h3>
                            <p> Receive a free, fast, fair & transparent price quote.</p>
                        </div>
                        <div class="overlay-content">
                            <div class="icon-holder">
                                <span class="flaticon-tool-2"></span>
                            </div>
                            <div class="text-holder">
                                <h3>Vehicle Inspection</h3>
                                <p> Receive a free, fast, fair & transparent price quote.</p>
                            </div>
                            <a class="thm-btn read-more" href="#">Read More</a>
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
                        <div class="overlay-content">
                            <div class="icon-holder">
                                <span class="flaticon-car-repair"></span>
                            </div>
                            <div class="text-holder">
                                <h3>Diagnostic Services</h3>
                                <p>Provide your home or office location. Tell us when to meet you there.</p>
                            </div>
                            <a class="thm-btn read-more" href="#">Read More</a>
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
                        <div class="overlay-content">
                            <div class="icon-holder">
                                <span class="flaticon-tool-3"></span>
                            </div>
                            <div class="text-holder">
                                <h3>Serrvice Upgrades</h3>
                                <p>No more waiting in repair shops, we will reach your destination in one call.</p>
                            </div>
                            <a class="thm-btn read-more" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!--End single item-->

            </div>
        </div>
    </section>
    <!--End welcome area-v2 -->

    <!--Start slogan area-->
    <section class="slogan-area style-two">
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

    <!--Start service area v2-->
    <section class="service-area-v2">
        <div class="container">
            <div class="sec-title">
                <h1>Our Services</h1>
                <span class="border"></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="servicecarousel">
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/services/1.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="ser-single1-wheel-works.html"><i class="fa fa-link"
                                                                                      aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="top clearfix">
                                    <div class="title pull-left">
                                        <h3>Wheel Works</h3>
                                    </div>
                                    <div class="icon pull-right">
                                        <span class="flaticon-car-wheel"></span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>We guarantee the best price on all tires and offer free services like tire
                                        rotations.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/services/2.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="ser-single2-painting-works.html"><i class="fa fa-link"
                                                                                         aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="top clearfix">
                                    <div class="title pull-left">
                                        <h3>Painting Works</h3>
                                    </div>
                                    <div class="icon pull-right">
                                        <span class="flaticon-painter-roller"></span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Auto body painting means you can pursue entry level positions with our
                                        employers. </p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/services/3.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="ser-single5-engine-works.html"><i class="fa fa-link"
                                                                                       aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="top clearfix">
                                    <div class="title pull-left">
                                        <h3>Engine Works</h3>
                                    </div>
                                    <div class="icon pull-right">
                                        <span class="flaticon-engine"></span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Engine service is an auto mobile window and talent high quality paint and
                                        materials.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <div class="img-holder">
                                <img src="images/services/4.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="ser-single3-air-conditioner.html"><i class="fa fa-link"
                                                                                          aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="top clearfix">
                                    <div class="title pull-left">
                                        <h3>Air Conditioner</h3>
                                    </div>
                                    <div class="icon pull-right">
                                        <span class="flaticon-air-conditioner"></span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>A car cooler is an auto mobile window evaporative cooler and sometimes as a
                                        swamp.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End service area v2-->

    <!--Start latest work area-->
    <section class="latest-work-area">
        <div class="container-fluid">
            <div class="sec-title text-center">
                <h1>Latest Works</h1>
                <span class="border center"></span>
            </div>
            <ul class="project-filter post-filter text-center">
                <li class="active" data-filter=".filter-item"><span>View All</span></li>
                <li data-filter=".diagnostics"><span>Diagnostics</span></li>
                <li data-filter=".engine"><span>Engine</span></li>
                <li data-filter=".repairs"><span>Repairs</span></li>
                <li data-filter=".wheel"><span>Wheel Service</span></li>
                <li data-filter=".air"><span>Air Conditioner</span></li>
            </ul>
            <div class="row project-content masonary-layout filter-layout">
                <!--Start single project item-->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 filter-item engine repairs">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v2-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a class="zoom" href="images/projects/v2-1.jpg" data-rel="prettyPhoto"
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
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 filter-item diagnostics wheel">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v2-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a class="zoom" href="images/projects/v2-2.jpg" data-rel="prettyPhoto"
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
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 filter-item wheel diagnostics air">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v2-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a class="zoom" href="images/projects/v2-3.jpg" data-rel="prettyPhoto"
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
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 filter-item repairs diagnostics">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v2-4.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a class="zoom" href="images/projects/v2-4.jpg" data-rel="prettyPhoto"
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
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 filter-item repairs diagnostics air">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v2-5.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a class="zoom" href="images/projects/v2-5.jpg" data-rel="prettyPhoto"
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
                </div>
                <!--End single project item-->
                <!--Start single project item-->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 filter-item engine air repairs">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/v2-6.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a class="zoom" href="images/projects/v2-6.jpg" data-rel="prettyPhoto"
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
                </div>
                <!--End single project item-->

            </div>
        </div>
    </section>
    <!--End latest work area-->

    <!--Start appoinment area-->
    <section class="appoinment-area style-two">
        <div class="container">
            <div class="sec-title">
                <h1>Get an Appoinment</h1>
                <span class="border"></span>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="appoinment">
                        <form class="appoinment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="name" placeholder="Name*" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="email" name="mail" placeholder="Email*" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="model" placeholder="Make / Model*" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-box">
                                        <textarea name="case-description" placeholder="Case Description..."
                                                  required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <button class="thm-btn" type="submit">Submit now</button>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="text">
                                        <p>*Our Team is available Mon- Sat from 6 AM to 5 PM.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="more-features-content">
                        <ul>
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-factory"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Best Material Used</h3>
                                    <span>Desires to obtain</span>
                                    <p>How all this mistakens idea denouncing pleasures and completed account.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-people"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Expert Mechanics</h3>
                                    <span>Resultant pleasure</span>
                                    <p>There anyone who loves or pursues or desires to obtain pain of itself.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <span class="flaticon-medal"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Certified Detailers</h3>
                                    <span>Ever undertakes</span>
                                    <p>Take a trivials example, which of us ever seds laborious physical exercise.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End appoinment area-->

    <!--Start testimonial area-->
    <section class="testimonial-area style-three">
        <div class="container">
            <div class="sec-title">
                <h1>Customer Feedback</h1>
                <span class="border"></span>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-md-12">
                    <div class="testimonial-carousel-two">
                        <!--Start single testimonial item-->
                        <div class="single-testimonial-item">
                            <div class="top">
                                <div class="left thumb pull-left">
                                    <img src="images/testimonial/thumb-1.jpg" alt="Awesome Image">
                                </div>
                                <div class="left title pull-left">
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
                                <p>“ They did all the repairs and it cost me about 1/3 of the price. I was actually
                                    really happy with the work that was done. They were aware of our transported for
                                    road.</p>
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
                        <!--End single testimonial item-->
                        <!--Start single testimonial item-->
                        <div class="single-testimonial-item">
                            <div class="top">
                                <div class="left thumb pull-left">
                                    <img src="images/testimonial/thumb-1.jpg" alt="Awesome Image">
                                </div>
                                <div class="left title pull-left">
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
                                <p>“ They did all the repairs and it cost me about 1/3 of the price. I was actually
                                    really happy with the work that was done. They were aware of our transported for
                                    road.</p>
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
                        <!--End single testimonial item-->
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End testimonial area-->

    <!--Start team area-->
    <section class="team-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Meet Our Experts</h1>
                <span class="border center"></span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="team-carousel">
                        <!--Start single team member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="images/team/1.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Richard Antony</h3>
                                <span>Founder</span>
                                <div class="text">
                                    <p>Great explorer of the truth, the team master of human happiness.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single team member-->
                        <!--Start single team member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="images/team/2.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Chaz Cuthbert</h3>
                                <span>Mechanic</span>
                                <div class="text">
                                    <p>Teachings of the great explors of the truth the master-builders.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single team member-->
                        <!--Start single team member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="images/team/3.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Darden Eldbridge</h3>
                                <span>Accountant</span>
                                <div class="text">
                                    <p>Circumstances occur in which toil and pain can greatest pleasure.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single team member-->
                        <!--Start single team member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="images/team/4.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Eliot Hananiah</h3>
                                <span>Manager</span>
                                <div class="text">
                                    <p>The greatest pleasur to take example which of us ever undertakes.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single team member-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End team area-->

    <!--Start latest blog area-->
    @include('common.lastNews')
    <!--End latest blog area-->

    <!--Start Brand area-->
    <section class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand">
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/1.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/2.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/3.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/4.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/5.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/6.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand area-->
@include('common.footer')
