
@extends('front.layout.app')

@section('content')

    <main>

        <!-- hero area start -->
        <div class="tp-contact-us-ptb p-relative">
            <div class="tp-career-shape-1">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="123" height="130" viewBox="0 0 123 130" fill="none">
                                <path d="M58.2803 1.15449C63.3023 14.3017 71.049 54.3533 48.1082 67.0973C36.1831 73.4283 11.7107 77.3064 2.37778 43.9355C-1.14293 31.3468 9.61622 20.8908 32.0893 28.8395C45.055 33.4255 76.4207 44.0467 90.5787 70.0771C98.0511 83.8154 104.166 111.84 99.1745 129.671M99.1745 129.671C100.942 121.014 108.128 104.495 122.737 107.673M99.1745 129.671C100.181 123.978 97.0522 110.014 76.485 99.698M75.3644 33.2431C80.479 35.6688 96.6446 46.4742 101.81 64.2891" stroke="white" stroke-width="1.5" />
                            </svg></span>
            </div>
            <div class="container container-1230">
                <div class="ar-about-us-4-hero-ptb">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="tp-contact-us-heading tp_fade_anim" data-delay=".3">
                                <div class="ar-about-us-4-title-box d-flex align-items-center mb-20">
                                    <span class="tp-section-subtitle pre text-white tp_fade_anim">{{ $pageSettings->getTranslatedHeroSubtitle() }}</span>
                                    <div class="ar-about-us-4-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9" fill="none">
                                            <rect y="4" width="80" height="1" fill="#fff" />
                                            <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="tp-career-title text-white pb-30">{{ $pageSettings->getTranslatedHeroTitle() }}
                                    <span class="shape-1"><img src="{{asset('front/assets/img/about-us/about-us-4/about-us-4-shape-2.png')}}" alt=""></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <div class="tp-faq-text tp_fade_anim">
                                <p class="text-white m-0">{{ $pageSettings->getTranslatedHeroDescription() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-contact-us-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tp-contact-us-text smooth">
                                <a href="#down">
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewBox="0 0 15 21" fill="none">
                                            <rect x="6.25781" width="1.5" height="21" fill="#F5F7F5" />
                                            <path d="M14.1641 13.6257C10.28 13.6257 7.13714 16.9239 7.13714 21" stroke="#F5F7F5" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path d="M7.13672 21C7.13672 16.9239 3.99384 13.6257 0.109797 13.6257" stroke="#F5F7F5" stroke-width="1.5" stroke-miterlimit="10" />
                                        </svg> {{ $pageSettings->getTranslatedScrollText() }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->


        <!-- faq area start -->
        <div class="app-faq-area p-relative pb-120" >
            <div class="container container-1230">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="ai-faq-accordion-dark-wrap app-faq-wrap faq-inner-style">
                            <div class="ai-faq-accordion-wrap">
                                <div class="accordion" id="accordionExample1" style="background-color: #0a0a0a">
                                    @forelse($faqs as $index => $faq)
                                    <div class="accordion-items">
                                        <h2 class="accordion-header">
                                            <button class="accordion-buttons{{ $index === 0 ? '' : ' collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $faq->id }}">
                                                {{ $faq->getTranslatedQuestion() }}
                                                <span class="accordion-icon"></span>
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse{{ $index === 0 ? ' show' : '' }}" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <p>{!! nl2br(e($faq->getTranslatedAnswer())) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="text-center text-white py-5">
                                        <p>{{ __('No FAQs available at the moment.') }}</p>
                                    </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end -->

        <!-- cta area start -->
        <div class="tp-cta-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-cta-bg" data-background="{{asset('front/assets/img/cta/cta-bg.jpg')}}">
                            <div class="tp-cta-content text-center">
                                <h3 class="tp-cta-title">{{ $pageSettings->getTranslatedCtaTitle() }}</h3>
                                <p>{{ $pageSettings->getTranslatedCtaDescription() }}</p>
                                <div class="tp-cta-btn">
                                    <a class="tp-btn-white" href="{{ route('contact.index') }}">
                                        <span>
                                            <span class="text-1">{{ __('Contact Us') }}</span>
                                            <span class="text-2">{{ __('Contact Us') }}</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta area end -->

    </main>

@endsection
