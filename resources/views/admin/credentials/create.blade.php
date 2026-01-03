@extends('admin.layouts.master')
@section('title', __('app.Add Credential'))
@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ __('app.Add Credential') }}</h1>
    </div>
@endsection
@section('content')
    <div class="card">
        <form method="POST" action="{{ route('credentials.store') }}" class="form" novalidate>
            @csrf
            <div class="card-body p-9">
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('app.URL') }}</label>
                    <div class="col-lg-10">
                        <input type="url" name="url" value="{{ old('url') }}" class="form-control @error('url') is-invalid @enderror" required>
                        @error('url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('app.User') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" required>
                        @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('app.Password') }}</label>
                    <div class="col-lg-10">
                        <div class="position-relative">
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" required>
                            <button type="button" class="btn btn-sm btn-icon position-absolute end-0 top-50 translate-middle-y me-2" onclick="togglePassword(this)">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                        </div>
                        @error('password')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('app.Server Name') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="server_name" value="{{ old('server_name') }}" class="form-control @error('server_name') is-invalid @enderror">
                        @error('server_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('credentials.index') }}" class="btn btn-light me-3">{{ __('app.Cancel') }}</a>
                <button type="submit" class="btn btn-primary">{{ __('app.Save') }}</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function togglePassword(button) {
            const input = button.parentElement.querySelector('input');
            const icon = button.querySelector('i');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bi-eye-fill');
                icon.classList.add('bi-eye-slash-fill');
            } else {
                input.type = 'password';
                icon.classList.remove('bi-eye-slash-fill');
                icon.classList.add('bi-eye-fill');
            }
        }
    </script>
@endpush
