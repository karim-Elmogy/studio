@extends('admin.layouts.master')

@section('title', __('admin.add_blog'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.add_blog') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('admin.blogs.index') }}" class="text-muted text-hover-primary">{{ __('admin.blogs') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('admin.create') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-light">
            <i class="fa-solid fa-arrow-left"></i>
            {{ __('admin.back') }}
        </a>
    </div>
@endsection

@section('content')
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card shadow-sm">
            <div class="card-header">
                <h3 class="card-title">{{ __('admin.blog_information') }}</h3>
            </div>
            <div class="card-body">
                {{-- English & Arabic Titles --}}
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

                {{-- Excerpt --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.excerpt') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="excerpt_en" rows="3"
                                          class="form-control form-control-solid @error('excerpt_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.excerpt_en') }}">{{ old('excerpt_en') }}</textarea>
                                @error('excerpt_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="excerpt_ar" rows="3"
                                          class="form-control form-control-solid @error('excerpt_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.excerpt_ar') }}" dir="rtl">{{ old('excerpt_ar') }}</textarea>
                                @error('excerpt_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.content') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">{{ __('admin.content_en') }}</label>
                                <textarea name="content_en" id="content_en" rows="8"
                                          class="form-control @error('content_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.content_en') }}" required>{{ old('content_en') }}</textarea>
                                @error('content_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">{{ __('admin.content_ar') }}</label>
                                <textarea name="content_ar" id="content_ar" rows="8"
                                          class="form-control @error('content_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.content_ar') }}" required dir="rtl">{{ old('content_ar') }}</textarea>
                                @error('content_ar')
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
                                       value="{{ old('category_en') }}" required />
                                @error('category_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="category_ar"
                                       class="form-control form-control-solid @error('category_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.category_ar') }}"
                                       value="{{ old('category_ar') }}" required dir="rtl" />
                                @error('category_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Image --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.blog_image') }}</label>
                    <div class="col-lg-10">
                        <input type="file" name="image"
                               class="form-control form-control-solid @error('image') is-invalid @enderror"
                               accept="image/*" required />
                        <div class="form-text">{{ __('admin.image_formats') }}</div>
                        @error('image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Video URL --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.video_url') }}</label>
                    <div class="col-lg-10">
                        <input type="url" name="video_url"
                               class="form-control form-control-solid @error('video_url') is-invalid @enderror"
                               placeholder="https://youtube.com/watch?v=..."
                               value="{{ old('video_url') }}" />
                        <div class="form-text">{{ __('admin.optional') }}</div>
                        @error('video_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Author Information --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.author_name') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="author_name"
                               class="form-control form-control-solid @error('author_name') is-invalid @enderror"
                               placeholder="{{ __('admin.author_name') }}"
                               value="{{ old('author_name') }}" required />
                        @error('author_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.author_role') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="author_role"
                               class="form-control form-control-solid @error('author_role') is-invalid @enderror"
                               placeholder="e.g., Senior Writer"
                               value="{{ old('author_role') }}" />
                        @error('author_role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.author_image') }}</label>
                    <div class="col-lg-10">
                        <input type="file" name="author_image"
                               class="form-control form-control-solid @error('author_image') is-invalid @enderror"
                               accept="image/*" />
                        <div class="form-text">{{ __('admin.recommended_size') }}</div>
                        @error('author_image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Settings --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.published_date') }}</label>
                    <div class="col-lg-10">
                        <input type="date" name="published_date"
                               class="form-control form-control-solid @error('published_date') is-invalid @enderror"
                               value="{{ old('published_date', date('Y-m-d')) }}" required />
                        @error('published_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.display_order') }}</label>
                    <div class="col-lg-10">
                        <input type="number" name="order"
                               class="form-control form-control-solid @error('order') is-invalid @enderror"
                               value="{{ old('order', 0) }}" min="0" />
                        @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.tags') }}</label>
                    <div class="col-lg-10">
                        <input type="text" name="tags"
                               class="form-control form-control-solid @error('tags') is-invalid @enderror"
                               placeholder="Technology, Web Design, Tips"
                               value="{{ old('tags') }}" />
                        <div class="form-text">{{ __('admin.tags_help') }}</div>
                        @error('tags')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.status') }}</label>
                    <div class="col-lg-10">
                        <div class="form-check form-check-custom form-check-solid mb-3">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                   value="1" {{ old('is_active', true) ? 'checked' : '' }} />
                            <label class="form-check-label" for="is_active">
                                {{ __('admin.active') }}
                            </label>
                        </div>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                                   value="1" {{ old('is_featured') ? 'checked' : '' }} />
                            <label class="form-check-label" for="is_featured">
                                {{ __('admin.is_featured') }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-light btn-active-light-primary me-2">
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
    .ck-editor__editable {
        min-height: 300px;
    }
    .ck-editor__editable[dir="rtl"] {
        text-align: right;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
    // CKEditor for English content
    ClassicEditor
        .create(document.querySelector('#content_en'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'blockQuote', 'insertTable', 'undo', 'redo'],
            language: 'en'
        })
        .catch(error => {
            console.error(error);
        });

    // CKEditor for Arabic content
    ClassicEditor
        .create(document.querySelector('#content_ar'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'blockQuote', 'insertTable', 'undo', 'redo'],
            language: {
                ui: 'ar',
                content: 'ar'
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush
