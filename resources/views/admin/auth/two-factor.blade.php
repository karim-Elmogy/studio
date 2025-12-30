<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../../"/>
    <title>Two-Factor Authentication | Alexon System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank" style="background-color: #151521;color: white">
<script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
        } else {
            themeMode = defaultThemeMode;
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>

<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">

        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <div class="w-lg-500px p-10">

                    <!-- Logo Section -->
                    <div class="text-center mb-20">
                        <a href="{{ url('/') }}" class="d-inline-block">

                                <img alt="" src="{{ asset('assets/media/logos/custom-1.png') }}" class="h-100px h-lg-120px" style="max-width: 300px; object-fit: contain;" />
                        </a>
                    </div>

                    <!-- 2FA Verification Form -->
                    <div class="text-center mb-10">
                        <h1 class="text-white fw-bolder mb-3">{{ __('app.Credential Details') }}</h1>
                        <div class="text-whitetext-white fw-semibold fs-6 mb-8">
                            {{ __('app.Verification Code') }}
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success d-flex align-items-center p-5 mb-10">
                            <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <div class="d-flex flex-column">
                                <h4 class="mb-1 text-success">Success</h4>
                                <span>{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('2fa.verify') }}" class="form w-100" novalidate>
                        @csrf

                        <!-- Verification Code -->
                        <div class="fv-row mb-8">
                            <label class="form-label fw-bolder text-white fs-6 mb-2">{{ __('app.Verification Code') }}</label>
                            <input type="text" name="code" value="{{ old('code') }}" required autofocus
                                   placeholder="Enter 6-digit code" class="form-control bg-transparent text-center"
                                   maxlength="6" pattern="[0-9]{6}" autocomplete="one-time-code" />
                            @error('code')
                            <div class="text-danger fs-7 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <div class="d-grid mb-10">
                            <button type="submit" class="btn btn-primary" id="kt_2fa_submit">
                            <span class="indicator-label">{{ __('app.Verification Code') }}</span>
                            <span class="indicator-progress">{{ __('app.Please wait...') }}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                        <!-- Resend Code -->
                        <div class="text-center">
                            <span class="text-white fw-semibold fs-6">{{ __("app.Didn't receive the code?") }}</span>
                            <form method="POST" action="{{ route('2fa.resend') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 align-baseline link-primary fw-bold">{{ __('app.Resend Code') }}</button>
                            </form>
                        </div>

                        <!-- Back to Login -->
                        <div class="text-center mt-5">
                            <a href="{{ route('login') }}" class="link-primary fw-bold">{{ __('app.Back to Login') }}</a>
                        </div>

                </div>
            </div>
        </div>


    </div>
</div>

<script>var hostUrl = "{{ asset('assets/') }}/";</script>
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script>
    // Auto-focus on code input and format input
    document.addEventListener('DOMContentLoaded', function() {
        const codeInput = document.querySelector('input[name="code"]');
        if (codeInput) {
            codeInput.focus();

            // Only allow numbers and limit to 6 digits
            codeInput.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^0-9]/g, '').substring(0, 6);

                // Auto-submit when 6 digits are entered
                if (this.value.length === 6) {
                    document.getElementById('kt_2fa_submit').click();
                }
            });
        }
    });
</script>
</body>
</html>
