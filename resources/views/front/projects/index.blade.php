@extends('front.layout.app')

@section('content')

    <main>

        <!-- hero area start -->
        <div class="tp-hero-2-wrapper">
            <div class="tp-about-us-area include-bg pt-180 pb-150" data-background="{{ $pageSettings->hero_background_image ? asset('storage/' . $pageSettings->hero_background_image) : asset('front/assets/img/home-02/hero/hero-bg.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tp-hero-2-content text-center mb-25">
                                        <span class="tp-hero-2-subtitle tp_fade_anim" data-delay=".3">
                                            {!! $pageSettings->getTranslatedHeroSubtitle() !!}
                                        </span>
                                <h1 class="tp-hero-2-title about-us tp_fade_anim text-scale-anim" data-delay=".5">{{ $pageSettings->getTranslatedHeroTitle() }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tp-hero-2-avater-box d-flex align-items-center justify-content-center justify-content-md-start tp_fade_anim" data-delay=".7" data-on-scroll="3">
                                <div class="tp-hero-2-avater">
                                    @if($pageSettings->avatar_image)
                                        <img src="{{ asset('storage/' . $pageSettings->avatar_image) }}" alt="">
                                    @else
                                        <img src="{{asset('front/assets/img/home-02/hero/avater.png') }}" alt="">
                                    @endif
                                </div>
                                <div class="tp-hero-2-avater-content">
                                    <h4>{{ $pageSettings->avatar_number ?? '2500+' }}</h4>
                                    <span>{{ $pageSettings->getTranslatedAvatarText() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tp-hero-2-btn-box text-center text-md-end tp_fade_anim" data-delay=".7" data-on-scroll="3">
                                <a class="tp-btn-border" href="{{ $pageSettings->button_url ?? '#' }}">
                                    {{ $pageSettings->getTranslatedButtonText() }}
                                    <span>
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9.99999H15.2222M8.11121 1.11108L17.0001 9.99997L8.11121 18.8889" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->


        <!-- PORTFOLIO SHOWCASE -->
        <div class="des-portfolio-area">
            <div class="container container-1750">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="showcase-portfolio-wrap pt-130 pb-60">
                            @forelse($projects as $project)
                                <div class="des-portfolio-item showcase-portfolio-panel p-relative not-hide-cursor mb-30" data-cursor="View<br>Demo">
                                    <a class="cursor-hide" href="{{ route('projects.show', $project->id) }}">
                                        <div class="des-portfolio-thumb p-relative">
                                            @if($project->image)
                                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->getTranslatedTitle() }}">
                                            @else
                                                <img src="{{ asset('front/assets/img/home-02/portfolio/portfolio-1.jpg') }}" alt="{{ $project->getTranslatedTitle() }}">
                                            @endif
                                        </div>
                                        <div class="des-portfolio-category">
                                            @if($project->category)
                                                <span>{{ $project->getTranslatedCategory() }}</span>
                                            @endif
                                            @if($project->tags && count($project->getTranslatedTags()) > 0)
                                                @foreach(array_slice($project->getTranslatedTags(), 0, 1) as $tag)
                                                    <span>{{ $tag }}</span>
                                                @endforeach
                                            @endif
                                        </div>
                                        @if($project->year)
                                            <div class="des-portfolio-category portfolio-meta">
                                                <span>{{ $project->year }}</span>
                                            </div>
                                        @endif
                                        <div class="des-portfolio-content">
                                            <h2 class="des-portfolio-title">{{ $project->getTranslatedTitle() }}</h2>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div class="col-12 text-center py-10">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="fa-solid fa-folder-open fs-3x text-gray-400 mb-4"></i>
                                        <span class="text-gray-600 fs-4 fw-bold mb-2">لا توجد مشاريع</span>
                                        <span class="text-muted fs-6">لم يتم إضافة أي مشاريع بعد</span>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                @if(method_exists($projects, 'hasPages') && $projects->hasPages())
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center pt-5">
                                {{ $projects->links() }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!--  PORTFOLIO SHOWCASE -->

    </main>

@endsection
