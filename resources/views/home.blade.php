@extends('layouts.app')

@section('title', 'CT Softs LLC – Leading Software & Digital Marketing Agency in Connecticut')

@section('meta_description', 'CT Softs LLC is a premier software company in Connecticut offering web development, mobile app development, digital marketing, SEO, AI solutions, GPS tracking & more. Drive digital transformation and business growth with our technology solutions.')

@section('meta_keywords', 'web development, website development, software development, software engineer, software developer, IT company, IT services, digital marketing agency, SEO agency, mobile app developers, wordpress developer, website design, e commerce website, custom web development, web development company, software development companies, IT support, data analysis, graphic design, social media marketing, agentic AI, GPS tracking, digital transformation, business growth, software solutions, technology solutions, enterprise solutions, web applications, IT consulting, 24/7 support, SEO services, fleet management, real-time GPS, OBD2 tracker, Connecticut software company, USA web development, responsive web design, custom software development, ecommerce development, fleet tracking, AI development, digital agency, SEO services Connecticut')

@section('og_title', 'CT Softs LLC | Software & Digital Marketing Agency in Connecticut')
@section('og_description', 'CT Softs LLC delivers cutting-edge software, web, mobile, AI, and digital marketing solutions. Based in Connecticut, we drive business growth through innovation and technology.')
@section('og_image', asset('assets/img/home-og-image.jpg'))

@section('twitter_title', 'CT Softs LLC | Software & Digital Marketing Agency')
@section('twitter_description', 'CT Softs LLC delivers cutting-edge software, web, mobile, AI, and digital marketing solutions.')

