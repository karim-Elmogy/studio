{{-- Begin::Header --}}
<div id="kt_app_header" class="app-header">
    <div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">


        {{-- Begin::Header wrapper --}}
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

            {{-- Begin::Menu wrapper --}}
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch"
                 data-kt-drawer="true"
                 data-kt-drawer-name="app-header-menu"
                 data-kt-drawer-activate="{default: true, lg: false}"
                 data-kt-drawer-overlay="true"
                 data-kt-drawer-width="250px"
                 data-kt-drawer-direction="{{ app()->getLocale() == 'ar' ? 'start' : 'end' }}"
                 data-kt-drawer-toggle="#kt_app_header_menu_toggle"
                 data-kt-swapper="true"
                 data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                 data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

                {{-- Begin::Menu --}}
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                    @yield('header-menu')
                </div>
                {{-- End::Menu --}}

            </div>
            {{-- End::Menu wrapper --}}

            {{-- Begin::Navbar --}}
            <div class="app-navbar flex-shrink-0">

                {{-- Begin::Search --}}
                <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
                    <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="{{ app()->getLocale() == 'ar' ? 'bottom-start' : 'bottom-end' }}">
                        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                <i class="ki-duotone ki-magnifier fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End::Search --}}

                {{-- Begin::Activities --}}
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
                        <i class="ki-duotone ki-chart-simple fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                </div>
                {{-- End::Activities --}}

                {{-- Begin::Notifications --}}
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="{{ app()->getLocale() == 'ar' ? 'bottom-start' : 'bottom-end' }}">
                        <i class="ki-duotone ki-abstract-4 fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                {{-- End::Notifications --}}

                {{-- Begin::Chat --}}
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
                        <i class="ki-duotone ki-message-text-2 fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                    </div>
                </div>
                {{-- End::Chat --}}

                {{-- Begin::My apps --}}
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="{{ app()->getLocale() == 'ar' ? 'bottom-start' : 'bottom-end' }}">
                        <i class="ki-duotone ki-element-11 fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                </div>
                {{-- End::My apps --}}

                {{-- Begin::Theme mode --}}
                <div class="app-navbar-item ms-1 ms-md-3">
                    <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="{{ app()->getLocale() == 'ar' ? 'bottom-start' : 'bottom-end' }}">
                        <i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                            <span class="path8"></span>
                            <span class="path9"></span>
                            <span class="path10"></span>
                        </i>
                        <i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>

                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-night-day fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                        <span class="path9"></span>
                                        <span class="path10"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Light</span>
                            </a>
                        </div>
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-moon fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Dark</span>
                            </a>
                        </div>
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-screen fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">System</span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- End::Theme mode --}}

                {{-- Begin::Language Switcher --}}
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="{{ app()->getLocale() == 'ar' ? 'bottom-start' : 'bottom-end' }}">
                        <i class="ki-duotone ki-global fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        AR
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                        <div class="fw-bold fs-5">{{ __('Select Language') }}</div>
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-3">
                            <a href="{{ route('lang.switch', 'en') }}" class="menu-link px-3 {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                                <span class="menu-icon">
                                    <span class="fi fi-us fs-4"></span>
                                </span>
                                <span class="menu-title">{{ __('English') }}</span>
                                @if(app()->getLocale() == 'en')
                                    <span class="menu-badge">
                                        <i class="ki-duotone ki-check fs-2 text-success"></i>
                                    </span>
                                @endif
                            </a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="{{ route('lang.switch', 'ar') }}" class="menu-link px-3 {{ app()->getLocale() == 'ar' ? 'active' : '' }}">
                                <span class="menu-icon">
                                    <span class="fi fi-sa fs-4"></span>
                                </span>
                                <span class="menu-title">{{ __('Arabic') }}</span>
                                @if(app()->getLocale() == 'ar')
                                    <span class="menu-badge">
                                        <i class="ki-duotone ki-check fs-2 text-success"></i>
                                    </span>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
                {{-- End::Language Switcher --}}

                {{-- Begin::User menu --}}
                <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="{{ app()->getLocale() == 'ar' ? 'bottom-start' : 'bottom-end' }}">
                        <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="user" />
                    </div>

                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        {{ Auth::user()->name ?? 'User Name' }}
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email ?? 'user@email.com' }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="separator my-2"></div>

                        <div class="menu-item px-5">
                            <a href="{{ route('profile.edit') }}" class="menu-link px-5">{{ __('My Profile') }}</a>
                        </div>


                        <div class="separator my-2"></div>

                        <div class="menu-item px-5">
                            <a href="{{ route('logout') }}" class="menu-link px-5"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Sign Out') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                {{-- End::User menu --}}

                {{-- Begin::Header menu toggle --}}
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                {{-- End::Header menu toggle --}}

            </div>
            {{-- End::Navbar --}}

        </div>
        {{-- End::Header wrapper --}}

    </div>
</div>
{{-- End::Header --}}
