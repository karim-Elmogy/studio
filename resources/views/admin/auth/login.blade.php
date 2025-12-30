<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../../"/>
    <title>Login | Alexon System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank" style="background-color: #151521">
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
                                <img alt="" src="{{ asset('assets/media/logos/custom-1.png') }}" class="h-100px h-lg-120px" style="max-width: 300px; object-fit: contain;" />                        </a>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="form w-100" novalidate>
                        @csrf




                        <!-- Email -->
                        <div class="fv-row mb-8">
                            <input type="email" name="email" value="{{ old('email') }}" required autofocus
                                   placeholder="{{ __('app.Email') }}" class="form-control bg-transparent" autocomplete="username" />
                            @error('email')
                            <div class="text-danger fs-7 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="fv-row mb-3">
                            <input type="password" name="password" required
                                   placeholder="{{ __('app.Password') }}" class="form-control bg-transparent" autocomplete="current-password" />
                            @error('password')
                            <div class="text-danger fs-7 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember & Forgot -->
                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8 mt-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                                <label class="form-check-label" for="remember_me">{{ __('app.Remember me') }}</label>
                            </div>


                        </div>

                        <!-- Submit -->
                        <div class="d-grid mb-10">
                            <button type="submit" class="btn btn-primary" id="kt_sign_in_submit">
                                <span class="indicator-label">{{ __('app.Sign In') }}</span>
                                <span class="indicator-progress">{{ __('app.Please wait...') }}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>


        </div>


    </div>
</div>

<script>var hostUrl = "{{ asset('assets/') }}/";</script>
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
</body>
</html>
