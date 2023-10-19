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
    <section class="breadcrumb-area" style="background-image: url(/images/resources/breadcrumb-bg.jpg);">
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
                            <li><a href="/">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Gallery Single</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start project single area-->
    <section id="project-single-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!--Start single project item-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="/images/projects/{{$gallerys[$id-1]->photo}}" alt="Awesome Image" style="width: 670px; height: 557px;">
                        </div>
                    </div>
                    <!--End single project item-->
                </div>
                <div class="col-md-5">
                    <div class="project-info">
                        <div class="sec-title">
                            <h2>Informations</h2>
                            <span class="border"></span>
                        </div>
                        {!! nl2br(str_replace(' ', ' &nbsp;', $gallerys[$id-1]->text1)) !!}
                        <ul class="project-info-list">
                            <li>
                                <div class="icon-holder pull-left">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Client</span>
                                </div>
                                <div class="text-holder pull-right">
                                    <p>{{$gallerys[$id-1]->client}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder pull-left">
                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                    <span>Category</span>
                                </div>
                                <div class="text-holder pull-right">
                                    <p>{{$gallerys[$id-1]->category}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder pull-left">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Date</span>
                                </div>
                                <div class="text-holder pull-right">
                                    <p>{{$gallerys[$id-1]->date}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder pull-left">
                                    <i class="fa fa-wrench" aria-hidden="true"></i>
                                    <span>Mechanic</span>
                                </div>
                                <div class="text-holder pull-right">
                                    <p>{{$gallerys[$id-1]->mechanic}}</p>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-description">
                        {!! nl2br(str_replace(' ', ' &nbsp;', $gallerys[$id-1]->text2)) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-manager">
                        {!! $gallerys[$id-1]->short_text !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="social-share-box">
                        <h3>Did you like this Work? Please Share</h3>
                        <ul class="social-links pull-left">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row bottom">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    @if($gallerys[$id-1]->id != $min_id)
                        <div class="button prev pull-left">
                            <a href="{{route('gallery-single',$id-1)}}"><i class="fa fa-angle-left" aria-hidden="true"></i>Prev</a>
                        </div>
                    @endif
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="icon-holder text-center">
                        <a href="{{route('gallery')}}">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    @if($gallerys[$id-1]->id != $max_id)
                        <div class="button next pull-right">
                            <a href="{{route('gallery-single',$id+1)}}">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--End project single area-->
    <!--Start footer area-->
@include('common.footer')
