@extends('front.layout.app')

@section('content')
 

 <main>

                <!-- hero area start -->
                <div class="creative-2-hero-wrap pt-180">
                    <div class="container container-1610">
                        <div class="creative-2-hero-top-wrap mb-60">
                            <div class="row align-items-end">
                                <div class="col-xl-6">
                                    <div class="creative-2-hero-title-box">
                                        <h2 class="creative-2-hero-title" style="color: white">
                                            {{ __('Scale') }}
                                            y<img class="d-none d-md-inline-block" src="{{asset('front/assets/img/home-04/hero/hero-shape-1.png')}}" alt="">{{ __('ur') }}
                                            {{ __('Business') }}
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="creative-2-hero-btn-wrap">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="creative-2-hero-text p-relative">
                                                    <p style="color: white">
                                                        {{ __('An independent web design &') }} <br>
                                                        {{ __('branding agency') }}
                                                    </p>
                                                    <span class="creative-2-hero-icon">
                                                        <svg width="351" height="8" viewBox="0 0 351 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M350.354 4.35355C350.549 4.15829 350.549 3.84171 350.354 3.64645L347.172 0.464466C346.976 0.269204 346.66 0.269204 346.464 0.464466C346.269 0.659728 346.269 0.976311 346.464 1.17157L349.293 4L346.464 6.82843C346.269 7.02369 346.269 7.34027 346.464 7.53553C346.66 7.7308 346.976 7.7308 347.172 7.53553L350.354 4.35355ZM0 4V4.5H350V4V3.5H0V4Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="creative-2-hero-btn-wrap text-xl-end">
                                                    <div class="creative-2-hero-btn">
                                                        <a href="#" class="tp-btn-black btn-green-light-bg pb-10 pr-15">
                                                            <span class="tp-btn-black-filter-blur">
                                                                <svg width="0" height="0">
                                                                    <defs>
                                                                        <filter id="buttonFilter3">
                                                                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                                            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                                            <feComposite in="SourceGraphic" in2="buttonFilter3" operator="atop"></feComposite>
                                                                            <feBlend in="SourceGraphic" in2="buttonFilter3"></feBlend>
                                                                        </filter>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                            <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter3)">
                                                                <span class="tp-btn-black-text">{{ __('View our work') }}</span>
                                                                <span class="tp-btn-black-circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="tp-btn-black btn-transparent-bg pb-10">
                                                            <span class="tp-btn-black-filter-blur">
                                                                <svg width="0" height="0">
                                                                    <defs>
                                                                        <filter id="buttonFilter11">
                                                                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                                            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                                            <feComposite in="SourceGraphic" in2="buttonFilter11" operator="atop"></feComposite>
                                                                            <feBlend in="SourceGraphic" in2="buttonFilter11"></feBlend>
                                                                        </filter>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                            <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter11)">
                                                                <span class="tp-btn-black-text">{{ __('Meet the team') }}</span>
                                                                <span class="tp-btn-black-circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="creative-2-hero-banner-area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="creative-hero-banner-wrap">
                                        <div class="creative-hero-banner">
                                            <video loop="" muted="" autoplay="" playsinline="">
                                                <source src="https://html.aqlova.com/videos/liko/liko.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hero area end -->

                <!-- about area start -->
                <div class="creative-about-area pt-120 pb-100">
                    <div class="container container-1580">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-3">
                                <div class="creative-about-title-box">
                                    <span class="tp-section-subtitle fs-17 pre-circle">{{ __('Who we are ?') }}</span>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-9">
                                <div class="creative-about-right">
                                    <div class="creative-about-text tp_fade_anim">
                                        <p>
                                            {{ __('Our design and strategy solutions support social impact businesses, forward-thinking brands, and eco-friendly products guiding consumers toward smarter, more sustainable choices.') }}
                                        </p>
                                    </div>
                                    <div class="creative-about-btn-box d-flex align-items-center">
                                        <div class="tp_fade_anim" data-fade-from="top" data-delay=".3" data-ease="bounce">
                                            <a href="#" class="tp-btn-black btn-green-light-bg mb-20 pr-15">
                                                <span class="tp-btn-black-filter-blur">
                                                    <svg width="0" height="0">
                                                        <defs>
                                                            <filter id="buttonFilter1">
                                                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                                <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                                <feComposite in="SourceGraphic" in2="buttonFilter1" operator="atop"></feComposite>
                                                                <feBlend in="SourceGraphic" in2="buttonFilter1"></feBlend>
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter1)">
                                                    <span class="tp-btn-black-text">{{ __('About Agntix') }}</span>
                                                    <span class="tp-btn-black-circle">
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="tp_fade_anim" data-fade-from="top" data-delay=".5" data-ease="bounce">
                                            <a href="#" class="tp-btn-black btn-transparent-bg mb-20">
                                                <span class="tp-btn-black-filter-blur">
                                                    <svg width="0" height="0">
                                                        <defs>
                                                            <filter id="buttonFilter2">
                                                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                                <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                                <feComposite in="SourceGraphic" in2="buttonFilter2" operator="atop"></feComposite>
                                                                <feBlend in="SourceGraphic" in2="buttonFilter2"></feBlend>
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter2)">
                                                    <span class="tp-btn-black-text">{{ __('Meet the team') }}</span>
                                                    <span class="tp-btn-black-circle">
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about area end -->

                <!-- brand area start -->
                <div class="creative-brand-area pb-190">
                    <div class="creative-brand-wrapper">
                        <div class="swiper-container creative-brand-active">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide">
                                    <div class="creative-brand-item">
                                        <img src="{{asset('front/assets/img/home-04/brand/brand-1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="creative-brand-item">
                                        <img src="{{asset('front/assets/img/home-04/brand/brand-6.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="creative-brand-item">
                                        <img src="{{asset('front/assets/img/home-04/brand/brand-3.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="creative-brand-item">
                                        <img src="{{asset('front/assets/img/home-04/brand/brand-4.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="creative-brand-item">
                                        <img src="{{asset('front/assets/img/home-04/brand/brand-5.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="creative-brand-item">
                                        <img src="{{asset('front/assets/img/home-04/brand/brand-6.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="creative-brand-item">
                                        <img src="{{asset('front/assets/img/home-04/brand/brand-1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="creative-brand-item">
                                        <img src="{{asset('front/assets/img/home-04/brand/brand-3.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="creative-brand-item">
                                        <img src="{{asset('front/assets/img/home-04/brand/brand-5.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- brand area end -->

                <!-- project area start -->
                <div class="creative-project-area creative-project-2-style pb-120">
                    <div class="container container-1580">
                        <div class="creative-project-2-top">
                            <div class="row align-items-end">
                                <div class="col-lg-3">
                                    <div class="creative-project-title-box">
                                        <span class="tp-section-subtitle mb-20 fs-17 pre-circle tp_fade_anim" data-delay=".3">{{ __('Work Showcase') }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="creative-project-title-box">
                                        <h4 class="tp-section-title fs-64 tp_fade_anim" data-delay=".5">{{ __('Discover my') }} <br> {{ __('Creative Expertise') }}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="creative-project-2-btn text-lg-end tp_fade_anim" data-fade-from="top" data-delay=".3" data-ease="bounce">
                                        <a href="#" class="tp-btn-black btn-green-light-bg mb-20">
                                            <span class="tp-btn-black-filter-blur">
                                                <svg width="0" height="0">
                                                    <defs>
                                                        <filter id="buttonFilter1">
                                                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                            <feComposite in="SourceGraphic" in2="buttonFilter1" operator="atop"></feComposite>
                                                            <feBlend in="SourceGraphic" in2="buttonFilter1"></feBlend>
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter1)">
                                                <span class="tp-btn-black-text">{{ __('About Agntix') }}</span>
                                                <span class="tp-btn-black-circle">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-40">
                            <div class="col-lg-6">
                                <div class="creative-project-item mb-100">
                                    <div class="creative-project-thumb anim-zoomin-wrap p-relative">
                                        <div class="anim-zoomin not-hide-cursor" data-cursor="View<br>Demo">
                                            <a class="cursor-hide" href="portfolio-details-classic-stack.html">
                                                <img src="{{asset('front/assets/img/home-04/project/project-3.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="creative-project-category">
                                            <span>{{ __('Website') }}</span>
                                            <span>{{ __('SEO') }}</span>
                                            <span>{{ __('Business') }}</span>
                                        </div>
                                    </div>
                                    <div class="creative-project-content">
                                        <div class="creative-project-meta">
                                            <span>2025</span>
                                            <span>{{ __('Agntix') }}</span>
                                        </div>
                                        <h4 class="creative-project-title-sm"><a class="tp-line-white" href="portfolio-details-classic-stack.html">{{ __('Urban Green Spaces') }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="creative-project-item mb-100 fix">
                                    <div class="creative-project-thumb anim-zoomin-wrap p-relative">
                                        <div class="anim-zoomin not-hide-cursor" data-cursor="View<br>Demo">
                                            <a class="cursor-hide" href="portfolio-details-classic-stack.html">
                                                <img src="{{asset('front/assets/img/home-04/project/project-4.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="creative-project-category">
                                            <span>{{ __('Website') }}</span>
                                            <span>{{ __('SEO') }}</span>
                                            <span>{{ __('Business') }}</span>
                                        </div>
                                    </div>
                                    <div class="creative-project-content">
                                        <div class="creative-project-meta">
                                            <span>2025</span>
                                            <span>{{ __('Agntix') }}</span>
                                        </div>
                                        <h4 class="creative-project-title-sm"><a class="tp-line-white" href="portfolio-details-classic-stack.html">{{ __('Logistics Made Simple') }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="creative-project-item mb-100">
                                    <div class="creative-project-thumb anim-zoomin-wrap p-relative">
                                        <div class="anim-zoomin not-hide-cursor" data-cursor="View<br>Demo">
                                            <a class="cursor-hide" href="portfolio-details-classic-stack.html">
                                                <img src="{{asset('front/assets/img/home-04/project/project-1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="creative-project-category">
                                            <span>{{ __('Website') }}</span>
                                            <span>{{ __('SEO') }}</span>
                                            <span>{{ __('Business') }}</span>
                                        </div>
                                    </div>
                                    <div class="creative-project-content">
                                        <div class="creative-project-meta">
                                            <span>2025</span>
                                            <span>{{ __('Agntix') }}</span>
                                        </div>
                                        <h4 class="creative-project-title-sm"><a class="tp-line-white" href="portfolio-details-classic-stack.html">{{ __('AI in Healthcare') }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="creative-project-item mb-100">
                                    <div class="creative-project-thumb anim-zoomin-wrap p-relative">
                                        <div class="anim-zoomin not-hide-cursor" data-cursor="View<br>Demo">
                                            <a class="cursor-hide" href="portfolio-details-classic-stack.html">
                                                <img src="{{asset('front/assets/img/home-04/project/project-2.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="creative-project-category">
                                            <span>{{ __('Website') }}</span>
                                            <span>{{ __('SEO') }}</span>
                                            <span>{{ __('Business') }}</span>
                                        </div>
                                    </div>
                                    <div class="creative-project-content">
                                        <div class="creative-project-meta">
                                            <span>2025</span>
                                            <span>{{ __('Agntix') }}</span>
                                        </div>
                                        <h4 class="creative-project-title-sm"><a class="tp-line-white" href="portfolio-details-classic-stack.html">{{ __('Social Media Impact') }}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- project area end -->

                <!-- service area start -->
                <div class="creative-service-area creative-service-2-style pb-120 pt-120" data-bg-color="#F6F6F9">
                    <div class="container container-1580">
                        <div class="creative-service-2-top mb-70">
                            <div class="row align-items-end">
                                <div class="col-xl-3">
                                    <div class="creative-blog-subtitle-box">
                                        <span class="tp-section-subtitle mb-20 fs-17 pre-circle">{{ __('Our Services') }}</span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="creative-blog-title-box">
                                        <h4 class="tp-section-title fs-44">
                                            {{ __('How we take your') }} <br> {{ __('business to the next level') }}
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-5">
                                    <div class="creative-blog-top-content">
                                        <a href="{{ route('services.index') }}" class="tp-btn-black btn-green-light-bg pr-15">
                                            <span class="tp-btn-black-filter-blur">
                                                <svg width="0" height="0">
                                                    <defs>
                                                        <filter id="buttonFilter5">
                                                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                            <feComposite in="SourceGraphic" in2="buttonFilter5" operator="atop"></feComposite>
                                                            <feBlend in="SourceGraphic" in2="buttonFilter5"></feBlend>
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter5)">
                                                <span class="tp-btn-black-text">{{ __('See all Articles') }}</span>
                                                <span class="tp-btn-black-circle">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="creative-service-wrap">
                            <div class="row">
                                <div class="offset-xl-3 col-xl-9">
                                    <div class="creative-service-item about-us-4 d-flex align-items-start justify-content-between tp_fade_anim">
                                        <div class="creative-service-content d-flex align-items-start">
                                            <span>(01)</span>
                                            <div class="creative-service-title-info">
                                                <h4 class="creative-service-title"><a href="service-details-light.html">{{ __('Branding') }}</a></h4>
                                                <div class="creative-service-category">
                                                    <span>{{ __('Logo design') }}</span>
                                                    <span>{{ __('Brand Guidelines') }}</span>
                                                    <span>{{ __('Visual Identity') }}</span>
                                                    <span>{{ __('Custom Emails') }}</span>
                                                    <span>{{ __('Presentations') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creative-service-link">
                                            <a href="service-details-light.html">
                                                <span>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="creative-service-item about-us-4 d-flex align-items-start justify-content-between tp_fade_anim">
                                        <div class="creative-service-content d-flex align-items-start">
                                            <span>(02)</span>
                                            <div class="creative-service-title-info">
                                                <h4 class="creative-service-title"><a href="service-details-light.html">{{ __('Identity') }}</a></h4>
                                                <div class="creative-service-category">
                                                    <span>{{ __('Logo design') }}</span>
                                                    <span>{{ __('Brand Guidelines') }}</span>
                                                    <span>{{ __('Visual Identity') }}</span>
                                                    <span>{{ __('Custom Emails') }}</span>
                                                    <span>{{ __('Presentations') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creative-service-link">
                                            <a href="service-details-light.html">
                                                <span>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="creative-service-item about-us-4 d-flex align-items-start justify-content-between tp_fade_anim">
                                        <div class="creative-service-content d-flex align-items-start">
                                            <span>(03)</span>
                                            <div class="creative-service-title-info">
                                                <h4 class="creative-service-title"><a href="service-details-light.html">{{ __('Impact') }}</a></h4>
                                                <div class="creative-service-category">
                                                    <span>{{ __('Logo design') }}</span>
                                                    <span>{{ __('Brand Guidelines') }}</span>
                                                    <span>{{ __('Visual Identity') }}</span>
                                                    <span>{{ __('Custom Emails') }}</span>
                                                    <span>{{ __('Presentations') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="creative-service-link">
                                            <a href="service-details-light.html">
                                                <span>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- service area end -->

                <!-- choose area start -->
                <div class="tp-service-5-features-ptb creative-service-2-style p-relative">
                    <div class="tp-service-5-feature-wrap p-relative">
                        <div class="row">
                            <div class="offset-xl-1 col-xl-6">
                                <div class="tp-service-5-feature-content">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                            <path d="M99 74.5858L76 97.5858V25V24H75H2.41421L25.4142 1H99V25V74.5858ZM30.1193 51L1 80.1193V51H30.1193ZM49 99H20.3031L49 70.3032V99Z" stroke="white" stroke-width="2" />
                                        </svg>
                                    </span>
                                    <h3 class="tp-service-5-feature-title">
                                        {{ __('We provide') }} <br> {{ __('special offers for') }} <br>
                                        {{ __('the best customers') }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <img data-speed=".8" class="w-100" src="{{asset('front/assets/img/home-04/choose/chose-1.jpg')}}" alt="">
                    </div>
                </div>
                <!-- choose area end -->

                <!-- testimonial area start -->
                <div class="creative-testimonial-area pt-120 pb-120 fix">
                    <div class="container container-1580">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-4">
                                <div class="creative-testimonial-title-box mb-25">
                                    <span class="tp-section-subtitle mb-20 fs-17 pre-circle tp_fade_anim" data-delay=".3">{{ __('Testimonials') }}</span>
                                    <h4 class="tp-section-title fs-44 tp_fade_anim" data-delay=".5">{{ __('What our') }} <br> {{ __('happy clients') }} <br> {{ __('say about us.') }}</h4>
                                </div>
                                <div class="creative-testimonial-btn mb-55 tp_fade_anim" data-delay=".7" data-fade-from="top" data-ease="bounce">
                                    <a href="contact.html" class="tp-btn-black btn-green-light-bg pr-15">
                                        <span class="tp-btn-black-filter-blur">
                                            <svg width="0" height="0">
                                                <defs>
                                                    <filter id="buttonFilter6">
                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                        <feComposite in="SourceGraphic" in2="buttonFilter6" operator="atop"></feComposite>
                                                        <feBlend in="SourceGraphic" in2="buttonFilter6"></feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter6)">
                                            <span class="tp-btn-black-text">{{ __("Let's chat") }}</span>
                                            <span class="tp-btn-black-circle">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="creative-testimonial-arrow">
                                    <button class="creative-testimonial-prev mr-5">
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8907 6H0.895874M0.895874 6L5.89327 1M0.895874 6L5.89327 11" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="creative-testimonial-next">
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.87085 6H10.8656M10.8656 6L5.86825 1M10.8656 6L5.86825 11" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="creative-testimonial-slider-wrap">
                                    <div class="swiper-container creative-testimonial-active fix">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="creative-testimonial-item">
                                                    <div class="creative-testimonial-avater-wrap d-flex align-items-center justify-content-between">
                                                        <div class="creative-testimonial-avater-box d-inline-flex align-items-center">
                                                            <div class="creative-testimonial-avater">
                                                                <img src="{{asset('front/assets/img/home-04/avater/avater-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="creative-testimonial-avater-info">
                                                                <h4>{{ __('Bradley Gordon') }}</h4>
                                                                <span>{{ __('Co-Founder of Agntix') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="creative-testimonial-star">
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="creative-testimonial-text">
                                                        <p>
                                                            <span>
                                                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.5928 0L14.8534 0.573292C14.4017 0.747015 13.9501 0.972856 13.4984 1.25081C13.0467 1.52877 12.6298 1.8241 12.2476 2.13681C11.8654 2.44951 11.57 2.77959 11.3616 3.12703L11.9349 3.59609H12.4039C13.1336 3.59609 13.759 3.75244 14.2801 4.06514C14.836 4.3431 15.253 4.7253 15.5309 5.21172C15.8436 5.69815 16 6.25407 16 6.87948C16 7.50488 15.8263 8.0608 15.4788 8.54723C15.1661 8.99891 14.7318 9.36373 14.1759 9.64169C13.6547 9.91965 13.0293 10.0586 12.2997 10.0586C11.6048 10.0586 10.9794 9.91965 10.4235 9.64169C9.86754 9.32898 9.43322 8.92942 9.12052 8.44299C8.80782 7.95656 8.65147 7.38327 8.65147 6.72312C8.65147 5.99348 8.79045 5.29859 9.0684 4.63844C9.38111 3.94354 9.79805 3.31813 10.3192 2.76222C10.8404 2.17155 11.4658 1.65038 12.1954 1.1987C12.9251 0.712269 13.7242 0.312704 14.5928 0ZM5.94137 0L6.20195 0.573292C5.75027 0.747015 5.29859 0.972856 4.84691 1.25081C4.39522 1.52877 3.97828 1.8241 3.59609 2.13681C3.2139 2.44951 2.91857 2.77959 2.7101 3.12703L3.28339 3.59609H3.75244C4.48208 3.59609 5.10749 3.75244 5.62866 4.06514C6.18458 4.3431 6.60152 4.7253 6.87948 5.21172C7.19218 5.69815 7.34853 6.25407 7.34853 6.87948C7.34853 7.50488 7.17481 8.0608 6.82736 8.54723C6.51466 8.99891 6.08035 9.36373 5.52443 9.64169C5.00326 9.91965 4.37785 10.0586 3.64821 10.0586C2.95331 10.0586 2.3279 9.91965 1.77199 9.64169C1.21607 9.32898 0.781759 8.92942 0.469055 8.44299C0.156352 7.95656 0 7.38327 0 6.72312C0 5.99348 0.138979 5.29859 0.416938 4.63844C0.729642 3.94354 1.14658 3.31813 1.66775 2.76222C2.18893 2.17155 2.81433 1.65038 3.54397 1.1987C4.27362 0.712269 5.07275 0.312704 5.94137 0Z" fill="white" />
                                                                </svg>
                                                            </span>
                                                            {{ __('Agntix went above and beyond to make sure we got something we were happy with.') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="creative-testimonial-item">
                                                    <div class="creative-testimonial-avater-wrap d-flex align-items-center justify-content-between">
                                                        <div class="creative-testimonial-avater-box d-inline-flex align-items-center">
                                                            <div class="creative-testimonial-avater">
                                                                <img src="{{asset('front/assets/img/home-04/avater/avater-3.jpg')}}" alt="">
                                                            </div>
                                                            <div class="creative-testimonial-avater-info">
                                                                <h4>{{ __('Tisha Norton') }}</h4>
                                                                <span>{{ __('Co-Founder of Agntix') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="creative-testimonial-star">
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="creative-testimonial-text">
                                                        <p>
                                                            <span>
                                                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.5928 0L14.8534 0.573292C14.4017 0.747015 13.9501 0.972856 13.4984 1.25081C13.0467 1.52877 12.6298 1.8241 12.2476 2.13681C11.8654 2.44951 11.57 2.77959 11.3616 3.12703L11.9349 3.59609H12.4039C13.1336 3.59609 13.759 3.75244 14.2801 4.06514C14.836 4.3431 15.253 4.7253 15.5309 5.21172C15.8436 5.69815 16 6.25407 16 6.87948C16 7.50488 15.8263 8.0608 15.4788 8.54723C15.1661 8.99891 14.7318 9.36373 14.1759 9.64169C13.6547 9.91965 13.0293 10.0586 12.2997 10.0586C11.6048 10.0586 10.9794 9.91965 10.4235 9.64169C9.86754 9.32898 9.43322 8.92942 9.12052 8.44299C8.80782 7.95656 8.65147 7.38327 8.65147 6.72312C8.65147 5.99348 8.79045 5.29859 9.0684 4.63844C9.38111 3.94354 9.79805 3.31813 10.3192 2.76222C10.8404 2.17155 11.4658 1.65038 12.1954 1.1987C12.9251 0.712269 13.7242 0.312704 14.5928 0ZM5.94137 0L6.20195 0.573292C5.75027 0.747015 5.29859 0.972856 4.84691 1.25081C4.39522 1.52877 3.97828 1.8241 3.59609 2.13681C3.2139 2.44951 2.91857 2.77959 2.7101 3.12703L3.28339 3.59609H3.75244C4.48208 3.59609 5.10749 3.75244 5.62866 4.06514C6.18458 4.3431 6.60152 4.7253 6.87948 5.21172C7.19218 5.69815 7.34853 6.25407 7.34853 6.87948C7.34853 7.50488 7.17481 8.0608 6.82736 8.54723C6.51466 8.99891 6.08035 9.36373 5.52443 9.64169C5.00326 9.91965 4.37785 10.0586 3.64821 10.0586C2.95331 10.0586 2.3279 9.91965 1.77199 9.64169C1.21607 9.32898 0.781759 8.92942 0.469055 8.44299C0.156352 7.95656 0 7.38327 0 6.72312C0 5.99348 0.138979 5.29859 0.416938 4.63844C0.729642 3.94354 1.14658 3.31813 1.66775 2.76222C2.18893 2.17155 2.81433 1.65038 3.54397 1.1987C4.27362 0.712269 5.07275 0.312704 5.94137 0Z" fill="white" />
                                                                </svg>
                                                            </span>
                                                            {{ __('The team at Agntix was incredibly attentive and made sure every detail was perfect.') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="creative-testimonial-item">
                                                    <div class="creative-testimonial-avater-wrap d-flex align-items-center justify-content-between">
                                                        <div class="creative-testimonial-avater-box d-inline-flex align-items-center">
                                                            <div class="creative-testimonial-avater">
                                                                <img src="{{asset('front/assets/img/home-04/avater/avater-4.jpg')}}" alt="">
                                                            </div>
                                                            <div class="creative-testimonial-avater-info">
                                                                <h4>{{ __('Emma Berger') }}</h4>
                                                                <span>{{ __('Co-Founder of Agntix') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="creative-testimonial-star">
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="creative-testimonial-text">
                                                        <p>
                                                            <span>
                                                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.5928 0L14.8534 0.573292C14.4017 0.747015 13.9501 0.972856 13.4984 1.25081C13.0467 1.52877 12.6298 1.8241 12.2476 2.13681C11.8654 2.44951 11.57 2.77959 11.3616 3.12703L11.9349 3.59609H12.4039C13.1336 3.59609 13.759 3.75244 14.2801 4.06514C14.836 4.3431 15.253 4.7253 15.5309 5.21172C15.8436 5.69815 16 6.25407 16 6.87948C16 7.50488 15.8263 8.0608 15.4788 8.54723C15.1661 8.99891 14.7318 9.36373 14.1759 9.64169C13.6547 9.91965 13.0293 10.0586 12.2997 10.0586C11.6048 10.0586 10.9794 9.91965 10.4235 9.64169C9.86754 9.32898 9.43322 8.92942 9.12052 8.44299C8.80782 7.95656 8.65147 7.38327 8.65147 6.72312C8.65147 5.99348 8.79045 5.29859 9.0684 4.63844C9.38111 3.94354 9.79805 3.31813 10.3192 2.76222C10.8404 2.17155 11.4658 1.65038 12.1954 1.1987C12.9251 0.712269 13.7242 0.312704 14.5928 0ZM5.94137 0L6.20195 0.573292C5.75027 0.747015 5.29859 0.972856 4.84691 1.25081C4.39522 1.52877 3.97828 1.8241 3.59609 2.13681C3.2139 2.44951 2.91857 2.77959 2.7101 3.12703L3.28339 3.59609H3.75244C4.48208 3.59609 5.10749 3.75244 5.62866 4.06514C6.18458 4.3431 6.60152 4.7253 6.87948 5.21172C7.19218 5.69815 7.34853 6.25407 7.34853 6.87948C7.34853 7.50488 7.17481 8.0608 6.82736 8.54723C6.51466 8.99891 6.08035 9.36373 5.52443 9.64169C5.00326 9.91965 4.37785 10.0586 3.64821 10.0586C2.95331 10.0586 2.3279 9.91965 1.77199 9.64169C1.21607 9.32898 0.781759 8.92942 0.469055 8.44299C0.156352 7.95656 0 7.38327 0 6.72312C0 5.99348 0.138979 5.29859 0.416938 4.63844C0.729642 3.94354 1.14658 3.31813 1.66775 2.76222C2.18893 2.17155 2.81433 1.65038 3.54397 1.1987C4.27362 0.712269 5.07275 0.312704 5.94137 0Z" fill="white" />
                                                                </svg>
                                                            </span>
                                                            {{ __("We're beyond satisfied — Agntix made the entire process seamless and rewarding.") }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="creative-testimonial-item">
                                                    <div class="creative-testimonial-avater-wrap d-flex align-items-center justify-content-between">
                                                        <div class="creative-testimonial-avater-box d-inline-flex align-items-center">
                                                            <div class="creative-testimonial-avater">
                                                                <img src="{{asset('front/assets/img/home-04/avater/avater-5.jpg')}}" alt="">
                                                            </div>
                                                            <div class="creative-testimonial-avater-info">
                                                                <h4>{{ __('Mary Cruz') }}</h4>
                                                                <span>{{ __('Co-Founder of Agntix') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="creative-testimonial-star">
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <span>
                                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="creative-testimonial-text">
                                                        <p>
                                                            <span>
                                                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.5928 0L14.8534 0.573292C14.4017 0.747015 13.9501 0.972856 13.4984 1.25081C13.0467 1.52877 12.6298 1.8241 12.2476 2.13681C11.8654 2.44951 11.57 2.77959 11.3616 3.12703L11.9349 3.59609H12.4039C13.1336 3.59609 13.759 3.75244 14.2801 4.06514C14.836 4.3431 15.253 4.7253 15.5309 5.21172C15.8436 5.69815 16 6.25407 16 6.87948C16 7.50488 15.8263 8.0608 15.4788 8.54723C15.1661 8.99891 14.7318 9.36373 14.1759 9.64169C13.6547 9.91965 13.0293 10.0586 12.2997 10.0586C11.6048 10.0586 10.9794 9.91965 10.4235 9.64169C9.86754 9.32898 9.43322 8.92942 9.12052 8.44299C8.80782 7.95656 8.65147 7.38327 8.65147 6.72312C8.65147 5.99348 8.79045 5.29859 9.0684 4.63844C9.38111 3.94354 9.79805 3.31813 10.3192 2.76222C10.8404 2.17155 11.4658 1.65038 12.1954 1.1987C12.9251 0.712269 13.7242 0.312704 14.5928 0ZM5.94137 0L6.20195 0.573292C5.75027 0.747015 5.29859 0.972856 4.84691 1.25081C4.39522 1.52877 3.97828 1.8241 3.59609 2.13681C3.2139 2.44951 2.91857 2.77959 2.7101 3.12703L3.28339 3.59609H3.75244C4.48208 3.59609 5.10749 3.75244 5.62866 4.06514C6.18458 4.3431 6.60152 4.7253 6.87948 5.21172C7.19218 5.69815 7.34853 6.25407 7.34853 6.87948C7.34853 7.50488 7.17481 8.0608 6.82736 8.54723C6.51466 8.99891 6.08035 9.36373 5.52443 9.64169C5.00326 9.91965 4.37785 10.0586 3.64821 10.0586C2.95331 10.0586 2.3279 9.91965 1.77199 9.64169C1.21607 9.32898 0.781759 8.92942 0.469055 8.44299C0.156352 7.95656 0 7.38327 0 6.72312C0 5.99348 0.138979 5.29859 0.416938 4.63844C0.729642 3.94354 1.14658 3.31813 1.66775 2.76222C2.18893 2.17155 2.81433 1.65038 3.54397 1.1987C4.27362 0.712269 5.07275 0.312704 5.94137 0Z" fill="white" />
                                                                </svg>
                                                            </span>
                                                            {{ __('From start to finish, Agntix went the extra mile to ensure we were thrilled with the result.') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial area end -->

                <!-- brand area end -->
                <div class="creative-work-area creative-work-2-style">
                    <div class="container container-1580">
                        <div class="creative-work-bg p-relative" data-bg-color="#F6F6F9">
                            <div class="creative-work-title-wrap mb-65">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="creative-work-title-box">
                                            <span class="tp-section-subtitle fs-17 pre-circle tp_fade_anim" data-delay=".3">{{ __('Sharing the love') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="creative-work-title-box mb-30">
                                            <h4 class="tp-section-title fs-44 tp_fade_anim" data-delay=".5">
                                                {{ __('Speak up in a crowded digital world. Build a reputation on the voice of your brand.') }}
                                            </h4>
                                        </div>
                                        <div class="creative-work-btn tp_fade_anim" data-delay=".5" data-fade-from="top" data-ease="bounce">
                                            <a href="{{ route('contact.index') }}" class="tp-btn-black btn-green-light-bg pr-15">
                                                <span class="tp-btn-black-filter-blur">
                                                    <svg width="0" height="0">
                                                        <defs>
                                                            <filter id="buttonFilter7">
                                                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                                <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                                <feComposite in="SourceGraphic" in2="buttonFilter7" operator="atop"></feComposite>
                                                                <feBlend in="SourceGraphic" in2="buttonFilter7"></feBlend>
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter7)">
                                                    <span class="tp-btn-black-text">{{ __("Let's chat") }}</span>
                                                    <span class="tp-btn-black-circle">
                                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="creative-work-item text-center mb-30 tp_fade_anim" data-delay=".3">
                                        <div class="creative-work-icon">
                                            <img src="{{asset('front/assets/img/home-04/brand/brand-1-1.png')}}" alt="">
                                        </div>
                                        <div class="creative-work-content">
                                            <p>{{ __('#1 Team in the world') }} <br> {{ __('on Dribbble') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="creative-work-item text-center mb-30 tp_fade_anim" data-delay=".4">
                                        <div class="creative-work-icon">
                                            <img src="{{asset('front/assets/img/home-04/brand/brand-1-2.png')}}" alt="">
                                        </div>
                                        <div class="creative-work-content">
                                            <p>{{ __('Top 100 Global Companies') }} <br> {{ __('on Clutch') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="creative-work-item text-center mb-30 tp_fade_anim" data-delay=".5">
                                        <div class="creative-work-icon">
                                            <img src="{{asset('front/assets/img/home-04/brand/brand-1-3.png')}}" alt="">
                                        </div>
                                        <div class="creative-work-content">
                                            <p>{{ __('5 Stars Rating on') }} <br> {{ __('GoodFirms') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="creative-work-item text-center mb-30 tp_fade_anim" data-delay=".6">
                                        <div class="creative-work-icon">
                                            <img src="{{asset('front/assets/img/home-04/brand/brand-1-4.png')}}" alt="">
                                        </div>
                                        <div class="creative-work-content">
                                            <p>{{ __('100% Job Success on') }} <br> {{ __('Upwork') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- brand area end -->

                <!-- blog area start -->
                <div class="creative-blog-area creative-blog-style-2 pt-120 pb-80">
                    <div class="container container-1580">
                        <div class="creative-blog-title-wrap mb-60">
                            <div class="row align-items-end">
                                <div class="col-xl-3">
                                    <div class="creative-blog-subtitle-box">
                                        <span class="tp-section-subtitle mb-20 fs-17 pre-circle">{{ __('Featured Works') }}</span>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <div class="creative-blog-title-box">
                                        <h4 class="tp-section-title fs-44">{{ __('Newest trends and') }} <br> {{ __('insights from our team.') }}</h4>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="creative-blog-top-content text-lg-end">
                                        <a href="{{ route('blog.index') }}" class="tp-btn-black btn-green-light-bg pr-15">
                                            <span class="tp-btn-black-filter-blur">
                                                <svg width="0" height="0">
                                                    <defs>
                                                        <filter id="buttonFilter8">
                                                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                            <feComposite in="SourceGraphic" in2="buttonFilter8" operator="atop"></feComposite>
                                                            <feBlend in="SourceGraphic" in2="buttonFilter8"></feBlend>
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter8)">
                                                <span class="tp-btn-black-text">{{ __('See all Articles') }}</span>
                                                <span class="tp-btn-black-circle">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="creative-blog-item mb-40">
                                    <div class="creative-blog-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('front/assets/img/home-04/blog/blog-1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="creative-blog-meta">
                                        <span>{{ __('Experience') }}</span>
                                        <span>{{ __('May 15, 2025') }}</span>
                                    </div>
                                    <h4 class="creative-blog-title-sm">
                                        <a class="tp-line-white" href="blog-details.html">{{ __('How to build work culture for') }} <br> {{ __('young office?') }}</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="creative-blog-item mb-40">
                                    <div class="creative-blog-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('front/assets/img/home-04/blog/blog-2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="creative-blog-meta">
                                        <span>{{ __('Experience') }}</span>
                                        <span>{{ __('May 15, 2025') }}</span>
                                    </div>
                                    <h4 class="creative-blog-title-sm">
                                        <a class="tp-line-white" href="blog-details.html">{{ __('Thriving Work Culture for Young') }} <br> {{ __('Professionals') }}</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="creative-blog-item mb-40">
                                    <div class="creative-blog-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('front/assets/img/home-04/blog/blog-3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="creative-blog-meta">
                                        <span>{{ __('Experience') }}</span>
                                        <span>{{ __('May 15, 2025') }}</span>
                                    </div>
                                    <h4 class="creative-blog-title-sm">
                                        <a class="tp-line-white" href="blog-details.html">{{ __('Fostering Innovation in Young') }} <br> {{ __('Offices') }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- blog area end -->

            </main>

@endsection
