@extends('front.layout.app')

@section('content')

    <style>
        .tp-pd-2-step-title {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -1.2px;
            width: 40%;
        }
        .tp-pd-2-step-item-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;

        }
        .tp-pd-2-step-item span {
            font-size: 15px;
            font-weight: 500;
            line-height: 24px;
            display: inline-block;

        }

        .tp-pd-2-thumb-item {
            overflow: hidden;
            height: 600px;
        }
        .tp-pd-2-thumb-item img {
            margin-top: -100px;
            width: 100%;
        }

    </style>
   <main>

                <div class="tp-pd-5-hero-black-anim p-relative fix" data-bg-color="#fff">
                    <div class="tp-pd-5-hero-black-overlay"></div>
                    <!-- portfolio details app hero -->
                    <div class="tp-pd-5-hero-ptb pt-200 pb-200 z-index-2">
                        <div class="container container-1230">
                            <div class="tp-pd-5-hero-top pb-120">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="tp-pd-5-hero-heading text-center tp_fade_anim" data-delay=".3">
                                            <h3 class="tp-pd-5-hero-title">{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}</h3>
                                            <p>
                                                {{ $project->description[app()->getLocale()] ?? $project->description['en'] }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tp-pd-2-bottom d-flex justify-content-between tp_fade_anim" data-delay=".5">
                                            @if($project->client)
                                            <div class="tp-pd-2-bottom-item text-center">
                                                <span>{{ __('Client') }}</span>
                                                <h6>{{ $project->client }}</h6>
                                            </div>
                                            @endif
                                            <div class="tp-pd-2-bottom-item text-center">
                                                <span>{{ __('Category') }}</span>
                                                <h6>{{ $project->category[app()->getLocale()] ?? $project->category['en'] }}</h6>
                                            </div>
                                            @if($project->year)
                                            <div class="tp-pd-2-bottom-item text-center">
                                                <span>{{ __('Date') }}</span>
                                                <h6>{{ $project->year }}</h6>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="tp-pd-5-hero-thumb text-center tp_fade_anim" data-delay=".7" data-fade-from="top" data-ease="bounce">
                                        <img data-speed=".9" src="{{ (!empty($project->mobile_details['hero_image'])) ? asset('storage/' . $project->mobile_details['hero_image']) : asset('front/assets/img/portfolio/portfolio-details-5/portfolio-details-thumb-1.png') }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio details app hero -->



                    <!-- portfolio details info start -->
                    <div class="tp-pd-5-hero-info-ptb pb-40 z-index-2">
                        <div class="container container-1230">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="tp-pd-5-hero-info-wrap">
                                        @if(!empty($project->mobile_details['problem'][app()->getLocale()]) || !empty($project->mobile_details['problem']['en']))
                                        <div class="tp-pd-5-hero-info-item pb-60 tp_fade_anim" data-delay=".3">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="tp-pd-5-hero-info-item-heading pb-20">
                                                        <h3 class="tp-pd-5-hero-info-item-title"><span>01</span>{{ __('Problem') }}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="tp-pd-5-hero-info-item-content pb-20">
                                                        <p>{{ $project->mobile_details['problem'][app()->getLocale()] ?? ($project->mobile_details['problem']['en'] ?? '') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @if(!empty($project->mobile_details['approach'][app()->getLocale()]) || !empty($project->mobile_details['approach']['en']))
                                        <div class="tp-pd-5-hero-info-item pb-60 tp_fade_anim" data-delay=".5">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="tp-pd-5-hero-info-item-heading pb-20">
                                                        <h3 class="tp-pd-5-hero-info-item-title"><span>02</span>{{ __('Approach') }}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="tp-pd-5-hero-info-item-content pb-20">
                                                        <p>{{ $project->mobile_details['approach'][app()->getLocale()] ?? ($project->mobile_details['approach']['en'] ?? '') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @if(!empty($project->mobile_details['solution'][app()->getLocale()]) || !empty($project->mobile_details['solution']['en']))
                                        <div class="tp-pd-5-hero-info-item pb-60 tp_fade_anim" data-delay=".7">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="tp-pd-5-hero-info-item-heading pb-20">
                                                        <h3 class="tp-pd-5-hero-info-item-title">
                                                            <span>03</span>{{ __('Solution') }}
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="tp-pd-5-hero-info-item-content pb-20">
                                                        <p>{{ $project->mobile_details['solution'][app()->getLocale()] ?? ($project->mobile_details['solution']['en'] ?? '') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio details info end -->
                </div>




















       <div class="tp-pd-5-hero-white-anim black-bg-7 p-relative fix">
                    <div class="tp-pd-5-hero-white-overlay"></div>

                    <!-- portfolio details mode start -->
                    @if(!empty($project->mobile_details['light_mode_images']))
                    <div class="tp-pd-5-light-ptb">
                        <div class="container container-1830">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tp-pd-5-light-heading text-center z-index-2 pb-70 tp_fade_anim" data-delay=".3">
                                        <h4 class="tp-pd-5-light-title">{{ $project->mobile_details['light_mode_title'][app()->getLocale()] ?? ($project->mobile_details['light_mode_title']['en'] ?? __('Light mode')) }}</h4>
                                    </div>
                                    <div class="tp-pd-5-light-slider-wrapper z-index-2">
                                        <div class="tp-pd-5-light-active swiper">
                                            <div class="swiper-wrapper">
                                                @foreach($project->mobile_details['light_mode_images'] as $image)
                                                <div class="swiper-slide">
                                                    <div class="tp-pd-5-light-slider-thumb">
                                                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- portfolio details mode end -->

                    <!-- portfolio details mockup start -->
                    @if(!empty($project->mobile_details['mobile_first_title'][app()->getLocale()]) || !empty($project->mobile_details['mobile_first_title']['en']) || !empty($project->mobile_details['mobile_first_mockup']))
                    <div class="tp-pd-5-mockup-ptb pt-120 pb-200">
                        <div class="container container-1230">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="tp-pd-5-mockup-wrap z-index-2">
                                        <div class="offset-lg-6 col-lg-6">
                                            <div class="tp-pd-5-mockup-heading tp_fade_anim" data-delay=".3">
                                                <h4 class="tp-pd-5-mockup-title">{{ $project->mobile_details['mobile_first_title'][app()->getLocale()] ?? ($project->mobile_details['mobile_first_title']['en'] ?? __('Mobile First')) }}</h4>
                                                <p>{{ $project->mobile_details['mobile_first_content'][app()->getLocale()] ?? ($project->mobile_details['mobile_first_content']['en'] ?? '') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @if(!empty($project->mobile_details['mobile_first_mockup']))
                                    <div class="tp-pd-5-mockup-thumb tp_fade_anim" data-delay=".7" data-fade-from="top" data-ease="bounce">
                                        <img data-speed=".9" src="{{ asset('storage/' . $project->mobile_details['mobile_first_mockup']) }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- portfolio details mockup end -->

                </div>


       <!-- portfolio details slider start -->
       @if(!empty($project->mobile_details['slider_images']))
           <div class="tp-pd-5-slider-ptb pb-120">
               <div class="container container-1830">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="tp-pd-5-light-slider-wrapper">
                               <div class="tp-pd-5-light-active swiper">
                                   <div class="swiper-wrapper">
                                       @foreach($project->mobile_details['slider_images'] as $image)
                                           <div class="swiper-slide">
                                               <div class="tp-pd-5-light-slider-thumb">
                                                   <img src="{{ asset('storage/' . $image) }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                                               </div>
                                           </div>
                                       @endforeach
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       @endif
       <!-- portfolio details slider end -->



       {{--       Portfolio Details Step Section --}}
       @if(!empty($project->mobile_details['portfolio_step_heading'][app()->getLocale()]) || !empty($project->mobile_details['portfolio_step_heading']['en']) || !empty($project->mobile_details['step_1']))
           <!-- portfolio details step start -->
           <div class="tp-pd-2-step-ptb pb-70 py-5">
               <div class="container container-1230">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="tp-pd-2-step-heading pb-60 tp_fade_anim" data-delay=".3">
                               <h3 class="tp-pd-2-step-title">
                                   {!! nl2br(e($project->mobile_details['portfolio_step_heading'][app()->getLocale()] ?? ($project->mobile_details['portfolio_step_heading']['en'] ?? ''))) !!}
                               </h3>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       @if(!empty($project->mobile_details['step_1']['title'][app()->getLocale()]) || !empty($project->mobile_details['step_1']['title']['en']))
                           <div class="col-lg-4 col-md-6">
                               <div class="tp-pd-2-step-item mb-30">
                                   <h4 class="tp-pd-2-step-item-title">01. {{ $project->mobile_details['step_1']['title'][app()->getLocale()] ?? ($project->mobile_details['step_1']['title']['en'] ?? '') }}</h4>
                                   <span>{!! nl2br(e($project->mobile_details['step_1']['description'][app()->getLocale()] ?? ($project->mobile_details['step_1']['description']['en'] ?? ''))) !!}</span>
                               </div>
                           </div>
                       @endif
                       @if(!empty($project->mobile_details['step_2']['title'][app()->getLocale()]) || !empty($project->mobile_details['step_2']['title']['en']))
                           <div class="col-lg-4 col-md-6">
                               <div class="tp-pd-2-step-item mb-30">
                                   <h4 class="tp-pd-2-step-item-title">02. {{ $project->mobile_details['step_2']['title'][app()->getLocale()] ?? ($project->mobile_details['step_2']['title']['en'] ?? '') }}</h4>
                                   <span>{!! nl2br(e($project->mobile_details['step_2']['description'][app()->getLocale()] ?? ($project->mobile_details['step_2']['description']['en'] ?? ''))) !!}</span>
                               </div>
                           </div>
                       @endif
                       @if(!empty($project->mobile_details['step_3']['title'][app()->getLocale()]) || !empty($project->mobile_details['step_3']['title']['en']))
                           <div class="col-lg-4 col-md-6">
                               <div class="tp-pd-2-step-item mb-30">
                                   <h4 class="tp-pd-2-step-item-title">03. {{ $project->mobile_details['step_3']['title'][app()->getLocale()] ?? ($project->mobile_details['step_3']['title']['en'] ?? '') }}</h4>
                                   <span>{!! nl2br(e($project->mobile_details['step_3']['description'][app()->getLocale()] ?? ($project->mobile_details['step_3']['description']['en'] ?? ''))) !!}</span>
                               </div>
                           </div>
                       @endif
                   </div>
               </div>
           </div>
           <!-- portfolio details step end -->
       @endif


       {{-- Portfolio Details Thumb Section --}}
       @if(!empty($project->mobile_details['portfolio_thumb_images']))
           <!-- portfolio details thumb start -->
           <div class="tp-pd-2-thumb-ptb pb-100">
               <div class="container container-1230">
                   <div class="row gx-20">
                       @foreach($project->mobile_details['portfolio_thumb_images'] as $index => $image)
                           @if($index == 0)
                               <div class="col-lg-12">
                                   <div class="tp-pd-2-thumb-item mb-20">
                                       <img data-speed=".8" src="{{ asset('storage/' . $image) }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                                   </div>
                               </div>
                           @elseif($index == 1 || $index == 2)
                               <div class="col-lg-6">
                                   <div class="tp-pd-2-thumb-item mb-20">
                                       <img data-speed=".8" src="{{ asset('storage/' . $image) }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                                   </div>
                               </div>
                           @else
                               <div class="col-lg-6">
                                   <div class="tp-pd-2-thumb-item mb-20">
                                       <img data-speed=".8" src="{{ asset('storage/' . $image) }}" alt="{{ $project->title[app()->getLocale()] ?? $project->title['en'] }}">
                                   </div>
                               </div>
                           @endif
                       @endforeach
                   </div>
               </div>
           </div>
           <!-- portfolio details thumb end -->
       @endif







                <!-- portfolio details np start -->
                <div class="tp-pd-2-np-ptb z-index-2 pb-100">
                    <div class="container container-1230">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-pd-2-np-content d-flex justify-content-center align-items-center flex-wrap">
                                    <div class="tp_fade_anim" data-delay=".3" data-fade-from="top" data-ease="bounce">
                                        <a href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                    <path d="M0.250745 12.3137C0.250745 12.7279 0.586531 13.0637 1.00074 13.0637H7.75074C8.16496 13.0637 8.50074 12.7279 8.50074 12.3137C8.50074 11.8995 8.16496 11.5637 7.75074 11.5637L1.75074 11.5637L1.75074 5.56371C1.75074 5.14949 1.41496 4.81371 1.00074 4.81371C0.586531 4.81371 0.250745 5.14949 0.250745 5.56371V12.3137ZM12.3145 1L11.7841 0.46967L0.470415 11.7834L1.00074 12.3137L1.53107 12.844L12.8448 1.53033L12.3145 1Z" fill="currentColor" />
                                                </svg></span> Prev Work
                                        </a>
                                    </div>
                                    <div class="tp_fade_anim" data-delay=".5" data-fade-from="top" data-ease="bounce">
                                        <a href="#">Next Work <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                                    <path d="M13.0637 0.828381C13.0637 0.414168 12.7279 0.0783817 12.3137 0.0783812L5.56371 0.0783814C5.14949 0.0783814 4.81371 0.414168 4.81371 0.828382C4.81371 1.2426 5.14949 1.57838 5.56371 1.57838H11.5637V7.57838C11.5637 7.9926 11.8995 8.32838 12.3137 8.32838C12.7279 8.32838 13.0637 7.9926 13.0637 7.57838L13.0637 0.828381ZM1 12.1421L1.53033 12.6724L12.844 1.35871L12.3137 0.828382L11.7834 0.298051L0.46967 11.6118L1 12.1421Z" fill="currentColor" />
                                                </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details np end -->

            </main>
@endsection
