@extends('layouts.app')
@section('title', $service['title'] . ' | CT Softs LLC')
@section('meta_description', $service['meta_description'])
@section('meta_keywords', $service['keywords'])

@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">
                {{ strtoupper($service['name']) }}
            </h1>
            <ul class="breadcumb-menu">
                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li>
                    {{ $service['name'] }}
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-lg-12">
                <div class="page-single">
                    <div class="page-content">
                        <h2 class="h3 page-title">
                            {{ $service['name'] }} Services
                        </h2>
                        
                        <p>
                            {{ $service['description'] }}
                        </p>
                        
                        <p class="mb-30">
                            @switch($service['name'])
                                @case('Web Development')
                                    Our expert team leverages the latest frameworks and best practices to build scalable applications that grow with your business. We focus on user experience, performance optimization, and security to deliver websites that not only look great but also convert visitors into customers.
                                    @break
                                @case('Graphic Designing')
                                    We combine creativity with strategic thinking to deliver stunning visual solutions. Our designs capture your brand essence and communicate your message effectively across all media platforms.
                                    @break
                                @case('Social Media Marketing')
                                    We create engaging social media strategies that build brand awareness, increase engagement, and drive conversions. Our data-driven approach ensures maximum ROI for your social media investment.
                                    @break
                                @case('Data Analysis')
                                    We transform raw data into actionable insights. Our analytics solutions help you make informed business decisions and identify growth opportunities through comprehensive data analysis.
                                    @break
                                @case('Agentic AI')
                                    We develop intelligent AI agents that automate complex tasks and enhance decision-making. Our Agentic AI solutions learn and adapt to deliver unprecedented efficiency and innovation.
                                    @break
                                @case('IT support')
                                    We provide comprehensive IT support services ensuring your systems run smoothly. From troubleshooting to network management, our 24/7 support keeps your business operational.
                                    @break
                                @case('SEO')
                                    We implement proven SEO strategies that improve search rankings and drive organic traffic. Our approach focuses on sustainable results through ethical optimization techniques.
                                    @break
                                @default
                                    Our expert team delivers high-quality solutions tailored to your specific business needs and requirements.
                            @endswitch
                        </p>
                        
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="th-video">
                                    @php
                                        $imageMap = [
                                            'Web Development' => 'web.jpeg',
                                            'Graphic Designing' => 'graphic.jpg',
                                            'Social Media Marketing' => 'social.jpg',
                                            'Data Analysis' => 'data.jpg',
                                            'Agentic AI' => 'ai.jpg',
                                            'IT support' => 'it.jpg',
                                            'SEO' => 'seo.jpg'
                                        ];
                                        $imageFile = $imageMap[$service['name']] ?? 'default.jpg';
                                    @endphp
                                    <img class="w-100" src="{{ asset('assets/img/service/' . $imageFile) }}" alt="{{ $service['name'] }} service">
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <h3 class="h4 mb-20">
                                    Why Choose Our {{ $service['name'] }}
                                </h3>
                                <div class="checklist style3">
                                    <ul>
                                        @switch($service['name'])
                                            @case('Web Development')
                                                <li><i class="fas fa-octagon-check"></i> Responsive & Mobile-First Design</li>
                                                <li><i class="fas fa-octagon-check"></i> SEO Optimized Development</li>
                                                <li><i class="fas fa-octagon-check"></i> Fast Loading & Performance Optimization</li>
                                                <li><i class="fas fa-octagon-check"></i> Secure & Scalable Architecture</li>
                                                <li><i class="fas fa-octagon-check"></i> Ongoing Support & Maintenance</li>
                                                @break
                                            @case('Graphic Designing')
                                                <li><i class="fas fa-octagon-check"></i> Creative & Unique Designs</li>
                                                <li><i class="fas fa-octagon-check"></i> Brand-Centric Approach</li>
                                                <li><i class="fas fa-octagon-check"></i> Quick Turnaround Time</li>
                                                <li><i class="fas fa-octagon-check"></i> Multiple Revision Rounds</li>
                                                <li><i class="fas fa-octagon-check"></i> Print & Digital Ready Files</li>
                                                @break
                                            @case('Social Media Marketing')
                                                <li><i class="fas fa-octagon-check"></i> Data-Driven Strategies</li>
                                                <li><i class="fas fa-octagon-check"></i> Content Creation & Curation</li>
                                                <li><i class="fas fa-octagon-check"></i> Audience Engagement</li>
                                                <li><i class="fas fa-octagon-check"></i> Performance Analytics</li>
                                                <li><i class="fas fa-octagon-check"></i> ROI-Focused Campaigns</li>
                                                @break
                                            @case('Data Analysis')
                                                <li><i class="fas fa-octagon-check"></i> Advanced Analytics Tools</li>
                                                <li><i class="fas fa-octagon-check"></i> Real-Time Reporting</li>
                                                <li><i class="fas fa-octagon-check"></i> Predictive Modeling</li>
                                                <li><i class="fas fa-octagon-check"></i> Data Visualization</li>
                                                <li><i class="fas fa-octagon-check"></i> Actionable Insights</li>
                                                @break
                                            @case('Agentic AI')
                                                <li><i class="fas fa-octagon-check"></i> Autonomous Decision Making</li>
                                                <li><i class="fas fa-octagon-check"></i> Continuous Learning</li>
                                                <li><i class="fas fa-octagon-check"></i> Process Automation</li>
                                                <li><i class="fas fa-octagon-check"></i> Scalable Solutions</li>
                                                <li><i class="fas fa-octagon-check"></i> Seamless Integration</li>
                                                @break
                                            @case('IT support')
                                                <li><i class="fas fa-octagon-check"></i> 24/7 Technical Support</li>
                                                <li><i class="fas fa-octagon-check"></i> Quick Response Time</li>
                                                <li><i class="fas fa-octagon-check"></i> Proactive Monitoring</li>
                                                <li><i class="fas fa-octagon-check"></i> Security Management</li>
                                                <li><i class="fas fa-octagon-check"></i> Regular Maintenance</li>
                                                @break
                                            @case('SEO')
                                                <li><i class="fas fa-octagon-check"></i> White-Hat Techniques</li>
                                                <li><i class="fas fa-octagon-check"></i> Keyword Optimization</li>
                                                <li><i class="fas fa-octagon-check"></i> Quality Link Building</li>
                                                <li><i class="fas fa-octagon-check"></i> Content Strategy</li>
                                                <li><i class="fas fa-octagon-check"></i> Performance Tracking</li>
                                                @break
                                        @endswitch
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @switch($service['name'])
                            @case('Web Development')
                                <p class="mb-4">
                                    We develop custom websites using modern technologies like React, Vue, Node.js, and more. Whether you need an e-commerce platform, content management system, or progressive web app, our developers deliver solutions that exceed expectations.
                                </p>
                                @break
                            @case('Graphic Designing')
                                <p class="mb-4">
                                    From logo design to complete brand identity, we create visually compelling graphics that tell your story. Our designers stay current with trends while maintaining timeless design principles that resonate with your audience.
                                </p>
                                @break
                            @case('Social Media Marketing')
                                <p class="mb-4">
                                    We manage your social presence across platforms like Facebook, Instagram, LinkedIn, and Twitter. Our integrated campaigns combine organic content with targeted advertising to maximize your reach and engagement.
                                </p>
                                @break
                            @case('Data Analysis')
                                <p class="mb-4">
                                    Using cutting-edge tools like Python, R, and Tableau, we uncover patterns and trends in your data. Our analysis helps optimize operations, identify market opportunities, and predict future outcomes.
                                </p>
                                @break
                            @case('Agentic AI')
                                <p class="mb-4">
                                    Our AI agents automate customer service, data processing, and decision-making workflows. These intelligent systems continuously improve through machine learning, delivering unprecedented efficiency gains.
                                </p>
                                @break
                            @case('IT support')
                                <p class="mb-4">
                                    Our IT support covers everything from help desk services to infrastructure management. We ensure your technology stack remains reliable, secure, and up-to-date with industry standards.
                                </p>
                                @break
                            @case('SEO')
                                <p class="mb-4">
                                    We conduct comprehensive SEO audits and implement strategies that improve your search visibility. Our approach includes technical SEO, on-page optimization, and quality content creation.
                                </p>
                                @break
                        @endswitch

                        <h3 class="h4 mb-20">
                            Our {{ $service['name'] }} Services
                        </h3>
                        
                        <div class="service-feature-wrap">
                            @switch($service['name'])
                                @case('Web Development')
                                    <div class="service-feature">
                                        <div class="service-feature_icon">
                                            <img src="{{ asset('assets/img/icon/service_feature_1.svg') }}" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="service-feature_title">Custom Web Development</h4>
                                            <p class="service-feature_text">Tailored solutions built from scratch to match your unique business requirements and goals.</p>
                                        </div>
                                    </div>
                                    <div class="service-feature">
                                        <div class="service-feature_icon">
                                            <img src="{{ asset('assets/img/icon/service_feature_2.svg') }}" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="service-feature_title">24/7 Technical Support</h4>
                                            <p class="service-feature_text">Round-the-clock support ensuring your website runs smoothly and stays secure always.</p>
                                        </div>
                                    </div>
                                    @break
                                @case('SEO')
                                    <div class="service-feature">
                                        <div class="service-feature_icon">
                                            <img src="{{ asset('assets/img/icon/service_feature_1.svg') }}" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="service-feature_title">On-Page SEO</h4>
                                            <p class="service-feature_text">Optimizing your website's content and structure for better search engine rankings.</p>
                                        </div>
                                    </div>
                                    <div class="service-feature">
                                        <div class="service-feature_icon">
                                            <img src="{{ asset('assets/img/icon/service_feature_2.svg') }}" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="service-feature_title">Off-Page SEO</h4>
                                            <p class="service-feature_text">Building quality backlinks and improving domain authority through ethical practices.</p>
                                        </div>
                                    </div>
                                    @break
                                @default
                                    <div class="service-feature">
                                        <div class="service-feature_icon">
                                            <img src="{{ asset('assets/img/icon/service_feature_1.svg') }}" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="service-feature_title">Expert Consultation</h4>
                                            <p class="service-feature_text">Get professional advice and strategic guidance from our experienced team.</p>
                                        </div>
                                    </div>
                                    <div class="service-feature">
                                        <div class="service-feature_icon">
                                            <img src="{{ asset('assets/img/icon/service_feature_2.svg') }}" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="service-feature_title">Quality Assurance</h4>
                                            <p class="service-feature_text">We ensure the highest quality standards in every project we deliver.</p>
                                        </div>
                                    </div>
                            @endswitch
                        </div>

                        <h3 class="h4 mt-35 mb-4">
                            Frequently Asked Questions
                        </h3>
                        
                        <div class="accordion-area accordion" id="faqAccordion">
                            @php
                                $faqs = [
                                    'Web Development' => [
                                        ['q' => 'What technologies do you use for web development?', 
                                         'a' => 'We use industry-leading technologies including React, Vue.js, Angular, Node.js, Python, PHP, and modern databases. Our tech stack is chosen based on project requirements to ensure optimal performance and maintainability.'],
                                        ['q' => 'How long does a web development project take?', 
                                         'a' => 'Project timelines vary based on complexity and scope. A simple website takes 4-6 weeks, while complex applications may take several months. We provide detailed timelines after understanding your requirements.'],
                                        ['q' => 'Do you provide post-launch support?', 
                                         'a' => 'Yes, we offer comprehensive post-launch support including updates, bug fixes, performance monitoring, and security maintenance. Our support packages are flexible and tailored to your needs.']
                                    ],
                                    'SEO' => [
                                        ['q' => 'How long until I see SEO results?', 
                                         'a' => 'SEO is a long-term strategy. Typically, you can start seeing improvements in 3-6 months, with significant results in 6-12 months depending on competition and your industry.'],
                                        ['q' => 'What SEO techniques do you use?', 
                                         'a' => 'We use only white-hat SEO techniques approved by Google, including quality content creation, proper keyword optimization, technical SEO improvements, and ethical link building.'],
                                        ['q' => 'Do you guarantee #1 rankings?', 
                                         'a' => 'We cannot guarantee specific rankings as search algorithms are complex and competitive. However, we guarantee continuous improvement in your search visibility using proven strategies.']
                                    ],
                                    'default' => [
                                        ['q' => 'How do I get started with your services?', 
                                         'a' => 'Simply contact us through our website or call us. We\'ll schedule a consultation to understand your needs and provide a customized solution.'],
                                        ['q' => 'What is your pricing model?', 
                                         'a' => 'We offer flexible pricing models including project-based, hourly, and retainer options. We\'ll work with you to find the best fit for your budget and requirements.'],
                                        ['q' => 'Do you provide ongoing support?', 
                                         'a' => 'Yes, we offer comprehensive maintenance and support packages to ensure your continued success.']
                                    ]
                                ];
                                
                                $currentFaqs = $faqs[$service['name']] ?? $faqs['default'];
                            @endphp
                            
                            @foreach($currentFaqs as $index => $faq)
                                <div class="accordion-card style2 {{ $index === 0 ? 'active' : '' }}">
                                    <div class="accordion-header" id="collapse-item-{{ $index + 1 }}">
                                        <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" 
                                                type="button" 
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse-{{ $index + 1 }}" 
                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                                aria-controls="collapse-{{ $index + 1 }}">
                                            {{ $faq['q'] }}
                                        </button>
                                    </div>
                                    <div id="collapse-{{ $index + 1 }}" 
                                         class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                                         aria-labelledby="collapse-item-{{ $index + 1 }}"
                                         data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">
                                                {{ $faq['a'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection