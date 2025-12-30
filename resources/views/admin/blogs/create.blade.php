@extends('admin.layouts.master')

@section('title', __('admin.add_blog'))

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.add_blog') }}</h1>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> {{ __('admin.back_to_blogs') }}
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title_en">{{ __('admin.title_en') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title_en') is-invalid @enderror"
                                   id="title_en" name="title_en" value="{{ old('title_en') }}" required>
                            @error('title_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title_ar">{{ __('admin.title_ar') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title_ar') is-invalid @enderror"
                                   id="title_ar" name="title_ar" value="{{ old('title_ar') }}" required dir="rtl">
                            @error('title_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="excerpt_en">{{ __('admin.excerpt_en') }}</label>
                            <textarea class="form-control @error('excerpt_en') is-invalid @enderror"
                                      id="excerpt_en" name="excerpt_en" rows="3">{{ old('excerpt_en') }}</textarea>
                            @error('excerpt_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="excerpt_ar">{{ __('admin.excerpt_ar') }}</label>
                            <textarea class="form-control @error('excerpt_ar') is-invalid @enderror"
                                      id="excerpt_ar" name="excerpt_ar" rows="3" dir="rtl">{{ old('excerpt_ar') }}</textarea>
                            @error('excerpt_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="content_en">{{ __('admin.content_en') }} <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('content_en') is-invalid @enderror"
                                      id="content_en" name="content_en" rows="8" required>{{ old('content_en') }}</textarea>
                            @error('content_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="content_ar">{{ __('admin.content_ar') }} <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('content_ar') is-invalid @enderror"
                                      id="content_ar" name="content_ar" rows="8" required dir="rtl">{{ old('content_ar') }}</textarea>
                            @error('content_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category_en">{{ __('admin.category_en') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('category_en') is-invalid @enderror"
                                   id="category_en" name="category_en" value="{{ old('category_en') }}" required>
                            @error('category_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category_ar">{{ __('admin.category_ar') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('category_ar') is-invalid @enderror"
                                   id="category_ar" name="category_ar" value="{{ old('category_ar') }}" required dir="rtl">
                            @error('category_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">{{ __('admin.blog_image') }} <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                   id="image" name="image" accept="image/*" required>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">{{ __('admin.image_formats') }}</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="video_url">{{ __('admin.video_url') }} (Optional)</label>
                            <input type="url" class="form-control @error('video_url') is-invalid @enderror"
                                   id="video_url" name="video_url" value="{{ old('video_url') }}"
                                   placeholder="https://youtube.com/watch?v=...">
                            @error('video_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="author_name">{{ __('admin.author_name') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('author_name') is-invalid @enderror"
                                   id="author_name" name="author_name" value="{{ old('author_name') }}" required>
                            @error('author_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="author_role">{{ __('admin.author_role') }}</label>
                            <input type="text" class="form-control @error('author_role') is-invalid @enderror"
                                   id="author_role" name="author_role" value="{{ old('author_role') }}"
                                   placeholder="e.g., Senior Writer">
                            @error('author_role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="author_image">{{ __('admin.author_image') }}</label>
                            <input type="file" class="form-control-file @error('author_image') is-invalid @enderror"
                                   id="author_image" name="author_image" accept="image/*">
                            @error('author_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="published_date">{{ __('admin.published_date') }} <span class="text-danger">*</span></label>
                            <input type="date" class="form-control @error('published_date') is-invalid @enderror"
                                   id="published_date" name="published_date" value="{{ old('published_date', date('Y-m-d')) }}" required>
                            @error('published_date')
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

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tags">Tags ({{ __('admin.tags_help') }})</label>
                            <input type="text" class="form-control @error('tags') is-invalid @enderror"
                                   id="tags" name="tags" value="{{ old('tags') }}"
                                   placeholder="e.g., Technology, Web Design, Tips">
                            @error('tags')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="is_featured" name="is_featured"
                               value="1" {{ old('is_featured') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="is_featured">{{ __('admin.is_featured') }}</label>
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
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                        {{ __('admin.cancel') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
