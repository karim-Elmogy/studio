@extends('front.layout.app')

@section('content')
    <main>

        <!-- hero area start -->
        <div class="studio-hero-area p-relative fix pb-80">
            <div class="content z-index-2 d-none d-md-block">

                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/1.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/2.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/3.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/4.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/5.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/6.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/7.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/9.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/10.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/11.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/12.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/13.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/14.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/15.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/16.webp') }}')"></div>
                </div>
                <div class="content__img">
                    <div class="content__img-inner" style="background-image:url('{{ asset('front/assets/img/17.webp') }}')"></div>
                </div>

            </div>

            <div class="container container-1830">
                <div class="studio-hero-bg">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="studio-hero-info z-index-5 d-flex justify-content-md-between justify-content-center align-items-center">
                                <a href="mailto:info@agntix.studio">info@agntix.studio</a>
                                <span>{{ __('Motion design') }} <br> {{ __('Studio') }}</span>
                                <a href="mailto:info@agntix.studio">info@agntix.studio</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="studio-hero-content text-center tp-text-perspective"
                                 data-delay=".5"
                                 data-fade-from="top"
                                 data-ease="bounce">
                                <h2 class="studio-hero-title fs-400">{{ __('Service') }}</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- hero area end -->



        <!-- banner area start -->
        <div class="studio-hero-banner-area pb-100">
            <div class="studio-hero-banner mb-20">
                <img class="w-100" data-speed=".8" src="{{asset('front/assets/img/home-06/banner.jpg')}}" alt="">
            </div>
            <div class="container container-1830">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="studio-hero-banner-text d-flex justify-content-start justify-content-md-between align-items-center">
                            <span>{{ __('A') }}</span>
                            <span>{{ __('collective') }}</span>
                            <span>{{ __('of') }}</span>
                            <span>{{ __('the') }}</span>
                            <span>{{ __('best') }}</span>
                            <span>{{ __('independent') }}</span>
                            <span>{{ __('premium') }}</span>
                            <span>{{ __('publishers') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner area end -->


        <!-- inner service area -->
        <div class="tp-inner-service-area pt-120 pb-120">
            <div class="container container-1830">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="inner-service-1-left">
                            <span>{{ __('Services') }}</span>
                            <ul>
                                <li><span>1. {{ __('Branding') }}</span></li>
                                <li><span>2. {{ __('Digital Design') }}</span></li>
                                <li><span>3. {{ __('Marketing Assets') }}</span></li>
                                <li><span>4. {{ __('Development') }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tp-inner-service-item mb-200">
                            <div class="inner-service-1-right">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="inner-service-1-number">
                                            <h1 class="purecounter" data-purecounter-duration=".2" data-purecounter-end="1">0</h1>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="inner-service-1-text">
                                            <span>{{ __('Branding') }}</span>
                                            <p>
                                                {{ __('Strong branding sets your startup apart, signaling quality and professionalism. It builds trust with your audience, making you stand out in a crowded') }} <br> {{ __('market') }}.
                                            </p>
                                        </div>
                                        <div class="inner-service-1-category">
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Brand Naming') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Creative Direction') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Brand Strategy') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Graphic charter') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Logo Design') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-10">
                                <div class="inner-service-1-thumb-text">
                                    <span>({{ __('Our recent Digital work') }})</span>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inner-service-1-thumb tp--hover-item">
                                        <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                            <img class="w-100" src="{{asset('front/assets/img/inner-service/service-3.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inner-service-1-thumb tp--hover-item">
                                        <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                            <img class="w-100" src="{{asset('front/assets/img/inner-service/service-4.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-inner-service-item mb-200">
                            <div class="inner-service-1-right">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="inner-service-1-number">
                                            <h1 class="purecounter" data-purecounter-duration=".2" data-purecounter-end="2">0</h1>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="inner-service-1-text">
                                            <span>{{ __('Digital Design') }}</span>
                                            <p>
                                                {{ __('A process of assumption & validation with a goal of taking into account all the necessary variables, which are always custom and are to be uncovered') }}
                                            </p>
                                            <p>{{ __('Every business has digital potential, and we are here to help you leverage that potential.') }}</p>
                                        </div>
                                        <div class="inner-service-1-category">
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Wireframe') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('UI design') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Prototyping') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Design system') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('UI & UX audit') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Design System') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Interactive Experiences') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-10">
                                <div class="inner-service-1-thumb-text">
                                    <span>({{ __('Our recent Digital work') }})</span>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inner-service-1-thumb tp--hover-item">
                                        <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                            <img class="w-100" src="{{asset('front/assets/img/inner-service/service-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inner-service-1-thumb tp--hover-item">
                                        <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                            <img class="w-100" src="{{asset('front/assets/img/inner-service/service-2.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-inner-service-item mb-200">
                            <div class="inner-service-1-right">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="inner-service-1-number">
                                            <h1 class="purecounter" data-purecounter-duration=".2" data-purecounter-end="3">0</h1>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="inner-service-1-text">
                                            <span>{{ __('Marketing Assets') }}</span>
                                            <p>
                                                {{ __("Marketing strategy is proudly responsible for the half of a campaign's success, another half relies solely on its implementation.") }}
                                            </p>
                                            <p>{{ __('We focus on creating visuals that communicate your value and engage your audience.') }}</p>
                                        </div>
                                        <div class="inner-service-1-category">
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Animated logos') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Product Illustrations') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Launch Videos') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Illustrations') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Visual Effects') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Illustration 3D') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-10">
                                <div class="inner-service-1-thumb-text">
                                    <span>({{ __('Our recent Digital work') }})</span>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inner-service-1-thumb tp--hover-item">
                                        <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                            <img class="w-100" src="{{asset('front/assets/img/inner-service/service-5.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inner-service-1-thumb tp--hover-item">
                                        <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                            <img class="w-100" src="{{asset('front/assets/img/inner-service/service-6.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-inner-service-item">
                            <div class="inner-service-1-right">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="inner-service-1-number">
                                            <h1 class="purecounter" data-purecounter-duration=".2" data-purecounter-end="4">0</h1>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="inner-service-1-text">
                                            <span>{{ __('Development') }}</span>
                                            <p>
                                                {{ __('Efficiency and scalability. The two factors which any decision gets filtered out with - programming language, framework, library, each line of code, and server side') }}
                                            </p>
                                        </div>
                                        <div class="inner-service-1-category">
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Integration') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Front-end') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Back-end') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <a href="#" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                <span>{{ __('Webflow') }}</span>
                                                <i>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-10">
                                <div class="inner-service-1-thumb-text">
                                    <span>({{ __('Our recent Digital work') }})</span>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inner-service-1-thumb tp--hover-item">
                                        <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                            <img class="w-100" src="{{asset('front/assets/img/inner-service/service-7.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inner-service-1-thumb tp--hover-item">
                                        <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                            <img class="w-100" src="{{asset('front/assets/img/inner-service/service-8.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- inner service area -->


        <!-- inner text slider area -->
        <div class="ar-about-us-4-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ar-about-us-4-text-warp">
                            <div class="swiper-container tp-brand-active">
                                <div class="swiper-wrapper slide-transtion">
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('HAVE A GREAT PROJECT?') }}
                                        </h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('HAVE A GREAT PROJECT?') }}
                                        </h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('HAVE A GREAT PROJECT?') }}
                                        </h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('HAVE A GREAT PROJECT?') }}
                                        </h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('HAVE A GREAT PROJECT?') }}
                                        </h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('About Us') }}
                                        </h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('HAVE A GREAT PROJECT?') }}
                                        </h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('HAVE A GREAT PROJECT?') }}
                                        </h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('HAVE A GREAT PROJECT?') }}
                                        </h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2 class="ar-about-us-4-text-title">
                                            {{ __('About Us') }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- inner text slider area -->

    </main>
@endsection