@section('content')
    <div class="th-hero-wrapper hero-4" id="hero">
        <div class="body-particle" id="body-particle"></div>
        <div class="hero-img tilt-active" style="max-width:520px;">
            <img src="assets/img/hero/hero_img_4_1.png" alt="CTsofts - Best IT Solutions Provider for Web Development, Mobile Apps & Digital Transformation" style="width:400px;height:420px;object-fit:contain;display:block;" />
        </div>

        <div class="container pb-50">
            <div class="hero-style4">
                <div class="ripple-shape">
                    <span class="ripple-1"></span><span class="ripple-2"></span><span class="ripple-3"></span><span class="ripple-4"></span><span class="ripple-5"></span><span class="ripple-6"></span>
                </div>
                <span class="hero-subtitle" style="font-size: 2rem;">Best IT Solutions Provider</span>
                <h1 class="hero-title" style="font-size: 3rem;">Transform Your</h1>
                <h1 class="hero-title" style="font-size: 3rem;">Business With CTsofts</h1>
                <p class="hero-text">
                    Innovative <strong>software development</strong>, <strong>web development</strong>, and <strong>digital marketing</strong> services designed to accelerate your business growth. Partner with CTsofts for cutting-edge technology and expert <strong>digital transformation</strong>.
                </p>
                <div class="btn-group">
                    <a href="tel:+12038057525" class="th-btn">Call Now<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="triangle-1"></div>
        <div class="triangle-2"></div>
        <div class="hero-shape2">
            <img src="assets/img/hero/hero_shape_2_2.png" alt="shape" />
        </div>
        <div class="hero-shape3">
            <img src="assets/img/hero/hero_shape_2_3.png" alt="shape" />
        </div>
    </div>

    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box4 tilt-active">
                        <div class="img-shape icon-masking">
                            <span class="mask-icon" data-mask-src="assets/img/normal/about_3_1-shape.png"></span>
                            <img src="assets/img/normal/about_3_1-shape.png" alt="shape" />
                        </div>
                        <img src="assets/img/normal/about_3_1.png" alt="CTsofts team – experts in software development, web applications, and IT consulting" />
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35 text-center text-xl-start">
                        <div class="shadow-title">ABOUT US</div>
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape" />
                            </div>
                            About CTsofts Software Solutions
                        </span>
                        <h2 class="sec-title">
                            Transforming Business Success With
                            <span class="text-theme">Innovative Software Solutions</span>
                        </h2>
                    </div>
                    <p class="mt-n2 mb-30 text-center text-xl-start">
                        CTsofts is a leading <strong>software development company</strong> delivering cutting-edge technology solutions – from <strong>custom web development</strong> and <strong>mobile app development</strong> to <strong>enterprise software</strong> and <strong>digital marketing</strong>. We help businesses drive growth through <strong>digital transformation</strong>.
                    </p>
                    <div class="achivement-tab filter-menu-active indicator-active">
                        <button data-filter=".cat1" class="active" type="button">Software Excellence</button>
                        <button data-filter=".cat2" type="button">Industry Innovation</button>
                    </div>
                    <div class="achivement-box-area filter-active-cat1">
                        <div class="filter-item w-100 cat1">
                            <div class="achivement-box">
                                <div class="media-body">
                                    <h3 class="box-title">Premium Software Development</h3>
                                    <p class="achivement-box_text">
                                        CTsofts specializes in <strong>custom software development</strong>, <strong>web applications</strong>, and <strong>enterprise solutions</strong> tailored to your business needs. From <strong>e‑commerce platforms</strong> to <strong>AI‑powered tools</strong>, we deliver high‑quality code.
                                    </p>
                                    <a href="{{ route('service.detail', ['service' => 'web-development']) }}" class="th-btn">Get Free Consultation</a>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item w-100 cat2">
                            <div class="achivement-box">
                                <div class="media-body">
                                    <h3 class="box-title">Proven Track Record</h3>
                                    <p class="achivement-box_text">
                                        With years of experience, CTsofts has successfully delivered <strong>1000+ projects</strong> across industries – <strong>web development</strong>, <strong>mobile apps</strong>, <strong>SEO</strong>, and <strong>IT support</strong>. Our clients trust us to achieve their digital goals.
                                    </p>
                                    <a href="{{ route('service.detail', ['service' => 'data-analysis']) }}" class="th-btn">Get Free Consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-top-center z-index-common space-top" id="service-sec" data-bg-src="assets/img/bg/service_bg_2.jpg">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-center text-lg-start">
                        <div class="shadow-title color2">SERVICES</div>
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape" />
                            </div>
                            WHAT WE DO
                        </span>
                        <h2 class="sec-title text-white">
                            We Provide Exclusive Service For
                            <span class="text-theme">Your Business</span>
                        </h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{ route('services') }}" class="th-btn style3">VIEW ALL SERVICES<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="serviceSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        @php $services = config('services-data.services'); @endphp
                        @foreach($services as $service)
                            <div class="swiper-slide">
                                <div class="service-grid">
                                    <div class="service-grid_icon">
                                        <img src="{{ asset($service['image']) }}" alt="{{ $service['name'] }} Icon - CTsofts" />
                                    </div>
                                    <div class="service-grid_content">
                                        <h3 class="box-title">
                                            @if($service['name'] === 'GPS Tracking')
                                                <a href="{{ route('service.gps-tracking') }}">{{ $service['name'] }}</a>
                                            @else
                                                <a href="{{ route('service.detail', ['service' => Str::slug($service['name'])]) }}">{{ $service['name'] }}</a>
                                            @endif
                                        </h3>
                                        <p class="service-grid_text" 
                                         style="display:-webkit-box; -webkit-line-clamp:6; -webkit-box-orient:vertical; overflow:hidden;">
                                          {{ $service['description'] }}
                                        </p>
                                        @if($service['name'] === 'GPS Tracking')
                                            <a href="{{ route('service.gps-tracking') }}" class="th-btn">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                                        @else
                                            <a href="{{ route('service.detail', ['service' => Str::slug($service['name'])]) }}" class="th-btn">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                                        @endif
                                        <div class="bg-shape">
                                            <img src="{{ asset('assets/img/bg/service_grid_bg.png') }}" alt="bg" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="why-sec-v2" data-bg-src="assets/img/bg/why_bg_2.jpg">
        <div class="container space">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box5">
                        <img class="tilt-active" src="assets/img/normal/why_2_1.png" alt="Why choose CTsofts – expert software engineers, web developers, and IT consultants" />
                        <div class="year-counter">
                            <h3 class="year-counter_number"><span class="counter-number">100</span>+</h3>
                            <p class="year-counter_text">Projects Delivered</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35">
                        <div class="shadow-title color3">WHY US</div>
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape" />
                            </div>
                            WHY CHOOSE CTSOFTS
                        </span>
                        <h2 class="sec-title">
                            Expert Software Solutions With
                            <span class="text-theme">Proven Success</span>
                        </h2>
                    </div>
                    <p class="mt-n2 mb-30">
                        CTsofts delivers innovative <strong>software development</strong> and <strong>IT services</strong> with a track record of excellence. We combine cutting‑edge technology with industry expertise to deliver <strong>custom web development</strong>, <strong>mobile app development</strong>, <strong>SEO</strong>, and <strong>digital marketing</strong> that drive real business results.
                    </p>
                    <div class="feature-circle-wrap">
                        <div class="feature-circle">
                            <div class="progressbar" data-path-color="#684DF4">
                                <div class="circle" data-percent="90"><div class="circle-num"></div></div>
                            </div>
                            <div class="media-body">
                                <h3 class="feature-circle_title">Business Growth</h3>
                                <p class="feature-circle_text">Accelerate your business with tailored <strong>software solutions</strong> and <strong>digital transformation</strong> strategies.</p>
                            </div>
                        </div>
                        <div class="feature-circle">
                            <div class="progressbar" data-path-color="#684DF4">
                                <div class="circle" data-percent="95"><div class="circle-num"></div></div>
                            </div>
                            <div class="media-body">
                                <h3 class="feature-circle_title">Quality & Excellence</h3>
                                <p class="feature-circle_text">Premium quality code and professional <strong>IT services</strong> – from <strong>web development</strong> to <strong>24/7 support</strong>.</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="th-btn">Get Free Consultation<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-smoke" id="process-sec" data-bg-src="assets/img/bg/process_bg_1.png">
        <div class="container space">
            <div class="title-area text-center">
                <div class="shadow-title">PROCESS</div>
                <span class="sub-title">
                    <div class="icon-masking me-2">
                        <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                        <img src="assets/img/theme-img/title_shape_2.svg" alt="shape" />
                    </div>
                    OUR WORKFLOW
                </span>
                <h2 class="sec-title">
                    CTsofts <span class="text-theme">Development Process</span>
                </h2>
            </div>
            <div class="process-card-area">
                <div class="process-line"><img src="assets/img/bg/process_line.svg" alt="line" /></div>
                <div class="row gy-40">
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">01</div>
                            <div class="process-card_icon"><img src="assets/img/icon/process_card_1.svg" alt="Requirement gathering icon" /></div>
                            <h2 class="box-title">Requirement Gathering</h2>
                            <p class="process-card_text">We understand your business needs and project requirements in detail.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">02</div>
                            <div class="process-card_icon"><img src="assets/img/icon/process_card_2.svg" alt="Strategy & planning icon" /></div>
                            <h2 class="box-title">Strategy & Planning</h2>
                            <p class="process-card_text">Our experts create a customized solution roadmap and technical strategy.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">03</div>
                            <div class="process-card_icon"><img src="assets/img/icon/process_card_3.svg" alt="Development & testing icon" /></div>
                            <h2 class="box-title">Development & Testing</h2>
                            <p class="process-card_text">We build and rigorously test your software with cutting‑edge technologies.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">04</div>
                            <div class="process-card_icon"><img src="assets/img/icon/process_card_4.svg" alt="Deployment & support icon" /></div>
                            <h2 class="box-title">Deployment & Support</h2>
                            <p class="process-card_text">Launch your solution and receive ongoing support from our dedicated team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-top-center space" data-bg-src="assets/img/bg/testi_bg_3.jpg">
        <div class="container">
            <div class="title-area text-center">
                <div class="shadow-title color2">TESTIMONIALS</div>
                <span class="sub-title">
                    <div class="icon-masking me-2">
                        <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                        <img src="assets/img/theme-img/title_shape_2.svg" alt="shape" />
                    </div>
                    CUSTOMER FEEDBACK
                </span>
                <h2 class="sec-title text-white">
                    What Happy Clients Says<br /><span class="text-theme">About Us?</span>
                </h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlider3"
                    data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        @php
                            $testimonials = [
                                ['name' => 'John Smith', 'text' => 'CTsofts transformed our business with their exceptional software solutions. The team delivered our custom web application on time and exceeded our expectations. Highly professional and dedicated!'],
                                ['name' => 'Sarah Mitchell', 'text' => 'Working with CTsofts was a game changer for our digital transformation. Their innovative approach to web development and AI solutions helped us streamline operations and increase revenue significantly.'],
                                ['name' => 'Michael Chen', 'text' => 'Outstanding IT support and maintenance services! CTsofts keeps our systems secure and running smoothly. Their 24/7 support team is responsive and knowledgeable. Couldn\'t ask for better service!'],
                                ['name' => 'Emma Rodriguez', 'text' => 'Their SEO and digital marketing strategies boosted our online visibility significantly. We saw a 150% increase in organic traffic within 6 months. Excellent results and great ROI!']
                            ];
                        @endphp
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testi-grid" style="min-height:260px; padding:26px; border-radius:12px;">
                                    <div class="testi-grid_content">
                                        <h3 class="box-title" style="font-size:1.15rem; font-weight:700; margin-bottom:10px;">{{ $testimonial['name'] }}</h3>
                                        <div class="testi-grid_review" style="font-size:18px; margin-bottom:10px;">
                                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                        </div>
                                        <br>
                                        <p class="testi-grid_text" style="font-size:1.05rem; line-height:1.6;">{{ $testimonial['text'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button data-slider-prev="#testiSlider3" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlider3" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
@endsection