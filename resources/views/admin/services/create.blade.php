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
                        <div class="row g-3">
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
                            <div class="col-md-6">
                                <label class="form-label fs-6 fw-semibold mb-3">
                                    <i class="fa-solid fa-image text-warning me-2"></i>
                                    {{ __('admin.cover_image') }}
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
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('admin.services.index') }}" class="btn btn-light btn-active-light-primary me-2">
                    {{ __('admin.cancel') }}
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-save"></i>
                    {{ __('admin.create') }}
                </button>
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
