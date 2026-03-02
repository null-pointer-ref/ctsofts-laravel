@extends('layouts.app')

@section('title', 'Contact Us | CT Softs LLC – Software & Digital Marketing Agency in Connecticut')

@section('meta_description', 'Contact CT Softs LLC, a leading software company in Connecticut offering web development, mobile app development, digital marketing, SEO, AI, and GPS tracking solutions. Get a free consultation today!')

@section('meta_keywords', 'contact software company, contact CT Softs, Connecticut software company, web development agency contact, digital marketing agency Connecticut, SEO services Connecticut, mobile app developers contact, custom web development company, IT services Connecticut, software solutions, free consultation, get in touch, CT Softs LLC, software company USA, technology solutions, enterprise solutions, IT support, 24/7 support, agentic AI, GPS tracking, fleet management, OBD2 tracker, social media marketing, graphic design, data analysis, web development company near me, software development companies, hire software developer, digital transformation agency, Connecticut IT company, USA web development, e commerce website development, wordpress developer contact')

@section('og_title', 'Contact CT Softs LLC | Software & Digital Marketing Agency')
@section('og_description', 'Reach out to CT Softs LLC for expert software development, digital marketing, AI, and GPS tracking solutions. Based in Connecticut, we help businesses grow with innovative technology.')
@section('og_image', asset('assets/img/contact-og-image.jpg'))

@section('twitter_title', 'Contact CT Softs LLC')
@section('twitter_description', 'Get in touch with CT Softs LLC for custom software, web, mobile, AI, and digital marketing solutions.')

@section('content')
  <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">
          Contact Us
        </h1>
        <ul class="breadcumb-menu">
          <li>
            <a href="/">
              Home
            </a>
          </li>
          <li>
            Contact Us
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="space" id="contact-sec">
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-4 col-md-6">
          <div class="contact-info">
            <div class="contact-info_icon">
              <i class="fas fa-location-dot">
              </i>
            </div>
            <div class="media-body">
              <h4 class="box-title">
                Our Office Address
              </h4>
              <span class="contact-info_text">
                609 W Johnson Ave, Cheshire, CT 06410, USA
              </span>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="contact-info">
            <div class="contact-info_icon">
              <i class="fas fa-phone">
              </i>
            </div>
            <div class="media-body">
              <h4 class="box-title">
                Call Us Anytime
              </h4>
              <span class="contact-info_text">
                <a href="tel:+12038057525">+1 203-805-7525</a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="contact-info">
            <div class="contact-info_icon">
              <i class="fas fa-envelope">
              </i>
            </div>
            <div class="media-body">
              <h4 class="box-title">
                Send An Email
              </h4>
              <span class="contact-info_text">
                <a href="mailto:info@ctsofts.com">info@ctsofts.com</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-smoke space" data-bg-src="assets/img/bg/contact_bg_1.png" id="contact-sec">
    <div class="container">
      <div class="row">
        <div class="col-xl-8">
          <div class="title-area mb-35 text-xl-start text-center">
            <span class="sub-title">
              <div class="icon-masking me-2">
                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg">
                </span>
                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
              </div>
              contact with us!
            </span>
            <h2 class="sec-title">
              Have Any Questions?
            </h2>
            <p class="sec-text">
              Enthusiastically disintermediate one-to-one leadership via business e-commerce.
              Dramatically reintermediate compelling process improvements rather than
              empowered relationships.
            </p>
          </div>
          <form action="https://html.themehour.net/webteck/demo/mail.php" method="POST" class="contact-form ajax-contact">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                <i class="fal fa-user">
                </i>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                <i class="fal fa-envelope">
                </i>
              </div>
              <div class="form-group col-md-6">
                <select name="subject" id="subject" class="form-select">
                  <option value="" disabled="disabled" selected="selected" hidden>
                    Select Subject
                  </option>
                  <option value="Web Development">
                    Web Development
                  </option>
                  <option value="Brand Marketing">
                    Brand Marketing
                  </option>
                  <option value="UI/UX Designing">
                    UI/UX Designing
                  </option>
                  <option value="Digital Marketing">
                    Digital Marketing
                  </option>
                </select>
                <i class="fal fa-chevron-down">
                </i>
              </div>
              <div class="form-group col-md-6">
                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                <i class="fal fa-phone">
                </i>
              </div>
              <div class="form-group col-12">
                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message">
                        </textarea>
                <i class="fal fa-comment">
                </i>
              </div>
              <div class="form-btn text-xl-start text-center col-12">
                <button class="th-btn">
                  Send Message
                  <i class="fa-regular fa-arrow-right ms-2">
                  </i>
                </button>
              </div>
            </div>
            <p class="form-messages mb-0 mt-3">
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="map-sec">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sThemeholy!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
      allowfullscreen="" loading="lazy">
    </iframe>
  </div>
@endsection