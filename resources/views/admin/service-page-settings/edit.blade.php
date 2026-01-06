@extends('admin.layouts.master')

@section('title', __('admin.service_page_settings'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('admin.service_page_settings') }}</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('admin.service-page-settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Hero Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.hero_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_title') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('hero_title_en') is-invalid @enderror"
                                               name="hero_title_en" value="{{ old('hero_title_en', $settings->hero_title['en'] ?? '') }}" required>
                                        @error('hero_title_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_title') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('hero_title_ar') is-invalid @enderror"
                                               name="hero_title_ar" value="{{ old('hero_title_ar', $settings->hero_title['ar'] ?? '') }}" required>
                                        @error('hero_title_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_subtitle') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('hero_subtitle_en') is-invalid @enderror"
                                               name="hero_subtitle_en" value="{{ old('hero_subtitle_en', $settings->hero_subtitle['en'] ?? '') }}">
                                        @error('hero_subtitle_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_subtitle') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('hero_subtitle_ar') is-invalid @enderror"
                                               name="hero_subtitle_ar" value="{{ old('hero_subtitle_ar', $settings->hero_subtitle['ar'] ?? '') }}">
                                        @error('hero_subtitle_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.contact_email') }}</label>
                                        <input type="email" class="form-control @error('contact_email') is-invalid @enderror"
                                               name="contact_email" value="{{ old('contact_email', $settings->contact_email ?? 'info@agntix.studio') }}">
                                        @error('contact_email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">{{ __('admin.hero_image') }}</label>--}}
{{--                                        <input type="file" class="form-control @error('hero_image') is-invalid @enderror"--}}
{{--                                               name="hero_image" accept="image/*">--}}
{{--                                        @error('hero_image')--}}
{{--                                            <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                                        @enderror--}}
{{--                                        @if($settings->hero_image)--}}
{{--                                            <div class="mt-2">--}}
{{--                                                <img src="{{ asset('storage/' . $settings->hero_image) }}" alt="Hero Image" style="max-width: 200px;">--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                        <!-- Banner Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.banner_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.banner_text') }} ({{ __('admin.english') }})</label>
                                        <div id="banner-text-en">
                                            @foreach(($settings->banner_text['en'] ?? []) as $index => $text)
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control" name="banner_text_en[]" value="{{ $text }}">
                                                    <button type="button" class="btn btn-danger remove-banner-text">×</button>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-sm btn-secondary" onclick="addBannerText('en')">{{ __('admin.add_word') }}</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.banner_text') }} ({{ __('admin.arabic') }})</label>
                                        <div id="banner-text-ar">
                                            @foreach(($settings->banner_text['ar'] ?? []) as $index => $text)
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control" name="banner_text_ar[]" value="{{ $text }}">
                                                    <button type="button" class="btn btn-danger remove-banner-text">×</button>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-sm btn-secondary" onclick="addBannerText('ar')">{{ __('admin.add_word') }}</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.banner_image') }}</label>
                                        <input type="file" class="form-control @error('banner_image') is-invalid @enderror"
                                               name="banner_image" accept="image/*">
                                        @error('banner_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        @if($settings->banner_image)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $settings->banner_image) }}" alt="Banner Image" style="max-width: 200px;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.recent_work_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('recent_work_text_en') is-invalid @enderror"
                                               name="recent_work_text_en" value="{{ old('recent_work_text_en', $settings->recent_work_text['en'] ?? 'Our recent Digital work') }}">
                                        @error('recent_work_text_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.recent_work_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('recent_work_text_ar') is-invalid @enderror"
                                               name="recent_work_text_ar" value="{{ old('recent_work_text_ar', $settings->recent_work_text['ar'] ?? 'أعمالنا الرقمية الحديثة') }}">
                                        @error('recent_work_text_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.slider_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.slider_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('slider_text_en') is-invalid @enderror"
                                               name="slider_text_en" value="{{ old('slider_text_en', $settings->slider_text['en'] ?? '') }}">
                                        @error('slider_text_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.slider_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('slider_text_ar') is-invalid @enderror"
                                               name="slider_text_ar" value="{{ old('slider_text_ar', $settings->slider_text['ar'] ?? '') }}">
                                        @error('slider_text_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Background Images Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.background_images') }}</h5>
                            <p class="text-muted small">{{ __('admin.background_images_desc') }}</p>

                            <div class="row mt-3">
                                @for($i = 1; $i <= 16; $i++)
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('admin.image') }} {{ $i }}</label>
                                            <input type="file" class="form-control @error('bg_image_'.$i) is-invalid @enderror"
                                                   name="bg_image_{{ $i }}" accept="image/*">
                                            @error('bg_image_'.$i)
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            @if($settings->{'bg_image_'.$i})
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/' . $settings->{'bg_image_'.$i}) }}"
                                                         alt="Background {{ $i }}"
                                                         style="max-width: 100%; height: 100px; object-fit: cover; border-radius: 5px;">
                                                </div>
                                            @else
                                                <div class="mt-2 text-center p-3 bg-light rounded">
                                                    <small class="text-muted">{{ __('admin.no_image') }}</small>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">{{ __('admin.update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function addBannerText(lang) {
    const container = document.getElementById('banner-text-' + lang);
    const div = document.createElement('div');
    div.className = 'input-group mb-2';
    div.innerHTML = `
        <input type="text" class="form-control" name="banner_text_${lang}[]">
        <button type="button" class="btn btn-danger remove-banner-text">×</button>
    `;
    container.appendChild(div);
}

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-banner-text')) {
        e.target.closest('.input-group').remove();
    }
});
</script>
@endsection
