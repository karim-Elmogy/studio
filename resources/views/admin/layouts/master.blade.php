<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <base href="{{ url('/') }}"/>
    <title>@yield('title', config('app.name', 'Alexon System'))</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Company Favicon --}}
        <link rel="icon" type="image/x-icon" href="{{ url('/assets/media/logos/favicon.ico') }}" />

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    {{-- Vendor Stylesheets --}}
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    {{-- Font Awesome for jsTree icons (fas/fa-*) --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->



    @if(app()->getLocale() == 'ar')
        {{-- RTL Styles --}}
        <link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    @else
        {{-- LTR Styles --}}
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @endif

    <style>
        /* Global direction-safe icon rendering (applies to all pages) */
        .ki-duotone,
        .ki-outline,
        .ki-solid,
        .fa, .fas, .far, .fal, .fab,
        [class^="bi-"], [class*=" bi-"] {
            direction: ltr;
            display: inline-flex;
            vertical-align: middle;
        }

        /* Logical spacing for inline icons used by trees/menus/buttons */
        .jstree-anchor > i,
        .menu-item > i,
        .btn > i,
        a > i {
            margin-inline-end: .35rem;
        }

        /* Company Logo Styling - applies to both LTR and RTL */
        .app-sidebar-logo img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        /* Center logo in sidebar for both layouts */
        .app-sidebar-logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .app-sidebar-logo-default {
            height: 45px !important;
        }

        .app-sidebar-logo-minimize {
            height: 35px !important;
        }
    </style>

    {{-- Custom RTL Fixes --}}
    @if(app()->getLocale() == 'ar')
        <style>
            /* Fix missing Keenicons font paths in RTL build */
            @font-face {
                font-family: 'keenicons-duotone';
                src: url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-duotone.eot') }}');
                src: url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-duotone.eot') }}#iefix') format('embedded-opentype'),
                     url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-duotone.ttf') }}') format('truetype'),
                     url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-duotone.woff') }}') format('woff'),
                     url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-duotone.svg') }}#keenicons-duotone') format('svg');
                font-weight: normal;
                font-style: normal;
                font-display: block;
            }

            @font-face {
                font-family: 'keenicons-outline';
                src: url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-outline.eot') }}');
                src: url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-outline.eot') }}#iefix') format('embedded-opentype'),
                     url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-outline.ttf') }}') format('truetype'),
                     url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-outline.woff') }}') format('woff'),
                     url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-outline.svg') }}#keenicons-outline') format('svg');
                font-weight: normal;
                font-style: normal;
                font-display: block;
            }

            @font-face {
                font-family: 'keenicons-solid';
                src: url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-solid.eot') }}');
                src: url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-solid.eot') }}#iefix') format('embedded-opentype'),
                     url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-solid.ttf') }}') format('truetype'),
                     url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-solid.woff') }}') format('woff'),
                     url('{{ asset('assets/plugins/global/fonts/keenicons/keenicons-solid.svg') }}#keenicons-solid') format('svg');
                font-weight: normal;
                font-style: normal;
                font-display: block;
            }

            body {
                font-family: "Tajawal", sans-serif;
            }

            /* RTL Custom Fixes */
            .app-sidebar {
                right: 0;
                left: auto;
            }

            .app-sidebar-toggle {
                transform: scaleX(-1);
            }

            .menu-arrow {
                transform: rotate(180deg);
            }

            .breadcrumb-item + .breadcrumb-item::before {
                float: right;
                padding-left: 0.5rem;
                padding-right: 0;
            }

            .text-end {
                text-align: left !important;
            }

            .text-start {
                text-align: right !important;
            }

            /* NOTE: Do not override Bootstrap logical spacing utilities (ms-*, me-*, ps-*, pe-*)
               to preserve correct RTL/LTR behavior project-wide. */

            /* Fix icons rendering in RTL (Keenicons) */
            .ki-duotone,
            .ki-outline,
            .ki-solid {
                direction: ltr; /* prevent flipping of layered glyphs in RTL */
                display: inline-flex; /* align properly with text */
                font-style: normal;
            }

            /* Ensure Bootstrap Icons keep their font in RTL */
            [class*=" bi-"]::before {
                font-family: bootstrap-icons !important;
                font-style: normal;
            }

            /* Fix table alignment */
            table th, table td {
                text-align: right;
            }

            table th.text-end, table td.text-end {
                text-align: left !important;
            }

            /* Increase font size for Arabic */
            body, html {
                font-size: 15px !important;
            }

            .card, .modal, .form-control, .btn, .menu-item, .menu-link {
                font-size: 15px !important;
            }

            .modal-title, .card-title {
                font-size: 18px !important;
            }

            .form-label {
                font-size: 14px !important;
            }

        </style>
    @endif

    {{-- Additional Styles --}}
    @stack('styles')

    <style>
        .fl-wrapper {
            position: fixed !important;
            z-index: 2147483647 !important;
        }

    </style>
</head>

<body id="kt_app_body"
      data-kt-app-layout="{{ $layout ?? 'dark-sidebar' }}"
      data-kt-app-header-fixed="true"
      @if(!isset($hasSidebar) || $hasSidebar)
          data-kt-app-sidebar-enabled="true"
      data-kt-app-sidebar-fixed="true"
      data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true"
      data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true"
      @endif
      data-kt-app-toolbar-enabled="true"
      class="app-default">

{{-- Theme mode setup on page load --}}
<script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>

{{-- Begin::App --}}
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

        {{-- Include Header --}}
        @include('layouts.header')

        {{-- Begin::Wrapper --}}
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

            {{-- Include Sidebar if enabled (default: on) --}}
            @if(!isset($hasSidebar) || $hasSidebar)
                @include('layouts.sidebar')
            @endif

            {{-- Begin::Main --}}
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                {{-- Begin::Content wrapper --}}
                <div class="d-flex flex-column flex-column-fluid">

                    {{-- Begin::Toolbar --}}
                    @if(!isset($hideToolbar) || !$hideToolbar)
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                                @yield('toolbar')
                            </div>
                        </div>
                    @endif
                    {{-- End::Toolbar --}}

                    {{-- Begin::Content --}}
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            @yield('content')
                        </div>
                    </div>
                    {{-- End::Content --}}

                </div>
                {{-- End::Content wrapper --}}


                {{-- End::Footer --}}

            </div>
            {{-- End::Main --}}

        </div>
        {{-- End::Wrapper --}}

    </div>
</div>
{{-- End::App --}}

{{-- Scrolltop --}}
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>

{{-- Global Javascript Bundle --}}
<script>var hostUrl = "{{ asset('assets/') }}/";</script>
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

{{-- Vendors Javascript --}}
<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

{{-- Custom Javascript --}}
<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>

{{-- Additional Scripts --}}
@stack('scripts')
<script src="{{ asset('assets/js/accounting-tree.js') }}"></script>

</body>
</html>
