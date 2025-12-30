@extends('front.layout.app')

@section('content')
    <main>

        <!-- hero area start -->
        <div class="app-hero-area app-hero-ptb p-relative include-bg z-index-1">
            <div class="container container-1430">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="app-hero-wrap z-index-2 pb-65 pl-55">
                            <div class="app-hero-heading mb-40">
                                        <span class="tp-section-subtitle border-bg tp_fade_anim" data-delay=".3">Heyo !
                                            We launched our Alpha!</span>
                                <h4 class="tp-section-title-phudu tp_fade_anim" data-delay=".5">One global
                                    <br>plan. No hassle.
                                </h4>
                            </div>
                            <div class="app-hero-btn-box d-flex align-item-center">
                                <div class="app-hero-btn mr-35 tp_fade_anim" data-delay=".7" data-fade-from="top" data-ease="bounce">
                                    <div class="animated-border-box border-icon">
                                        <a class="tp-btn-gradient p-relative" href="contact-us-dark.html">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 16 19" fill="none">
                                                            <path d="M13.3617 10.0506C13.3617 10.1354 13.2341 12.6375 16 13.9521C15.4894 15.5212 13.7021 18.9986 11.617 18.9986C10.4255 18.9986 9.74469 18.2353 8.38299 18.2353C6.97873 18.2353 6.21276 18.9986 5.14893 18.9986C3.10638 19.0834 1.14894 15.2667 0.595746 13.6977C0.170213 12.5102 0 11.3652 0 10.2626C0 6.48837 2.51064 4.66483 4.89362 4.62242C6.04256 4.62242 7.48938 5.42817 8.12768 5.42817C8.72341 5.42817 10.383 4.4528 11.9149 4.58001C13.4894 4.70724 14.6809 5.30094 15.4894 6.44596C14.0851 7.33651 13.3617 8.48152 13.3617 10.0506ZM10.9787 3.09576C10.1277 4.07113 9.1064 4.62242 8.00001 4.53762C7.91489 3.39261 8.34043 2.33242 9.1064 1.48427C9.78725 0.72093 10.9787 0.0848152 12 0C12 0.466483 12.1277 1.73871 10.9787 3.09576Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                            Download App
                                        </a>
                                    </div>
                                </div>
                                <div class="app-hero-btn-text tp_text_anim">
                                    <p>
                                        Your ultimate travel partner. <br>
                                        Carries the information you need <br>
                                        while travelling.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="app-hero-round-shape">
                            <img src="{{asset('front/assets/img/home-10/hero/hero-round-shape.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="app-hero-bottom-thumb-main z-index-1 tp_fade_anim" data-delay=".5">
                    <img src="{{asset('front/assets/img/home-10/hero/hero-hand-shape.png')}}" alt="">
                    <img class="shape-1" src="{{asset('front/assets/img/home-10/hero/hero-shape.png')}}" alt="">
                    <img class="shape-2" data-speed="1.1" src="{{asset('front/assets/img/home-10/hero/hero-user.png')}}" alt="">
                    <img class="shape-3" data-speed="1.1" src="{{asset('front/assets/img/home-10/hero/hero-one-app.png')}}" alt="">
                    <img class="shape-4" src="{{asset('front/assets/img/home-10/hero/hero-tools.png')}}" alt="">
                    <img class="shape-5" data-speed=".8" src="{{asset('front/assets/img/home-10/hero/hero-secure.png')}}" alt="">
                </div>
                <div class="app-hero-bottom-wrapper include-bg p-relative" data-background="{{asset('front/assets/img/home-10/hero/app-hero-bottom-bg-dark.png')}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="app-hero-bottom-wrap pt-100 pb-65 pl-60">
                                <div class="app-hero-bottom-icon mb-20">
                                    <img src="{{asset('front/assets/img/home-10/hero/app-store.png')}}" alt="">
                                </div>
                                <div class="app-hero-bottom-content">
                                    <span class="app-hero-bottom-subtitle">App Store rating</span>
                                    <div class="app-hero-bottom-rating z-index-1">
                                        <div class="app-hero-bottom-rating-point">
                                            <span>4.8</span>
                                        </div>
                                        <div class="app-hero-bottom-rating-star">
                                            <div class="app-hero-bottom-rating-stars">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                                <path d="M7.36067 0.5L9.63512 5.10778L14.7213 5.85121L11.041 9.43586L11.9096 14.5L7.36067 12.1078L2.81178 14.5L3.68034 9.43586L0 5.85121L5.08623 5.10778L7.36067 0.5Z" fill="#FFD04F" />
                                                            </svg></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                                <path d="M7.36067 0.5L9.63512 5.10778L14.7213 5.85121L11.041 9.43586L11.9096 14.5L7.36067 12.1078L2.81178 14.5L3.68034 9.43586L0 5.85121L5.08623 5.10778L7.36067 0.5Z" fill="#FFD04F" />
                                                            </svg></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                                <path d="M7.36067 0.5L9.63512 5.10778L14.7213 5.85121L11.041 9.43586L11.9096 14.5L7.36067 12.1078L2.81178 14.5L3.68034 9.43586L0 5.85121L5.08623 5.10778L7.36067 0.5Z" fill="#FFD04F" />
                                                            </svg></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                                <path d="M7.36067 0.5L9.63512 5.10778L14.7213 5.85121L11.041 9.43586L11.9096 14.5L7.36067 12.1078L2.81178 14.5L3.68034 9.43586L0 5.85121L5.08623 5.10778L7.36067 0.5Z" fill="#FFD04F" />
                                                            </svg></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                                <path d="M7.36067 0.5L9.63512 5.10778L14.7213 5.85121L11.041 9.43586L11.9096 14.5L7.36067 12.1078L2.81178 14.5L3.68034 9.43586L0 5.85121L5.08623 5.10778L7.36067 0.5Z" fill="#FFD04F" />
                                                            </svg></span>
                                            </div>
                                            <a href="#">Based on 204 Reviews <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                                    <path d="M1 1L9 9M9 9V1M9 9H1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->

        <!-- brand area start -->
        <div class="app-brand-area pt-120 pb-130">
            <div class="container container-1230">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="app-brand-heading text-center mb-45">
                                    <span class="tp-section-subtitle subtitle-black"> Trusted by these amazing
                                        companies</span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="swiper-container app-brand-active fix">
                            <div class="swiper-wrapper slider-transtion">
                                <div class="swiper-slide">
                                    <div class="app-brand-item">
                                        <img src="{{asset('front/assets/img/home-10/brand/app-brand-1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="app-brand-item">
                                        <img src="{{asset('front/assets/img/home-10/brand/app-brand-2.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="app-brand-item">
                                        <img src="{{asset('front/assets/img/home-10/brand/app-brand-3.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="app-brand-item">
                                        <img src="{{asset('front/assets/img/home-10/brand/app-brand-4.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

        <!-- feature area start -->
        <div class="app-feature-area app-feature-border-style">
            <div class="container container-1230">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="app-feature-heading text-center mb-55">
                            <span class="tp-section-subtitle border-bg bg-color tp_fade_anim" data-delay=".3">Easy to solution</span>
                            <h3 class="tp-section-title-phudu fs-70 mb-20 tp_fade_anim" data-delay=".5">Unlock All <br> Features in Our App</h3>
                            <div class="tp_fade_anim" data-delay=".7">
                                <p>Powerful features to help you manage money smarter.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-feature-bg tp_fade_anim">
                    <div class="row gx-10">
                        <div class="col-lg-4 col-md-6">
                            <div class="app-feature-item mb-30">
                                <div class="app-feature-item-icon">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                                    <path d="M22.1594 3.76253L14.5434 0.370404C13.4257 -0.123468 11.7361 -0.123468 10.6184 0.370404L3.0024 3.76253C1.07889 4.6203 0.792969 5.79 0.792969 6.41384C0.792969 7.03768 1.07889 8.20738 3.0024 9.06516L10.6184 12.4573C11.1773 12.7042 11.8791 12.8342 12.5809 12.8342C13.2827 12.8342 13.9846 12.7042 14.5434 12.4573L22.1594 9.06516C24.0829 8.20738 24.3689 7.03768 24.3689 6.41384C24.3689 5.79 24.0959 4.6203 22.1594 3.76253Z" fill="currentColor" />
                                                    <path opacity="0.4" d="M12.5807 19.5535C12.0869 19.5535 11.593 19.4495 11.1381 19.2546L2.37839 15.3556C1.03973 14.7577 0 13.1591 0 11.6905C0 11.1576 0.428889 10.7288 0.961751 10.7288C1.49461 10.7288 1.9235 11.1576 1.9235 11.6905C1.9235 12.3923 2.50835 13.3021 3.15818 13.588L11.9179 17.487C12.3338 17.669 12.8147 17.669 13.2306 17.487L21.9903 13.588C22.6401 13.3021 23.225 12.4053 23.225 11.6905C23.225 11.1576 23.6539 10.7288 24.1867 10.7288C24.7196 10.7288 25.1485 11.1576 25.1485 11.6905C25.1485 13.1461 24.1088 14.7577 22.7701 15.3556L14.0104 19.2546C13.5685 19.4495 13.0746 19.5535 12.5807 19.5535Z" fill="currentColor" />
                                                    <path opacity="0.4" d="M12.5807 25.9998C12.0869 25.9998 11.593 25.8958 11.1381 25.7008L2.37839 21.8019C0.935758 21.165 0 19.7224 0 18.1368C0 17.6039 0.428889 17.175 0.961751 17.175C1.49461 17.175 1.9235 17.6039 1.9235 18.1368C1.9235 18.9556 2.40438 19.6964 3.15818 20.0343L11.9179 23.9333C12.3338 24.1153 12.8147 24.1153 13.2306 23.9333L21.9903 20.0343C22.7311 19.7094 23.225 18.9556 23.225 18.1368C23.225 17.6039 23.6539 17.175 24.1867 17.175C24.7196 17.175 25.1485 17.6039 25.1485 18.1368C25.1485 19.7224 24.2127 21.152 22.7701 21.8019L14.0104 25.7008C13.5685 25.8958 13.0746 25.9998 12.5807 25.9998Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                </div>
                                <div class="app-feature-item-content">
                                    <h4 class="app-feature-title">Guaranteed safety</h4>
                                    <p>Powerful features to help you manage <br>
                                        money smarter.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="app-feature-item mb-30">
                                <div class="app-feature-item-icon">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" viewBox="0 0 28 26" fill="none">
                                                    <g>
                                                        <path d="M11.1391 14.1861H15.1554V23.5445C15.1554 24.9222 16.8711 25.5721 17.7809 24.5323L27.6202 13.3542C28.478 12.3794 27.7891 10.8587 26.4894 10.8587H22.4731V1.50026C22.4731 0.1225 20.7574 -0.527389 19.8476 0.512433L10.0083 11.6905C9.16348 12.6653 9.85235 14.1861 11.1391 14.1861Z" fill="currentColor"/>
                                                        <path d="M10.0732 3.09894H0.974825C0.441921 3.09894 0 2.65702 0 2.12411C0 1.5912 0.441921 1.14928 0.974825 1.14928H10.0732C10.6061 1.14928 11.048 1.5912 11.048 2.12411C11.048 2.65702 10.6061 3.09894 10.0732 3.09894Z" fill="currentColor"/>
                                                        <path d="M8.77343 23.8956H0.974825C0.441921 23.8956 0 23.4536 0 22.9207C0 22.3878 0.441921 21.9459 0.974825 21.9459H8.77343C9.30633 21.9459 9.74825 22.3878 9.74825 22.9207C9.74825 23.4536 9.30633 23.8956 8.77343 23.8956Z" fill="currentColor"/>
                                                        <path d="M4.87413 13.4972H0.974825C0.441921 13.4972 0 13.0553 0 12.5224C0 11.9895 0.441921 11.5476 0.974825 11.5476H4.87413C5.40703 11.5476 5.84895 11.9895 5.84895 12.5224C5.84895 13.0553 5.40703 13.4972 4.87413 13.4972Z" fill="currentColor"/>
                                                    </g>
                                                </svg>
                                            </span>
                                </div>
                                <div class="app-feature-item-content">
                                    <h4 class="app-feature-title">Fast performance</h4>
                                    <p>Powerful features to help you manage <br>
                                        money smarter.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="app-feature-item mb-30">
                                <div class="app-feature-item-icon">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="28" viewBox="0 0 27 28" fill="none">
                                                    <path d="M20.864 12.3287C20.8913 12.683 20.7686 13.0509 20.4961 13.3234L12.2926 21.5268C10.4803 23.3391 8.65425 23.3391 6.82824 21.5268L1.36383 16.0624C0.437199 15.1222 -0.0261177 14.1819 0.00113616 13.2417H0.0965244L20.7005 12.3423L20.864 12.3287Z" fill="currentColor"/>
                                                    <path d="M20.4959 11.4976L9.29459 0.296382C8.89941 -0.0987938 8.24531 -0.0987938 7.85013 0.296382C7.45495 0.691557 7.45495 1.34564 7.85013 1.74081L9.03568 2.92633L1.36371 10.5982C0.491583 11.4703 0.0283901 12.3559 0.00113616 13.2417H0.0965244L20.7005 12.3423L20.864 12.3287C20.8504 12.0289 20.714 11.7156 20.4959 11.4976Z" fill="currentColor"/>
                                                    <path d="M19.0788 28H1.36382C0.805111 28 0.341795 27.5367 0.341795 26.978C0.341795 26.4193 0.805111 25.956 1.36382 25.956H19.0788C19.6376 25.956 20.1009 26.4193 20.1009 26.978C20.1009 27.5367 19.6376 28 19.0788 28Z" fill="currentColor"/>
                                                    <path d="M23.644 17.1392C23.2897 16.7577 22.6356 16.7577 22.2813 17.1392C21.8588 17.6025 19.7603 19.9735 19.7603 21.7586C19.7603 23.5301 21.1911 24.961 22.9626 24.961C24.7341 24.961 26.165 23.5301 26.165 21.7586C26.165 19.9735 24.0664 17.6025 23.644 17.1392Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                </div>
                                <div class="app-feature-item-content">
                                    <h4 class="app-feature-title">Awesome design</h4>
                                    <p>Powerful features to help you manage <br>
                                        money smarter.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="app-feature-bottom text-center mt-20">
                            <p><span>Hurray</span>Subscribe <a href="#">Agntix application</a> and get a special
                                discount.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->

        <!-- feature area start -->
        <div class="app-feature-2-area app-feature-2-ptb z-index-1 pt-160 pb-140">
            <div class="app-feature-2-bg">
                <img class="main-bg" src="{{asset('front/assets/img/home-10/features/app-features-bg.png')}}" alt="">
                <img class="shape-1 tp_fade_anim" data-fade-from="top" data-delay=".5" data-ease="bounce" src="{{asset('front/assets/img/home-10/features/app-features-source.png')}}" alt="">
                <img class="shape-2 tp_fade_anim" data-fade-from="top" data-delay=".7" data-ease="bounce" src="{{asset('front/assets/img/home-10/features/app-features-budget.png')}}" alt="">
                <img class="shape-3 tp_fade_anim" data-fade-from="top" data-delay=".9" data-ease="bounce" src="{{asset('front/assets/img/home-10/features/app-features-trip.png')}}" alt="">
            </div>
            <div class="container container-1230">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="app-feature-2-heading text-center z-index-1 mb-80">
                            <span class="tp-section-subtitle border-bg bg-color tp_fade_anim" data-delay=".3">How it Works</span>
                            <h3 class="tp-section-title-phudu fs-70 mb-20 tp_fade_anim" data-delay=".5">what can you <br> do with it?</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="app-feature-2-content">
                            <span class="tp-section-subtitle border-bg tp_fade_anim" data-fade-from="top" data-delay=".3" data-ease="bounce">Explore your Travel Interests.</span>
                            <div class="app-feature-2-brd"></div>
                            <div class="app-feature-2-content-icon d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                                                <path d="M2.45844 0H1.04844C0.118443 0 -0.351558 1.13 0.308442 1.79L6.03844 7.52C7.67844 9.16 10.3284 9.16 11.9684 7.52L17.6984 1.79C18.3484 1.13 17.8784 0 16.9484 0H15.5384C14.7084 0 13.9084 0.33 13.3184 0.92L9.73844 4.5C9.32844 4.91 8.66844 4.91 8.25844 4.5L4.67844 0.92C4.08844 0.33 3.28844 0 2.45844 0Z" fill="#292D32" />
                                                <path opacity="0.4" d="M2.45844 19.97H1.04844C0.118443 19.97 -0.351558 18.84 0.308442 18.18L6.03844 12.45C7.67844 10.81 10.3284 10.81 11.9684 12.45L17.6984 18.18C18.3584 18.84 17.8884 19.97 16.9584 19.97H15.5484C14.7184 19.97 13.9184 19.64 13.3284 19.05L9.74844 15.47C9.33844 15.06 8.67844 15.06 8.26844 15.47L4.68844 19.05C4.08844 19.64 3.28844 19.97 2.45844 19.97Z" fill="#292D32" />
                                            </svg></span>
                                <p>Powerful features to help you manage <br>
                                    money smarter.</p>
                            </div>
                        </div>
                        <div class="app-feature-2-thumb z-index-1">
                            <img data-speed="1.1" src="{{asset('front/assets/img/home-10/features/app-features-phn.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->

        <!-- review area start -->
        <div class="app-review-area app-review-ptb tp_fade_anim">
            <div class="container container-1230">
                <div class="app-review-bg z-index-1">
                    <div class="app-review-img">
                        <img src="{{asset('front/assets/img/home-10/review/app-review-img.png')}}" alt="">
                    </div>
                    <div class="row align-items-end">
                        <div class="col-lg-5 col-md-6">
                            <div class="app-review-heading z-index-1">
                                <h4 class="app-review-title">All the <br>
                                    Experience in the <br>
                                    new Application</h4>
                                <p>Over <span>150,0000</span> client</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 order-4 order-lg-2">
                            <div class="app-review-item ml">
                                <div class="app-review-item-icon">
                                    <img src="{{asset('front/assets/img/home-10/review/app-review-icon.png')}}" alt="">
                                </div>
                                <div class="app-review-item-content">
                                    <h3 class="app-review-item-title">4.1M+</h3>
                                    <p>Downloaded & Installation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 order-3">
                            <div class="app-review-item mr">
                                <div class="app-review-item-icon">
                                    <img src="{{asset('front/assets/img/home-10/review/app-review-icon-2.png')}}" alt="">
                                </div>
                                <div class="app-review-item-content">
                                    <h3 class="app-review-item-title">4.8/5</h3>
                                    <p>Based on 1,258 reviews</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 order-2 order-lg-4">
                            <div class="app-review-item text-start text-md-center">
                                <div class="app-review-item-icon">
                                    <img src="{{asset('front/assets/img/home-10/review/app-review-icon-3.png')}}" alt="">
                                </div>
                                <div class="app-review-item-content">
                                    <p>1M+ tasks tackled by to-doers!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- review area end -->

        <!-- stack area start -->
        <div class="app-stack-area app-stack-ptb app-stack-box stack-panel-pin-area mt-145">
            <div class="app-stack-contain">
                <div class="app-stack-item stack-item dark-stack-color app-stack-item-01 stack-panel-pin pt-200 pb-200 atropos" data-atropos data-bg-color="#0E0F11">
                    <div class="app-stack-warpper">
                        <div class="container container-1230">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="app-stack-heading">
                                        <span class="app-stack-subtitle">Data dashboard</span>
                                        <h4 class="app-stack-number">01</h4>
                                        <h3 class="app-stack-title">
                                            Easy to manage <br>
                                            your all app data.
                                        </h3>
                                        <div class="app-stack-content">
                                            <p>
                                                Lorem ipsum is simply printing typesetting industry <br>
                                                industry's standard dummy text printer scrambled <br> ipsum is
                                                simply dummy text of the printing.
                                            </p>
                                            <div class="app-stack-btn">
                                                <a href="service-details-dark.html">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <atropos-component>
                                        <div class="app-stack-thumb-box p-relative text-end">
                                            <div class="my-atropos">
                                                <div class="atropos">
                                                    <div class="atropos-scale">
                                                        <div class="atropos-rotate">
                                                            <div class="atropos-inner">
                                                                <img data-atropos-offset="-4.5" src="{{asset('front/assets/img/home-10/stack/stack-round.png')}}" alt="">
                                                                <img data-atropos-offset="5" class="shape-1" src="{{asset('front/assets/img/home-10/stack/stack-man.png')}}" alt="">
                                                                <img data-atropos-offset="-4" class="shape-2" src="{{asset('front/assets/img/home-10/stack/stack-phone.png')}}" alt="">
                                                                <img data-atropos-offset="3" class="shape-3" src="{{asset('front/assets/img/home-10/stack/stack-shape-1.png')}}" alt="">
                                                                <img data-atropos-offset="2" class="shape-4" src="{{asset('front/assets/img/home-10/stack/stack-shape-2.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </atropos-component>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-stack-item stack-item app-stack-item-02 stack-panel-pin pt-200 pb-200">
                    <div class="app-stack-warpper">
                        <div class="container container-1230">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="app-stack-heading">
                                        <span class="app-stack-subtitle">Data dashboard</span>
                                        <h4 class="app-stack-number">02</h4>
                                        <h3 class="app-stack-title">Easy book trips <br> easy payment.</h3>
                                        <div class="app-stack-content">
                                            <p>Lorem ipsum is simply printing typesetting industry <br>
                                                industry's standard dummy text printer scrambled <br> ipsum is
                                                simply dummy text of the printing.</p>
                                            <div class="app-stack-btn">
                                                <a href="service-details-dark.html">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <atropos-component>
                                        <div class="app-stack-thumb-box p-relative text-end">
                                            <div class="my-atropos">
                                                <div class="atropos">
                                                    <div class="atropos-scale">
                                                        <div class="atropos-rotate">
                                                            <div class="atropos-inner">
                                                                <img data-atropos-offset="-4.5" src="{{asset('front/assets/img/home-10/stack/stack-round.png')}}" alt="">
                                                                <img data-atropos-offset="5" class="shape-1" src="{{asset('front/assets/img/home-10/stack/stack-man.png')}}" alt="">
                                                                <img data-atropos-offset="-4" class="shape-2" src="{{asset('front/assets/img/home-10/stack/stack-phone.png')}}" alt="">
                                                                <img data-atropos-offset="3" class="shape-3" src="{{asset('front/assets/img/home-10/stack/stack-shape-1.png')}}" alt="">
                                                                <img data-atropos-offset="2" class="shape-4" src="{{asset('front/assets/img/home-10/stack/stack-shape-2.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </atropos-component>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-stack-item stack-item dark-stack-color app-stack-item-03 stack-panel-pin pt-200 pb-200" data-bg-color="#0E0F11">
                    <div class="app-stack-warpper">
                        <div class="container container-1230">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="app-stack-heading">
                                        <span class="app-stack-subtitle">Data dashboard</span>
                                        <h4 class="app-stack-number">03</h4>
                                        <h3 class="app-stack-title">Easy to manage <br> your all app data.</h3>
                                        <div class="app-stack-content">
                                            <p>Lorem ipsum is simply printing typesetting industry <br>
                                                industry's standard dummy text printer scrambled <br> ipsum is
                                                simply dummy text of the printing.</p>
                                            <div class="app-stack-btn">
                                                <a href="service-details-dark.html">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <atropos-component>
                                        <div class="app-stack-thumb-box p-relative text-end">
                                            <div class="my-atropos">
                                                <div class="atropos">
                                                    <div class="atropos-scale">
                                                        <div class="atropos-rotate">
                                                            <div class="atropos-inner">
                                                                <img data-atropos-offset="-4.5" src="{{asset('front/assets/img/home-10/stack/stack-round.png')}}" alt="">
                                                                <img data-atropos-offset="5" class="shape-1" src="{{asset('front/assets/img/home-10/stack/stack-man.png')}}" alt="">
                                                                <img data-atropos-offset="-4" class="shape-2" src="{{asset('front/assets/img/home-10/stack/stack-phone.png')}}" alt="">
                                                                <img data-atropos-offset="3" class="shape-3" src="{{asset('front/assets/img/home-10/stack/stack-shape-1.png')}}" alt="">
                                                                <img data-atropos-offset="2" class="shape-4" src="{{asset('front/assets/img/home-10/stack/stack-shape-2.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </atropos-component>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- stack area end -->

        <!-- benefits area start -->
        <div class="app-benefits-area p-relative mt-20">
            <div class="tp-gsap-bg"></div>
            <div class="container container-1630">
                <div class="app-benefits-wrapper">
                    <div class="row gx-24">
                        <div class="col-lg-4">
                            <div class="app-benefits-item z-index-1 mb-25">
                                <div class="app-benefits-item-thumb">
                                    <img src="{{asset('front/assets/img/home-10/benefits/benefits-img-1.png')}}" alt="">
                                </div>
                                <div class="app-benefits-item-content text-center z-index-1">
                                    <h4 class="app-benefits-item-title">Select <br>
                                        budget range</h4>
                                </div>
                            </div>
                            <div class="app-benefits-item z-index-1 mb-25">
                                <div class="app-benefits-item-thumb">
                                    <img src="{{asset('front/assets/img/home-10/benefits/benefits-img-2.png')}}" alt="">
                                </div>
                                <div class="app-benefits-item-2-content text-center z-index-1">
                                    <div class="app-benefits-item-2-star">
                                        <span><img src="{{asset('front/assets/img/home-10/benefits/benefits-star.svg')}}" alt=""></span>
                                        <span><img src="{{asset('front/assets/img/home-10/benefits/benefits-star.svg')}}" alt=""></span>
                                        <span><img src="{{asset('front/assets/img/home-10/benefits/benefits-star.svg')}}" alt=""></span>
                                        <span><img src="{{asset('front/assets/img/home-10/benefits/benefits-star.svg')}}" alt=""></span>
                                        <span><img src="{{asset('front/assets/img/home-10/benefits/benefits-star.svg')}}" alt=""></span>

                                    </div>
                                    <h4 class="app-benefits-item-2-title">100k</h4>
                                    <p>Insert some statistic</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="app-benefits-item-3 z-index-1 mb-25">
                                <div class="app-benefits-item-3-bg">
                                    <img src="{{asset('front/assets/img/home-10/benefits/benefits-img-3-bg.png')}}" alt="">
                                </div>
                                <div class="app-benefits-item-thumb">
                                    <img src="{{asset('front/assets/img/home-10/benefits/benefits-img-3.png')}}" alt="">
                                </div>
                                <div class="app-benefits-item-3-content z-index-1 text-center">
                                    <span>Insert some statistic </span>
                                    <h4 class="app-benefits-item-2-title">100k</h4>
                                    <p>Insert some statistic name</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="app-benefits-item z-index-1 mb-25">
                                <div class="app-benefits-item-thumb">
                                    <img src="{{asset('front/assets/img/home-10/benefits/benefits-img-4.png')}}" alt="">
                                </div>
                                <div class="app-benefits-item-content text-center z-index-1">
                                    <h4 class="app-benefits-item-title">Explore your <br>
                                        interests</h4>
                                </div>
                            </div>
                            <div class="app-benefits-item z-index-1 mb-25">
                                <div class="app-benefits-item-thumb">
                                    <img src="{{asset('front/assets/img/home-10/benefits/benefits-img-5.png')}}" alt="">
                                </div>
                                <div class="app-benefits-item-content text-center z-index-1">
                                    <h4 class="app-benefits-item-title">Create the perfect <br>
                                        trip</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- benefits area end -->

        <!-- price area start -->
        <div class="app-price-area p-relative pt-120 pb-130">
            <div class="app-price-bg-shape">
                <img src="{{asset('front/assets/img/home-09/price/price-bg.png')}}" alt="">
            </div>
            <div class="container container-1230">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="app-price-heading">
                            <span class="tp-section-subtitle border-bg bg-color tp_fade_anim" data-delay=".3">Affordable pricing</span>
                            <h3 class="tp-section-title-phudu fs-70 mb-55 tp_fade_anim" data-delay=".5">Start With <br> ffordable Price</h3>
                        </div>
                        <div class="app-price-tab-wrap mb-30 tp_fade_anim" data-delay=".7">
                            <div class="ai-price-tab tp-marker-tab d-inline-flex justify-content-center p-relative">
                                <ul class="nav nav-tab" id="myTab" role="tablist">
                                    <li class="nav-items" role="presentation">
                                        <button class="nav-links active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Monthly</button>
                                    </li>
                                    <li class="nav-items" role="presentation">
                                        <button class="nav-links" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Yearly</button>
                                    </li>
                                </ul>
                                <span id="lineMarker"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-start justify-content-lg-end">
                            <div class="app-price-wrap mb-30">
                                <div class="app-price-store d-flex align-items-center mb-20">
                                    <p><b>250K+</b>review</p>
                                    <p><span><img src="{{asset('front/assets/img/home-10/price/app-store.svg')}}" alt=""></span>App
                                        Store</p>
                                    <p><span><img src="{{asset('front/assets/img/home-10/price/google-store.svg')}}" alt=""></span>Play Store</p>
                                </div>
                                <div class="app-price-heading">
                                    <p>Unlock the full potential of Agntix app with our <br>
                                        flexible pricing options.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="app-price-box">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="crp-price-item">
                                        <div class="crp-price-head">
                                            <span>Free</span>
                                            <h4>$0 <i>/ month</i></h4>
                                            <p>Organize your daily task for free</p>
                                        </div>
                                        <div class="crp-price-list">
                                            <ul>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Unlimited cards</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Automated management</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>SOX compliance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Local video issuance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Limited tools</li>
                                            </ul>
                                        </div>
                                        <div class="app-price-btn-box">
                                            <div class="animated-border-box w-100">
                                                <a class="tp-btn-black-border w-100 text-center" href="contact-us-dark.html">
                                                    Join this plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="crp-price-item active">
                                        <div class="crp-price-head">
                                            <span>Pro</span>
                                            <h4>$48 <i>/ month</i></h4>
                                            <p>Organize your daily task for free</p>
                                        </div>
                                        <div class="crp-price-list">
                                            <ul>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Unlimited cards</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Automated management</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>SOX compliance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Local video issuance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Limited tools</li>
                                            </ul>
                                        </div>
                                        <div class="app-price-btn-box">
                                            <div class="animated-border-box radius-style-2 w-100">
                                                <a class="tp-btn-gradient sm w-100 text-center" href="contact-us-dark.html">
                                                    Join this plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="crp-price-item">
                                        <div class="crp-price-head">
                                            <span>Business</span>
                                            <h4>$140 <i>/ month</i></h4>
                                            <p>Organize your daily task for free</p>
                                        </div>
                                        <div class="crp-price-list">
                                            <ul>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Unlimited cards</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Automated management</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>SOX compliance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Local video issuance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Limited tools</li>
                                            </ul>
                                        </div>
                                        <div class="app-price-btn-box">
                                            <div class="animated-border-box w-100">
                                                <a class="tp-btn-black-border w-100 text-center" href="contact-us-dark.html">
                                                    Join this plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="app-price-box">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="crp-price-item">
                                        <div class="crp-price-head">
                                            <span>Free</span>
                                            <h4>$0 <i>/ yearly</i></h4>
                                            <p>Organize your daily task for free</p>
                                        </div>
                                        <div class="crp-price-list">
                                            <ul>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Unlimited cards</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Automated management</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>SOX compliance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Local video issuance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Limited tools</li>
                                            </ul>
                                        </div>
                                        <div class="app-price-btn-box">
                                            <div class="animated-border-box w-100">
                                                <a class="tp-btn-black-border w-100 text-center" href="contact-us-dark.html">
                                                    Join this plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="crp-price-item active">
                                        <div class="crp-price-head">
                                            <span>Pro</span>
                                            <h4>$78 <i>/ yearly</i></h4>
                                            <p>Organize your daily task for free</p>
                                        </div>
                                        <div class="crp-price-list">
                                            <ul>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Unlimited cards</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Automated management</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>SOX compliance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Local video issuance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Limited tools</li>
                                            </ul>
                                        </div>
                                        <div class="app-price-btn-box">
                                            <div class="animated-border-box radius-style-2 w-100">
                                                <a class="tp-btn-gradient sm w-100 text-center" href="contact-us-dark.html">
                                                    Join this plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="crp-price-item">
                                        <div class="crp-price-head">
                                            <span>Business</span>
                                            <h4>$199 <i>/ yearly</i></h4>
                                            <p>Organize your daily task for free</p>
                                        </div>
                                        <div class="crp-price-list">
                                            <ul>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Unlimited cards</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Automated management</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>SOX compliance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Local video issuance</li>
                                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
                                                                    <path d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875" stroke="#21212D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg></span>Limited tools</li>
                                            </ul>
                                        </div>
                                        <div class="app-price-btn-box">
                                            <div class="animated-border-box w-100">
                                                <a class="tp-btn-black-border w-100 text-center" href="contact-us-dark.html">
                                                    Join this plan
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
        </div>
        <!-- price area end -->

        <!-- testimonial area start -->
        <div class="app-testimonial-area app-testimonial-ptb p-relative pb-140">
            <div class="app-testimonial-shape">
                <div class="shape-1" data-speed=".9">
                    <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-shape-1.png')}}" alt="">
                </div>
                <div class="shape-2" data-speed="1.1">
                    <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-shape-2.png')}}" alt="">
                </div>
                <div class="shape-3">
                    <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-shape-circle.png')}}" alt="">
                </div>
            </div>
            <div class="container container-1230">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="app-testimonial-warp mb-55">
                            <div class="app-testimonial-heading text-center p-relative mb-40">
                                <span class="tp-section-subtitle border-bg bg-color tp_fade_anim" data-delay=".3">Testimonials</span>
                                <h3 class="tp-section-title-phudu mb-20 tp_fade_anim" data-delay=".5">Trusted by 21,000+ <br> customers</h3>
                                <div class="app-testimonial-big-text">
                                    <h3>4.86</h3>
                                </div>
                            </div>
                            <div class="app-testimonial-review-width tp_fade_anim" data-delay=".6" data-fade-from="top" data-ease="bounce">
                                <div class="app-testimonial-review">
                                    <div class="app-testimonial-review-icon">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
                                                        <path d="M18.9995 15.5454V22.9036H29.2249C28.7759 25.27 27.4285 27.2737 25.4076 28.6209L31.5739 33.4055C35.1667 30.0893 37.2394 25.2183 37.2394 19.432C37.2394 18.0847 37.1185 16.7891 36.8939 15.5456L18.9995 15.5454Z" fill="#4285F4" />
                                                        <path d="M8.35164 22.6162L6.96089 23.6808L2.03809 27.5153C5.16444 33.7161 11.5721 37.9998 18.9994 37.9998C24.1292 37.9998 28.4301 36.3071 31.5738 33.4054L25.4075 28.6208C23.7147 29.7608 21.5556 30.4517 18.9994 30.4517C14.0594 30.4517 9.86224 27.1181 8.3594 22.6272L8.35164 22.6162Z" fill="#34A853" />
                                                        <path d="M2.03803 10.4846C0.74265 13.0409 0 15.9255 0 19C0 22.0744 0.74265 24.959 2.03803 27.5153C2.03803 27.5325 8.35996 22.6098 8.35996 22.6098C7.97996 21.4699 7.75535 20.2608 7.75535 18.9998C7.75535 17.7387 7.97996 16.5297 8.35996 15.3897L2.03803 10.4846Z" fill="#FBBC05" />
                                                        <path d="M18.9998 7.56545C21.798 7.56545 24.2852 8.5327 26.2716 10.3982L31.7124 4.95734C28.4133 1.88284 24.1298 0 18.9998 0C11.5725 0 5.16444 4.26636 2.03809 10.4846L8.35982 15.39C9.86246 10.8991 14.0598 7.56545 18.9998 7.56545Z" fill="#EA4335" />
                                                    </svg>
                                                </span>
                                    </div>
                                    <div class="app-testimonial-review-content">
                                                <span><i>4.9/5</i> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z" fill="#FFAF1B" />
                                                    </svg></span>
                                        <p>Based on 1,258 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-1680">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="app-testimonial-wrapper">
                            <div class="app-testimonial-slider d-flex">
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-1.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-2.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-3.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-4.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-1.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-2.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-3.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-4.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-1.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-2.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-3.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                                    <span>
                                                        <img src="{{asset('front/assets/img/home-10/testimonial/testimonial-item-4.png')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">Kate Leeman</h4>
                                            <p>Head of Product, Designer</p>
                                        </div>
                                    </div>
                                    <div class="app-testimonial-item-content">
                                        <p>"I love how agntix helps me track my <br> expenses and alerts
                                            me about upcoming <br> bills. It's a must have app!"</p>
                                        <div class="app-testimonial-item-star">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                            <path d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z" fill="#FFAF1B" />
                                                        </svg></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->

        <!-- faq area start -->
        <div class="app-faq-area p-relative pb-120">
            <div class="app-faq-shape" data-speed=".8">
                <img src="{{asset('front/assets/img/home-10/faq/faq-shape-1.png')}}" alt="">
            </div>
            <div class="container container-1230">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="app-faq-heading p-relative mb-40">
                            <span class="tp-section-subtitle border-bg bg-color tp_fade_anim" data-delay=".3">FAQ</span>
                            <h3 class="tp-section-title-phudu fs-70 mb-20 tp_fade_anim" data-delay=".5">Got any <br> questions?</h3>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="app-faq-wrap pl-70">
                            <div class="ai-faq-accordion-wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-items">
                                        <h2 class="accordion-header">
                                            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What is Agntix?
                                                <span class="accordion-icon"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    Track Your Income and Expenses: With our app, you can easily
                                                    track your income
                                                    and expenses, so you always know where your money is going.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-items">
                                        <h2 class="accordion-header">
                                            <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Is there a mobile app available?
                                                <span class="accordion-icon"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    Track Your Income and Expenses: With our app, you can easily
                                                    track your income
                                                    and expenses, so you always know where your money is going.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-items">
                                        <h2 class="accordion-header">
                                            <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Google mobile can monetize your app?
                                                <span class="accordion-icon"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    Track Your Income and Expenses: With our app, you can easily
                                                    track your income
                                                    and expenses, so you always know where your money is going.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-items">
                                        <h2 class="accordion-header">
                                            <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Do you offer customer support?
                                                <span class="accordion-icon"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    Track Your Income and Expenses: With our app, you can easily
                                                    track your income
                                                    and expenses, so you always know where your money is going.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-items">
                                        <h2 class="accordion-header">
                                            <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Do you offer customer support?
                                                <span class="accordion-icon"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    Track Your Income and Expenses: With our app, you can easily
                                                    track your income
                                                    and expenses, so you always know where your money is going.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-items">
                                        <h2 class="accordion-header">
                                            <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Can I lock my note app?
                                                <span class="accordion-icon"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    Track Your Income and Expenses: With our app, you can easily
                                                    track your income
                                                    and expenses, so you always know where your money is going.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end -->

        <!-- cta area start -->
        <div class="app-cta-area z-index-1">
            <div class="container container-1430">
                <div class="app-cta-wrap">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <div class="app-cta-wrapper pt-90 pb-90">
                                <div class="app-cta-heading mb-30">
                                    <h3 class="tp-section-title-phudu fs-70 mb-20 tp_fade_anim" data-delay=".3">
                                        Ready To <br> Download
                                    </h3>
                                    <div class="tp_fade_anim" data-delay=".5">
                                        <p>Your ultimate travel partner. Carries the information <br> you need while travelling.</p>
                                    </div>
                                </div>
                                <div class="app-cta-store-box d-flex align-items-center tp_fade_anim" data-delay=".3" data-fade-from="top" data-ease="bounce">
                                    <div class="app-cta-store mr-15">
                                        <div class="app-cta-store-icon">
                                            <span><img src="{{asset('front/assets/img/home-10/cta/play-store.svg')}}" alt=""></span>
                                        </div>
                                        <div class="app-cta-store-content">
                                            <p>Download on the</p>
                                            <span>Play Store</span>
                                        </div>
                                    </div>
                                    <div class="app-cta-store">
                                        <div class="app-cta-store-icon">
                                            <span><img src="{{asset('front/assets/img/home-10/cta/app-store.svg')}}" alt=""></span>
                                        </div>
                                        <div class="app-cta-store-content">
                                            <p>Download on the</p>
                                            <span>App Store</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="app-cta-thumb-wrap">
                                <div class="app-cta-thumb p-relative">
                                    <div class="tp_fade_anim z-index-1" data-fade-from="left" data-delay=".3">
                                        <img class="app-cta-thumb-1" src="{{asset('front/assets/img/home-10/cta/cta-phn-1.png')}}" alt="">
                                    </div>
                                    <div class="tp_fade_anim" data-fade-from="right" data-delay=".1">
                                        <img class="app-cta-thumb-2" src="{{asset('front/assets/img/home-10/cta/cta-phn-2.png')}}" alt="">
                                    </div>
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
