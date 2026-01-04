@extends('admin.layouts.master')

@section('title', __('admin.edit_testimonial'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.edit_testimonial') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('admin.testimonials.index') }}" class="text-muted text-hover-primary">{{ __('admin.testimonials') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('admin.edit') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-sm btn-light">
            <i class="fa-solid fa-arrow-left"></i>
            {{ __('admin.back') }}
        </a>
    </div>
@endsection

@section('content')
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow-sm">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-comment-dots text-primary me-2"></i>
                        {{ __('admin.testimonial_information') }}
                    </span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Name --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.name') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name_en"
                                       class="form-control form-control-lg form-control-solid @error('name_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.name_en') }}"
                                       value="{{ old('name_en', $testimonial->name['en'] ?? '') }}" required />
                                @error('name_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="name_ar"
                                       class="form-control form-control-lg form-control-solid @error('name_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.name_ar') }}"
                                       value="{{ old('name_ar', $testimonial->name['ar'] ?? '') }}" required dir="rtl" />
                                @error('name_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Role --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.role') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="role_en"
                                       class="form-control form-control-solid @error('role_en') is-invalid @enderror"
                                       placeholder="e.g., CEO at Company"
                                       value="{{ old('role_en', $testimonial->role['en'] ?? '') }}" />
                                @error('role_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="role_ar"
                                       class="form-control form-control-solid @error('role_ar') is-invalid @enderror"
                                       placeholder="مثال: الرئيس التنفيذي في الشركة"
                                       value="{{ old('role_ar', $testimonial->role['ar'] ?? '') }}" dir="rtl" />
                                @error('role_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Testimonial --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.testimonial') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="testimonial_en" rows="5"
                                          class="form-control form-control-solid @error('testimonial_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.testimonial_en') }}" required>{{ old('testimonial_en', $testimonial->testimonial['en'] ?? '') }}</textarea>
                                @error('testimonial_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="testimonial_ar" rows="5"
                                          class="form-control form-control-solid @error('testimonial_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.testimonial_ar') }}" required dir="rtl">{{ old('testimonial_ar', $testimonial->testimonial['ar'] ?? '') }}</textarea>
                                @error('testimonial_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Image, Rating, Order --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.details') }}</label>
                    <div class="col-lg-10">
                        @if($testimonial->image)
                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.current_image') }}</label>
                                <div class="image-preview">
                                    <img src="{{ asset('storage/' . $testimonial->image) }}" 
                                         alt="{{ __('admin.current_image') }}"
                                         class="img-thumbnail rounded-circle shadow-sm"
                                         style="width: 100px; height: 100px; object-fit: cover;">
                                </div>
                            </div>
                        @endif
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">{{ __('admin.client_image') }}</label>
                                <input type="file" name="image"
                                       class="form-control form-control-solid @error('image') is-invalid @enderror"
                                       accept="image/*" />
                                <div class="form-text">{{ __('admin.keep_current_image') }}</div>
                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label required">{{ __('admin.rating') }}</label>
                                <select name="rating" class="form-select form-control-solid @error('rating') is-invalid @enderror" required>
                                    <option value="1" {{ old('rating', $testimonial->rating) == 1 ? 'selected' : '' }}>⭐ 1 Star</option>
                                    <option value="2" {{ old('rating', $testimonial->rating) == 2 ? 'selected' : '' }}>⭐⭐ 2 Stars</option>
                                    <option value="3" {{ old('rating', $testimonial->rating) == 3 ? 'selected' : '' }}>⭐⭐⭐ 3 Stars</option>
                                    <option value="4" {{ old('rating', $testimonial->rating) == 4 ? 'selected' : '' }}>⭐⭐⭐⭐ 4 Stars</option>
                                    <option value="5" {{ old('rating', $testimonial->rating) == 5 ? 'selected' : '' }}>⭐⭐⭐⭐⭐ 5 Stars</option>
                                </select>
                                @error('rating')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">{{ __('admin.display_order') }}</label>
                                <input type="number" name="order"
                                       class="form-control form-control-solid @error('order') is-invalid @enderror"
                                       value="{{ old('order', $testimonial->order) }}" min="0" />
                                @error('order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Status --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.status') }}</label>
                    <div class="col-lg-10">
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                   value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }} />
                            <label class="form-check-label" for="is_active">
                                {{ __('admin.active') }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-light btn-active-light-primary me-2">
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
