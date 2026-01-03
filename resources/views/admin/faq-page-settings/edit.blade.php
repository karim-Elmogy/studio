@extends('admin.layouts.master')

@section('title', __('admin.faq_page_settings'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('admin.faq_page_settings') }}</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('admin.faq-page-settings.update') }}" method="POST">
                        @csrf

                        <!-- Hero Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.hero_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_subtitle') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('hero_subtitle_en') is-invalid @enderror"
                                               name="hero_subtitle_en" value="{{ old('hero_subtitle_en', $settings->hero_subtitle['en'] ?? '') }}" required>
                                        @error('hero_subtitle_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_subtitle') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('hero_subtitle_ar') is-invalid @enderror"
                                               name="hero_subtitle_ar" value="{{ old('hero_subtitle_ar', $settings->hero_subtitle['ar'] ?? '') }}" required>
                                        @error('hero_subtitle_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_title') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('hero_title_en') is-invalid @enderror"
                                               name="hero_title_en" value="{{ old('hero_title_en', $settings->hero_title['en'] ?? '') }}" required>
                                        @error('hero_title_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_title') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('hero_title_ar') is-invalid @enderror"
                                               name="hero_title_ar" value="{{ old('hero_title_ar', $settings->hero_title['ar'] ?? '') }}" required>
                                        @error('hero_title_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_description') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control @error('hero_description_en') is-invalid @enderror"
                                               name="hero_description_en" rows="3">{{ old('hero_description_en', $settings->hero_description['en'] ?? '') }}</textarea>
                                        @error('hero_description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_description') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control @error('hero_description_ar') is-invalid @enderror"
                                               name="hero_description_ar" rows="3">{{ old('hero_description_ar', $settings->hero_description['ar'] ?? '') }}</textarea>
                                        @error('hero_description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.scroll_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('scroll_text_en') is-invalid @enderror"
                                               name="scroll_text_en" value="{{ old('scroll_text_en', $settings->scroll_text['en'] ?? '') }}">
                                        @error('scroll_text_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.scroll_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('scroll_text_ar') is-invalid @enderror"
                                               name="scroll_text_ar" value="{{ old('scroll_text_ar', $settings->scroll_text['ar'] ?? '') }}">
                                        @error('scroll_text_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.cta_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.cta_title') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('cta_title_en') is-invalid @enderror"
                                               name="cta_title_en" value="{{ old('cta_title_en', $settings->cta_title['en'] ?? '') }}">
                                        @error('cta_title_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.cta_title') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('cta_title_ar') is-invalid @enderror"
                                               name="cta_title_ar" value="{{ old('cta_title_ar', $settings->cta_title['ar'] ?? '') }}">
                                        @error('cta_title_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.cta_description') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control @error('cta_description_en') is-invalid @enderror"
                                               name="cta_description_en" rows="2">{{ old('cta_description_en', $settings->cta_description['en'] ?? '') }}</textarea>
                                        @error('cta_description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.cta_description') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control @error('cta_description_ar') is-invalid @enderror"
                                               name="cta_description_ar" rows="2">{{ old('cta_description_ar', $settings->cta_description['ar'] ?? '') }}</textarea>
                                        @error('cta_description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">{{ __('admin.update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
