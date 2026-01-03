@extends('admin.layouts.master')

@section('title', __('admin.edit_setting'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.edit_setting') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('admin.settings.index') }}" class="text-muted text-hover-primary">{{ __('admin.settings') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('admin.edit') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.settings.index') }}" class="btn btn-sm btn-light">
            <i class="fa-solid fa-arrow-left"></i>
            {{ __('admin.back') }}
        </a>
    </div>
@endsection

@section('content')
    <form action="{{ route('admin.settings.update', $setting) }}" method="POST" enctype="multipart/form-data" id="settingForm">
        @csrf
        @method('PUT')

        <div class="card shadow-sm">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-gear text-primary me-2"></i>
                        {{ __('admin.setting_information') }}
                    </span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Key & Type --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.key') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="key"
                                       class="form-control form-control-lg form-control-solid @error('key') is-invalid @enderror"
                                       placeholder="e.g., site_name, contact_email"
                                       value="{{ old('key', $setting->key) }}" required />
                                <div class="form-text">{{ __('admin.key_format_hint') }}</div>
                                @error('key')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <select name="type" id="type"
                                        class="form-select form-control-solid @error('type') is-invalid @enderror" required>
                                    <option value="">Select Type</option>
                                    <option value="text" {{ old('type', $setting->type) === 'text' ? 'selected' : '' }}>Text</option>
                                    <option value="textarea" {{ old('type', $setting->type) === 'textarea' ? 'selected' : '' }}>Textarea</option>
                                    <option value="image" {{ old('type', $setting->type) === 'image' ? 'selected' : '' }}>{{ __('admin.image') }}</option>
                                    <option value="boolean" {{ old('type', $setting->type) === 'boolean' ? 'selected' : '' }}>Boolean (True/False)</option>
                                    <option value="number" {{ old('type', $setting->type) === 'number' ? 'selected' : '' }}>Number</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Value Fields (Dynamic) --}}
                <div id="valueField">
                    <div class="row mb-6" id="textField">
                        <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.value') }}</label>
                        <div class="col-lg-10">
                            <input type="text" name="value_text" id="value_text"
                                   class="form-control form-control-solid @error('value') is-invalid @enderror"
                                   value="{{ old('value_text', $setting->type === 'text' ? $setting->value : '') }}" />
                            @error('value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6" id="textareaField">
                        <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.value') }}</label>
                        <div class="col-lg-10">
                            <textarea name="value_textarea" id="value_textarea" rows="5"
                                      class="form-control form-control-solid @error('value') is-invalid @enderror">{{ old('value_textarea', $setting->type === 'textarea' ? $setting->value : '') }}</textarea>
                            @error('value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6" id="imageField">
                        <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.image') }}</label>
                        <div class="col-lg-10">
                            @if($setting->type === 'image' && $setting->value)
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.current_image') }}</label>
                                    <div class="image-preview">
                                        <img src="{{ asset('storage/' . $setting->value) }}"
                                             alt="{{ $setting->key }}"
                                             class="img-thumbnail shadow-sm"
                                             style="max-width: 300px; max-height: 200px; object-fit: contain; border-radius: 0.75rem;">
                                    </div>
                                </div>
                            @endif
                            <input type="file" name="value_image" id="value_image"
                                   class="form-control form-control-solid @error('value') is-invalid @enderror"
                                   accept="image/*" />
                            <div class="form-text">{{ __('admin.keep_current_image') }}</div>
                            @error('value')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6" id="booleanField">
                        <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.value') }}</label>
                        <div class="col-lg-10">
                            <select name="value_boolean" id="value_boolean" class="form-select form-control-solid">
                                <option value="true" {{ old('value_boolean', $setting->value) === 'true' || old('value_boolean', $setting->value) === '1' ? 'selected' : '' }}>{{ __('True') }}</option>
                                <option value="false" {{ old('value_boolean', $setting->value) === 'false' || old('value_boolean', $setting->value) === '0' ? 'selected' : '' }}>{{ __('False') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-6" id="numberField">
                        <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.value') }}</label>
                        <div class="col-lg-10">
                            <input type="number" name="value_number" id="value_number"
                                   class="form-control form-control-solid @error('value') is-invalid @enderror"
                                   value="{{ old('value_number', $setting->type === 'number' ? $setting->value : '') }}" />
                            @error('value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Description --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.description') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="description_en" rows="3"
                                          class="form-control form-control-solid @error('description_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.description_en') }}">{{ old('description_en', $setting->description['en'] ?? '') }}</textarea>
                                @error('description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="description_ar" rows="3"
                                          class="form-control form-control-solid @error('description_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.description_ar') }}" dir="rtl">{{ old('description_ar', $setting->description['ar'] ?? '') }}</textarea>
                                @error('description_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('admin.settings.index') }}" class="btn btn-light btn-active-light-primary me-2">
                    {{ __('admin.cancel') }}
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-save"></i>
                    {{ __('admin.update') }}
                </button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeSelect = document.getElementById('type');
    const fields = {
        text: document.getElementById('textField'),
        textarea: document.getElementById('textareaField'),
        image: document.getElementById('imageField'),
        boolean: document.getElementById('booleanField'),
        number: document.getElementById('numberField')
    };

    function updateFieldVisibility() {
        const selectedType = typeSelect.value;

        // Hide all fields
        Object.values(fields).forEach(field => {
            if (field) field.style.display = 'none';
        });

        // Show selected field
        if (fields[selectedType]) {
            fields[selectedType].style.display = 'flex';
        }
    }

    typeSelect.addEventListener('change', updateFieldVisibility);
    updateFieldVisibility();
});
</script>
@endpush

@push('styles')
<style>
    .image-preview {
        transition: all 0.3s ease;
    }
    .image-preview:hover img {
        transform: scale(1.05);
    }
</style>
@endpush
