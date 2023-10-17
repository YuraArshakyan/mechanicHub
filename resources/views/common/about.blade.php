<section class="welcome-area sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-holder">
                    <div class="sec-title">
                    </div>
                    <div class="text-box">
                        @if($texts[0]->id == 1)
                            {!! $texts[0]->text !!}
                        @endif
                        <div class="name-signature">
                            <div class="name">
                                @if($texts[1]->id == 2)
                                    {!! $texts[1]->text !!}
                                @endif
                            </div>
                            <div class="signature">
                                <img src="images/icon/signature.png" alt="Signature">
                            </div>
                        </div>
                            <div class="button pull-right_edit">
                                <a class="thm-btn" href="{{url('edit'. '/' . 'texts' . '/' . 1 . '/' . 1)}}">Edit</a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-holder wow slideInRight text-center">
                    <img src="images/resources/welcome.jpg" alt="Awesome Image">
                    <div class="inner-content">
                        <h3>We building a better experience for car owners</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
