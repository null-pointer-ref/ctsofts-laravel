@extends('layouts.app')

@section('title', 'Home')

@section('meta_description', 'CTsofts is a leading software company delivering cutting-edge technology solutions to drive business growth and digital transformation.')

@section('content')
        <div class="th-hero-wrapper hero-4" id="hero">
            <div class="body-particle" id="body-particle"></div>
           <div class="hero-img tilt-active"
     style="max-width:520px;">

    <img src="assets/img/hero/hero_img_4_1.png"
         alt="Hero Image"
         style="
            width:400px;
            height:420px;
            object-fit:contain;
            display:block;
         " />
</div>

            <div class="container pb-50">
                <div class="hero-style4">
                    <div class="ripple-shape">
                        <span class="ripple-1"></span
                        ><span class="ripple-2"></span
                        ><span class="ripple-3"></span
                        ><span class="ripple-4"></span
                        ><span class="ripple-5"></span
                        ><span class="ripple-6"></span>
                    </div>
                    <span class="hero-subtitle" style="font-size: 2rem;">Best IT Solutions Provider</span>
                    <h1 class="hero-title" style="font-size: 3rem;">Transform Your</h1>
                    <h1 class="hero-title" style="font-size: 3rem;">Business With CTsofts</h1>
                    <p class="hero-text">
                        Innovative software solutions and IT services designed to accelerate your business growth. 
                        Partner with CTsofts for cutting-edge technology and expert digital transformation.
                    </p>
                    <div class="btn-group">
                        <a href="about.html" class="th-btn"
                            >ABOUT US<i
                                class="fa-regular fa-arrow-right ms-2"
                            ></i
                        ></a>
                            
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
                    <span
                        class="mask-icon"
                        data-mask-src="assets/img/normal/about_3_1-shape.png"
                    ></span>
                    <img
                        src="assets/img/normal/about_3_1-shape.png"
                        alt="img"
                    />
                    </div>
                    <img
                    src="assets/img/normal/about_3_1.png"
                    alt="About"
                    />
                   
                </div>
                </div>
                <div class="col-xl-6">
                <div class="title-area mb-35 text-center text-xl-start">
                    <div class="shadow-title">ABOUT US</div>
                    <span class="sub-title"
                    ><div class="icon-masking me-2">
                        <span
                        class="mask-icon"
                        data-mask-src="assets/img/theme-img/title_shape_2.svg"
                        ></span>
                        <img
                        src="assets/img/theme-img/title_shape_2.svg"
                        alt="shape"
                        />
                    </div>
                    About CTsofts Software Solutions</span
                    >
                    <h2 class="sec-title">
                    Transforming Business Success With
                    <span class="text-theme">Innovative Software Solutions</span>
                    </h2>
                </div>
                <p class="mt-n2 mb-30 text-center text-xl-start">
                    CTsofts is a leading software company delivering cutting-edge technology solutions to drive business growth and digital transformation.
                </p>
                <div
                    class="achivement-tab filter-menu-active indicator-active"
                >
                    <button
                    data-filter=".cat1"
                    class="active"
                    type="button"
                    >
                    Software Excellence
                    </button>
                    <button data-filter=".cat2" type="button">
                    Industry Innovation
                    </button>
                </div>
                <div class="achivement-box-area filter-active-cat1">
                    <div class="filter-item w-100 cat1">
                    <div class="achivement-box">
                        
                        <div class="media-body">
                        <h3 class="box-title">
                            Premium Software Development
                        </h3>
                        <p class="achivement-box_text">
                            CTsofts specializes in custom software development, web applications, and enterprise solutions tailored to your business needs.
                        </p>
                        <a href="about.html" class="th-btn"
                            >Learn More</a
                        >
                        </div>
                    </div>
                    </div>
                    <div class="filter-item w-100 cat2">
                    <div class="achivement-box">
                       
                        <div class="media-body">
                        <h3 class="box-title">
                            Proven Track Record
                        </h3>
                        <p class="achivement-box_text">
                            With years of experience, CTsofts has successfully delivered 1000+ projects and helped businesses achieve their digital goals.
                        </p>
                        <a href="about.html" class="th-btn"
                            >Learn More</a
                        >
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <section
            class="bg-top-center z-index-common space-top"
            id="service-sec"
            data-bg-src="assets/img/bg/service_bg_2.jpg"
        >
            <div class="container">
                <div
                    class="row justify-content-lg-between justify-content-center align-items-center"
                >
                    <div class="col-lg-6 col-sm-9 pe-xl-5">
                        <div class="title-area text-center text-lg-start">
                            <div class="shadow-title color2">SERVICES</div>
                            <span class="sub-title"
                                ><div class="icon-masking me-2">
                                    <span
                                        class="mask-icon"
                                        data-mask-src="assets/img/theme-img/title_shape_2.svg"
                                    ></span>
                                    <img
                                        src="assets/img/theme-img/title_shape_2.svg"
                                        alt="shape"
                                    />
                                </div>
                                WHAT WE DO</span
                            >
                            <h2 class="sec-title text-white">
                                We Provide Exclusive Service For
                                <span class="text-theme">Your Business</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="sec-btn">
                            <a href="service.html" class="th-btn style3"
                                >VIEW ALL SERVICES<i
                                    class="fa-regular fa-arrow-right ms-2"
                                ></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="slider-area">
                    <div
                        class="swiper th-slider has-shadow"
                        id="serviceSlider1"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'
                    >
                        <div class="swiper-wrapper">

    <!-- Website Development -->
    <div class="swiper-slide">
        <div class="service-grid">
            <div class="service-grid_icon">
                <img src="assets/img/icon/service_card_1.svg" alt="Icon" />
            </div>
            <div class="service-grid_content">
                <h3 class="box-title">
                    <a href="service-details.html">Website Development</a>
                </h3>
                <p class="service-grid_text">
                    Modern, responsive and high-performance websites tailored
                    to your business needs.
                </p>
                <a href="service-details.html" class="th-btn">
                    Read More <i class="fas fa-arrow-right ms-2"></i>
                </a>
                <div class="bg-shape">
                    <img src="assets/img/bg/service_grid_bg.png" alt="bg" />
                </div>
            </div>
        </div>
    </div>

    <!-- SEO -->
    <div class="swiper-slide">
        <div class="service-grid">
            <div class="service-grid_icon">
                <img src="assets/img/icon/service_card_2.svg" alt="Icon" />
            </div>
            <div class="service-grid_content">
                <h3 class="box-title">
                    <a href="service-details.html">SEO</a>
                </h3>
                <p class="service-grid_text">
                    Improve your search engine rankings and drive organic
                    traffic to your website.
                </p>
                <a href="service-details.html" class="th-btn">
                    Read More <i class="fas fa-arrow-right ms-2"></i>
                </a>
                <div class="bg-shape">
                    <img src="assets/img/bg/service_grid_bg.png" alt="bg" />
                </div>
            </div>
        </div>
    </div>

    <!-- Social Media Marketing -->
    <div class="swiper-slide">
        <div class="service-grid">
            <div class="service-grid_icon">
                <img src="assets/img/icon/service_card_3.svg" alt="Icon" />
            </div>
            <div class="service-grid_content">
                <h3 class="box-title">
                    <a href="service-details.html">Social Media Marketing</a>
                </h3>
                <p class="service-grid_text">
                    Grow your brand and audience with targeted social media
                    campaigns.
                </p>
                <a href="service-details.html" class="th-btn">
                    Read More <i class="fas fa-arrow-right ms-2"></i>
                </a>
                <div class="bg-shape">
                    <img src="assets/img/bg/service_grid_bg.png" alt="bg" />
                </div>
            </div>
        </div>
    </div>

    <!-- Graphic Designing -->
    <div class="swiper-slide">
        <div class="service-grid">
            <div class="service-grid_icon">
                <img src="assets/img/icon/service_card_4.svg" alt="Icon" />
            </div>
            <div class="service-grid_content">
                <h3 class="box-title">
                    <a href="service-details.html">Graphic Designing</a>
                </h3>
                <p class="service-grid_text">
                    Creative and professional designs that make your brand
                    stand out.
                </p>
                <a href="service-details.html" class="th-btn">
                    Read More <i class="fas fa-arrow-right ms-2"></i>
                </a>
                <div class="bg-shape">
                    <img src="assets/img/bg/service_grid_bg.png" alt="bg" />
                </div>
            </div>
        </div>
    </div>

    <!-- Agentic AI -->
    <div class="swiper-slide">
        <div class="service-grid">
            <div class="service-grid_icon">
                <img src="assets/img/icon/service_card_5.svg" alt="Icon" />
            </div>
            <div class="service-grid_content">
                <h3 class="box-title">
                    <a href="service-details.html">Agentic AI</a>
                </h3>
                <p class="service-grid_text">
                    Intelligent AI solutions to automate workflows and enhance
                    decision-making.
                </p>
                <a href="service-details.html" class="th-btn">
                    Read More <i class="fas fa-arrow-right ms-2"></i>
                </a>
                <div class="bg-shape">
                    <img src="assets/img/bg/service_grid_bg.png" alt="bg" />
                </div>
            </div>
        </div>
    </div>

    <!-- Data Analysis -->
    <div class="swiper-slide">
        <div class="service-grid">
            <div class="service-grid_icon">
                <img src="assets/img/icon/service_card_1.svg" alt="Icon" />
            </div>
            <div class="service-grid_content">
                <h3 class="box-title">
                    <a href="service-details.html">Data Analysis</a>
                </h3>
                <p class="service-grid_text">
                    Turn raw data into meaningful insights for smarter business
                    decisions.
                </p>
                <a href="service-details.html" class="th-btn">
                    Read More <i class="fas fa-arrow-right ms-2"></i>
                </a>
                <div class="bg-shape">
                    <img src="assets/img/bg/service_grid_bg.png" alt="bg" />
                </div>
            </div>
        </div>
    </div>

    <!-- IT Support -->
    <div class="swiper-slide">
        <div class="service-grid">
            <div class="service-grid_icon">
                <img src="assets/img/icon/service_card_2.svg" alt="Icon" />
            </div>
            <div class="service-grid_content">
                <h3 class="box-title">
                    <a href="service-details.html">IT Support</a>
                </h3>
                <p class="service-grid_text">
                    Reliable IT support to keep your systems secure, fast and
                    running smoothly.
                </p>
                <a href="service-details.html" class="th-btn">
                    Read More <i class="fas fa-arrow-right ms-2"></i>
                </a>
                <div class="bg-shape">
                    <img src="assets/img/bg/service_grid_bg.png" alt="bg" />
                </div>
            </div>
        </div>
    </div>

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
                            <img
                                class="tilt-active"
                                src="assets/img/normal/why_2_1.png"
                                alt="Why"
                            />
                            <div class="year-counter">
                                <h3 class="year-counter_number">
                                    <span class="counter-number">100</span>+
                                </h3>
                                <p class="year-counter_text">Projects Delivered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="title-area mb-35">
                            <div class="shadow-title color3">WHY US</div>
                            <span class="sub-title"
                                ><div class="icon-masking me-2">
                                    <span
                                        class="mask-icon"
                                        data-mask-src="assets/img/theme-img/title_shape_2.svg"
                                    ></span>
                                    <img
                                        src="assets/img/theme-img/title_shape_2.svg"
                                        alt="shape"
                                    />
                                </div>
                                WHY CHOOSE CTSOFTS</span
                            >
                            <h2 class="sec-title">
                                Expert Software Solutions With
                                <span class="text-theme">Proven Success</span>
                            </h2>
                        </div>
                        <p class="mt-n2 mb-30">
                            CTsofts delivers innovative software solutions and IT services with a track record of excellence. We combine cutting-edge technology with industry expertise to transform your business.
                        </p>
                        <div class="feature-circle-wrap">
                            <div class="feature-circle">
                                <div
                                    class="progressbar"
                                    data-path-color="#684DF4"
                                >
                                    <div class="circle" data-percent="90">
                                        <div class="circle-num"></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h3 class="feature-circle_title">
                                        Business Growth
                                    </h3>
                                    <p class="feature-circle_text">
                                        Accelerate your business with tailored software solutions.
                                    </p>
                                </div>
                            </div>
                            <div class="feature-circle">
                                <div
                                    class="progressbar"
                                    data-path-color="#684DF4"
                                >
                                    <div class="circle" data-percent="95">
                                        <div class="circle-num"></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h3 class="feature-circle_title">
                                        Quality & Excellence
                                    </h3>
                                    <p class="feature-circle_text">
                                        Premium quality code and professional IT services.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="th-btn"
                            >LEARN MORE<i
                                class="fa-regular fa-arrow-right ms-2"
                            ></i
                        ></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="space" id="project-sec">
            <div class="container">
                <div class="title-area text-center">
                    <div class="shadow-title">PROJECTS</div>
                    <span class="sub-title"
                        ><div class="icon-masking me-2">
                            <span
                                class="mask-icon"
                                data-mask-src="assets/img/theme-img/title_shape_2.svg"
                            ></span>
                            <img
                                src="assets/img/theme-img/title_shape_2.svg"
                                alt="shape"
                            />
                        </div>
                        LATEST PROJECTS</span
                    >
                    <h2 class="sec-title">
                        Our Recent Latest
                        <span class="text-theme">Projects</span>
                    </h2>
                </div>
                <div class="slider-area">
                    <div
                        class="swiper th-slider has-shadow"
                        id="projectSlider2"
                        data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'
                    >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-grid">
                                    <div class="project-grid_img">
                                        <img
                                            src="assets/img/project/project_2_1.jpg"
                                            alt="project image"
                                        />
                                        <a
                                            href="assets/img/project/project_2_1.jpg"
                                            class="play-btn style3 popup-image"
                                            ><i class="far fa-plus"></i
                                        ></a>
                                    </div>
                                    <div class="project-grid_content">
                                        <h3 class="box-title">
                                            <a href="project-details.html"
                                                >IT Consultency</a
                                            >
                                        </h3>
                                        <p class="project-grid_text">
                                            Distinctively enable premium
                                            expertise for multifunctional action
                                            items. Energistically benchmark
                                            worldwide communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-grid">
                                    <div class="project-grid_img">
                                        <img
                                            src="assets/img/project/project_2_2.jpg"
                                            alt="project image"
                                        />
                                        <a
                                            href="assets/img/project/project_2_2.jpg"
                                            class="play-btn style3 popup-image"
                                            ><i class="far fa-plus"></i
                                        ></a>
                                    </div>
                                    <div class="project-grid_content">
                                        <h3 class="box-title">
                                            <a href="project-details.html"
                                                >Web Development</a
                                            >
                                        </h3>
                                        <p class="project-grid_text">
                                            Distinctively enable premium
                                            expertise for multifunctional action
                                            items. Energistically benchmark
                                            worldwide communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-grid">
                                    <div class="project-grid_img">
                                        <img
                                            src="assets/img/project/project_2_3.jpg"
                                            alt="project image"
                                        />
                                        <a
                                            href="assets/img/project/project_2_3.jpg"
                                            class="play-btn style3 popup-image"
                                            ><i class="far fa-plus"></i
                                        ></a>
                                    </div>
                                    <div class="project-grid_content">
                                        <h3 class="box-title">
                                            <a href="project-details.html"
                                                >Website Design</a
                                            >
                                        </h3>
                                        <p class="project-grid_text">
                                            Distinctively enable premium
                                            expertise for multifunctional action
                                            items. Energistically benchmark
                                            worldwide communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-grid">
                                    <div class="project-grid_img">
                                        <img
                                            src="assets/img/project/project_2_4.jpg"
                                            alt="project image"
                                        />
                                        <a
                                            href="assets/img/project/project_2_4.jpg"
                                            class="play-btn style3 popup-image"
                                            ><i class="far fa-plus"></i
                                        ></a>
                                    </div>
                                    <div class="project-grid_content">
                                        <h3 class="box-title">
                                            <a href="project-details.html"
                                                >SEO Optimization</a
                                            >
                                        </h3>
                                        <p class="project-grid_text">
                                            Distinctively enable premium
                                            expertise for multifunctional action
                                            items. Energistically benchmark
                                            worldwide communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-grid">
                                    <div class="project-grid_img">
                                        <img
                                            src="assets/img/project/project_2_1.jpg"
                                            alt="project image"
                                        />
                                        <a
                                            href="assets/img/project/project_2_1.jpg"
                                            class="play-btn style3 popup-image"
                                            ><i class="far fa-plus"></i
                                        ></a>
                                    </div>
                                    <div class="project-grid_content">
                                        <h3 class="box-title">
                                            <a href="project-details.html"
                                                >IT Consultency</a
                                            >
                                        </h3>
                                        <p class="project-grid_text">
                                            Distinctively enable premium
                                            expertise for multifunctional action
                                            items. Energistically benchmark
                                            worldwide communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-grid">
                                    <div class="project-grid_img">
                                        <img
                                            src="assets/img/project/project_2_2.jpg"
                                            alt="project image"
                                        />
                                        <a
                                            href="assets/img/project/project_2_2.jpg"
                                            class="play-btn style3 popup-image"
                                            ><i class="far fa-plus"></i
                                        ></a>
                                    </div>
                                    <div class="project-grid_content">
                                        <h3 class="box-title">
                                            <a href="project-details.html"
                                                >Web Development</a
                                            >
                                        </h3>
                                        <p class="project-grid_text">
                                            Distinctively enable premium
                                            expertise for multifunctional action
                                            items. Energistically benchmark
                                            worldwide communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-grid">
                                    <div class="project-grid_img">
                                        <img
                                            src="assets/img/project/project_2_3.jpg"
                                            alt="project image"
                                        />
                                        <a
                                            href="assets/img/project/project_2_3.jpg"
                                            class="play-btn style3 popup-image"
                                            ><i class="far fa-plus"></i
                                        ></a>
                                    </div>
                                    <div class="project-grid_content">
                                        <h3 class="box-title">
                                            <a href="project-details.html"
                                                >Website Design</a
                                            >
                                        </h3>
                                        <p class="project-grid_text">
                                            Distinctively enable premium
                                            expertise for multifunctional action
                                            items. Energistically benchmark
                                            worldwide communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-grid">
                                    <div class="project-grid_img">
                                        <img
                                            src="assets/img/project/project_2_4.jpg"
                                            alt="project image"
                                        />
                                        <a
                                            href="assets/img/project/project_2_4.jpg"
                                            class="play-btn style3 popup-image"
                                            ><i class="far fa-plus"></i
                                        ></a>
                                    </div>
                                    <div class="project-grid_content">
                                        <h3 class="box-title">
                                            <a href="project-details.html"
                                                >SEO Optimization</a
                                            >
                                        </h3>
                                        <p class="project-grid_text">
                                            Distinctively enable premium
                                            expertise for multifunctional action
                                            items. Energistically benchmark
                                            worldwide communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        data-slider-prev="#projectSlider2"
                        class="slider-arrow style3 slider-prev"
                    >
                        <i class="far fa-arrow-left"></i>
                    </button>
                    <button
                        data-slider-next="#projectSlider2"
                        class="slider-arrow style3 slider-next"
                    >
                        <i class="far fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>
        <div
            class="bg-theme space-extra"
            data-bg-src="assets/img/bg/counter_bg_1.png"
        >
            <div class="container py-2">
                <div class="row gy-40 justify-content-between">
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="counter-card_icon">
                                <img
                                    src="assets/img/icon/counter_1_1.svg"
                                    alt="Icon"
                                />
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number">
                                    <span class="counter-number">986</span>+
                                </h2>
                                <p class="counter-card_text">
                                    Finished Project
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="counter-card_icon">
                                <img
                                    src="assets/img/icon/counter_1_2.svg"
                                    alt="Icon"
                                />
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number">
                                    <span class="counter-number">896</span>+
                                </h2>
                                <p class="counter-card_text">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="counter-card_icon">
                                <img
                                    src="assets/img/icon/counter_1_3.svg"
                                    alt="Icon"
                                />
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number">
                                    <span class="counter-number">396</span>+
                                </h2>
                                <p class="counter-card_text">Skilled Experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="counter-card_icon">
                                <img
                                    src="assets/img/icon/counter_1_4.svg"
                                    alt="Icon"
                                />
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number">
                                    <span class="counter-number">496</span>+
                                </h2>
                                <p class="counter-card_text">
                                    Honorable Awards
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section
            class="bg-smoke"
            id="process-sec"
            data-bg-src="assets/img/bg/process_bg_1.png"
        >
            <div class="container space">
            <div class="title-area text-center">
                <div class="shadow-title">PROCESS</div>
                <span class="sub-title"
                ><div class="icon-masking me-2">
                    <span
                    class="mask-icon"
                    data-mask-src="assets/img/theme-img/title_shape_2.svg"
                    ></span>
                    <img
                    src="assets/img/theme-img/title_shape_2.svg"
                    alt="shape"
                    />
                </div>
                OUR WORKFLOW</span
                >
                <h2 class="sec-title">
                CTsofts <span class="text-theme">Development Process</span>
                </h2>
            </div>
            <div class="process-card-area">
                <div class="process-line">
                <img src="assets/img/bg/process_line.svg" alt="line" />
                </div>
                <div class="row gy-40">
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                    <div class="process-card_number">01</div>
                    <div class="process-card_icon">
                        <img
                        src="assets/img/icon/process_card_1.svg"
                        alt="icon"
                        />
                    </div>
                    <h2 class="box-title">Requirement Gathering</h2>
                    <p class="process-card_text">
                        We understand your business needs and project requirements in detail.
                    </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                    <div class="process-card_number">02</div>
                    <div class="process-card_icon">
                        <img
                        src="assets/img/icon/process_card_2.svg"
                        alt="icon"
                        />
                    </div>
                    <h2 class="box-title">Strategy & Planning</h2>
                    <p class="process-card_text">
                        Our experts create a customized solution roadmap and technical strategy.
                    </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                    <div class="process-card_number">03</div>
                    <div class="process-card_icon">
                        <img
                        src="assets/img/icon/process_card_3.svg"
                        alt="icon"
                        />
                    </div>
                    <h2 class="box-title">Development & Testing</h2>
                    <p class="process-card_text">
                        We build and rigorously test your software with cutting-edge technologies.
                    </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                    <div class="process-card_number">04</div>
                    <div class="process-card_icon">
                        <img
                        src="assets/img/icon/process_card_4.svg"
                        alt="icon"
                        />
                    </div>
                    <h2 class="box-title">Deployment & Support</h2>
                    <p class="process-card_text">
                        Launch your solution and receive ongoing support from our dedicated team.
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
      
        <section
            class="bg-top-center space"
            data-bg-src="assets/img/bg/testi_bg_3.jpg"
        >
            <div class="container">
            <div class="title-area text-center">
            <div class="shadow-title color2">TESTIMONIALS</div>
            <span class="sub-title"
            ><div class="icon-masking me-2">
            <span
            class="mask-icon"
            data-mask-src="assets/img/theme-img/title_shape_2.svg"
            ></span>
            <img
            src="assets/img/theme-img/title_shape_2.svg"
            alt="shape"
            />
            </div>
            CUSTOMER FEEDBACK</span
            >
            <h2 class="sec-title text-white">
            What Happy Clients Says<br /><span class="text-theme"
            >About Us?</span
            >
            </h2>
            </div>
            <div class="slider-area">
            <div
            class="swiper th-slider has-shadow"
            id="testiSlider3"
            data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'
            >
            <div class="swiper-wrapper">
            <div class="swiper-slide">
            <div class="testi-grid" style="min-height:260px; padding:26px; border-radius:12px;">
            <div class="testi-grid_content">
            <h3 class="box-title" style="font-size:1.15rem; font-weight:700; margin-bottom:10px;">John Smith</h3>
            <div class="testi-grid_review" style="font-size:18px; margin-bottom:10px;">
            <i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i>
            </div>
            <br>
            <p class="testi-grid_text" style="font-size:1.05rem; line-height:1.6;">
                CTsofts transformed our business with their exceptional software solutions. The team delivered our custom application on time and exceeded our expectations. Highly professional and dedicated!
            </p>
            </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="testi-grid" style="min-height:260px; padding:26px; border-radius:12px;">
            <div class="testi-grid_content">
            <h3 class="box-title" style="font-size:1.15rem; font-weight:700; margin-bottom:10px;">Sarah Mitchell</h3>
            <div class="testi-grid_review" style="font-size:18px; margin-bottom:10px;">
            <i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i>
            </div>
            <br>
            <p class="testi-grid_text" style="font-size:1.05rem; line-height:1.6;">
                Working with CTsofts was a game changer for our digital transformation. Their innovative approach to web development and AI solutions helped us streamline operations and increase revenue significantly.
            </p>
            </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="testi-grid" style="min-height:260px; padding:26px; border-radius:12px;">
            <div class="testi-grid_content">
            <h3 class="box-title" style="font-size:1.15rem; font-weight:700; margin-bottom:10px;">Michael Chen</h3>
            <div class="testi-grid_review" style="font-size:18px; margin-bottom:10px;">
            <i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i>
            </div>
            <br>
            <p class="testi-grid_text" style="font-size:1.05rem; line-height:1.6;">
                Outstanding IT support and maintenance services! CTsofts keeps our systems secure and running smoothly. Their 24/7 support team is responsive and knowledgeable. Couldn't ask for better service!
            </p>
            </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="testi-grid" style="min-height:260px; padding:26px; border-radius:12px;">
            <div class="testi-grid_content">
            <h3 class="box-title" style="font-size:1.15rem; font-weight:700; margin-bottom:10px;">Emma Rodriguez</h3>
            <div class="testi-grid_review" style="font-size:18px; margin-bottom:10px;">
            <i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i
            ><i class="fa-solid fa-star-sharp"></i>
            </div>
            <br>
            <p class="testi-grid_text" style="font-size:1.05rem; line-height:1.6;">
                Their SEO and digital marketing strategies boosted our online visibility significantly. We saw a 150% increase in organic traffic within 6 months. Excellent results and great ROI!
            </p>
            </div>
            </div>
            </div>
            </div>
            </div>
            <button
            data-slider-prev="#testiSlider3"
            class="slider-arrow style3 slider-prev"
            >
            <i class="far fa-arrow-left"></i>
            </button>
            <button
            data-slider-next="#testiSlider3"
            class="slider-arrow style3 slider-next"
            >
            <i class="far fa-arrow-right"></i>
            </button>
            </div>
            </div>
        </section>

@endsection