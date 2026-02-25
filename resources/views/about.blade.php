@extends('layouts.app')

@section('title', 'About')
@section('meta_description', 'CTsofts is a leading software company delivering cutting-edge technology solutions to drive business growth and digital transformation.')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="assets/img/normal/about_1_1.png" alt="About" />
                        </div>
                        <div class="shape1">
                            <img src="assets/img/normal/about_shape_1.png" alt="shape" />
                        </div>
                        <div class="year-counter">
                            <h3 class="year-counter_number">
                                <span class="counter-number">10</span>
                            </h3>
                            <p class="year-counter_text">
                                Years of Experience
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-4 ms-xl-3">
                        <div class="title-area mb-35">
                            <span class="sub-title">
                                <div class="icon-masking me-2">
                                    <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span>
                                    <img src="assets/img/theme-img/title_shape_1.svg" alt="shape" />
                                </div>
                                About CTsofts
                            </span>
                            <h2 class="sec-title">
                                We Help Businesses Grow with
                                <span class="text-theme">Custom Software & AI</span>
                            </h2>
                        </div>
                        <p class="mt-n2 mb-25">
                            CTsofts delivers custom software, AI-driven solutions and reliable IT services to accelerate
                            business growth. We prioritize quality, security, and long-term partnerships to deliver
                            measurable results.
                        </p>
                        <div class="about-feature-wrap">
                            <div class="about-feature">
                                <div class="about-feature_icon">
                                    <img src="assets/img/icon/about_feature_1_1.svg" alt="Icon" />
                                </div>
                                <div class="media-body">
                                    <h3 class="about-feature_title">
                                        Trusted & Certified
                                    </h3>
                                    <p class="about-feature_text">
                                        Delivering secure, high-quality solutions
                                    </p>
                                </div>
                            </div>
                            <div class="about-feature">
                                <div class="about-feature_icon">
                                    <img src="assets/img/icon/about_feature_1_2.svg" alt="Icon" />
                                </div>
                                <div class="media-body">
                                    <h3 class="about-feature_title">
                                        Expert Team
                                    </h3>
                                    <p class="about-feature_text">
                                        Experienced engineers focused on outcomes
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <a href="about.html" class="th-btn">DISCOVER MORE<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                            <div class="call-btn">
                                <div class="play-btn">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <span class="btn-text">Call Us On:</span>
                                    <a href="tel:+12038057525" class="btn-title">+1 203-805-7525</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="space" data-bg-src="assets/img/bg/why_bg_1.png">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-xxl-7 col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box2">
                        <div class="img1">
                            <img src="assets/img/normal/why_1_1.jpg" alt="Why" />
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6">
                    <div class="title-area mb-35">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span>
                                <img src="assets/img/theme-img/title_shape_1.svg" alt="shape" />
                            </div>
                            WHY CHOOSE CTsofts
                        </span>
                        <h2 class="sec-title">
                            Delivering Tailored Software, AI &amp;
                            <span class="text-theme">Reliable IT Services</span>
                        </h2>
                    </div>
                    <p class="mt-n2 mb-30">
                        CTsofts combines custom software engineering, AI-driven automation, and secure cloud practices to
                        help businesses scale faster, reduce costs, and improve user experiences.
                    </p>
                    <div class="two-column">
                        <div class="checklist style2">
                            <ul>
                                <li>
                                    <i class="far fa-check"></i> Custom Software &amp; AI Solutions
                                </li>
                                <li>
                                    <i class="far fa-check"></i> 24/7 Dedicated Support
                                </li>
                                <li>
                                    <i class="far fa-check"></i> Scalable Cloud Deployments
                                </li>
                            </ul>
                        </div>
                        <div class="checklist style2">
                            <ul>
                                <li>
                                    <i class="far fa-check"></i> Enterprise-grade Security
                                </li>
                                <li>
                                    <i class="far fa-check"></i> Experienced Product-focused Team
                                </li>
                                <li>
                                    <i class="far fa-check"></i> Results-driven, Business-first Approach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection