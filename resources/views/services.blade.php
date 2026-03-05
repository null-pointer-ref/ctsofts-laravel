@extends('layouts.app')

@section('title', 'Services | CT Softs LLC – Web Development, Digital Marketing, AI & IT Solutions')

@section('meta_description', 'CT Softs LLC offers expert web development, mobile app development, digital marketing, SEO, AI solutions, GPS tracking, and IT consulting in Connecticut, USA. Custom software, e‑commerce, fleet management, and 24/7 support. Get a free consultation today.')

@section('meta_keywords', 'web development, website development, mobile app development, software development, digital marketing agency, SEO services, SEO agency, AI solutions, agentic AI, GPS tracking, fleet management, OBD2 tracker, IT services, IT consulting, IT support, custom web development, e commerce website, ecommerce development, wordpress developer, software engineer, software developer, data analysis, graphic design, social media marketing, technology solutions, software solutions, enterprise solutions, web applications, 24/7 support, Connecticut software company, USA web development, responsive web design, custom software development, IT company, digital transformation, business growth, technology consulting, real-time GPS, fleet tracking, CT Softs services')

@section('og_title', 'CT Softs LLC Services | Web, Mobile, Digital Marketing, AI & GPS Solutions')
@section('og_description', 'Explore the full range of services from CT Softs LLC: web development, mobile apps, digital marketing, SEO, AI, GPS tracking, and IT consulting. Based in Connecticut, serving the USA.')
@section('og_image', asset('assets/img/services-og-image.jpg'))

@section('twitter_title', 'CT Softs LLC Services | Software & Digital Marketing')
@section('twitter_description', 'CT Softs LLC provides custom web development, mobile apps, digital marketing, AI, GPS tracking, and IT solutions.')

