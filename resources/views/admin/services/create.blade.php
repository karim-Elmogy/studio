@extends('admin.layouts.master')

@section('title', __('admin.add_service'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.add_service') }}
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
            <li class="breadcrumb-item text-muted">{{ __('admin.create') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-light">
            <i class="fa-solid fa-arrow-left"></i>
            {{ __('admin.back') }}
        </a>
    </div>
@endsection

@section('content')
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card shadow-sm">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-briefcase text-primary me-2"></i>
                        {{ __('admin.service_information') }}
                    </span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Title --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.title') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="title_en"
                                       class="form-control form-control-lg form-control-solid @error('title_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.title_en') }}"
                                       value="{{ old('title_en') }}" required />
                                @error('title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="title_ar"
                                       class="form-control form-control-lg form-control-solid @error('title_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.title_ar') }}"
                                       value="{{ old('title_ar') }}" required dir="rtl" />
                                @error('title_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Description --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.description') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="description_en" rows="4"
                                          class="form-control form-control-solid @error('description_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.description_en') }}" required>{{ old('description_en') }}</textarea>
                                @error('description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="description_ar" rows="4"
                                          class="form-control form-control-solid @error('description_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.description_ar') }}" required dir="rtl">{{ old('description_ar') }}</textarea>
                                @error('description_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Features --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.features') }}</label>
                    <div class="col-lg-10">
                        <div class="alert alert-info d-flex align-items-center mb-3">
                            <i class="fa-solid fa-circle-info fs-2x me-3"></i>
                            <span>{{ __('admin.features_help_text') }}</span>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="features_en" rows="6"
                                          class="form-control form-control-solid @error('features_en') is-invalid @enderror"
                                          placeholder="Brand Naming&#10;Creative Direction&#10;Brand Strategy&#10;Logo Design&#10;Brand Guidelines">{{ old('features_en') }}</textarea>
                                @error('features_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="features_ar" rows="6"
                                          class="form-control form-control-solid @error('features_ar') is-invalid @enderror"
                                          placeholder="تسمية العلامة التجارية&#10;التوجيه الإبداعي&#10;استراتيجية العلامة التجارية&#10;تصميم الشعار&#10;دليل العلامة التجارية"
                                          dir="rtl">{{ old('features_ar') }}</textarea>
                                @error('features_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Media --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.media') }}</label>
                    <div class="col-lg-10">
                        {{-- Icon --}}
                        <div class="row g-3 mb-5">
                            <div class="col-md-6">
                                <label class="form-label fs-6 fw-semibold mb-3">
                                    <i class="fa-solid fa-star text-warning me-2"></i>
                                    {{ __('admin.service_icon') }}
                                </label>
                                <input type="file" name="icon"
                                       class="form-control form-control-solid @error('icon') is-invalid @enderror"
                                       accept="image/*" id="iconInput"
                                       onchange="previewImage(this, 'iconPreview')" />
                                <div class="form-text mt-2">
                                    <i class="fa-solid fa-info-circle me-1"></i>
                                    {{ __('admin.icon_size_hint') }}
                                </div>
                                <div class="image-preview-container mt-3" id="iconPreviewContainer" style="display: none;">
                                    <img id="iconPreview" src="" alt="Icon Preview"
                                         class="img-thumbnail shadow-sm rounded"
                                         style="max-width: 150px; max-height: 150px; object-fit: contain;">
                                </div>
                                @error('icon')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Cover Images --}}
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fs-6 fw-semibold mb-3">
                                    <i class="fa-solid fa-image text-primary me-2"></i>
                                    {{ __('admin.cover_image') }} 1 <span class="text-muted">({{ __('admin.main_banner') }})</span>
                                </label>
                                <input type="file" name="image"
                                       class="form-control form-control-solid @error('image') is-invalid @enderror"
                                       accept="image/*" id="imageInput"
                                       onchange="previewImage(this, 'imagePreview')" />
                                <div class="form-text mt-2">
                                    <i class="fa-solid fa-info-circle me-1"></i>
                                    {{ __('admin.image_size_hint') }}
                                </div>
                                <div class="image-preview-container mt-3" id="imagePreviewContainer" style="display: none;">
                                    <img id="imagePreview" src="" alt="Image Preview"
                                         class="img-thumbnail shadow-sm rounded"
                                         style="max-width: 100%; max-height: 300px; object-fit: cover;">
                                </div>
                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fs-6 fw-semibold mb-3">
                                    <i class="fa-solid fa-image text-primary me-2"></i>
                                    {{ __('admin.cover_image') }} 2 <span class="text-muted">({{ __('admin.secondary_image') }})</span>
                                </label>
                                <input type="file" name="image_2"
                                       class="form-control form-control-solid @error('image_2') is-invalid @enderror"
                                       accept="image/*" id="image2Input"
                                       onchange="previewImage(this, 'image2Preview')" />
                                <div class="form-text mt-2">
                                    <i class="fa-solid fa-info-circle me-1"></i>
                                    {{ __('admin.image_size_hint') }}
                                </div>
                                <div class="image-preview-container mt-3" id="image2PreviewContainer" style="display: none;">
                                    <img id="image2Preview" src="" alt="Image 2 Preview"
                                         class="img-thumbnail shadow-sm rounded"
                                         style="max-width: 100%; max-height: 300px; object-fit: cover;">
                                </div>
                                @error('image_2')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Settings --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.display_order') }}</label>
                    <div class="col-lg-10">
                        <input type="number" name="order"
                               class="form-control form-control-solid @error('order') is-invalid @enderror"
                               value="{{ old('order', 0) }}" min="0" required />
                        <div class="form-text">
                            <i class="fa-solid fa-info-circle me-1"></i>
                            {{ __('admin.order_help_text') }}
                        </div>
                        @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.status') }}</label>
                    <div class="col-lg-10">
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                   value="1" {{ old('is_active', true) ? 'checked' : '' }} />
                            <label class="form-check-label" for="is_active">
                                {{ __('admin.active') }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Hero Section --}}
        <div class="card shadow-sm mt-5">
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
                                <input type="text" name="hero_subtitle_en" class="form-control form-control-solid" value="{{ old('hero_subtitle_en') }}" placeholder="Enter subtitle in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="hero_subtitle_ar" class="form-control form-control-solid" value="{{ old('hero_subtitle_ar') }}" placeholder="أدخل العنوان الفرعي بالعربية" dir="rtl">
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
                                <input type="text" name="hero_title_en" class="form-control form-control-solid" value="{{ old('hero_title_en') }}" placeholder="Enter title in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="hero_title_ar" class="form-control form-control-solid" value="{{ old('hero_title_ar') }}" placeholder="أدخل العنوان بالعربية" dir="rtl">
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
                                <textarea name="hero_description_en" class="form-control form-control-solid" rows="4" placeholder="Enter description in English">{{ old('hero_description_en') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <textarea name="hero_description_ar" class="form-control form-control-solid" rows="4" placeholder="أدخل الوصف بالعربية" dir="rtl">{{ old('hero_description_ar') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Process Section --}}
        <div class="card shadow-sm mt-5">
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
                                <input type="text" name="process_title_en" class="form-control form-control-solid" value="{{ old('process_title_en') }}" placeholder="Enter process title in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="process_title_ar" class="form-control form-control-solid" value="{{ old('process_title_ar') }}" placeholder="أدخل عنوان العملية بالعربية" dir="rtl">
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
                                <textarea name="process_steps_en" class="form-control form-control-solid" rows="6" placeholder="Enter each step on a new line">{{ old('process_steps_en') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية (واحد في كل سطر)</label>
                                <textarea name="process_steps_ar" class="form-control form-control-solid" rows="6" placeholder="أدخل كل خطوة في سطر جديد" dir="rtl">{{ old('process_steps_ar') }}</textarea>
                            </div>
                        </div>
                        <div class="form-text mt-2">
                            <i class="fa-solid fa-info-circle me-1"></i>
                            {{ __('Enter one step per line. Both languages should have the same number of lines.') }}
                        </div>
                    </div>
                </div>

                {{-- Process Description --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Description') }}</label>
                    <div class="col-lg-9">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">English</label>
                                <textarea name="process_description_en" class="form-control form-control-solid" rows="4" placeholder="Enter process description in English">{{ old('process_description_en') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <textarea name="process_description_ar" class="form-control form-control-solid" rows="4" placeholder="أدخل وصف العملية بالعربية" dir="rtl">{{ old('process_description_ar') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Process Image --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Process Image') }}</label>
                    <div class="col-lg-9">
                        <input type="file" name="process_image" class="form-control form-control-solid" accept="image/*" id="processImageInput" onchange="previewImage(this, 'processImagePreview')">
                        <div class="form-text mt-2">
                            <i class="fa-solid fa-info-circle me-1"></i>
                            {{ __('Recommended size: 800x600px') }}
                        </div>
                        <div class="image-preview-container mt-3" id="processImagePreviewContainer" style="display: none;">
                            <img id="processImagePreview" src="" alt="Process Image Preview"
                                 class="img-thumbnail shadow-sm rounded"
                                 style="max-width: 100%; max-height: 300px; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Benefits Section --}}
        <div class="card shadow-sm mt-5">
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
                                <input type="text" name="benefits_title_en" class="form-control form-control-solid" value="{{ old('benefits_title_en') }}" placeholder="Enter benefits title in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="benefits_title_ar" class="form-control form-control-solid" value="{{ old('benefits_title_ar') }}" placeholder="أدخل عنوان الفوائد بالعربية" dir="rtl">
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
                                <textarea name="benefits_description_en" class="form-control form-control-solid" rows="4" placeholder="Enter benefits description in English">{{ old('benefits_description_en') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <textarea name="benefits_description_ar" class="form-control form-control-solid" rows="4" placeholder="أدخل وصف الفوائد بالعربية" dir="rtl">{{ old('benefits_description_ar') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Features Highlight --}}
        <div class="card shadow-sm mt-5">
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
                                <input type="text" name="features_title_en" class="form-control form-control-solid" value="{{ old('features_title_en') }}" placeholder="Enter features title in English">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">العربية</label>
                                <input type="text" name="features_title_ar" class="form-control form-control-solid" value="{{ old('features_title_ar') }}" placeholder="أدخل عنوان الميزات بالعربية" dir="rtl">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Features Image --}}
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-bold fs-6">{{ __('Features Image') }}</label>
                    <div class="col-lg-9">
                        <input type="file" name="features_image" class="form-control form-control-solid" accept="image/*" id="featuresImageInput" onchange="previewImage(this, 'featuresImagePreview')">
                        <div class="form-text mt-2">
                            <i class="fa-solid fa-info-circle me-1"></i>
                            {{ __('Recommended size: 1200x800px') }}
                        </div>
                        <div class="image-preview-container mt-3" id="featuresImagePreviewContainer" style="display: none;">
                            <img id="featuresImagePreview" src="" alt="Features Image Preview"
                                 class="img-thumbnail shadow-sm rounded"
                                 style="max-width: 100%; max-height: 300px; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Action Buttons --}}
        <div class="card shadow-sm mt-5">
            <div class="card-body">
                <div class="d-flex justify-content-end gap-3">
                    <a href="{{ route('admin.services.index') }}" class="btn btn-light">
                        <i class="fa-solid fa-arrow-left"></i>
                        {{ __('admin.cancel') }}
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-save"></i>
                        {{ __('admin.create') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('styles')
<style>
    .image-preview-container {
        text-align: center;
        padding: 1rem;
        background: #f5f8fa;
        border-radius: 0.75rem;
        border: 2px dashed #e4e6ef;
        transition: all 0.3s ease;
    }
    .image-preview-container:hover {
        border-color: #009ef7;
        background: #f1faff;
    }
    .image-preview-container img {
        display: block;
        margin: 0 auto;
    }
    .form-control-solid {
        background-color: #f5f8fa;
        border-color: #f5f8fa;
        transition: all 0.2s ease;
    }
    .form-control-solid:focus {
        background-color: #ffffff;
        border-color: #009ef7;
        box-shadow: 0 0 0 0.2rem rgba(0, 158, 247, 0.1);
    }
</style>
@endpush

@push('scripts')
<script>
    function previewImage(input, previewId) {
        const container = document.getElementById(previewId + 'Container');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(previewId).src = e.target.result;
                container.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            container.style.display = 'none';
        }
    }
</script>
@endpush
