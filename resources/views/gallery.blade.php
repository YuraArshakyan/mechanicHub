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
    @section('activePage4', 'current')
    @include('common.'.$configs[7] -> value.'.mainmenue'.$configs[7] -> value)
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
                    @auth()
                        <li><a href="">Add</a></li>
                    @endauth
                </ul>
            </div>
            <div class="row mar0 project-content masonary-layout filter-layout">
                <!--Start single project item-->
                @foreach($gallerys as $gallery)
                    <div class="single-project-item span-20per filter-item {!!$gallery->filter!!}">
                        <div class="img-holder">
                            <img src="images/projects/{{$gallery->photo}}" alt="Awesome Image" style="width: 385px; height: 280px;">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a class="zoom" href="images/projects/{{$gallery->photo}}" data-rel="prettyPhoto" title="MechanicHub Project">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </a>
                                        @auth()
                                            <a class="zoom"
                                               href="{{url('edit'. '/' . 'gallery'  . '/' . $gallery->id . '/' . 6)}}">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <a class="zoom"
                                               href="{{url('edit'. '/' . 'gallery'  . '/' . $gallery->id . '/' . 6)}}"
                                               data-rel="prettyPhoto" title="MechanicHub Project">
                                                <i class="fa fa-delete" aria-hidden="true">delete</i>
                                            </a>
                                        @endauth
                                        <div class="bottom">
                                            <a href="{{route('gallery-single',$gallery->id)}}">{{$gallery->category}}</a>
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
        </div>
    </section>
    <!--End project area-->

@include('common.footer')