@section('content')
  <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">
          Services
        </h1>
        <ul class="breadcumb-menu">
          <li>
            <a href="/">
              Home
            </a>
          </li>
          <li>
            Services
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="space" id="service-sec">
    <div class="container">
      <div class="row gy-4">
        @foreach($services as $index => $service)
          <div class="col-md-6 col-xl-4">
            <div class="service-card">
              <div class="service-card_number">
                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
              </div>
              <div class="shape-icon">
                <img src="{{ asset($service['image']) }}" alt="{{ $service['name'] }} Icon">
                <span class="dots"></span>
              </div>
              <h3 class="box-title">
                <a href="{{ route('service.detail', ['service' => Str::slug($service['name'])]) }}">
                  {{ $service['title'] }}
                </a>
              </h3>
              <p class="service-card_text" style="display:-webkit-box; -webkit-line-clamp:5; -webkit-box-orient:vertical; overflow:hidden;">
                {{ $service['description'] }}
              </p>
              <a href="{{ route('service.detail', ['service' => Str::slug($service['name'])]) }}" class="th-btn">
                Read More
                <i class="fa-regular fa-arrow-right ms-2"></i>
              </a>
              <div class="bg-shape">
                <img src="{{ asset('assets/img/bg/service_card_bg.png') }}" alt="bg">
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/str-slug-helper"></script>
  @endpush
  <section class="position-relative space">
    <div class="th-bg-img" data-bg-src="assets/img/bg/cta_bg_2.jpg">
      <img src="assets/img/bg/bg_overlay_1.png" alt="overlay">
    </div>
    <div class="container z-index-common">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-9 text-center">
          <div class="title-area mb-35">
            <span class="sub-title">
              <div class="icon-masking me-2">
                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg">
                </span>
                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
              </div>
              CONTACT US
            </span>
            <h2 class="sec-title text-white">
              Need Any Kind Of IT Solution For
              <span class="text-theme fw-normal">
                Your Business?
              </span>
            </h2>
          </div>
          <a href="/contact" class="th-btn style3">
            Get In Touch
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-smoke" id="process-sec" data-bg-src="assets/img/bg/process_bg_1.png">
    <div class="container space">
      <div class="title-area text-center">
        <span class="sub-title">
          <div class="icon-masking me-2">
            <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg">
            </span>
            <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
          </div>
          WORK PROCESS
        </span>
        <h2 class="sec-title">
          How to work
          <span class="text-theme">
            it!
          </span>
        </h2>
      </div>
      <div class="process-card-area">
        <div class="process-line">
          <img src="assets/img/bg/process_line.svg" alt="line">
        </div>
        <div class="row gy-40">
          <div class="col-sm-6 col-xl-3 process-card-wrap">
            <div class="process-card">
              <div class="process-card_number">
                01
              </div>
              <div class="process-card_icon">
                <img src="assets/img/icon/process_card_1.svg" alt="icon">
              </div>
              <h2 class="box-title">
                Select a project
              </h2>
              <p class="process-card_text">
                Continua scale empowered metrics with cost effective innovation.
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 process-card-wrap">
            <div class="process-card">
              <div class="process-card_number">
                02
              </div>
              <div class="process-card_icon">
                <img src="assets/img/icon/process_card_2.svg" alt="icon">
              </div>
              <h2 class="box-title">
                Project analysis
              </h2>
              <p class="process-card_text">
                Continua scale empowered metrics with cost effective innovation.
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 process-card-wrap">
            <div class="process-card">
              <div class="process-card_number">
                03
              </div>
              <div class="process-card_icon">
                <img src="assets/img/icon/process_card_3.svg" alt="icon">
              </div>
              <h2 class="box-title">
                Plan Execute
              </h2>
              <p class="process-card_text">
                Continua scale empowered metrics with cost effective innovation.
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 process-card-wrap">
            <div class="process-card">
              <div class="process-card_number">
                04
              </div>
              <div class="process-card_icon">
                <img src="assets/img/icon/process_card_4.svg" alt="icon">
              </div>
              <h2 class="box-title">
                Deliver result
              </h2>
              <p class="process-card_text">
                Continua scale empowered metrics with cost effective innovation.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-auto space" data-bg-src="assets/img/bg/testi_bg_2.png">
    <div class="container">
      <div class="title-area text-center">
        <span class="sub-title">
          <div class="icon-masking me-2">
            <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg">
            </span>
            <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
          </div>
          CUSTOMER FEEDBACK
        </span>
        <h2 class="sec-title">
          What Happy Clients Says
          <br>
          <span class="text-theme fw-normal">
            About Us?
          </span>
        </h2>
      </div>
      <div class="slider-area">
        <div class="swiper th-slider has-shadow" id="testiSlider2"
          data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"}}}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testi-box">
                <div class="testi-box_img">
                  <img src="assets/img/testimonial/testi_2_1.jpg" alt="Avater">
                  <div class="testi-box_quote">
                    <img src="assets/img/icon/quote_left_2.svg" alt="quote">
                  </div>
                </div>
                <div class="testi-box_content">
                  <p class="testi-box_text">
                    Objectively visualize error-free technology for B2B alignment. Monotonectally
                    harness an expanded array of models via effective collaboration.
                  </p>
                  <div class="testi-box_review">
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                  </div>
                  <h3 class="box-title">
                    David Farnandes
                  </h3>
                  <p class="testi-box_desig">
                    CEO at Anaton
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-box">
                <div class="testi-box_img">
                  <img src="assets/img/testimonial/testi_2_2.jpg" alt="Avater">
                  <div class="testi-box_quote">
                    <img src="assets/img/icon/quote_left_2.svg" alt="quote">
                  </div>
                </div>
                <div class="testi-box_content">
                  <p class="testi-box_text">
                    Objectively visualize error-free technology for B2B alignment. Monotonectally
                    harness an expanded array of models via effective collaboration.
                  </p>
                  <div class="testi-box_review">
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                  </div>
                  <h3 class="box-title">
                    Jackline Techie
                  </h3>
                  <p class="testi-box_desig">
                    CEO at Kormola
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-box">
                <div class="testi-box_img">
                  <img src="assets/img/testimonial/testi_2_3.jpg" alt="Avater">
                  <div class="testi-box_quote">
                    <img src="assets/img/icon/quote_left_2.svg" alt="quote">
                  </div>
                </div>
                <div class="testi-box_content">
                  <p class="testi-box_text">
                    Objectively visualize error-free technology for B2B alignment. Monotonectally
                    harness an expanded array of models via effective collaboration.
                  </p>
                  <div class="testi-box_review">
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                  </div>
                  <h3 class="box-title">
                    Abraham Khalil
                  </h3>
                  <p class="testi-box_desig">
                    CEO at Rimasu
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-box">
                <div class="testi-box_img">
                  <img src="assets/img/testimonial/testi_2_1.jpg" alt="Avater">
                  <div class="testi-box_quote">
                    <img src="assets/img/icon/quote_left_2.svg" alt="quote">
                  </div>
                </div>
                <div class="testi-box_content">
                  <p class="testi-box_text">
                    Objectively visualize error-free technology for B2B alignment. Monotonectally
                    harness an expanded array of models via effective collaboration.
                  </p>
                  <div class="testi-box_review">
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                  </div>
                  <h3 class="box-title">
                    David Farnandes
                  </h3>
                  <p class="testi-box_desig">
                    CEO at Anaton
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-box">
                <div class="testi-box_img">
                  <img src="assets/img/testimonial/testi_2_2.jpg" alt="Avater">
                  <div class="testi-box_quote">
                    <img src="assets/img/icon/quote_left_2.svg" alt="quote">
                  </div>
                </div>
                <div class="testi-box_content">
                  <p class="testi-box_text">
                    Objectively visualize error-free technology for B2B alignment. Monotonectally
                    harness an expanded array of models via effective collaboration.
                  </p>
                  <div class="testi-box_review">
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                  </div>
                  <h3 class="box-title">
                    Jackline Techie
                  </h3>
                  <p class="testi-box_desig">
                    CEO at Kormola
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-box">
                <div class="testi-box_img">
                  <img src="assets/img/testimonial/testi_2_3.jpg" alt="Avater">
                  <div class="testi-box_quote">
                    <img src="assets/img/icon/quote_left_2.svg" alt="quote">
                  </div>
                </div>
                <div class="testi-box_content">
                  <p class="testi-box_text">
                    Objectively visualize error-free technology for B2B alignment. Monotonectally
                    harness an expanded array of models via effective collaboration.
                  </p>
                  <div class="testi-box_review">
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                    <i class="fa-solid fa-star-sharp">
                    </i>
                  </div>
                  <h3 class="box-title">
                    Abraham Khalil
                  </h3>
                  <p class="testi-box_desig">
                    CEO at Rimasu
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button data-slider-prev="#testiSlider2" class="slider-arrow style3 slider-prev">
          <i class="far fa-arrow-left">
          </i>
        </button>
        <button data-slider-next="#testiSlider2" class="slider-arrow style3 slider-next">
          <i class="far fa-arrow-right">
          </i>
        </button>
      </div>
    </div>
    <div class="shape-mockup moving d-none d-xl-block" data-bottom="0%" data-left="10%">
      <img src="assets/img/shape/line_1.png" alt="shape">
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-top="20%" data-right="2%">
      <img src="assets/img/shape/line_2.png" alt="shape">
    </div>
  </section>

@endsection