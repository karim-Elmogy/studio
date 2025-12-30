@extends('admin.layouts.master')

@section('title', __('Edit Service'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('Edit Service') }}
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
            <li class="breadcrumb-item text-muted">{{ __('Edit') }}</li>
        </ul>
    </div>
@endsection

@section('content')
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row g-5">
            <div class="col-lg-8">
                {{-- English Content --}}
                <div class="card shadow-sm mb-5">
                    <div class="card-header">
                        <h3 class="card-title">🇬🇧 {{ 'English Content' }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-5">
                            <label class="form-label required">{{ __('admin.title_en') }}</label>
                            <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
                                   value="{{ old('title_en', $service->title['en'] ?? '') }}" required>
                            @error('title_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label class="form-label required">{{ __('admin.description_en') }}</label>
                            <textarea name="description_en" rows="4"
                                      class="form-control @error('description_en') is-invalid @enderror"
                                      required>{{ old('description_en', $service->description['en'] ?? '') }}</textarea>
                            @error('description_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label class="form-label">{{ 'Features (English)' }}</label>
                            <small class="text-muted d-block mb-2">{{ 'Add service features, one per line' }}</small>
                            <textarea name="features_en" rows="6"
                                      class="form-control @error('features_en') is-invalid @enderror"
                                      placeholder="Brand Naming&#10;Creative Direction&#10;Brand Strategy">{{ old('features_en', isset($service->features) ? collect($service->features)->pluck('en')->implode("\n") : '') }}</textarea>
                            @error('features_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Arabic Content --}}
                <div class="card shadow-sm mb-5">
                    <div class="card-header">
                        <h3 class="card-title">🇸🇦 {{ 'Arabic Content' }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-5">
                            <label class="form-label required">{{ __('admin.title_ar') }}</label>
                            <input type="text" name="title_ar" class="form-control @error('title_ar') is-invalid @enderror"
                                   value="{{ old('title_ar', $service->title['ar'] ?? '') }}" required dir="rtl">
                            @error('title_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label class="form-label required">{{ __('admin.description_ar') }}</label>
                            <textarea name="description_ar" rows="4"
                                      class="form-control @error('description_ar') is-invalid @enderror"
                                      required dir="rtl">{{ old('description_ar', $service->description['ar'] ?? '') }}</textarea>
                            @error('description_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label class="form-label">{{ 'Features (Arabic)' }}</label>
                            <small class="text-muted d-block mb-2">{{ 'Add service features, one per line' }}</small>
                            <textarea name="features_ar" rows="6"
                                      class="form-control @error('features_ar') is-invalid @enderror"
                                      placeholder="تسمية العلامة التجارية&#10;التوجيه الإبداعي"
                                      dir="rtl">{{ old('features_ar', isset($service->features) ? collect($service->features)->pluck('ar')->implode("\n") : '') }}</textarea>
                            @error('features_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                {{-- Settings --}}
                <div class="card shadow-sm mb-5">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Settings') }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-5">
                            <label class="form-label required">{{ __('Order') }}</label>
                            <input type="number" name="order" class="form-control @error('order') is-invalid @enderror"
                                   value="{{ old('order', $service->order) }}" min="0" required>
                            <small class="text-muted">{{ __('Display order (lower numbers appear first)') }}</small>
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                       value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    {{ __('Active') }}
                                </label>
                            </div>
                            <small class="text-muted">{{ __('Show this service on the website') }}</small>
                        </div>
                    </div>
                </div>

                {{-- Current Images --}}
                @if($service->icon || $service->image)
                <div class="card shadow-sm mb-5">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Current Images') }}</h3>
                    </div>
                    <div class="card-body">
                        @if($service->icon)
                            <div class="mb-3">
                                <label class="form-label">{{ __('Current Icon') }}</label>
                                <div class="text-center">
                                    <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon" class="img-thumbnail" style="max-width: 150px;">
                                </div>
                            </div>
                        @endif

                        @if($service->image)
                            <div>
                                <label class="form-label">{{ __('Current Image') }}</label>
                                <div class="text-center">
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="Image" class="img-thumbnail" style="max-width: 100%;">
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                @endif

                {{-- Upload New Images --}}
                <div class="card shadow-sm mb-5">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Upload New Images') }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-5">
                            <label class="form-label">{{ __('Service Icon') }}</label>
                            <input type="file" name="icon" class="form-control @error('icon') is-invalid @enderror"
                                   accept="image/*">
                            <small class="text-muted">{{ __('Leave empty to keep current icon') }}</small>
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-0">
                            <label class="form-label">{{ __('Image') }}</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                   accept="image/*">
                            <small class="text-muted">{{ __('Leave empty to keep current image') }}</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="card shadow-sm">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary w-100 mb-3">
                            <i class="fa-solid fa-save"></i>
                            {{ __('Update') }}
                        </button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-light w-100">
                            <i class="fa-solid fa-times"></i>
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
