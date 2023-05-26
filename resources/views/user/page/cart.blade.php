

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 07:34:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart - Marketplace HTML5 Template</title>
    <base href="/public">

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description"
        content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo1.min.css">

    <style type="text/css">


      .cart > thead > tr > th {
        border-bottom: 1px solid #e7e7e7;
        font-size: 11px;
        letter-spacing: 2px;
        text-transform: uppercase;
        }
        .cart > tbody > tr > td {
        padding: 20px 8px;
        vertical-align: middle;
        font-size: 11px;
        letter-spacing: 2px;
        text-transform: uppercase;
        border-bottom: 1px solid #e7e7e7;
        }
        .cart > tbody > tr > td > a {
        color: #191b1d;
        }
        .cart > tbody > tr > td > a:hover {
        color: #EF2D56;
        }
        .cart > tbody > tr > td .form-control {
        width: 60px;
        padding: 10px 12px;
        font-size: 15px;
        height: 45px;
        }
        .cart > tbody > tr > td .circle {
        display: block;
        height: 10px;
        width: 10px;
        border-radius: 50%;
        background-color: #00cc77;
        }
        .cart > tbody > tr > td .circle.red {
        background-color: #EF2D56;
        }
        .cart > tbody > tr > td .cart-price {
        font-size: 14px;
        }
        .cart > tbody > tr > td img {
        max-height: 100px;
        }
        .cart-summary {
        border: 1px solid #e7e7e7;
        padding: 20px;
        margin-bottom: 25px;
        }
        .upper{
        padding: 20px 0px;
        text-transform: uppercase;
        font-size: 15px;
        font-family: 'Montserrat', sans-serif;
   
        }

   
        .cart-summary .nav > li {
        padding: 4px 0;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #79818a;
        font-weight: 500;
        font-family: 'Montserrat', sans-serif;
        }
        .cart-summary .nav > li span {
        color: #191b1d;
        }
        .promo-code {
        border: 1px solid #e7e7e7;
        padding: 20px;
        margin-bottom: 25px;
        }
        .product-list li {
        overflow: hidden;
        margin-bottom: 25px!important;
        font-weight: 500;
        }
        .product-list li:last-child {
        margin-bottom: 0!important;
        }
        .product-list li .product-thumbnail {
        width: 70px;
        height: 70px;
        float: left;
        overflow: hidden;
        border-radius: 50%;
        }
        .product-list li .product-summary {
        margin-left: 70px;
        padding-left: 15px;
        }
        .product-list li .product-summary a {
        display: block;
        color: #191b1d;
        }
        .product-list li .product-summary span {
        color: #79818a;
        font-size: 13px;
        letter-spacing: 1px;
        }
        .checkout-form .form-group {
        overflow: hidden;
        }
        .form-group label {
        font-size: 11px;
        font-weight: 400;
        letter-spacing: 2px;
        text-transform: uppercase;
        }
        .form-group .checkbox input[type=checkbox],
        .form-group .radio input[type=checkbox],
        .form-group .checkbox-inline input[type=checkbox],
        .form-group .radio-inline input[type=checkbox],
        .form-group .checkbox input[type=radio],
        .form-group .radio input[type=radio],
        .form-group .checkbox-inline input[type=radio],
        .form-group .radio-inline input[type=radio] {
        margin-top: 0;
        }
        .form-group textarea {
        min-height: 100px;
        }
        .form-group.has-error .form-control {
        border-color: #e74c3c;
        }
        .form-group.has-success .form-control {
        border-color: #2ecc71;
        }
        .btn-block{
            padding:20px;
            margin-top:10px;
        }
        .bg-up{
            background-color:#ddd;
        }
        .btgo{
          
            color: #fff;
            border-color: #EF2D56;
            background-color: #EF2D56;
        }
        .pull-right{
         
            position:right;
        }
        .btn-group-sm{
            
            padding: 0 16px;
            font-size: 10px;
            height: 37px;
            line-height: 35px;
        }
        .pro-pro{
            margin-top:260px
        }
    </style>

</head>

