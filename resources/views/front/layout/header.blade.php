<!-- header area start -->
<header>

    <style>
        .logo-text {
            font-family: "KoHo", sans-serif;
            color: white;
            font-size: 20px;
            font-weight: bolder;

        }

        .logo-text .sub {
            font-family: "KoHo", sans-serif;
            font-weight: 300;
           font-size: 17px;
            margin-top: -5px;
        }



    </style>
    <!-- header area start -->
    <div id="header-sticky" class="tp-header-area tp-header-ptb tp-header-4-style tp-header-blur header-transparent tp-header-border">
        <div class="container container-1580">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-5 col-5">
                    <div class="tp-header-logo">
                        <a href="{{ url('/') }}" class="logo-text">
                            <span class="main">VELARYON</span>
                            <span class="sub">Studio</span>
                        </a>
                    </div>



                </div>
                <div class="col-xl-10 col-lg-7 col-7">
                    <div class="tp-header-box d-flex align-items-center justify-content-end">
                        <div class="tp-header-menu tp-header-dropdown dropdown-black-bg d-none d-xl-flex">
                            <nav class="tp-mobile-menu-active">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">{{ __('Home') }}</a>
                                    </li>
                                     <li>
                                        <a href="{{ route('services.index') }}">{{ __('Services') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
                                    </li>
                                    <li>
                                         <a href="{{ route('home') }}#projects">{{ __('Projects') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faq.index') }}">{{ __('FAQ') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact.index') }}">{{ __('Contact') }}</a>
                                    </li>

                                    <li class="has-dropdown">
                                        <a href="#">{{ strtoupper(app()->getLocale()) }}</a>
                                        <ul class="tp-submenu submenu">
                                            <li><a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">English</a></li>
                                            <li><a href="{{ route('lang.switch', 'ar') }}" class="{{ app()->getLocale() == 'ar' ? 'active' : '' }}">Arabic</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tp-header-right d-flex align-items-center">
                            <div class="tp-header-btn-box ml-25">
                                <a href="{{ route('contact.index') }}" class="tp-btn-black btn-green-light-bg">
                                        <span class="tp-btn-black-filter-blur">
                                            <svg width="0" height="0">
                                                <defs>
                                                    <filter id="buttonFilter">
                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                        <feComposite in="SourceGraphic" in2="buttonFilter" operator="atop"></feComposite>
                                                        <feBlend in="SourceGraphic" in2="buttonFilter"></feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </span>
                                    <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter)">
                                            <span class="tp-btn-black-text">Get in Touch</span>
                                            <span class="tp-btn-black-circle">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </span>
                                </a>
                            </div>
                            <div class="tp-header-bar ml-20 d-xl-none">
                                <button class="tp-offcanvas-open-btn">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header area end -->

</header>
<!-- header area end -->
