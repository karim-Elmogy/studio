@extends('admin.layouts.master')

@section('title', __('admin.edit_project'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.edit_project') }}
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
            <li class="breadcrumb-item text-muted">{{ __('admin.edit') }}</li>
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
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow-sm">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-folder-open text-primary me-2"></i>
                        {{ __('admin.project_information') }}
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
                                       value="{{ old('title_en', $project->title['en'] ?? '') }}" required />
                                @error('title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="title_ar"
                                       class="form-control form-control-lg form-control-solid @error('title_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.title_ar') }}"
                                       value="{{ old('title_ar', $project->title['ar'] ?? '') }}" required dir="rtl" />
                                @error('title_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Description --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.description') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="description_en" rows="4"
                                          class="form-control form-control-solid @error('description_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.description_en') }}">{{ old('description_en', $project->description['en'] ?? '') }}</textarea>
                                @error('description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="description_ar" rows="4"
                                          class="form-control form-control-solid @error('description_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.description_ar') }}" dir="rtl">{{ old('description_ar', $project->description['ar'] ?? '') }}</textarea>
                                @error('description_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Category --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.category') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="category_en"
                                       class="form-control form-control-solid @error('category_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.category_en') }}"
                                       value="{{ old('category_en', $project->category['en'] ?? '') }}" required />
                                @error('category_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="category_ar"
                                       class="form-control form-control-solid @error('category_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.category_ar') }}"
                                       value="{{ old('category_ar', $project->category['ar'] ?? '') }}" required dir="rtl" />
                                @error('category_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Image & Type --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.project_image') }}</label>
                    <div class="col-lg-10">
                        @if($project->image)
                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.current_image') }}</label>
                                <div class="image-preview">
                                    <img src="{{ asset('storage/' . $project->image) }}" 
                                         alt="{{ __('admin.current_image') }}"
                                         class="img-thumbnail shadow-sm"
                                         style="max-width: 300px; max-height: 200px; object-fit: cover; border-radius: 0.75rem;">
                                </div>
                            </div>
                        @endif
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="file" name="image"
                                       class="form-control form-control-solid @error('image') is-invalid @enderror"
                                       accept="image/*" />
                                <div class="form-text">{{ __('admin.keep_current_image') }}</div>
                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <select name="type" class="form-select form-control-solid @error('type') is-invalid @enderror" required>
                                    <option value="web" {{ old('type', $project->type) === 'web' ? 'selected' : '' }}>{{ __('admin.web') }}</option>
                                    <option value="mobile" {{ old('type', $project->type) === 'mobile' ? 'selected' : '' }}>{{ __('admin.mobile') }}</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Additional Info --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.additional_info') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <input type="text" name="client"
                                       class="form-control form-control-solid @error('client') is-invalid @enderror"
                                       placeholder="{{ __('admin.client_name') }}"
                                       value="{{ old('client', $project->client) }}" />
                                @error('client')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="year"
                                       class="form-control form-control-solid @error('year') is-invalid @enderror"
                                       placeholder="e.g., 2024"
                                       value="{{ old('year', $project->year) }}" />
                                @error('year')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="order"
                                       class="form-control form-control-solid @error('order') is-invalid @enderror"
                                       placeholder="{{ __('admin.display_order') }}"
                                       value="{{ old('order', $project->order) }}" min="0" />
                                @error('order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tags --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.tags') }}</label>
                    <div class="col-lg-10">
                        @php
                            $tags = is_array($project->tags) && count($project->tags) > 0
                                ? implode(', ', array_column($project->tags, 'en'))
                                : '';
                        @endphp
                        <input type="text" name="tags"
                               class="form-control form-control-solid @error('tags') is-invalid @enderror"
                               placeholder="e.g., Laravel, Vue.js, API"
                               value="{{ old('tags', $tags) }}" />
                        <div class="form-text">{{ __('admin.tags_help') }}</div>
                        @error('tags')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Status --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.status') }}</label>
                    <div class="col-lg-10">
                        <div class="form-check form-check-custom form-check-solid mb-3">
                            <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                                   value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }} />
                            <label class="form-check-label" for="is_featured">
                                {{ __('admin.is_featured') }}
                            </label>
                        </div>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                   value="1" {{ old('is_active', $project->is_active) ? 'checked' : '' }} />
                            <label class="form-check-label" for="is_active">
                                {{ __('admin.active') }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-light btn-active-light-primary me-2">
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
