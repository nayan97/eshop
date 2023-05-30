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
        <main class="main">
        @include('user.sections.slider')
          
            <!-- End of .intro-section -->


          
            <!-- End of .category-section top-category -->

            <div class="container">
                
                @include('user.sections.filter')
                <!-- End of Tab Content -->

                @include('user.sections.cosmatic')
                <!-- End of Category Cosmetic Lifestyle -->

                @include('user.sections.garments')
                <!-- End of Product Wrapper 1 -->

                @include('user.sections.electronic')
                <!-- End of Product Wrapper 1 -->

                @include('user.sections.baner')
                <!-- End of Banner Fashion -->
                @include('user.sections.home_aplienc')
             
                <!-- End of Product Wrapper 1 -->

                @include('user.sections.clients')
                <!-- End of Brands Wrapper -->
                        @include('user.sections.blog_part')
                <!-- Post Wrapper -->

                @include('user.sections.review')
                <!-- End of Reviewed Producs -->
            </div>
            <!--End of Catainer -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
            @include('user.sections.footer')
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper-->

    <!-- Start of Sticky Footer -->
 
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

    <!--bt js-->
    <script src="assets/js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from portotheme.com/html/wolmart/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 07:35:12 GMT -->
</html>