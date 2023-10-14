<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            @foreach($carousel as $carousels)
                <li data-transition="rs-20">
                    <img src="images/slides/{{$carousels->img}}"  alt="" width="1920" height="750" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">


                    <div class="tp-caption  tp-resizeme"
                         data-x="right" data-hoffset="0"
                         data-y="top" data-voffset="170"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="1500">
                        <div class="slide-content-box mar-right text-center">
                            {!! nl2br(str_replace(' ', '&nbsp;', $carousels->text)) !!}
                            <div class="button">
                                <a class="" href="#">Get a instant Quote now!</a>
                            </div>
                            <h3><i class="fa fa-phone" aria-hidden="true"></i> Need Help? Call Us - +44 567 890123</h3>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
