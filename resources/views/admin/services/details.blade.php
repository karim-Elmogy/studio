@extends('admin.layouts.master')

@section('title', __('Edit Service Details') . ' - ' . ($service->title[app()->getLocale()] ?? $service->title['en'] ?? ''))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('Edit Service Details') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('admin.services.index') }}" class="text-muted text-hover-primary">{{ __('admin.services') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('Edit Details') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-light">
            <i class="fa-solid fa-arrow-left"></i>
            {{ __('admin.back') }}
        </a>
        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-info">
            <i class="fa-solid fa-pen"></i>
            {{ __('Edit Basic Info') }}
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

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-circle-exclamation fs-2 me-3"></i>
            <div>
                <strong>{{ __('Validation Errors:') }}</strong>
                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('admin.services.details.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Hero Section --}}
        <div class="card shadow-sm mb-5">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-image text-primary me-2"></i>
                        {{ __('Hero Section') }}
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">{{ __('Top banner area of service page') }}</span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Hero Subtitle --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Subtitle') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English</label>
                                <input type="text" name="hero_subtitle_en" class="form-control" value="{{ old('hero_subtitle_en', $service->hero_subtitle['en'] ?? '') }}" placeholder="Enter subtitle in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="hero_subtitle_ar" class="form-control" value="{{ old('hero_subtitle_ar', $service->hero_subtitle['ar'] ?? '') }}" placeholder="أدخل العنوان الفرعي بالعربية" dir="rtl">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Hero Title --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Title') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English</label>
                                <input type="text" name="hero_title_en" class="form-control" value="{{ old('hero_title_en', $service->hero_title['en'] ?? '') }}" placeholder="Enter title in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="hero_title_ar" class="form-control" value="{{ old('hero_title_ar', $service->hero_title['ar'] ?? '') }}" placeholder="أدخل العنوان بالعربية" dir="rtl">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Hero Description --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Description') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English</label>
                                <textarea name="hero_description_en" class="form-control" rows="4" placeholder="Enter description in English">{{ old('hero_description_en', $service->hero_description['en'] ?? '') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <textarea name="hero_description_ar" class="form-control" rows="4" placeholder="أدخل الوصف بالعربية" dir="rtl">{{ old('hero_description_ar', $service->hero_description['ar'] ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Hero Image --}}
                {{-- <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Hero Image') }}</label>
                    <div class="col-lg-9">
                        @if($service->hero_image)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $service->hero_image) }}" alt="Hero Image" class="img-fluid rounded shadow" style="max-height: 200px;">
                            </div>
                        @endif
                        <input type="file" name="hero_image" class="form-control" accept="image/*">
                        <div class="form-text">{{ __('Recommended size: 1920x1080px. Leave empty to keep current image.') }}</div>
                    </div>
                </div> --}}
            </div>
        </div>

        {{-- Process Section --}}
        <div class="card shadow-sm mb-5">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-list-check text-success me-2"></i>
                        {{ __('Process Section') }}
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">{{ __('Working process steps') }}</span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Process Title --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Title') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English</label>
                                <input type="text" name="process_title_en" class="form-control" value="{{ old('process_title_en', $service->process_title['en'] ?? '') }}" placeholder="Enter process title in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="process_title_ar" class="form-control" value="{{ old('process_title_ar', $service->process_title['ar'] ?? '') }}" placeholder="أدخل عنوان العملية بالعربية" dir="rtl">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Process Steps --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Steps') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English (one per line)</label>
                                <textarea name="process_steps_en" class="form-control" rows="6" placeholder="Enter each step on a new line">{{ old('process_steps_en', isset($service->process_steps) && is_array($service->process_steps) ? implode("\n", array_column($service->process_steps, 'en')) : '') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية (واحد في كل سطر)</label>
                                <textarea name="process_steps_ar" class="form-control" rows="6" placeholder="أدخل كل خطوة في سطر جديد" dir="rtl">{{ old('process_steps_ar', isset($service->process_steps) && is_array($service->process_steps) ? implode("\n", array_column($service->process_steps, 'ar')) : '') }}</textarea>
                            </div>
                        </div>
                        <div class="form-text">{{ __('Enter one step per line. Both languages should have the same number of lines.') }}</div>
                    </div>
                </div>

                {{-- Process Description --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Description') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English</label>
                                <textarea name="process_description_en" class="form-control" rows="4" placeholder="Enter process description in English">{{ old('process_description_en', $service->process_description['en'] ?? '') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <textarea name="process_description_ar" class="form-control" rows="4" placeholder="أدخل وصف العملية بالعربية" dir="rtl">{{ old('process_description_ar', $service->process_description['ar'] ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Process Image --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Process Image') }}</label>
                    <div class="col-lg-9">
                        @if($service->process_image)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $service->process_image) }}" alt="Process Image" class="img-fluid rounded shadow" style="max-height: 200px;">
                            </div>
                        @endif
                        <input type="file" name="process_image" class="form-control" accept="image/*">
                        <div class="form-text">{{ __('Recommended size: 800x600px. Leave empty to keep current image.') }}</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Benefits Section --}}
        <div class="card shadow-sm mb-5">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-star text-warning me-2"></i>
                        {{ __('Benefits Section') }}
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">{{ __('Service benefits') }}</span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Benefits Title --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Title') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English</label>
                                <input type="text" name="benefits_title_en" class="form-control" value="{{ old('benefits_title_en', $service->benefits_title['en'] ?? '') }}" placeholder="Enter benefits title in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="benefits_title_ar" class="form-control" value="{{ old('benefits_title_ar', $service->benefits_title['ar'] ?? '') }}" placeholder="أدخل عنوان الفوائد بالعربية" dir="rtl">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Benefits Description --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Description') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English</label>
                                <textarea name="benefits_description_en" class="form-control" rows="4" placeholder="Enter benefits description in English">{{ old('benefits_description_en', $service->benefits_description['en'] ?? '') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <textarea name="benefits_description_ar" class="form-control" rows="4" placeholder="أدخل وصف الفوائد بالعربية" dir="rtl">{{ old('benefits_description_ar', $service->benefits_description['ar'] ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Features Section --}}
        <div class="card shadow-sm mb-5">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-sparkles text-danger me-2"></i>
                        {{ __('Features Highlight') }}
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">{{ __('Special features section') }}</span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Features Title --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Title') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English</label>
                                <input type="text" name="features_title_en" class="form-control" value="{{ old('features_title_en', $service->features_title['en'] ?? '') }}" placeholder="Enter features title in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="features_title_ar" class="form-control" value="{{ old('features_title_ar', $service->features_title['ar'] ?? '') }}" placeholder="أدخل عنوان الميزات بالعربية" dir="rtl">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Features Image --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Features Image') }}</label>
                    <div class="col-lg-9">
                        @if($service->features_image)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $service->features_image) }}" alt="Features Image" class="img-fluid rounded shadow" style="max-height: 200px;">
                            </div>
                        @endif
                        <input type="file" name="features_image" class="form-control" accept="image/*">
                        <div class="form-text">{{ __('Recommended size: 1200x800px. Leave empty to keep current image.') }}</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Action Buttons --}}
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('admin.services.index') }}" class="btn btn-light">
                        <i class="fa-solid fa-arrow-left"></i>
                        {{ __('admin.back') }}
                    </a>
                    <div class="d-flex gap-3">
                        <a href="{{ route('services.show', $service->id) }}" class="btn btn-info" target="_blank">
                            <i class="fa-solid fa-eye"></i>
                            {{ __('Preview') }}
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-save"></i>
                            {{ __('admin.save') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('styles')
<style>
    .card {
        transition: all 0.3s ease;
    }
    .card:hover {
        box-shadow: 0 0.5rem 1.5rem 0.5rem rgba(0, 0, 0, 0.075);
    }
    .table-responsive {
        border-radius: 0.475rem;
    }
</style>
@endpush
