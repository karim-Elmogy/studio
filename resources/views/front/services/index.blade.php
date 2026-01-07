@extends('front.layout.app')

@section('content')
    <main>

        <!-- hero area start -->
        <div class="studio-hero-area p-relative fix pb-80">
            <div class="content z-index-2 d-none d-md-block">
                @php
                    $defaultImages = [
                        'front/assets/img/1.webp',
                        'front/assets/img/2.webp',
                        'front/assets/img/3.webp',
                        'front/assets/img/4.webp',
                        'front/assets/img/5.webp',
                        'front/assets/img/6.webp',
                        'front/assets/img/7.webp',
                        'front/assets/img/9.webp',
                        'front/assets/img/10.webp',
                        'front/assets/img/11.webp',
                        'front/assets/img/12.webp',
                        'front/assets/img/13.webp',
                        'front/assets/img/14.webp',
                        'front/assets/img/15.webp',
                        'front/assets/img/16.webp',
                        'front/assets/img/17.webp'
                    ];
                @endphp

                @for($i = 1; $i <= 16; $i++)
                    @php
                        $bgImage = $pageSettings->{"bg_image_{$i}"};
                        $imageUrl = $bgImage
                            ? asset('storage/' . $bgImage)
                            : asset($defaultImages[$i - 1]);
                    @endphp
                    <div class="content__img">
                        <div class="content__img-inner" style="background-image:url('{{ $imageUrl }}')"></div>
                    </div>
                @endfor

            </div>

            <div class="container container-1830">
                <div class="studio-hero-bg">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="studio-hero-info z-index-5 d-flex justify-content-md-between justify-content-center align-items-center">
                                <span>{{ $pageSettings->getTranslatedHeroInfoText() }}</span>
                                <span>{{ $pageSettings->getTranslatedHeroSubtitle() }}</span>
                                <a href="mailto:{{ $pageSettings->contact_email ?? 'info@agntix.studio' }}">{{ $pageSettings->contact_email ?? 'info@agntix.studio' }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="studio-hero-content text-center tp-text-perspective"
                                 data-delay=".5"
                                 data-fade-from="top"
                                 data-ease="bounce">
                                <h2 class="studio-hero-title fs-400">{{ $pageSettings->getTranslatedHeroTitle() }}</h2>
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
                <img class="w-100" data-speed=".8" src="{{ $pageSettings->banner_image ? asset('storage/' . $pageSettings->banner_image) : asset('front/assets/img/home-06/banner.jpg') }}" alt="">
            </div>
            <div class="container container-1830">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="studio-hero-banner-text d-flex justify-content-start justify-content-md-between align-items-center">
                            @foreach($pageSettings->getTranslatedBannerText() as $word)
                                <span>{{ $word }}</span>
                            @endforeach
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
                                @foreach($services as $index => $service)
                                    <li><span>{{ $index + 1 }}. {{ $service->getTranslatedTitle() }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        @foreach($services as $index => $service)
                            <div class="tp-inner-service-item {{ $loop->last ? '' : 'mb-200' }}">
                                <div class="inner-service-1-right">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="inner-service-1-number">
                                                <h1 class="purecounter" data-purecounter-duration=".2" data-purecounter-end="{{ $index + 1 }}">0</h1>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="inner-service-1-text">
                                                <span>{{ $service->getTranslatedTitle() }}</span>
                                                <div>{!! nl2br(e($service->getTranslatedDescription())) !!}</div>
                                            </div>
                                            @if($service->getTranslatedFeatures())
                                                <div class="inner-service-1-category">
                                                    @foreach($service->getTranslatedFeatures() as $feature)
                                                        <a href="{{ route('services.show', $service->id) }}" class="inner-service-1-category-item d-flex justify-content-between align-items-center">
                                                            <span>{{ $feature }}</span>
                                                            <i>
                                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </i>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if($service->image || $service->image_2)
                                    <div class="row gx-10">
                                        <div class="inner-service-1-thumb-text">
                                            <span>({{ $pageSettings->getTranslatedRecentWorkText() }})</span>
                                        </div>
                                        @if($service->image)
                                            <div class="col-xl-6">
                                                <div class="inner-service-1-thumb tp--hover-item">
                                                    <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                                        <img class="w-100" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->getTranslatedTitle() }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @if($service->image_2)
                                            <div class="col-xl-6">
                                                <div class="inner-service-1-thumb tp--hover-item">
                                                    <div class=" tp--hover-img" data-displacement="{{asset('front/assets/img/webgl/1.jpg')}}" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                                        <img class="w-100" src="{{ asset('storage/' . $service->image_2) }}" alt="{{ $service->getTranslatedTitle() }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        @endforeach
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
                                    @for($i = 0; $i < 10; $i++)
                                        <div class="swiper-slide">
                                            <h2 class="ar-about-us-4-text-title">
                                                {{ $pageSettings->getTranslatedSliderText() }}
                                            </h2>
                                        </div>
                                    @endfor
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
