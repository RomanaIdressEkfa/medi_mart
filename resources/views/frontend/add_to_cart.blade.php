<!doctype html>
<html class="no-js" lang="zxx">

<!-- shopping-cart31:32-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopping Cart || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('ui/frontend')}}/images/favicon.png">
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
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
           @include('frontend.share_option.header')
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Unit Price</th>
                                                <th class="li-product-quantity">Quantity</th>
                                                <th class="li-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $cartItems as $item )
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                {{-- <td class="li-product-thumbnail"><a href="#"><img src="{{asset('images/products/'.$item->medicine_image ??'')}}" alt="Li's Product Image"></a></td> --}}
                                                <td class="li-product-name"><a href="#">{{$item->category_id}}</a></td>
                                                <td class="li-product-price"><span class="amount">{{$item->total_price}}</span></td>
                                                <td class="quantity">
                                                    <label>{{$item->quantity}}</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">$70.00</span></td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>$130.00</span></li>
                                                <li>Total <span>$130.00</span></li>
                                            </ul>
                                            <a href="{{route('proceed_to_checkout')}}">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <!-- Begin Footer Area -->
            @include('frontend.share_option.footer')
            <!-- Footer Area End Here -->
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

<!-- shopping-cart31:32-->
</html>
