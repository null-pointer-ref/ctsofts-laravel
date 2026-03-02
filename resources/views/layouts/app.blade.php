<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <base href="{{ url('/') }}/">
    <meta name="author" content="CT Softs LLC" />
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="INDEX,FOLLOW" />

    <!-- Social Media / Open Graph -->
    @php
        $defaultOgImage = asset('assets/img/default-og.jpg');
        $siteName = 'CT Softs LLC';
        $defaultDescription = 'CT Softs LLC - Web Development & Digital Marketing Agency in Connecticut';
    @endphp

    <meta property="og:title" content="@yield('og_title', $siteName)" />
    <meta property="og:description" content="@yield('og_description', $defaultDescription)" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('og_image', $defaultOgImage)" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ $siteName }}" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('twitter_title', $siteName)" />
    <meta name="twitter:description" content="@yield('twitter_description', $defaultDescription)" />
    <meta name="twitter:image" content="@yield('twitter_image', $defaultOgImage)" />

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/2-removebg-preview_(1).png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logojpg.jpg" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/logojpg.jpg" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logojpg.jpg" />
    <link rel="manifest" href="assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/imageRevealHover.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div class="cursor"></div>
    <div class="cursor2"></div>
    <div class="color-scheme-wrap active">
        <h4 class="color-scheme-wrap-title">
            <i class="far fa-palette me-2"></i>
        </h4>
        <div class="color-switch-btns">
            <button data-color="#3E66F3"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#684DF4"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#008080"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#323F7C"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FC3737"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#8a2be2"><i class="fa-solid fa-droplet"></i></button>
        </div>
    </div>

    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle">
                <i class="fal fa-times"></i>
            </button>
            <div class="mobile-logo">
                <a class="icon-masking" href="/"><span data-mask-src="assets/img/logo.svg" class="mask-icon"></span><img
                        src="assets/img/2-removebg-preview_(1).png" style="width: 150px;" alt="Webteck" /></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children mega-menu-wrap">
                        <a href="/">Home</a>
                    </li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <header class="th-header header-layout2">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <i class="fas fa-map-location"></i>609 W Johnson Ave, Cheshire, CT 06410, United
                                    States of America
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <a href="tel:+12038057525">+1 203-805-7525</a>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:info@ctsofts.com">info@ctsofts.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-social">
                            <span class="social-title">Follow Us On : </span>
                            <a href="https://www.facebook.com/profile.php?id=61570478018149"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/ctsofts/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area" style="height: 117px;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a class="icon-masking" href="/" style="display:inline-flex; align-items:center; margin-top: -10px;">
                                    <img src="assets/img/2-removebg-preview_(1).png" alt="Webteck"
                                        style="width:90px; height:90px; object-fit:contain;" />
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block" style="margin-bottom: 20px;">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="header-button">
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block" style="margin-bottom: 20px;">
                            <div class="header-button">
                                <a href="/contact" class="th-btn shadow-none">Make Appointment<i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-wrapper footer-layout3" data-bg-src="assets/img/bg/footer_bg_2.jpg">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xxl-3 col-xl-4">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">About CTsofts</h3>
                            <div class="th-widget-about">
                                <p class="about-text">
                                    CTsofts delivers custom software, AI-driven solutions and reliable IT services to
                                    accelerate business growth. We focus on quality, security and long-term
                                    partnerships.
                                </p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/profile.php?id=61570478018149"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/ctsofts/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li><a href="/terms">Terms & Conditions</a></li>
                                    <li><a href="/privacy">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">IT SERVICES</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    @php
                                        $services = config('services-data.services');
                                        $displayServices = $services;
                                    @endphp
                                    @foreach($displayServices as $service)
                                        <li>
                                            <a
                                                href="{{ route('service.detail', ['service' => Str::slug($service['name'])]) }}">
                                                {{ $service['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-2-1.jpg"
                                                alt="Blog Image" /></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="blog-details.html">How CTsofts Accelerates
                                                Digital Transformation</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>12 Jan, 2026</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-2-2.jpg"
                                                alt="Blog Image" /></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="blog-details.html">Scaling Applications with
                                                Cloud & AI</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>04 Feb, 2026</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">
                            Copyright <i class="fal fa-copyright"></i> 2026 <a
                                href="https://www.ctsofts.com/">Ctsofts</a>. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/particles-config.js"></script>
    <script src="assets/js/imageRevealHover.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>