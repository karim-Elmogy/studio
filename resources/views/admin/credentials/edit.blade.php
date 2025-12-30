@extends('admin.layouts.master')
@section('title', __('Edit Credential'))
@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ __('Edit Credential') }}</h1>
    </div>
@endsection
@section('content')
    <div class="card">
        <form method="POST" action="{{ route('credentials.update', $credential) }}" class="form" novalidate>
            @csrf
            @method('PUT')
            <div class="card-body p-9">
                {{-- Success Message --}}
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-6" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('URL') }}</label>
                    <div class="col-lg-10">
                        <input type="url"
                               name="url"
                               value="{{ old('url', $credential->url) }}"
                               class="form-control @error('url') is-invalid @enderror"
                               autocomplete="url"
                               required>
                        @error('url')
                        <div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('Username') }}</label>
                    <div class="col-lg-10">
                        <input type="text"
                               name="username"
                               value="{{ old('username', $credential->username) }}"
                               class="form-control @error('username') is-invalid @enderror"
                               autocomplete="username"
                               required>
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('Password') }}</label>
                    <div class="col-lg-10">
                        <div class="position-relative">
                            <input type="password"
                                   name="password"
                                   id="password-input"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="{{ __('Leave blank to keep current') }}"
                                   autocomplete="new-password">
                            <button type="button"
                                    class="btn btn-sm btn-icon btn-active-color-primary position-absolute end-0 top-50 translate-middle-y me-2"
                                    id="toggle-password"
                                    title="{{ __('Show password') }}">
                                <i class="ki-outline ki-eye fs-2" id="eye-icon"></i>
                            </button>
                        </div>
                        @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                        <div class="form-text">{{ __('Leave blank to keep the current password') }}</div>
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('Server Name') }}</label>
                    <div class="col-lg-10">
                        <input type="text"
                               name="server_name"
                               value="{{ old('server_name', $credential->server_name) }}"
                               class="form-control @error('server_name') is-invalid @enderror"
                               autocomplete="off">
                        @error('server_name')
                        <div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('credentials.index') }}" class="btn btn-light me-3">{{ __('Cancel') }}</a>
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">{{ __('Update') }}</span>
                    <span class="indicator-progress d-none">
                        {{ __('Please wait...') }}
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Toggle password visibility
                const toggleBtn = document.getElementById('toggle-password');
                const passwordInput = document.getElementById('password-input');
                const eyeIcon = document.getElementById('eye-icon');

                if (toggleBtn && passwordInput) {
                    toggleBtn.addEventListener('click', function () {
                        const type = passwordInput.type === 'password' ? 'text' : 'password';
                        passwordInput.type = type;

                        // Toggle icon
                        if (type === 'password') {
                            eyeIcon.classList.remove('ki-eye-slash');
                            eyeIcon.classList.add('ki-eye');
                            toggleBtn.title = '{{ __('Show password') }}';
                        } else {
                            eyeIcon.classList.remove('ki-eye');
                            eyeIcon.classList.add('ki-eye-slash');
                            toggleBtn.title = '{{ __('Hide password') }}';
                        }
                    });
                }

                // Form submission loading state
                const form = document.querySelector('form');
                if (form) {
                    form.addEventListener('submit', function () {
                        const submitBtn = this.querySelector('button[type="submit"]');
                        const label = submitBtn.querySelector('.indicator-label');
                        const progress = submitBtn.querySelector('.indicator-progress');

                        if (label && progress) {
                            label.classList.add('d-none');
                            progress.classList.remove('d-none');
                            submitBtn.disabled = true;
                        }
                    });
                }
            });
        </script>
    @endpush
@endsection
