{{-- Begin::Sidebar --}}
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="{{ app()->getLocale() == 'ar' ? 'end' : 'start' }}" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    {{-- Begin::Logo --}}
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="{{ route('home') }}">
            <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}" class="h-25px app-sidebar-logo-default" />
             <img alt="Logo" src="{{ asset('assets/media/logos/default-small.svg') }}" class="h-20px app-sidebar-logo-minimize" />
        </a>

        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    {{-- End::Logo --}}

    {{-- Begin::sidebar menu --}}
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">

            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

                {{-- Dashboard --}}
                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">{{ __('admin.dashboard') }}</span>
                    </a>
                </div>

                {{-- Separator for Content Management --}}
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ __('admin.content_management') }}</span>
                    </div>
                </div>

                {{-- Services Section --}}
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('admin.services.*', 'admin.service-page-settings.*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-briefcase fs-2"></i>
                        </span>
                        <span class="menu-title">{{ __('admin.services') }}</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.all_services') }}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.service-page-settings.*') ? 'active' : '' }}" href="{{ route('admin.service-page-settings.edit') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.service_page_settings') }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Projects Section --}}
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('admin.projects.*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-folder-open fs-2"></i>
                        </span>
                        <span class="menu-title">{{ __('admin.projects') }}</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.projects.index') && !request('type') ? 'active' : '' }}" href="{{ route('admin.projects.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.all_projects') }}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request('type') === 'mobile' ? 'active' : '' }}" href="{{ route('admin.projects.index', ['type' => 'mobile']) }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.mobile_projects') }}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request('type') === 'web' ? 'active' : '' }}" href="{{ route('admin.projects.index', ['type' => 'web']) }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.web_projects') }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Blog Section --}}
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('admin.blogs.*', 'admin.blog-page-settings.*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-newspaper fs-2"></i>
                        </span>
                        <span class="menu-title">{{ __('admin.blogs') }}</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}" href="{{ route('admin.blogs.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.all_blogs') }}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.blog-page-settings.*') ? 'active' : '' }}" href="{{ route('admin.blog-page-settings.edit') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.blog_page_settings') }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- FAQ Section --}}
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('admin.faqs.*', 'admin.faq-page-settings.*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-question-circle fs-2"></i>
                        </span>
                        <span class="menu-title">{{ __('admin.faqs') }}</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}" href="{{ route('admin.faqs.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.all_faqs') }}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.faq-page-settings.*') ? 'active' : '' }}" href="{{ route('admin.faq-page-settings.edit') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.faq_page_settings') }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Testimonials --}}
                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}" href="{{ route('admin.testimonials.index') }}">
                        <span class="menu-icon">
                            <i class="fa-solid fa-star fs-2"></i>
                        </span>
                        <span class="menu-title">{{ __('admin.testimonials') }}</span>
                    </a>
                </div>

                {{-- Contact Messages --}}
                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
                        <span class="menu-icon">
                            <i class="fa-solid fa-envelope fs-2"></i>
                        </span>
                        <span class="menu-title">{{ __('admin.messages') }}</span>
                    </a>
                </div>

                {{-- Separator for Settings --}}
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ __('admin.settings') }}</span>
                    </div>
                </div>

                {{-- Page Settings --}}
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('admin.home-page-settings.*', 'admin.contact-page-settings.*', 'admin.footer-settings.*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-sliders fs-2"></i>
                        </span>
                        <span class="menu-title">{{ __('admin.page_settings') }}</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.home-page-settings.*') ? 'active' : '' }}" href="{{ route('admin.home-page-settings.edit') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.home_page_settings') }}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.contact-page-settings.*') ? 'active' : '' }}" href="{{ route('admin.contact-page-settings.edit') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.contact_page_settings') }}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('admin.footer-settings.*') ? 'active' : '' }}" href="{{ route('admin.footer-settings.edit') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">{{ __('admin.footer_settings') }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- General Settings --}}
                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}" href="{{ route('admin.settings.index') }}">
                        <span class="menu-icon">
                            <i class="fa-solid fa-cog fs-2"></i>
                        </span>
                        <span class="menu-title">{{ __('admin.general_settings') }}</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
