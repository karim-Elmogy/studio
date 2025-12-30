@extends('admin.layouts.master')

@section('title', __('admin.add_testimonial'))

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.add_testimonial') }}</h1>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> {{ __('admin.back_to_testimonials') }}
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name_en">{{ __('admin.name_en') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                                   id="name_en" name="name_en" value="{{ old('name_en') }}" required>
                            @error('name_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name_ar">{{ __('admin.name_ar') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name_ar') is-invalid @enderror"
                                   id="name_ar" name="name_ar" value="{{ old('name_ar') }}" required dir="rtl">
                            @error('name_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="role_en">{{ __('admin.role_en') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('role_en') is-invalid @enderror"
                                   id="role_en" name="role_en" value="{{ old('role_en') }}" required
                                   placeholder="e.g., CEO at Company">
                            @error('role_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="role_ar">{{ __('admin.role_ar') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('role_ar') is-invalid @enderror"
                                   id="role_ar" name="role_ar" value="{{ old('role_ar') }}" required dir="rtl"
                                   placeholder="مثال: الرئيس التنفيذي في الشركة">
                            @error('role_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="testimonial_en">{{ __('admin.testimonial_en') }} <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('testimonial_en') is-invalid @enderror"
                                      id="testimonial_en" name="testimonial_en" rows="5" required>{{ old('testimonial_en') }}</textarea>
                            @error('testimonial_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="testimonial_ar">{{ __('admin.testimonial_ar') }} <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('testimonial_ar') is-invalid @enderror"
                                      id="testimonial_ar" name="testimonial_ar" rows="5" required dir="rtl">{{ old('testimonial_ar') }}</textarea>
                            @error('testimonial_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="image">{{ __('admin.client_image') }}</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                   id="image" name="image" accept="image/*">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Recommended: Square image (e.g., 300x300px)</small>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rating">{{ __('admin.rating') }} <span class="text-danger">*</span></label>
                            <select class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" required>
                                <option value="">Select {{ __('admin.rating') }}</option>
                                <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>⭐ 1 Star</option>
                                <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>⭐⭐ 2 Stars</option>
                                <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>⭐⭐⭐ 3 Stars</option>
                                <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>⭐⭐⭐⭐ 4 Stars</option>
                                <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>⭐⭐⭐⭐⭐ 5 Stars</option>
                            </select>
                            @error('rating')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="order">{{ __('admin.display_order') }}</label>
                            <input type="number" class="form-control @error('order') is-invalid @enderror"
                                   id="order" name="order" value="{{ old('order', 0) }}" min="0">
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active"
                               value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                        <label class="custom-control-label" for="is_active">{{ __('admin.active') }}</label>
                    </div>
                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> {{ __('admin.create') }}
                    </button>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                        {{ __('admin.cancel') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
