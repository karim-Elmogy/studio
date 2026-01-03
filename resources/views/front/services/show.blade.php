@extends('front.layout.app')

@section('content')
    <main>

        <!-- hero area start -->
        <div class="ar-hero-area p-relative pt-190 pb-100 include-bg" data-background="{{ $service->image ? asset('storage/' . $service->image) : asset('front/assets/img/blog/blog-masonry/blog-bradcum-bg.png') }}">
            <div class="tp-career-shape-1">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 84 84" fill="none">
                                <path d="M36.3761 0.5993C40.3065 8.98556 47.3237 34.898 32.8824 44.3691C25.3614 49.0997 9.4871 52.826 1.7513 31.3747C-1.16691 23.2826 5.38982 15.9009 20.5227 20.0332C29.2536 22.4173 50.3517 27.8744 60.9 44.2751C66.4672 52.9311 71.833 71.0287 69.4175 82.9721M69.4175 82.9721C70.1596 77.2054 74.079 66.0171 83.8204 67.3978M69.4175 82.9721C69.8033 79.1875 67.076 70.1737 53.0797 64.3958M49.1371 20.8349C52.611 22.1801 63.742 28.4916 67.9921 39.9344" stroke="#ffff" stroke-width="1.5" />
                            </svg></span>
            </div>
            <div class="container container-1230">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="ar-hero-title-box service-5-heading tp_fade_anim mb-80" data-delay=".3">
                            <div class="ar-about-us-4-title-box shape-color d-flex align-items-center mb-20">
                                <span class="tp-section-subtitle pre tp_fade_anim">{{ $service->getTranslatedTitle() }}</span>
                                <div class="ar-about-us-4-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9" fill="none">
                                        <rect y="4" width="80" height="1" fill="#fff" />
                                        <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tp-career-title">{{ $service->getTranslatedTitle() }} <span class="shape-1"><img src="{{asset('front/assets/img/portfolio/portfolio-shape.png')}}" alt=""></span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <div class="tp-service-5-text tp_fade_anim" data-delay=".5">
                            <div>{!! nl2br(e($service->getTranslatedDescription())) !!}</div>
                        </div>
                        @if($service->getTranslatedFeatures())
                            <div class="tp-service-5-list tp_fade_anim " data-delay=".7">
                                <ul>
                                    @foreach($service->getTranslatedFeatures() as $feature)
                                        <li>+ {{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->


        <!-- banner area start -->
        @if($service->image)
        <div class="tp-service-4-banner-area p-relative">
            <div class="ar-banner-wrap ar-about-us-4">
                <img class="w-100" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->getTranslatedTitle() }}" data-speed=".8">
            </div>
        </div>
        @endif
        <!-- banner area end -->


        <!-- service process area start -->
        <div class="tp-service-4-process-ptb pt-140 pb-140">
            <div class="container container-1230">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ar-hero-title-box tp_fade_anim" data-delay=".3">
                            <div class="ar-about-us-4-title-box shape-color d-flex align-items-center mb-20">
                                <span class="tp-section-subtitle pre tp_fade_anim">{{ $service->getTranslatedTitle() }}</span>
                                <div class="ar-about-us-4-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9" fill="none">
                                        <rect y="4" width="80" height="1" fill="#fff" />
                                        <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tp-career-title fs-60 pb-40">{{ __('We think out of the box and follow the working process') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tp-service-4-process-wrap">
                            <div class="tp-service-4-process-list">
                                <span>01</span>
                                <p>{{ __('Thinking and research') }}</p>
                            </div>
                            <div class="tp-service-4-process-list">
                                <span>02</span>
                                <p>{{ __('Discovering the problem') }}</p>
                            </div>
                            <div class="tp-service-4-process-list">
                                <span>03</span>
                                <p>{{ __('Scratch, design, and wireframing') }}</p>
                            </div>
                            <div class="tp-service-4-process-list">
                                <span>04</span>
                                <p>{{ __('Implementation and solution') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-service-4-process-wrapper pl-70 p-relative">
                            <p class="pl-200 mb-50">{!! nl2br(e($service->getTranslatedDescription())) !!}</p>
                            @if($service->image)
                                <div class="tp-service-4-process-thumb fix">
                                    <div class="tp_img_reveal">
                                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->getTranslatedTitle() }}">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service process area end -->


        <!-- benefits area start -->
        <div class="tp-benefits-ptb pb-100">
            <div class="container container-1230">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-benefits-heading tp_fade_anim" data-delay=".3">
                            <h3 class="tp-career-title fs-60 pb-10">{{ __('Our Benefits') }}</h3>
                            <p>{{ __('You need the best person for the job, wherever they\'re located. We provide support, payroll tax management, and compliance management for remote, multi-state, multi-location, and international employees. We believe that the human essential to start any successful project and that this where splendid emotion between the re-generated company.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- benefits area end -->


        <!-- features area start -->
        @if($service->image)
        <div class="tp-service-5-features-ptb p-relative">
            <div class="container container-1550">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-service-5-feature-wrap p-relative">
                            <div class="tp-service-5-feature-content">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                                <path d="M99 74.5858L76 97.5858V25V24H75H2.41421L25.4142 1H99V25V74.5858ZM30.1193 51L1 80.1193V51H30.1193ZM49 99H20.3031L49 70.3032V99Z" stroke="white" stroke-width="2" />
                                            </svg></span>
                                <h3 class="tp-service-5-feature-title">{{ __('We provide special offers for the best customers') }}</h3>
                            </div>
                            <img data-speed=".8" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->getTranslatedTitle() }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- features area end -->


        <!-- Related Services -->
        @if($relatedServices && $relatedServices->count() > 0)
        <div class="tp-service-5-price-ptb pt-200 pb-140">
            <div class="container container-1230">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-service-5-price-heading d-flex align-items-start tp_fade_anim pb-25">
                            <div class="ar-about-us-4-title-box shape-color d-flex align-items-center mb-20">
                                <span class="tp-section-subtitle pre">{{ __('Related Services') }}</span>
                                <div class="ar-about-us-4-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9" fill="none">
                                        <rect y="4" width="80" height="1" fill="#fff" />
                                        <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tp-career-title fs-60 pb-40">{{ __('Other Services') }}</h3>
                        </div>
                    </div>
                </div>
                @foreach($relatedServices as $relatedService)
                <div class="tp-service-5-price-item tp_fade_anim">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="tp-service-5-price-item-heading">
                                <h4 class="tp-service-5-price-item-title">{{ $relatedService->getTranslatedTitle() }}</h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tp-service-5-price-item-list">
                                @if($relatedService->getTranslatedFeatures())
                                    <ul>
                                        @foreach(array_slice($relatedService->getTranslatedFeatures(), 0, 3) as $feature)
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
                                                            <path d="M11 1L4.125 8L1 4.81818" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg></span>{{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="tp-service-5-price-item-head text-lg-end">
                                <a href="{{ route('services.show', $relatedService->id) }}" class="tp-btn-border">{{ __('View Details') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        <!-- Related Services end -->

    </main>
@endsection
