@extends('admin.layouts.master')

@section('title', __('admin.blog_page_settings'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('admin.blog_page_settings') }}</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('admin.blog-page-settings.update') }}" method="POST" enctype="multipart/form-data">
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

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.background_image') }}</label>
                                @if($settings->hero_background_image)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $settings->hero_background_image) }}" alt="Current background" style="max-width: 200px; max-height: 150px;">
                                    </div>
                                @endif
                                <input type="file" class="form-control @error('hero_background_image') is-invalid @enderror"
                                       name="hero_background_image" accept="image/*">
                                <small class="text-muted">{{ __('admin.leave_empty_keep_current') }}</small>
                                @error('hero_background_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
