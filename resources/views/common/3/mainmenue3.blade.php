<section class="mainmenu-area style-three stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 clearfix">
                <!--Start mainmenu-->
                <nav class="main-menu pull-left">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="dropdown current"><a href="/">Home</a>
                                <ul>
                                    <li><a href="{{route('home1')}}">Home One</a></li>
                                    <li><a href="{{route('home2')}}">Home Two</a></li>
                                    <li><a href="{{route('home3')}}">Home Three</a></li>
                                    <li><a href="/">Home Four</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="about.html">About us</a>
                                <ul>
                                    <li><a href="{{route('about')}}">About Mechanichub</a></li>
                                    <li><a href="{{route('team')}}">Meet Our Experts</a></li>
                                    <li><a href="{{route('pricing')}}">Pricing Table</a></li>
                                    <li><a href="{{route('testimonials')}}">Customer Reviews</a></li>
                                    <li><a href="{{route('faqs')}}">FAQ’s</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{route('services')}}">Services</a>
                                <ul>
                                    <li><a href="{{route('services')}}">View All Services</a></li>
                                    <li><a href="{{route('ser-single', 1)}}">Wheel Works</a></li>
{{--                                <li><a href="ser-single2-painting-works.html">Painting Works</a></li>--}}
                                    <li><a href="{{route('ser-single', 3)}}">Air Conditioner</a></li>
{{--                                <li><a href="ser-single4-water-service.html">Water Service</a></li>--}}
                                    <li><a href="{{route('ser-single', 5)}}">Engine Works</a></li>
                                    <li><a href="{{route('ser-single', 6)}}">lube Oil & Filters</a></li>
                                    <li><a href="{{route('ser-single', 7)}}">Brake Repairs</a></li>
                                    <li><a href="{{route('ser-single', 8)}}">Belts & Hoses</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('gallery')}}">Gallery</a></li>
{{--                            <li class="dropdown"><a href="gallery.html">Gallery</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="{{route('gallery')}}">Fullwidth Gallery</a></li>--}}
{{--                                    <li><a href="gallery-single.html">Gallery Single</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="dropdown"><a href="blog-grid.html">Blog</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="blog-grid.html">Blog Grid Layout</a></li>--}}
{{--                                    <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>--}}
{{--                                    <li><a href="blog-single.html">Blog Single Post</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="dropdown"><a href="shop.html">Shop</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="shop.html">Shop Products</a></li>--}}
{{--                                    <li><a href="shop-single.html">Products Single</a></li>--}}
{{--                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>--}}
{{--                                    <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                    <li><a href="account.html">My Account</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li><a href="{{route('contact')}}">Contact Us</a></li>


                            <li class="dropdown @yield('activePage3')"><a href="{{route('services')}}">Admin</a>
                                <ul>
                                    <li><a href="{{route('services')}}">Change carousel images</a></li>
                                    <li><a href="{{url('edit'. '/' . 'password' . '/' . 100 . '/' . 9)}}">Change password</a></li>
                                    {{--<li><a href="ser-single2-painting-works.html">Painting Works</a></li>--}}
                                    <li><a href="{{url('edit'. '/' . 'configs' . '/' . 100 . '/' . 8)}}">Chang configs</a></li>
                                    {{--<li><a href="ser-single4-water-service.html">Water Service</a></li>--}}
                                </ul>
                            </li>


                        </ul>
                    </div>
                </nav>
                <!--End mainmenu-->
                <!--Start mainmenu right box-->
                <div class="mainmenu-right-box pull-right">
                    <div class="contact-number">
                        <h3><span class="flaticon-technology"></span>Call Us: <span>1-800-123-4567</span></h3>
                    </div>
                </div>
                <!--End mainmenu right box-->
            </div>
        </div>
    </div>
</section>
