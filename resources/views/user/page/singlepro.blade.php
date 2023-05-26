

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
    <div class="main">
    <div class="container">
                
                <!-- Start of Page Content -->
                <div class="page-content">
                    <div class="container">
                        <div class="row gutter-lg">
                            <div class="main-content">
                            
                                        <div class="product product-single row">
                                            <div class="col-md-6 mb-6">
                                                <div class="product-gallery product-gallery-sticky">
                                                    <div class="swiper-container product-single-swiper swiper-theme nav-inner" data-swiper-options="{
                                                        'navigation': {
                                                            'nextEl': '.swiper-button-next',
                                                            'prevEl': '.swiper-button-prev'
                                                        }
                                                    }">
                                                        <div class="swiper-wrapper row cols-1 gutter-no">
                                                            <div class="swiper-slide">
                                                                <figure class="product-image">
                                                                    <img src="{{ url('img/product/'.$product->image)}}"
                                                                        data-zoom-image="#"
                                                                        alt="Electronics Black Wrist Watch" width="800" height="900">
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <figure class="product-image">
                                                                    <img src="assets/images/products/default/2-800x900.jpg"
                                                                        data-zoom-image="assets/images/products/default/2-800x900.jpg"
                                                                        alt="Electronics Black Wrist Watch" width="488" height="549">
                                                                </figure>
                                                            </div>
                                                   
                                                            <div class="swiper-slide">
                                                                <figure class="product-image">
                                                                    <img src="assets/images/products/default/6-800x900.jpg"
                                                                        data-zoom-image="assets/images/products/default/6-800x900.jpg"
                                                                        alt="Electronics Black Wrist Watch" width="800" height="900">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <button class="swiper-button-next"></button>
                                                        <button class="swiper-button-prev"></button>
                                                        <a href="#" class="product-gallery-btn product-image-full"><i class="w-icon-zoom"></i></a>
                                                    </div>
                                                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                                        'navigation': {
                                                            'nextEl': '.swiper-button-next',
                                                            'prevEl': '.swiper-button-prev'
                                                        }
                                                    }">
                                                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                                            <div class="product-thumb swiper-slide">
                                                                <img src="assets/images/products/default/1-800x900.jpg"
                                                                    alt="Product Thumb" width="800" height="900">
                                                            </div>
                                               
                                                            <div class="product-thumb swiper-slide">
                                                                <img src="assets/images/products/default/6-800x900.jpg"
                                                                    alt="Product Thumb" width="800" height="900">
                                                            </div>
                                                        </div>
                                                        <button class="swiper-button-next"></button>
                                                        <button class="swiper-button-prev"></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 mb-md-6">
                                               
                                                    <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                                        <h1 class="product-title">{{$product -> title}}</h1>
                                                        <div class="product-bm-wrapper">
                                                            <figure class="brand">
                                                                <img src="" alt="Brand"
                                                                    width="102" height="48" />
                                                            </figure>
                                                            <div class="product-meta">
                                                                <div class="product-categories">
                                                                    Category:
                                                                    <span class="product-category"><a href="#">{{$product->category}}</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <hr class="product-divider">
    
                                                        <div class="product-price">
                                                        @if($product->dis_price!=NULL)
                                                            <h6><del class="new-price">${{$product ->dis_price}}</del><s>${{$product ->price}}</s></h6>
                                                            @else
                                                            <h6 class="new-price">${{$product ->price}}</h6>
                                                            @endif
    
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <a href="#product-tab-reviews" class="rating-reviews scroll-to">{{$product -> review}}</a>
                                                        </div>
    
                                                        <div class="product-short-desc">
                                                            <ul class="list-type-check list-style-none">
                                                                <li>{{$product -> description}}</li>
                                                        
                                                            </ul>
                                                        </div>
    
                                                        <hr class="product-divider">
    
    
                                                        <div class="fix-bottom product-sticky-content sticky-content">
                                                            <form action="{{ url('/cart', $product -> id)}}" method="POST">
                                                                @csrf
                                                                <div class="product-form container">
                                                                    <div class="form-group">
                                                                        <label style="padding-bottom:9px;font-size:16px">Quantity</label><span>  <input style="font-size:12px;color:#000" name="qty" type="number" value="1" min="1" class="form-control"></span>
                                                                    
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" style="margin-left:20px;
                                                                        margin-top:28px; padding:15px " class="btn btn-primary">
                                                                                <i class="w-icon-cart"></i>
                                                                                <span>Add to Cart</span>
                                                                        </button>
    
                                                                    </div>
                                                                
                                                                </div>
    
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                              
                                                
                                            </div>
                                        </div>    
                             
                              
                                <div class="frequently-bought-together mt-5">
                                    <h2 class="title title-underline">Frequently Bought Together</h2>
                                    <div class="bought-together-products row mt-8 pb-4">
                                        <div class="product product-wrap text-center">
                                            <figure class="product-media">
                                                <img src="assets/images/products/default/bought-1.jpg" alt="Product"
                                                    width="138" height="138" />
                                                <div class="product-checkbox">
                                                    <input type="checkbox" class="custom-checkbox" id="product_check1"
                                                        name="product_check1">
                                                    <label></label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Electronics Black Wrist Watch</a>
                                                </h4>
                                                <div class="product-price">$40.00</div>
                                            </div>
                                        </div>
                                        <div class="product product-wrap text-center">
                                            <figure class="product-media">
                                                <img src="assets/images/products/default/bought-2.jpg" alt="Product"
                                                    width="138" height="138" />
                                                <div class="product-checkbox">
                                                    <input type="checkbox" class="custom-checkbox" id="product_check2"
                                                        name="product_check2">
                                                    <label></label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Apple Laptop</a>
                                                </h4>
                                                <div class="product-price">$1,800.00</div>
                                            </div>
                                        </div>
                                        <div class="product product-wrap text-center">
                                            <figure class="product-media">
                                                <img src="assets/images/products/default/bought-3.jpg" alt="Product"
                                                    width="138" height="138" />
                                                <div class="product-checkbox">
                                                    <input type="checkbox" class="custom-checkbox" id="product_check3"
                                                        name="product_check3">
                                                    <label></label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">White Lenovo Headphone</a>
                                                </h4>
                                                <div class="product-price">$34.00</div>
                                            </div>
                                        </div>
                                        <div class="product-button">
                                            <div class="bought-price font-weight-bolder text-primary ls-50">$1,874.00</div>
                                            <div class="bought-count">For 3 items</div>
                                            <a href="{{ url('/cart', $product -> id)}}" class="btn btn-dark btn-rounded">Add All To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a href="#product-tab-description" class="nav-link active">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#product-tab-specification" class="nav-link">Specification</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#product-tab-vendor" class="nav-link">Vendor Info</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#product-tab-reviews" class="nav-link">Customer Reviews (3)</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="product-tab-description">
                                            <div class="row mb-4">
                                                <div class="col-md-6 mb-5">
                                                    <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4>
                                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                        sed do eiusmod tempor incididunt arcu cursus vitae congue mauris.
                                                        Sagittis id consectetur purus ut. Tellus rutrum tellus pelle Vel
                                                        pretium lectus quam id leo in vitae turpis massa.</p>
                                                    <ul class="list-type-check">
                                                        <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis
                                                            elit.
                                                        </li>
                                                        <li>Vivamus finibus vel mauris ut vehicula.</li>
                                                        <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <div class="banner banner-video product-video br-xs">
                                                        <figure class="banner-media">
                                                            <a href="#">
                                                                <img src="assets/images/products/video-banner-610x300.jpg"
                                                                    alt="banner" width="610" height="300"
                                                                    style="background-color: #bebebe;">
                                                            </a>
                                                            <a class="btn-play-video btn-iframe"
                                                                href="assets/video/memory-of-a-woman.mp4"></a>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row cols-md-3">
                                                <div class="mb-3">
                                                    <h5 class="sub-title font-weight-bold"><span class="mr-3">1.</span>Free
                                                        Shipping &amp; Return</h5>
                                                    <p class="detail pl-5">We offer free shipping for products on orders
                                                        above 50$ and offer free delivery for all orders in US.</p>
                                                </div>
                                                <div class="mb-3">
                                                    <h5 class="sub-title font-weight-bold"><span>2.</span>Free and Easy
                                                        Returns</h5>
                                                    <p class="detail pl-5">We guarantee our products and you could get back
                                                        all of your money anytime you want in 30 days.</p>
                                                </div>
                                                <div class="mb-3">
                                                    <h5 class="sub-title font-weight-bold"><span>3.</span>Special Financing
                                                    </h5>
                                                    <p class="detail pl-5">Get 20%-50% off items over 50$ for a month or
                                                        over 250$ for a year with our special credit card.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="product-tab-specification">
                                            <ul class="list-none">
                                                <li>
                                                    <label>Model</label>
                                                    <p>Skysuite 320</p>
                                                </li>
                                                <li>
                                                    <label>Color</label>
                                                    <p>Black</p>
                                                </li>
                                                <li>
                                                    <label>Size</label>
                                                    <p>Large, Small</p>
                                                </li>
                                                <li>
                                                    <label>Guarantee Time</label>
                                                    <p>3 Months</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="product-tab-vendor">
                                            <div class="row mb-3">
                                                <div class="col-md-6 mb-4">
                                                    <figure class="vendor-banner br-sm">
                                                        <img src="assets/images/products/vendor-banner.jpg"
                                                            alt="Vendor Banner" width="610" height="295"
                                                            style="background-color: #353B55;" />
                                                    </figure>
                                                </div>
                                                <div class="col-md-6 pl-2 pl-md-6 mb-4">
                                                    <div class="vendor-user">
                                                        <figure class="vendor-logo mr-4">
                                                            <a href="#">
                                                                <img src="assets/images/products/vendor-logo.jpg"
                                                                    alt="Vendor Logo" width="80" height="80" />
                                                            </a>
                                                        </figure>
                                                        <div>
                                                            <div class="vendor-name"><a href="#">Jone Doe</a></div>
                                                            <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 90%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <a href="#" class="rating-reviews">(32 Reviews)</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="vendor-info list-style-none">
                                                        <li class="store-name">
                                                            <label>Store Name:</label>
                                                            <span class="detail">OAIO Store</span>
                                                        </li>
                                                        <li class="store-address">
                                                            <label>Address:</label>
                                                            <span class="detail">Steven Street, El Carjon, CA 92020, United
                                                                States (US)</span>
                                                        </li>
                                                        <li class="store-phone">
                                                            <label>Phone:</label>
                                                            <a href="#tel:">1234567890</a>
                                                        </li>
                                                    </ul>
                                                    <a href="vendor-dokan-store.html"
                                                        class="btn btn-dark btn-link btn-underline btn-icon-right">Visit
                                                        Store<i class="w-icon-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <p class="mb-5"><strong class="text-dark">L</strong>orem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Venenatis tellus in metus vulputate eu scelerisque felis. Vel pretium
                                                lectus quam id leo in vitae turpis massa. Nunc id cursus metus aliquam.
                                                Libero id faucibus nisl tincidunt eget. Aliquam id diam maecenas ultricies
                                                mi eget mauris. Volutpat ac tincidunt vitae semper quis lectus. Vestibulum
                                                mattis ullamcorper velit sed. A arcu cursus vitae congue mauris.
                                            </p>
                                            <p class="mb-2"><strong class="text-dark">A</strong> arcu cursus vitae congue
                                                mauris. Sagittis id consectetur purus
                                                ut. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla.
                                                Diam in
                                                arcu cursus euismod quis. Eget sit amet tellus cras adipiscing enim eu. In
                                                fermentum et sollicitudin ac orci phasellus. A condimentum vitae sapien
                                                pellentesque
                                                habitant morbi tristique senectus et. In dictum non consectetur a erat. Nunc
                                                scelerisque viverra mauris in aliquam sem fringilla.</p>
                                        </div>
                                        <div class="tab-pane" id="product-tab-reviews">
                                            <div class="row mb-4">
                                                <div class="col-xl-4 col-lg-5 mb-4">
                                                    <div class="ratings-wrapper">
                                                        <div class="avg-rating-container">
                                                            <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                                            <div class="avg-rating">
                                                                <p class="text-dark mb-1">Average Rating</p>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full">
                                                                        <span class="ratings" style="width: 60%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ratings-value d-flex align-items-center text-dark ls-25">
                                                            <span
                                                                class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                                class="count">(2 of 3)</span>
                                                        </div>
                                                        <div class="ratings-list">
                                                            <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 100%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <div class="progress-bar progress-bar-sm ">
                                                                    <span></span>
                                                                </div>
                                                                <div class="progress-value">
                                                                    <mark>70%</mark>
                                                                </div>
                                                            </div>
                                                            <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 80%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <div class="progress-bar progress-bar-sm ">
                                                                    <span></span>
                                                                </div>
                                                                <div class="progress-value">
                                                                    <mark>30%</mark>
                                                                </div>
                                                            </div>
                                                            <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <div class="progress-bar progress-bar-sm ">
                                                                    <span></span>
                                                                </div>
                                                                <div class="progress-value">
                                                                    <mark>40%</mark>
                                                                </div>
                                                            </div>
                                                            <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 40%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <div class="progress-bar progress-bar-sm ">
                                                                    <span></span>
                                                                </div>
                                                                <div class="progress-value">
                                                                    <mark>0%</mark>
                                                                </div>
                                                            </div>
                                                            <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 20%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <div class="progress-bar progress-bar-sm ">
                                                                    <span></span>
                                                                </div>
                                                                <div class="progress-value">
                                                                    <mark>0%</mark>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-7 mb-4">
                                                    <div class="review-form-wrapper">
                                                        <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                                            Review</h3>
                                                        <p class="mb-3">Your email address will not be published. Required
                                                            fields are marked *</p>
                                                        <form action="#" method="POST" class="review-form">
                                                            <div class="rating-form">
                                                                <label for="rating">Your Rating Of This Product :</label>
                                                                <span class="rating-stars">
                                                                    <a class="star-1" href="#">1</a>
                                                                    <a class="star-2" href="#">2</a>
                                                                    <a class="star-3" href="#">3</a>
                                                                    <a class="star-4" href="#">4</a>
                                                                    <a class="star-5" href="#">5</a>
                                                                </span>
                                                                <select name="rating" id="rating" required=""
                                                                    style="display: none;">
                                                                    <option value="">Rate…</option>
                                                                    <option value="5">Perfect</option>
                                                                    <option value="4">Good</option>
                                                                    <option value="3">Average</option>
                                                                    <option value="2">Not that bad</option>
                                                                    <option value="1">Very poor</option>
                                                                </select>
                                                            </div>
                                                            <textarea cols="30" rows="6"
                                                                placeholder="Write Your Review Here..." class="form-control"
                                                                id="review"></textarea>
                                                            <div class="row gutter-md">
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Your Name" id="author">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Your Email" id="email_1">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="checkbox" class="custom-checkbox"
                                                                    id="save-checkbox">
                                                                <label for="save-checkbox">Save my name, email, and website
                                                                    in this browser for the next time I comment.</label>
                                                            </div>
                                                            <button type="submit" class="btn btn-dark">Submit
                                                                Review</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a href="#show-all" class="nav-link active">Show All</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#helpful-positive" class="nav-link">Most Helpful
                                                            Positive</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#helpful-negative" class="nav-link">Most Helpful
                                                            Negative</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#highest-rating" class="nav-link">Highest Rating</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#lowest-rating" class="nav-link">Lowest Rating</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="show-all">
                                                        <ul class="comments list-style-none">
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <figure class="comment-avatar">
                                                                        <img src="assets/images/agents/1-100x100.png"
                                                                            alt="Commenter Avatar" width="90" height="90">
                                                                    </figure>
                                                                    <div class="comment-content">
                                                                        <h4 class="comment-author">
                                                                            <a href="#">John Doe</a>
                                                                            <span class="comment-date">March 22, 2021 at
                                                                                1:54 pm</span>
                                                                        </h4>
                                                                        <div class="ratings-container comment-rating">
                                                                            <div class="ratings-full">
                                                                                <span class="ratings"
                                                                                    style="width: 60%;"></span>
                                                                                <span
                                                                                    class="tooltiptext tooltip-top"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>pellentesque habitant morbi tristique senectus
                                                                            et. In dictum non consectetur a erat.
                                                                            Nunc ultrices eros in cursus turpis massa
                                                                            tincidunt ante in nibh mauris cursus mattis.
                                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                                            ut tristique.</p>
                                                                        <div class="comment-action">
                                                                            <a href="#"
                                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                                (0)
                                                                            </a>
                                                                            <div class="review-image">
                                                                                <a href="#">
                                                                                    <figure>
                                                                                        <img src="assets/images/products/default/review-img-1.jpg"
                                                                                            width="60" height="60"
                                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                            data-zoom-image="assets/images/products/default/review-img-1-800x900.jpg" />
                                                                                    </figure>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <figure class="comment-avatar">
                                                                        <img src="assets/images/agents/2-100x100.png"
                                                                            alt="Commenter Avatar" width="90" height="90">
                                                                    </figure>
                                                                    <div class="comment-content">
                                                                        <h4 class="comment-author">
                                                                            <a href="#">John Doe</a>
                                                                            <span class="comment-date">March 22, 2021 at
                                                                                1:52 pm</span>
                                                                        </h4>
                                                                        <div class="ratings-container comment-rating">
                                                                            <div class="ratings-full">
                                                                                <span class="ratings"
                                                                                    style="width: 80%;"></span>
                                                                                <span
                                                                                    class="tooltiptext tooltip-top"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>Nullam a magna porttitor, dictum risus nec,
                                                                            faucibus sapien.
                                                                            Ultrices eros in cursus turpis massa tincidunt
                                                                            ante in nibh mauris cursus mattis.
                                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                                            ut tristique.</p>
                                                                        <div class="comment-action">
                                                                            <a href="#"
                                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                                (0)
                                                                            </a>
                                                                            <div class="review-image">
                                                                                <a href="#">
                                                                                    <figure>
                                                                                        <img src="assets/images/products/default/review-img-2.jpg"
                                                                                            width="60" height="60"
                                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                            data-zoom-image="assets/images/products/default/review-img-2.jpg" />
                                                                                    </figure>
                                                                                </a>
                                                                                <a href="#">
                                                                                    <figure>
                                                                                        <img src="assets/images/products/default/review-img-3.jpg"
                                                                                            width="60" height="60"
                                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                            data-zoom-image="assets/images/products/default/review-img-3.jpg" />
                                                                                    </figure>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <figure class="comment-avatar">
                                                                        <img src="assets/images/agents/3-100x100.png"
                                                                            alt="Commenter Avatar" width="90" height="90">
                                                                    </figure>
                                                                    <div class="comment-content">
                                                                        <h4 class="comment-author">
                                                                            <a href="#">John Doe</a>
                                                                            <span class="comment-date">March 22, 2021 at
                                                                                1:21 pm</span>
                                                                        </h4>
                                                                        <div class="ratings-container comment-rating">
                                                                            <div class="ratings-full">
                                                                                <span class="ratings"
                                                                                    style="width: 60%;"></span>
                                                                                <span
                                                                                    class="tooltiptext tooltip-top"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                            condimentum vitae
                                                                            sapien pellentesque habitant morbi tristique
                                                                            senectus et. In dictum
                                                                            non consectetur a erat. Nunc scelerisque viverra
                                                                            mauris in aliquam sem fringilla.</p>
                                                                        <div class="comment-action">
                                                                            <a href="#"
                                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                                (1)
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" id="helpful-positive">
                                                        <ul class="comments list-style-none">
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <figure class="comment-avatar">
                                                                        <img src="assets/images/agents/1-100x100.png"
                                                                            alt="Commenter Avatar" width="90" height="90">
                                                                    </figure>
                                                                    <div class="comment-content">
                                                                        <h4 class="comment-author">
                                                                            <a href="#">John Doe</a>
                                                                            <span class="comment-date">March 22, 2021 at
                                                                                1:54 pm</span>
                                                                        </h4>
                                                                        <div class="ratings-container comment-rating">
                                                                            <div class="ratings-full">
                                                                                <span class="ratings"
                                                                                    style="width: 60%;"></span>
                                                                                <span
                                                                                    class="tooltiptext tooltip-top"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>pellentesque habitant morbi tristique senectus
                                                                            et. In dictum non consectetur a erat.
                                                                            Nunc ultrices eros in cursus turpis massa
                                                                            tincidunt ante in nibh mauris cursus mattis.
                                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                                            ut tristique.</p>
                                                                        <div class="comment-action">
                                                                            <a href="#"
                                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                                (0)
                                                                            </a>
                                                                            <div class="review-image">
                                                                                <a href="#">
                                                                                    <figure>
                                                                                        <img src="assets/images/products/default/review-img-1.jpg"
                                                                                            width="60" height="60"
                                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                            data-zoom-image="assets/images/products/default/review-img-1.jpg" />
                                                                                    </figure>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <figure class="comment-avatar">
                                                                        <img src="assets/images/agents/2-100x100.png"
                                                                            alt="Commenter Avatar" width="90" height="90">
                                                                    </figure>
                                                                    <div class="comment-content">
                                                                        <h4 class="comment-author">
                                                                            <a href="#">John Doe</a>
                                                                            <span class="comment-date">March 22, 2021 at
                                                                                1:52 pm</span>
                                                                        </h4>
                                                                        <div class="ratings-container comment-rating">
                                                                            <div class="ratings-full">
                                                                                <span class="ratings"
                                                                                    style="width: 80%;"></span>
                                                                                <span
                                                                                    class="tooltiptext tooltip-top"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>Nullam a magna porttitor, dictum risus nec,
                                                                            faucibus sapien.
                                                                            Ultrices eros in cursus turpis massa tincidunt
                                                                            ante in nibh mauris cursus mattis.
                                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                                            ut tristique.</p>
                                                                        <div class="comment-action">
                                                                            <a href="#"
                                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                                (0)
                                                                            </a>
                                                                            <div class="review-image">
                                                                                <a href="#">
                                                                                    <figure>
                                                                                        <img src="assets/images/products/default/review-img-2.jpg"
                                                                                            width="60" height="60"
                                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                            data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                                    </figure>
                                                                                </a>
                                                                                <a href="#">
                                                                                    <figure>
                                                                                        <img src="assets/images/products/default/review-img-3.jpg"
                                                                                            width="60" height="60"
                                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                            data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                                    </figure>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" id="helpful-negative">
                                                        <ul class="comments list-style-none">
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <figure class="comment-avatar">
                                                                        <img src="assets/images/agents/3-100x100.png"
                                                                            alt="Commenter Avatar" width="90" height="90">
                                                                    </figure>
                                                                    <div class="comment-content">
                                                                        <h4 class="comment-author">
                                                                            <a href="#">John Doe</a>
                                                                            <span class="comment-date">March 22, 2021 at
                                                                                1:21 pm</span>
                                                                        </h4>
                                                                        <div class="ratings-container comment-rating">
                                                                            <div class="ratings-full">
                                                                                <span class="ratings"
                                                                                    style="width: 60%;"></span>
                                                                                <span
                                                                                    class="tooltiptext tooltip-top"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                            condimentum vitae
                                                                            sapien pellentesque habitant morbi tristique
                                                                            senectus et. In dictum
                                                                            non consectetur a erat. Nunc scelerisque viverra
                                                                            mauris in aliquam sem fringilla.</p>
                                                                        <div class="comment-action">
                                                                            <a href="#"
                                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                                (1)
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" id="highest-rating">
                                                        <ul class="comments list-style-none">
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <figure class="comment-avatar">
                                                                        <img src="assets/images/agents/2-100x100.png"
                                                                            alt="Commenter Avatar" width="90" height="90">
                                                                    </figure>
                                                                    <div class="comment-content">
                                                                        <h4 class="comment-author">
                                                                            <a href="#">John Doe</a>
                                                                            <span class="comment-date">March 22, 2021 at
                                                                                1:52 pm</span>
                                                                        </h4>
                                                                        <div class="ratings-container comment-rating">
                                                                            <div class="ratings-full">
                                                                                <span class="ratings"
                                                                                    style="width: 80%;"></span>
                                                                                <span
                                                                                    class="tooltiptext tooltip-top"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>Nullam a magna porttitor, dictum risus nec,
                                                                            faucibus sapien.
                                                                            Ultrices eros in cursus turpis massa tincidunt
                                                                            ante in nibh mauris cursus mattis.
                                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                                            ut tristique.</p>
                                                                        <div class="comment-action">
                                                                            <a href="#"
                                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                                (0)
                                                                            </a>
                                                                            <div class="review-image">
                                                                                <a href="#">
                                                                                    <figure>
                                                                                        <img src="assets/images/products/default/review-img-2.jpg"
                                                                                            width="60" height="60"
                                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                            data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                                    </figure>
                                                                                </a>
                                                                                <a href="#">
                                                                                    <figure>
                                                                                        <img src="assets/images/products/default/review-img-3.jpg"
                                                                                            width="60" height="60"
                                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                            data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                                    </figure>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" id="lowest-rating">
                                                        <ul class="comments list-style-none">
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <figure class="comment-avatar">
                                                                        <img src="assets/images/agents/1-100x100.png"
                                                                            alt="Commenter Avatar" width="90" height="90">
                                                                    </figure>
                                                                    <div class="comment-content">
                                                                        <h4 class="comment-author">
                                                                            <a href="#">John Doe</a>
                                                                            <span class="comment-date">March 22, 2021 at
                                                                                1:54 pm</span>
                                                                        </h4>
                                                                        <div class="ratings-container comment-rating">
                                                                            <div class="ratings-full">
                                                                                <span class="ratings"
                                                                                    style="width: 60%;"></span>
                                                                                <span
                                                                                    class="tooltiptext tooltip-top"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>pellentesque habitant morbi tristique senectus
                                                                            et. In dictum non consectetur a erat.
                                                                            Nunc ultrices eros in cursus turpis massa
                                                                            tincidunt ante in nibh mauris cursus mattis.
                                                                            Cras ornare arcu dui vivamus arcu felis bibendum
                                                                            ut tristique.</p>
                                                                        <div class="comment-action">
                                                                            <a href="#"
                                                                                class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                <i class="far fa-thumbs-down"></i>Unhelpful
                                                                                (0)
                                                                            </a>
                                                                            <div class="review-image">
                                                                                <a href="#">
                                                                                    <figure>
                                                                                        <img src="assets/images/products/default/review-img-3.jpg"
                                                                                            width="60" height="60"
                                                                                            alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                            data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                                    </figure>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                            <!-- End of Main Content -->
                            <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                                <div class="sidebar-overlay"></div>
                                <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                                <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                                <div class="sidebar-content scrollable">
                                    <div class="sticky-sidebar">
                                        <div class="widget widget-icon-box mb-6">
                                            <div class="icon-box icon-box-side">
                                                <span class="icon-box-icon text-dark">
                                                    <i class="w-icon-truck"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                                    <p>For all orders over $99</p>
                                                </div>
                                            </div>
                                            <div class="icon-box icon-box-side">
                                                <span class="icon-box-icon text-dark">
                                                    <i class="w-icon-bag"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <h4 class="icon-box-title">Secure Payment</h4>
                                                    <p>We ensure secure payment</p>
                                                </div>
                                            </div>
                                            <div class="icon-box icon-box-side">
                                                <span class="icon-box-icon text-dark">
                                                    <i class="w-icon-money"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <h4 class="icon-box-title">Money Back Guarantee</h4>
                                                    <p>Any back within 30 days</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Widget Icon Box -->
    
                                        <div class="widget widget-banner mb-9">
                                            <div class="banner banner-fixed br-sm">
                                                <figure>
                                                    <img src="assets/images/shop/banner3.jpg" alt="Banner" width="266"
                                                        height="220" style="background-color: #1D2D44;" />
                                                </figure>
                                                <div class="banner-content">
                                                    <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                                        40<sup class="font-weight-bold">%</sup><sub
                                                            class="font-weight-bold text-uppercase ls-25">Off</sub>
                                                    </div>
                                                    <h4
                                                        class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                                        Ultimate Sale</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Widget Banner -->
    
                                        <div class="widget widget-products">
                                            <div class="title-link-wrapper mb-2">
                                                <h4 class="title title-link font-weight-bold">More Products</h4>
                                            </div>
    
                                            <div class="swiper nav-top">
                                                <div class="swiper-container swiper-theme nav-top" data-swiper-options = "{
                                                    'slidesPerView': 1,
                                                    'spaceBetween': 20,
                                                    'navigation': {
                                                        'prevEl': '.swiper-button-prev',
                                                        'nextEl': '.swiper-button-next'
                                                    }
                                                }">
                                                    <div class="swiper-wrapper">
                                                        <div class="widget-col swiper-slide">
                                                            <div class="product product-widget">
                                                                <figure class="product-media">
                                                                    <a href="#">
                                                                        <img src="assets/images/shop/13.jpg" alt="Product"
                                                                            width="100" height="113" />
                                                                    </a>
                                                                </figure>
                                                                <div class="product-details">
                                                                    <h4 class="product-name">
                                                                        <a href="#">Smart Watch</a>
                                                                    </h4>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <span class="ratings" style="width: 100%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price">$80.00 - $90.00</div>
                                                                </div>
                                                            </div>
                                                            <div class="product product-widget">
                                                                <figure class="product-media">
                                                                    <a href="#">
                                                                        <img src="assets/images/shop/14.jpg" alt="Product"
                                                                            width="100" height="113" />
                                                                    </a>
                                                                </figure>
                                                                <div class="product-details">
                                                                    <h4 class="product-name">
                                                                        <a href="#">Sky Medical Facility</a>
                                                                    </h4>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <span class="ratings" style="width: 80%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price">$58.00</div>
                                                                </div>
                                                            </div>
                                                            <div class="product product-widget">
                                                                <figure class="product-media">
                                                                    <a href="#">
                                                                        <img src="assets/images/shop/15.jpg" alt="Product"
                                                                            width="100" height="113" />
                                                                    </a>
                                                                </figure>
                                                                <div class="product-details">
                                                                    <h4 class="product-name">
                                                                        <a href="#">Black Stunt Motor</a>
                                                                    </h4>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <span class="ratings" style="width: 60%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price">$374.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-col swiper-slide">
                                                            <div class="product product-widget">
                                                                <figure class="product-media">
                                                                    <a href="#">
                                                                        <img src="assets/images/shop/16.jpg" alt="Product"
                                                                            width="100" height="113" />
                                                                    </a>
                                                                </figure>
                                                                <div class="product-details">
                                                                    <h4 class="product-name">
                                                                        <a href="#">Skate Pan</a>
                                                                    </h4>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <span class="ratings" style="width: 100%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price">$278.00</div>
                                                                </div>
                                                            </div>
                                                            <div class="product product-widget">
                                                                <figure class="product-media">
                                                                    <a href="#">
                                                                        <img src="assets/images/shop/17.jpg" alt="Product"
                                                                            width="100" height="113" />
                                                                    </a>
                                                                </figure>
                                                                <div class="product-details">
                                                                    <h4 class="product-name">
                                                                        <a href="#">Modern Cooker</a>
                                                                    </h4>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <span class="ratings" style="width: 80%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price">$324.00</div>
                                                                </div>
                                                            </div>
                                                            <div class="product product-widget">
                                                                <figure class="product-media">
                                                                    <a href="#">
                                                                        <img src="assets/images/shop/18.jpg" alt="Product"
                                                                            width="100" height="113" />
                                                                    </a>
                                                                </figure>
                                                                <div class="product-details">
                                                                    <h4 class="product-name">
                                                                        <a href="#">CT Machine</a>
                                                                    </h4>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <span class="ratings" style="width: 100%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price">$236.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- End of Sidebar -->
                        </div>
                    </div>
                </div>
                <!-- End of Page Content -->
             
    
                  
             
    
            
    
               
      
                </div>
                <!--End of Catainer -->
    </div>
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