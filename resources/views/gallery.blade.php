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
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Gallery</h1>
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
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start project area-->
<section class="project-area project-page">
    <div class="container-fluid">
        <div class="container gallery-menu">
            <ul class="project-filter post-filter text-center">
                <li class="active" data-filter=".filter-item"><span>View All</span></li>
                <li data-filter=".diagnostics"><span>Diagnostics</span></li>
                <li data-filter=".engine"><span>Engine</span></li>
                <li data-filter=".repairs"><span>Repairs</span></li>
                <li data-filter=".wheel"><span>Wheel Service</span></li>
                <li data-filter=".air"><span>Air Conditioner</span></li>
            </ul>
        </div>
        <div class="row mar0 project-content masonary-layout filter-layout">
            <!--Start single project item-->
            @foreach($gallerys as $gallery)
                <div class="single-project-item span-20per filter-item {!!$gallery->filter!!}">
                    <div class="img-holder">
                        <img src="images/projects/{{$gallery->photo}}" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a class="zoom" href="images/projects/{{$gallery->photo}}" data-rel="prettyPhoto" title="MechanicHub Project">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                    <div class="bottom">
                                        <a href="gallery-single.html">{{$gallery->category}}</a>
                                        <p>Repairs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--End single project item-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="load-more-button">
                    <a href="#">Load More</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End project area-->

@include('common.footer')
