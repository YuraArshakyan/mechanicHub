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
	                <h1>Edit {{$table}}</h1>
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
                        <li class="active">Edit {{$table}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
@switch($grupp)
    @case(1)
    <!--Start login register area-->
    <section class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form">
                        <div class="sec-title">
                            <h1>Edit {{$table}}</h1>
                            <span class="border"></span>
                        </div>
                        <div class="row">
                            <form action="#">
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <textarea name="text" class="col-md-12">{{$texts[0]->text}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px">
                                    <div class="input-field">
                                        <textarea name="text1" class="col-md-12">{{$texts[1]->text}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <button class="thm-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form register">

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End login register area-->
    @break;
    @case(2)
    <!--Start login register area-->
    <section class="login-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form">
                                <div class="sec-title">
                                    <h1>Edit {{$table}}</h1>
                                    <span class="border"></span>
                                </div>
                                <div class="row">
                                    <form action="#">
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <img src="/images/team/{{$photos[$id-1]->photo}}" alt="Awesome Image">
                                            <label class="file_upload" style="width: 100%; margin-top: 15px;">
                                                <input type="file" name="slide" style="display: none"/>
                                                <a type="file" class="btn btn-primary">Change</a>
                                            </label>
                                            <div class="input-field" style="margin-top: 15px;">
                                                <textarea name="text1" class="col-md-12">{{$photos[$id-1]->text}}</textarea>
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="input-field">
                                                <textarea name="text2" class="col-md-12">{{$photos[$id-1]->text2}}</textarea>
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <button class="thm-btn" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form register">

                            </div>
                        </div>

                    </div>
                </div>
            </section>
    <!--End login register area-->
    @break;
    @case(3)
    <!--Start login register area-->
    <section class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form">
                        <div class="sec-title">
                            <h1>Edit {{$table}}</h1>
                            <span class="border"></span>
                        </div>
                        <div class="row">
                            <form action="#">
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <input name="text1" class="col-md-12" style="height: 40px" value="{{$prices[$id-1]->title}}">
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px">
                                    <div class="input-field">
                                        <input name="text1" class="col-md-12" style="height: 40px" value="{{$prices[$id-1]->price}}">
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px">
                                    <div class="input-field">
                                        <textarea name="text2" class="col-md-12">{{$prices[$id-1]->services}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <button class="thm-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form register">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End login register area-->
    @break;
    @case(4)
    <!--Start login register area-->
    <section class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form">
                        <div class="sec-title">
                            <h1>Edit {{$table}}</h1>
                            <span class="border"></span>
                        </div>
                        <div class="row">
                            <form action="#">
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <textarea name="text" class="col-md-12">{{$qa[$id-1]->question}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px">
                                    <div class="input-field">
                                        <textarea name="text1" class="col-md-12">{{$qa[$id-1]->answer}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <button class="thm-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form register">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End login register area-->
    @break;
    @case(5)
    <!--Start login register area-->
    <section class="login-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form">
                                <div class="sec-title">
                                    <h1>Edit {{$table}}</h1>
                                    <span class="border"></span>
                                </div>
                                <div class="row">
                                    <form action="#">
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="input-field">
                                                <img src="/images/services/{{$services[$id-1]->photo}}" alt="Awesome Image">
                                                <label class="file_upload" style="width: 100%; margin-top: 15px;">
                                                    <input type="file" name="slide" style="display: none"/>
                                                    <a type="file" class="btn btn-primary">Change</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="z-index: 100;">
                                            <div class="input-field">
                                                <textarea name="text" class="col-md-12">{{$services[$id-1]->title}}</textarea>
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 15px;z-index: 100;">
                                            <div class="input-field">
                                                <textarea name="text1" class="col-md-12">{{$services[$id-1]->text}}</textarea>
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sec-title" style="margin-top: 10px;">
                                            <h1>why choose us</h1>
                                            <span class="border"></span>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="input-field">
                                                <img src="/images/services/single-service/{{$choose[0]->photo}}" alt="Awesome Video Gallery">
                                                <label class="file_upload" style="width: 100%; margin-top: 15px;">
                                                    <input type="file" name="slide" style="display: none"/>
                                                    <a type="file" class="btn btn-primary">Change</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-field">
                                                <textarea name="text1" class="col-md-12">{{$choose[0]->title}}</textarea>
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="input-field">
                                                <textarea name="text1" class="col-md-12">{{$choose[0]->text}}</textarea>
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <button class="thm-btn" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form register">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!--End login register area-->
    @break;
    @case(6)
    <!--Start login register area-->
    <section class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form">
                        <div class="sec-title">
                            <h1>Edit {{$table}}</h1>
                            <span class="border"></span>
                        </div>
                        <div class="row">
                            <form action="#">
                                <div class="col-md-12" style="z-index: 100;">
                                    <div class="input-field">
                                        <img src="/images/projects/{{$gallery[$id-1]->photo}}" alt="Awesome Video Gallery">
                                        <label class="file_upload" style="width: 100%; margin-top: 15px;">
                                            <input type="file" name="slide" style="display: none"/>
                                            <a type="file" class="btn btn-primary">Change</a>
                                        </label>
                                    </div>
                                    <div class="input-field">
                                        <textarea name="text" class="col-md-12">{{$gallery[$id-1]->text1}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 15px;z-index: 100;">
                                    <div class="input-field">
                                        <input name="text1" class="col-md-12" style="height: 40px" value="{{$gallery[$id-1]->client}}">
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 15px;z-index: 100;">
                                    <div class="input-field">
                                        <input name="text1" class="col-md-12" style="height: 40px" value="{{$gallery[$id-1]->category}}">
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 15px;z-index: 100;">
                                    <div class="input-field">
                                        <input name="text1" class="col-md-12" style="height: 40px" value="{{$gallery[$id-1]->date}}">
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 15px;z-index: 100;">
                                    <div class="input-field">
                                        <input name="text1" class="col-md-12" style="height: 40px" value="{{$gallery[$id-1]->mechanic}}">
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-field" style="margin-top: 10px">
                                        <textarea name="text1" class="col-md-12">{{$gallery[0]->text2}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px">
                                    <div class="input-field">
                                        <textarea name="text1" class="col-md-12">{{$gallery[0]->short_text}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 15px;z-index: 100;">
                                    <div class="input-field">
                                        <input name="text1" class="col-md-12" style="height: 40px" value="{{$gallery[$id-1]->filter}}">
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <button class="thm-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form register">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End login register area-->
    @break;
    @case(7)
    <!--Start login register area-->
    <section class="login-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form">
                                <div class="sec-title">
                                    <h1>Edit {{$table}}</h1>
                                    <span class="border"></span>
                                </div>
                                <div class="row">
                                    <form action="#">
                                        <div class="col-md-12" style="z-index: 100;">
                                            <div class="input-field">
                                                <textarea name="text" class="col-md-12">{{$configs[$id-1]->value}}</textarea>
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @if($id == 1)
                                            <div class="col-md-12" style="margin-top: 15px;z-index: 100;">
                                                <div class="input-field">
                                                    <input name="text1" class="col-md-12" style="height: 40px" value="{{$configs[$id]->value}}">
                                                    <div class="icon-holder">
                                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <button class="thm-btn" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form register">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!--End login register area-->
    @break;
    @case(8)
    <!--Start login register area-->
    <section class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form">
                        <div class="sec-title">
                            <h1>Edit {{$table}}</h1>
                            <span class="border"></span>
                        </div>
                        <div class="row">
                            <form action="#">
                                @foreach($configs as $config)
                                    <div class="col-md-12" style="z-index: 100; @if($config->id != $configs_min) margin-top: 15px; @endif">
                                        <div class="input-field">
                                            <textarea name="text{{$config->id}}" class="col-md-12">{{$config->value}}</textarea>
                                            <div class="icon-holder">
                                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <button class="thm-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form register">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End login register area-->
    @break;
    @case(9)
    <!--Start login register area-->
    <section class="login-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form">
                                <div class="sec-title">
                                    <h1>Edit {{$table}}</h1>
                                    <span class="border"></span>
                                </div>
                                <div class="row">
                                    <form action="#">
                                        <div class="col-md-12">
                                            <div class="input-field">
                                                <input name="text1" class="col-md-12" style="height: 40px" placeholder="Old password">
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="input-field">
                                                <input name="text1" class="col-md-12" style="height: 40px" placeholder="New password">
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="input-field">
                                                <input name="text1" class="col-md-12" style="height: 40px" placeholder="Re-enter new password">
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <button class="thm-btn" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form register">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!--End login register area-->
    @break;
    @case(10)
    <!--Start login register area-->
    <section class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form">
                        <div class="sec-title">
                            <h1>Edit {{$table}}</h1>
                            <span class="border"></span>
                        </div>
                        <div class="row">
                            <form action="#">
                                <div class="col-md-12">
                                    <img src="/images/testimonial/{{$reviews[$id-1]->photo}}" alt="Awesome Image">
                                    <label class="file_upload" style="width: 100%; margin-top: 15px;">
                                        <input type="file" name="slide" style="display: none"/>
                                        <a type="file" class="btn btn-primary">Change</a>
                                    </label>
                                    <div class="input-field">
                                        <textarea name="text" class="col-md-12">{{$reviews[$id-1]->name}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px">
                                    <div class="input-field">
                                        <textarea name="text" class="col-md-12">{{$reviews[$id-1]->comment}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px">
                                    <div class="input-field">
                                        <textarea name="text" class="col-md-12">{{$reviews[$id-1]->service}}</textarea>
                                        <div class="icon-holder">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 10px">
                                    <div class="input-field">
                                        <img src="/images/testimonial/{{$reviews[$id-1]->car}}" alt="Awesome Image">
                                        <label class="file_upload" style="width: 100%; margin-top: 15px;">
                                            <input type="file" name="slide" style="display: none"/>
                                            <a type="file" class="btn btn-primary">Change</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <button class="thm-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form register">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End login register area-->
    @break;
@endswitch
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
