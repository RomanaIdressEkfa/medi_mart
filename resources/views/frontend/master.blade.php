<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Medi Mart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/responsive.css">
        <!-- Modernizr js -->
        <script src="{{asset('ui/frontend')}}/js/vendor/modernizr-2.8.3.min.js"></script>
        {{-- icon --}}
        <link rel="icon" type="image/x-icon" href="{{asset('ui/frontend')}}/images/banner/logo.jpg">
    </head>
    <body>

        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
          @include('frontend.share_option.header')
            <!-- Header Area End Here -->
            <!-- Begin Slider With Banner Area -->
            <div class="slider-with-banner mb-10">
                <div class="container">
                    <div class="row">
                        <!-- Begin Slider Area -->
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-area">
                                <div class="slider-active owl-carousel">

                                    <div class="single-slide align-center-left animation-style-02 bg-2 mb-9">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk Surface Studio 2018</h2>
                                            <h3>Starting at <span>$824.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-3 mb-9">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Starting at <span>$1849.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                    </div>
                </div>
            </div>




            <!-- Slider With Banner Area End Here -->
            <!-- Begin Product Area -->
            <!-- Product Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            <div class="li-static-banner ">
                <div class="container">
                    <div class="row ">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="single-banner">
                                <a href="#">
                                    <img style="height: 230px;" src="{{asset('ui/frontend')}}/images/banner/1_3.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img style="height: 230px;" src="{{asset('ui/frontend')}}/images/banner/1_4.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img style="height: 230px;" src="{{asset('ui/frontend')}}/images/banner/1_5.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>All Medicine</span>
                                </h2>

                            </div>
                            <section class="py-5">


                            <div class="row">
                           @foreach ( $products as $product )

                                 <!-- single-product-wrap start -->
                                 <div class="col-xl-3 col-lg-4 col-sm-6">
                                 <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="{{route('single_product',$product->id)}}">
                                            <img style="height: 200px;" src="{{asset('images/products/'.$product->medicine_image)}}" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">{{ $product->medicine_name  ?? ''}}</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">{{ $product->price  }} BDT </span>
                                            </div>
                                        </div>
                                        <form action="{{route('add_to_cart')}}" method="POST">
                                            @csrf
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="id" value="{{ $product->id  }}">
                                                <li class="add-cart active"><a href="">Add to cart</a></li>
                                                <li><a class="links-details" href=""><i class="fa fa-heart-o"></i></a></li>
                                                <li>
                                                    <a href="" title="quick view" class="quick-view-btn"
                                                    data-toggle="modal" data-target="#exampleModalCenter">
                                                    <i class="fa fa-eye"></i>
                                                 </a>
                                            </li>
                                            </ul>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                                <!-- single-product-wrap end -->

                                @endforeach
                               <!-- PRODUCT-->

    </div>
</section>

                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class="product-area li-laptop-product li-tv-audio-product pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Vendor Details</span>
                                </h2>
                                <ul class="li-sub-category-list">
                                    <li class="active"><a href="shop-left-sidebar.html">Chamcham</a></li>
                                    <li><a href="shop-left-sidebar.html">Sanai</a></li>
                                    <li><a href="shop-left-sidebar.html">Meito</a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- Li's Section Area End Here -->
                        <section class="py-5">


                            <div class="row">
                           @foreach ( $vendors as $product )

                                 <!-- single-product-wrap start -->
                                 <div class="col-xl-3 col-lg-4 col-sm-6">
                                 <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img style="height: 200px;" src="{{asset('images/products/'.$product->store_image)}}" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">{{$product->store_link}}</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">{{ $product->vendor_name  ?? ''}}</a></h4>
                                            <div class="price-box">
                                                <p class="new-price">{{ $product->store_name }} </p>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="{{route('single_product',$product->id)}}">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- single-product-wrap end -->

                                @endforeach
                               <!-- PRODUCT-->

    </div>
</section>


                    </div>
                </div>
            </section>
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            <div class="li-static-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Static Home Image Area -->
                            <div class="li-static-home-image"></div>
                            <!-- Li's Static Home Image Area End Here -->
                            <!-- Begin Li's Static Home Content Area -->

                            <!-- Li's Static Home Content Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Li's Trending Product Area -->

            <!-- Li's Trending Product Area End Here -->
            <!-- Begin Li's Trendding Products Area -->

            <!-- Li's Trendding Products Area End Here -->
            <!-- Begin Footer Area -->
            @include('frontend.share_option.footer')
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="{{asset('ui/frontend')}}/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="{{asset('ui/frontend')}}/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{asset('ui/frontend')}}/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="{{asset('ui/frontend')}}/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="{{asset('ui/frontend')}}/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="{{asset('ui/frontend')}}/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="{{asset('ui/frontend')}}/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{asset('ui/frontend')}}/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="{{asset('ui/frontend')}}/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="{{asset('ui/frontend')}}/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="{{asset('ui/frontend')}}/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="{{asset('ui/frontend')}}/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="{{asset('ui/frontend')}}/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="{{asset('ui/frontend')}}/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="{{asset('ui/frontend')}}/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="{{asset('ui/frontend')}}/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="{{asset('ui/frontend')}}/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="{{asset('ui/frontend')}}/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="{{asset('ui/frontend')}}/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="{{asset('ui/frontend')}}/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="{{asset('ui/frontend')}}/js/main.js"></script>
    </body>

<!-- index30:23-->
</html>
