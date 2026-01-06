@extends('front.layout.app')

@section('content')
    <main>

        <!-- portfolio details 3 area start -->
        <div class="tp-pd-3-hero-area">
            <div class="tp-pd-3-hero-style">
                <div class="container-fluid">
                    <div class="des-portfolio-item p-relative mb-30">
                        <div class="des-portfolio-thumb anim-zoomin-wrap p-relative">
                            <img class="w-100 anim-zoomin"
                                 src="{{ (!empty($project->web_details['hero_banner'])) ? asset('storage/' . $project->web_details['hero_banner']) : asset('storage/' . $project->image) }}"
                                 alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                        </div>
                        @if(!empty($project->web_details['subtitle'][app()->getLocale()]) || !empty($project->web_details['subtitle']['en']))
                        <div class="des-portfolio-category d-none d-lg-block">
                            <span>{{ $project->web_details['subtitle'][app()->getLocale()] ?? ($project->web_details['subtitle']['en'] ?? '') }}</span>
                        </div>
                        @endif
                        @if($project->year)
                        <div class="des-portfolio-category portfolio-meta d-none d-lg-block">
                            <span>{{ $project->year }}</span>
                        </div>
                        @endif
                        <div class="des-portfolio-content">
                            <h2 class="des-portfolio-title tp-text-revel-anim">
                                <a href="#">{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio details 3 area end -->

        <!-- portfolio details 3 overview-->
        <div class="tp-pd-3-overview-area pt-120 pb-95">
            <div class="container container-1230">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-pd-3-overview-left tp_fade_anim" data-delay=".3">
                            @if(!empty($project->web_details['subtitle'][app()->getLocale()]) || !empty($project->web_details['subtitle']['en']))
                            <span class="tp-pd-3-subtitle">{{ $project->web_details['subtitle'][app()->getLocale()] ?? ($project->web_details['subtitle']['en'] ?? '') }}</span>
                            @endif
                            <h4 class="tp-pd-3-title">{{ __('Project Overview') }}</h4>
                            @if(!empty($project->web_details['website_url']))
                            <a class="tp-btn-border" href="{{ $project->web_details['website_url'] }}" target="_blank">
                                {{ __('Visit Site') }}
                                <span>
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.99999H15.2222M8.11121 1.11108L17.0001 9.99997L8.11121 18.8889" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-pd-3-overview-right">
                            @if(!empty($project->web_details['overview'][app()->getLocale()]) || !empty($project->web_details['overview']['en']))
                            <div class="tp-pd-3-overview-text">
                                <p>{{ $project->web_details['overview'][app()->getLocale()] ?? ($project->web_details['overview']['en'] ?? '') }}</p>
                            </div>
                            @endif
                            <div class="row">
                                @if($project->client)
                                <div class="col-xl-6">
                                    <div class="tp-pd-3-overview-info mb-40">
                                        <span>{{ __('Client') }}</span>
                                        <h4>{{ $project->client }}</h4>
                                    </div>
                                </div>
                                @endif
                                @if(!empty($project->web_details['service'][app()->getLocale()]) || !empty($project->web_details['service']['en']))
                                <div class="col-xl-6">
                                    <div class="tp-pd-3-overview-info mb-40">
                                        <span>{{ __('Service') }}</span>
                                        <h4>{{ $project->web_details['service'][app()->getLocale()] ?? ($project->web_details['service']['en'] ?? '') }}</h4>
                                    </div>
                                </div>
                                @endif
                                <div class="col-xl-6">
                                    <div class="tp-pd-3-overview-info mb-40">
                                        <span>{{ __('Category') }}</span>
                                        <h4>{{ $project->category[app()->getLocale()] ?? $project->category['en'] }}</h4>
                                    </div>
                                </div>
                                @if($project->year)
                                <div class="col-xl-6">
                                    <div class="tp-pd-3-overview-info mb-40">
                                        <span>{{ __('Date') }}</span>
                                        <h4>{{ $project->year }}</h4>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio details 3 overview-->

        <!-- portfolio details 3 gallery-->
        @if(!empty($project->web_details['gallery_images']))
        <div class="tp-pd-3-gallery-area">
            <div class="container container-1800">
                <div class="row gx-20">
                    @foreach($project->web_details['gallery_images'] as $index => $image)
                    <div class="col-lg-{{ count($project->web_details['gallery_images']) <= 3 ? '4' : '12' }}">
                        <div class="tp-pd-3-gallery-img {{ count($project->web_details['gallery_images']) <= 3 ? 'small-img' : 'height' }} mb-20">
                            <img data-speed=".8" src="{{ asset('storage/' . $image) }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                        </div>
                    </div>
                    @if(($index + 1) % 3 == 0 && $index + 1 < count($project->web_details['gallery_images']))
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <!-- portfolio details 3 gallery-->

        <!-- portfolio details 3 portfolio-->
        <div class="tp-pd-3-portfolio-area pt-200 pb-60">
            <div class="container container-1200">
                @if(!empty($project->web_details['challenge'][app()->getLocale()]) || !empty($project->web_details['challenge']['en']) || !empty($project->web_details['challenge_image']))
                <div class="tp-pd-3-portfolio-item-wrap">
                    <div class="tp-pd-3-portfolio-item mb-120">
                        <div class="row">
                            <div class="col-lg-6">
                                @if(!empty($project->web_details['challenge_image']))
                                <div class="tp-pd-3-portfolio-thumb">
                                    <img class="w-100" src="{{ asset('storage/' . $project->web_details['challenge_image']) }}" alt="{{ __('The Challenge') }}">
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <div class="tp-pd-3-portfolio-content tp-pd-3-content-pin mt-20 {{ !empty($project->web_details['challenge_image']) ? 'ml-40' : '' }}">
                                    @if(!empty($project->web_details['subtitle'][app()->getLocale()]) || !empty($project->web_details['subtitle']['en']))
                                    <span class="tp-pd-3-subtitle">{{ $project->web_details['subtitle'][app()->getLocale()] ?? ($project->web_details['subtitle']['en'] ?? '') }}</span>
                                    @endif
                                    <h4 class="tp-pd-3-title">{{ __('The Challenge') }}</h4>
                                    <div class="tp-pd-3-overview-text">
                                        <p>{{ $project->web_details['challenge'][app()->getLocale()] ?? ($project->web_details['challenge']['en'] ?? '') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if(!empty($project->web_details['solution'][app()->getLocale()]) || !empty($project->web_details['solution']['en']) || !empty($project->web_details['solution_image']))
                <div class="tp-pd-3-portfolio-item-wrap pt-120">
                    <div class="tp-pd-3-portfolio-item mb-120">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tp-pd-3-portfolio-content tp-pd-3-content-pin mt-20 {{ !empty($project->web_details['solution_image']) ? 'mr-40' : '' }}">
                                    @if(!empty($project->web_details['subtitle'][app()->getLocale()]) || !empty($project->web_details['subtitle']['en']))
                                    <span class="tp-pd-3-subtitle">{{ $project->web_details['subtitle'][app()->getLocale()] ?? ($project->web_details['subtitle']['en'] ?? '') }}</span>
                                    @endif
                                    <h4 class="tp-pd-3-title">{{ __('The Solution') }}</h4>
                                    <div class="tp-pd-3-overview-text">
                                        <p>{{ $project->web_details['solution'][app()->getLocale()] ?? ($project->web_details['solution']['en'] ?? '') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                @if(!empty($project->web_details['solution_image']))
                                <div class="tp-pd-3-portfolio-thumb">
                                    <img class="w-100" src="{{ asset('storage/' . $project->web_details['solution_image']) }}" alt="{{ __('The Solution') }}">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <!-- portfolio details 3 portfolio-->

        <!-- portfolio details 3 gallery-->
        @if(!empty($project->web_details['additional_gallery']))
        <div class="tp-pd-3-gallery-area">
            <div class="container-fluid">
                <div class="row gx-20">
                    @foreach($project->web_details['additional_gallery'] as $index => $image)
                    @if($index < 2)
                    <div class="col-lg-6">
                        <div class="tp-pd-3-gallery-img medium-img mb-20">
                            <img data-speed="{{ $index == 0 ? '.8' : '1.1' }}" src="{{ asset('storage/' . $image) }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                        </div>
                    </div>
                    @else
                    <div class="col-lg-12">
                        <div class="tp-pd-3-gallery-img height mb-20">
                            <img data-speed=".8" src="{{ asset('storage/' . $image) }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                        </div>
                    </div>
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <!-- portfolio details 3 gallery-->

        <!-- portfolio details 3 navigation-->
        @if(isset($relatedProjects) && $relatedProjects->count() > 0)
        <div class="tp-pd-3-navigation-area pt-100">
            <div class="container-fluid">
                <div class="row gx-15 justify-content-center">
                    <div class="col-xl-6">
                        <div class="tp-pd-3-navigation-top text-center pb-100">
                            <h2 class="tp-pd-3-navigation-title">{{ __('next projects') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row gx-20">
                    @foreach($relatedProjects->take(2) as $relatedProject)
                    <div class="col-lg-6">
                        <div class="tp-pd-3-navigation-thumb-wrap tp-pd-3-navigation-thumb-overlay p-relative not-hide-cursor mb-20" data-cursor="View<br>Demo">
                            <a class="cursor-hide" href="{{ route('projects.show', $relatedProject->id) }}">
                                <div class="tp-pd-3-navigation-thumb">
                                    <img src="{{ asset('storage/' . $relatedProject->image) }}" alt="{{ $relatedProject->title[app()->getLocale()] ?? $relatedProject->title['en'] }}">
                                </div>
                                <div class="des-portfolio-category d-flex align-items-center">
                                    <div class="fix mr-10">
                                        <span>{{ $relatedProject->category[app()->getLocale()] ?? $relatedProject->category['en'] }}</span>
                                    </div>
                                </div>
                                @if($relatedProject->year)
                                <div class="des-portfolio-category portfolio-meta">
                                    <div class="fix">
                                        <span>{{ $relatedProject->year }}</span>
                                    </div>
                                </div>
                                @endif
                                <div class="tp-pd-3-navigation-content fix">
                                    <h4 class="tp-pd-3-navigation-title-sm">{{ $relatedProject->title[app()->getLocale()] ?? $relatedProject->title['en'] }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <!-- portfolio details 3 navigation-->

    </main>


@endsection
