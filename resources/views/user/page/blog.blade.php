

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
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

</head>

<body class="home">
    <div class="page-wrapper">
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
        <!-- Start of Header -->
            <header class="header header-border mb-6">

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
            <!-- Start of Page Header -->
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li>Classic</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg mb-10">
                        <div class="main-content">
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="assets/images/blog/classic/1.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Fashion</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">New found the men dress for summer</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="assets/images/blog/classic/2.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Others</a>,
                                        <a href="#">Technology</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">Recognitory the needs is primary condition  for design</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="assets/images/blog/classic/3.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Clothes</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">New found the women’s shirt  for summer season</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="assets/images/blog/classic/4.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">We want to be different and fashion gives to me that outlet</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="assets/images/blog/classic/5.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Entertainment</a>,
                                        <a href="#">Lifestyle</a>,
                                        <a href="#">Others</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">Comes a cool blog post with Images</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-2">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="assets/images/blog/classic/6.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Fashion</a>,
                                        <a href="#">Technology</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">Fusce lacinia arcuet nulla</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <ul class="pagination justify-content-center pb-2">
                                <li class="prev disabled">
                                    <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                        <i class="w-icon-long-arrow-left"></i>Prev
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="next">
                                    <a href="#" aria-label="Next">
                                        Next<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                                <a href="#" class="sidebar-close">
                                    <i class="close-icon"></i>
                                </a>
                            </div>
                            <a href="#" class="sidebar-toggle">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="pin-wrapper" style="height: 1542.31px;"><div class="sticky-sidebar" style="border-bottom: 0px none rgb(102, 102, 102); width: 280px;">
                                    <div class="widget widget-search-form">
                                        <div class="widget-body">
                                            <form action="#" method="GET" class="input-wrapper input-wrapper-inline">
                                                <input type="text" class="form-control" placeholder="Search in Blog" autocomplete="off" required="">
                                                <button class="btn btn-search"><i class="w-icon-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Widget search form -->
                                    <div class="widget widget-categories">
                                        <h3 class="widget-title bb-no mb-0">Categories</h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li><a href="blog.html">Clothes</a></li>
                                            <li><a href="blog.html">Entertainment</a></li>
                                            <li><a href="blog.html">Fashion</a></li>
                                            <li><a href="blog.html">Lifestyle</a></li>
                                            <li><a href="blog.html">Others</a></li>
                                            <li><a href="blog.html">Shoes</a></li>
                                            <li><a href="blog.html">Technology</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget categories -->
                                    <div class="widget widget-posts">
                                        <h3 class="widget-title bb-no">Popular Posts</h3>
                                        <div class="widget-body">
                                            <div class="swiper">
                                                <div class="swiper-container swiper-theme nav-top swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper-options="{
                                                    'spaceBetween': 20,
                                                    'slidesPerView': 1
                                                }">
                                                    <div class="swiper-wrapper " id="swiper-wrapper-2855862102754d191" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                        <div class="swiper-slide widget-col swiper-slide-active" role="group" aria-label="1 / 2" style="width: 280px; margin-right: 20px;">
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets/images/blog/sidebar/1.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Fashion tells about who you are from external point</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets/images/blog/sidebar/2.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 5, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">New found the men dress for summer</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-2">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets/images/blog/sidebar/3.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Cras ornare tristique elit</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide widget-col swiper-slide-next" role="group" aria-label="2 / 2" style="width: 280px; margin-right: 20px;">
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets/images/blog/sidebar/4.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Vivamus vestibulum ntulla nec ante</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets/images/blog/sidebar/5.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 5, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Fusce lacinia arcuet nulla</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-2">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets/images/blog/sidebar/6.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Comes a cool blog post with Images</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-2855862102754d191" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-2855862102754d191" aria-disabled="true"></div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget posts -->
                                    <div class="widget widget-custom-block">
                                        <h3 class="widget-title bb-no">Custom Block</h3>
                                        <div class="widget-body">
                                            <p class="text-default mb-0">Fringilla urna porttitor rhoncus dolor purus.
                                                Luctus veneneratis lectus magna fring.
                                                Suspendisse potenti. Sed egestas, ante et 
                                                vulputate volutpat, uctus metus libero.</p>
                                        </div>
                                    </div>
                                    <!-- End of Widget custom block -->
                                    <div class="widget widget-tags">
                                        <h3 class="widget-title bb-no">Browse Tags</h3>
                                        <div class="widget-body tags">
                                            <a href="#" class="tag">Fashion</a>
                                            <a href="#" class="tag">Style</a>
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="tag">Women</a>
                                            <a href="#" class="tag">Men</a>
                                            <a href="#" class="tag">Hobbies</a>
                                            <a href="#" class="tag">Shopping</a>
                                            <a href="#" class="tag">Photography</a>
                                        </div>
                                    </div>
                                    <div class="widget widget-calendar">
                                        <h3 class="widget-title bb-no">Calendar</h3>
                                        <div class="widget-body">
                                            <div class="calendar-container" data-calendar-options="{
                                                'dayExcerpt': 1
                                            }"><div class="calendar"><div class="calendar-header"><a href="#" class="btn-calendar btn-calendar-prev"><i class="la la-angle-left"></i></a><span class="calendar-title">July 2023</span><a href="#" class="btn-calendar btn-calendar-next"><i class="la la-angle-right"></i></a></div><table><thead><th class="holiday">s</th><th>m</th><th>t</th><th>w</th><th>t</th><th>f</th><th>s</th></thead><tbody><tr><td><span class="day disabled" data-date="2023-06-24T18:00:00.000Z">25</span></td><td><span class="day disabled" data-date="2023-06-25T18:00:00.000Z">26</span></td><td><span class="day disabled" data-date="2023-06-26T18:00:00.000Z">27</span></td><td><span class="day disabled" data-date="2023-06-27T18:00:00.000Z">28</span></td><td><span class="day disabled" data-date="2023-06-28T18:00:00.000Z">29</span></td><td><span class="day disabled" data-date="2023-06-29T18:00:00.000Z">30</span></td><td><span class="day" data-date="2023-06-30T18:00:00.000Z">1</span></td></tr><tr><td><span class="day" data-date="2023-07-01T18:00:00.000Z">2</span></td><td><span class="day" data-date="2023-07-02T18:00:00.000Z">3</span></td><td><span class="day" data-date="2023-07-03T18:00:00.000Z">4</span></td><td><span class="day" data-date="2023-07-04T18:00:00.000Z">5</span></td><td><span class="day" data-date="2023-07-05T18:00:00.000Z">6</span></td><td><span class="day" data-date="2023-07-06T18:00:00.000Z">7</span></td><td><span class="day" data-date="2023-07-07T18:00:00.000Z">8</span></td></tr><tr><td><span class="day" data-date="2023-07-08T18:00:00.000Z">9</span></td><td><span class="day" data-date="2023-07-09T18:00:00.000Z">10</span></td><td><span class="day" data-date="2023-07-10T18:00:00.000Z">11</span></td><td><span class="day" data-date="2023-07-11T18:00:00.000Z">12</span></td><td><span class="day" data-date="2023-07-12T18:00:00.000Z">13</span></td><td><span class="day" data-date="2023-07-13T18:00:00.000Z">14</span></td><td><span class="day" data-date="2023-07-14T18:00:00.000Z">15</span></td></tr><tr><td><span class="day" data-date="2023-07-15T18:00:00.000Z">16</span></td><td><span class="day" data-date="2023-07-16T18:00:00.000Z">17</span></td><td><span class="day" data-date="2023-07-17T18:00:00.000Z">18</span></td><td><span class="day today" data-date="2023-07-18T18:00:00.000Z">19</span></td><td><span class="day" data-date="2023-07-19T18:00:00.000Z">20</span></td><td><span class="day" data-date="2023-07-20T18:00:00.000Z">21</span></td><td><span class="day" data-date="2023-07-21T18:00:00.000Z">22</span></td></tr><tr><td><span class="day" data-date="2023-07-22T18:00:00.000Z">23</span></td><td><span class="day" data-date="2023-07-23T18:00:00.000Z">24</span></td><td><span class="day" data-date="2023-07-24T18:00:00.000Z">25</span></td><td><span class="day" data-date="2023-07-25T18:00:00.000Z">26</span></td><td><span class="day" data-date="2023-07-26T18:00:00.000Z">27</span></td><td><span class="day" data-date="2023-07-27T18:00:00.000Z">28</span></td><td><span class="day" data-date="2023-07-28T18:00:00.000Z">29</span></td></tr><tr><td><span class="day" data-date="2023-07-29T18:00:00.000Z">30</span></td><td><span class="day" data-date="2023-07-30T18:00:00.000Z">31</span></td><td><span class="day disabled" data-date="2023-07-31T18:00:00.000Z">1</span></td><td><span class="day disabled" data-date="2023-08-01T18:00:00.000Z">2</span></td><td><span class="day disabled" data-date="2023-08-02T18:00:00.000Z">3</span></td><td><span class="day disabled" data-date="2023-08-03T18:00:00.000Z">4</span></td><td><span class="day disabled" data-date="2023-08-04T18:00:00.000Z">5</span></td></tr></tbody></table></div></div>
                                        </div>
                                    </div>
                                </div></div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
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