<body class="home">
    <div class="page-wrapper">
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
        <!-- Start of Header -->
            <header class="header">

            @include('user.header.top')
                        <!-- End of Header Top -->

            @include('user.header.middile')                   
                     <!-- End of Header Middle -->

                        <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                            <div class="container">
                                <div class="inner-wrap">

                                @include('user.header.header')
                                    
                                          <!-- End of Header left -->

                                    <div class="header-right">
                                        <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                                        <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            </header>
        <!-- End of Header -->

        <!-- Start of Main-->
        <main class="main cart">
            <!-- Start of Breadcrumb -->
          
                <div class="container">
                    <div class="row">
                    <div class="col-md-8">
                        <table class="table cart pro-pro">
                            <thead>
                                <tr>
                                <th style="margin-left:20px;" class="hidden-xs">Photo</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th class="hidden-xs">&nbsp;</th>
                                <th></th>
                                </tr>
                            </thead>
                             <tbody>
                                @foreach ($carts as $cart )
                                    <tr>
                                        <td class="hidden-xs">
                                            <a href="#">
                                            <img src="/img/product/{{$cart->photo}}" alt="">
                                            </a>
                                        </td>
                                        <td><a href="#"><span>{{$cart->product_title}}</span></a>
                                        </td>
                                        <td>
                                            <span class="cart-price">{{$cart->product_qty}}</span>
                                        </td>
                                        <td>
                                            <span class="cart-price">{{$cart->price}}</span>
                                        </td>
                                        <td class="hidden-xs">
                                            <a href="#"><i class="ti-close"></i></a>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3 col-md-offset-1">
                        <div class="promo-code">
                        <h6 class="upper">Apply Coupon Code</h6>
                        <hr>
                        <div class="input-group">
                            <input type="text" placeholder="Coupon Code" class="form-control input-group-sm"><span class="input-group-btn"><button type="button" class="btn btn-group-sm btgo">Go!</button></span>
                        </div>
                        </div>
                        <div class="cart-summary">
                        <h6 class="upper">Order Details</h6>
                        <hr>
                        <ul class="nav">
                            <li>Cart subtotal:<span class="pull-right">$299.99</span>
                            </li>
                            <li>Shipping:<span class="pull-right">$9.99</span>
                            </li>
                        </ul>
                        <hr>
                        <h6 class="upper">Order total:<span class="pull-right">$309.99</span></h6>
                        </div>
                        <p><a href="#" class="btn btn-primary btn-block">Checkout</a>
                        </p>
                        <p><a href="#" class="bg-up btn btn-dark-out btn-block">Update Cart</a>
                        </p>
                        <br>
                    </div>
                    </div>
                    <!-- end of row-->
                </div>
                <!-- end of container-->
           
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
            @include('user.sections.footer')
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper-->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="shop-banner-sidebar.html" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.html" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="#" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Beige knitted elas<br>tic
                                    runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="https://www.portotheme.com/html/wolmart/product.html">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                </div>

                <div class="cart-action">
                    <a href="#" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                </div>
            </div>
            <!-- End of Dropdown Box -->
        </div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->

    <!-- End of Mobile Menu -->

    <!-- Start of Newsletter popup -->
    <div class="newsletter-popup mfp-hide">
        <div class="newsletter-content">
            <h4 class="text-uppercase font-weight-normal ls-25">Get Up to<span class="text-primary">25% Off</span></h4>
            <h2 class="ls-25">Sign up to Wolmart</h2>
            <p class="text-light ls-10">Subscribe to the Wolmart market newsletter to
                receive updates on special offers.</p>
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email font-size-md" name="email" id="email2"
                    placeholder="Your email address" required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox d-flex align-items-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required="">
                <label for="hide-newsletter-popup" class="font-size-sm text-light">Don't show this popup again.</label>
            </div>
        </div>
    </div>
    <!-- End of Newsletter popup -->

    <!-- Start of Quick View -->
 
    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/zoom/jquery.zoom.js"></script>
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/skrollr/skrollr.min.js"></script>

    <!-- Swiper JS -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.min.js"></script>
</body>


<!-- Mirrored from portotheme.com/html/wolmart/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 07:35:12 GMT -->
</html>