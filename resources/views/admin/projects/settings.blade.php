@extends('admin.layouts.master')

@section('title', __('admin.project_page_settings'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.project_page_settings') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('admin.projects.index') }}" class="text-muted text-hover-primary">{{ __('admin.projects') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('admin.settings') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-light">
            <i class="fa-solid fa-arrow-left"></i>
            {{ __('admin.back') }}
        </a>
    </div>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="fa-solid fa-circle-check fs-2 me-3 text-success"></i>
            <div>{{ session('success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('admin.project-page-settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card shadow-sm">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-cog text-primary me-2"></i>
                        {{ __('admin.hero_section') }}
                    </span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Hero Subtitle --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.hero_subtitle') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="hero_subtitle_en" rows="3"
                                          class="form-control form-control-solid @error('hero_subtitle_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.hero_subtitle') }} ({{ __('admin.english') }})"
                                          required>{{ old('hero_subtitle_en', $settings->hero_subtitle['en'] ?? '') }}</textarea>
                                @error('hero_subtitle_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="hero_subtitle_ar" rows="3"
                                          class="form-control form-control-solid @error('hero_subtitle_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.hero_subtitle') }} ({{ __('admin.arabic') }})"
                                          required dir="rtl">{{ old('hero_subtitle_ar', $settings->hero_subtitle['ar'] ?? '') }}</textarea>
                                @error('hero_subtitle_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Hero Title --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.hero_title') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="hero_title_en"
                                       class="form-control form-control-lg form-control-solid @error('hero_title_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.hero_title') }} ({{ __('admin.english') }})"
                                       value="{{ old('hero_title_en', $settings->hero_title['en'] ?? '') }}" required />
                                @error('hero_title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="hero_title_ar"
                                       class="form-control form-control-lg form-control-solid @error('hero_title_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.hero_title') }} ({{ __('admin.arabic') }})"
                                       value="{{ old('hero_title_ar', $settings->hero_title['ar'] ?? '') }}" required dir="rtl" />
                                @error('hero_title_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Hero Background Image --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.hero_background_image') }}</label>
                    <div class="col-lg-10">
                        <input type="file" name="hero_background_image"
                               class="form-control form-control-solid @error('hero_background_image') is-invalid @enderror"
                               accept="image/*">
                        @error('hero_background_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if($settings->hero_background_image)
                            <div class="mt-3">
                                <img src="{{ asset('storage/' . $settings->hero_background_image) }}" 
                                     alt="Hero Background" 
                                     style="max-width: 300px; height: auto; border-radius: 5px;">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mt-5">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-user text-primary me-2"></i>
                        {{ __('admin.avatar_section') }}
                    </span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Avatar Image --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.avatar_image') }}</label>
                    <div class="col-lg-10">
                        <input type="file" name="avatar_image"
                               class="form-control form-control-solid @error('avatar_image') is-invalid @enderror"
                               accept="image/*">
                        @error('avatar_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if($settings->avatar_image)
                            <div class="mt-3">
                                <img src="{{ asset('storage/' . $settings->avatar_image) }}" 
                                     alt="Avatar" 
                                     style="max-width: 150px; height: auto; border-radius: 50%;">
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Avatar Number --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.avatar_number') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="avatar_number"
                               class="form-control form-control-lg form-control-solid @error('avatar_number') is-invalid @enderror"
                               placeholder="2500+"
                               value="{{ old('avatar_number', $settings->avatar_number ?? '2500+') }}">
                        @error('avatar_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Avatar Text --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.avatar_text') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="avatar_text_en"
                                       class="form-control form-control-solid @error('avatar_text_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.avatar_text') }} ({{ __('admin.english') }})"
                                       value="{{ old('avatar_text_en', $settings->avatar_text['en'] ?? '') }}">
                                @error('avatar_text_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="avatar_text_ar"
                                       class="form-control form-control-solid @error('avatar_text_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.avatar_text') }} ({{ __('admin.arabic') }})"
                                       value="{{ old('avatar_text_ar', $settings->avatar_text['ar'] ?? '') }}" dir="rtl">
                                @error('avatar_text_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mt-5">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-link text-primary me-2"></i>
                        {{ __('admin.button_section') }}
                    </span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Button Text --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.button_text') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="button_text_en"
                                       class="form-control form-control-solid @error('button_text_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.button_text') }} ({{ __('admin.english') }})"
                                       value="{{ old('button_text_en', $settings->button_text['en'] ?? '') }}">
                                @error('button_text_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="button_text_ar"
                                       class="form-control form-control-solid @error('button_text_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.button_text') }} ({{ __('admin.arabic') }})"
                                       value="{{ old('button_text_ar', $settings->button_text['ar'] ?? '') }}" dir="rtl">
                                @error('button_text_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Button URL --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.button_url') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="button_url"
                               class="form-control form-control-solid @error('button_url') is-invalid @enderror"
                               placeholder="https://example.com or #"
                               value="{{ old('button_url', $settings->button_url ?? '#') }}">
                        @error('button_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mt-5">
            <div class="card-body">
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-save me-2"></i>
                        {{ __('admin.update') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection

