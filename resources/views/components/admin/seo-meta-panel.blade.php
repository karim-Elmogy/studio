<div class="card mb-5">
    <div class="card-header">
        <h3 class="card-title">{{ __('admin.seo_panel_title') }}</h3>
        <div class="card-toolbar">
            <span class="text-muted fs-7">{{ __('admin.optional') }}</span>
        </div>
    </div>
    <div class="card-body">
        <p class="text-muted fs-7 mb-4">{{ $embedded ? __('admin.seo_embedded_hint') : __('admin.seo_panel_hint') }}</p>

        @if($embedded)
            <div class="row g-4">
        @else
        <form action="{{ route('admin.page-seo-meta.update') }}" method="post">
            @csrf
            <input type="hidden" name="page_key" value="{{ $pageKey }}">

            <div class="row g-4">
        @endif
                <div class="col-md-6">
                    <label class="form-label">{{ __('admin.seo_meta_title_en') }}</label>
                    <input type="text" name="meta_title_en" class="form-control @error('meta_title_en') is-invalid @enderror"
                           value="{{ old('meta_title_en', $meta->meta_title_en) }}" maxlength="255">
                    @error('meta_title_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ __('admin.seo_meta_title_ar') }}</label>
                    <input type="text" name="meta_title_ar" class="form-control @error('meta_title_ar') is-invalid @enderror"
                           value="{{ old('meta_title_ar', $meta->meta_title_ar) }}" maxlength="255">
                    @error('meta_title_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ __('admin.seo_meta_keywords_en') }}</label>
                    <input type="text" name="meta_keywords_en" class="form-control @error('meta_keywords_en') is-invalid @enderror"
                           value="{{ old('meta_keywords_en', $meta->meta_keywords_en) }}" maxlength="512">
                    @error('meta_keywords_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ __('admin.seo_meta_keywords_ar') }}</label>
                    <input type="text" name="meta_keywords_ar" class="form-control @error('meta_keywords_ar') is-invalid @enderror"
                           value="{{ old('meta_keywords_ar', $meta->meta_keywords_ar) }}" maxlength="512">
                    @error('meta_keywords_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ __('admin.seo_meta_description_en') }}</label>
                    <textarea name="meta_description_en" rows="3" class="form-control @error('meta_description_en') is-invalid @enderror" maxlength="2000">{{ old('meta_description_en', $meta->meta_description_en) }}</textarea>
                    @error('meta_description_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ __('admin.seo_meta_description_ar') }}</label>
                    <textarea name="meta_description_ar" rows="3" class="form-control @error('meta_description_ar') is-invalid @enderror" maxlength="2000">{{ old('meta_description_ar', $meta->meta_description_ar) }}</textarea>
                    @error('meta_description_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            @if($embedded)
            @else
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">{{ __('admin.seo_save') }}</button>
            </div>
        </form>
            @endif
    </div>
</div>
