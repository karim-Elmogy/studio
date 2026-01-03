@extends('admin.layouts.master')

@section('title', __('admin.home_page_settings'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('admin.home_page_settings') }}</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('admin.home-page-settings.update') }}" method="POST" enctype="multipart/form-data">
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
                                        <label class="form-label">{{ __('admin.hero_description') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control @error('hero_description_en') is-invalid @enderror"
                                               name="hero_description_en" rows="3">{{ old('hero_description_en', $settings->hero_description['en'] ?? '') }}</textarea>
                                        @error('hero_description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.hero_description') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control @error('hero_description_ar') is-invalid @enderror"
                                               name="hero_description_ar" rows="3">{{ old('hero_description_ar', $settings->hero_description['ar'] ?? '') }}</textarea>
                                        @error('hero_description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.hero_video_url') }}</label>
                                <input type="url" class="form-control @error('hero_video_url') is-invalid @enderror"
                                       name="hero_video_url" value="{{ old('hero_video_url', $settings->hero_video_url ?? '') }}">
                                @error('hero_video_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Button 1 -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button1_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('hero_button1_text_en') is-invalid @enderror"
                                               name="hero_button1_text_en" value="{{ old('hero_button1_text_en', $settings->hero_button1_text['en'] ?? '') }}">
                                        @error('hero_button1_text_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button1_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('hero_button1_text_ar') is-invalid @enderror"
                                               name="hero_button1_text_ar" value="{{ old('hero_button1_text_ar', $settings->hero_button1_text['ar'] ?? '') }}">
                                        @error('hero_button1_text_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.button1_url') }}</label>
                                <input type="text" class="form-control @error('hero_button1_url') is-invalid @enderror"
                                       name="hero_button1_url" value="{{ old('hero_button1_url', $settings->hero_button1_url ?? '') }}">
                                @error('hero_button1_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Button 2 -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button2_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('hero_button2_text_en') is-invalid @enderror"
                                               name="hero_button2_text_en" value="{{ old('hero_button2_text_en', $settings->hero_button2_text['en'] ?? '') }}">
                                        @error('hero_button2_text_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button2_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('hero_button2_text_ar') is-invalid @enderror"
                                               name="hero_button2_text_ar" value="{{ old('hero_button2_text_ar', $settings->hero_button2_text['ar'] ?? '') }}">
                                        @error('hero_button2_text_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.button2_url') }}</label>
                                <input type="text" class="form-control @error('hero_button2_url') is-invalid @enderror"
                                       name="hero_button2_url" value="{{ old('hero_button2_url', $settings->hero_button2_url ?? '') }}">
                                @error('hero_button2_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- About Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.about_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.about_subtitle') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('about_subtitle_en') is-invalid @enderror"
                                               name="about_subtitle_en" value="{{ old('about_subtitle_en', $settings->about_subtitle['en'] ?? '') }}">
                                        @error('about_subtitle_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.about_subtitle') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('about_subtitle_ar') is-invalid @enderror"
                                               name="about_subtitle_ar" value="{{ old('about_subtitle_ar', $settings->about_subtitle['ar'] ?? '') }}">
                                        @error('about_subtitle_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.about_description') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control @error('about_description_en') is-invalid @enderror"
                                               name="about_description_en" rows="3">{{ old('about_description_en', $settings->about_description['en'] ?? '') }}</textarea>
                                        @error('about_description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.about_description') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control @error('about_description_ar') is-invalid @enderror"
                                               name="about_description_ar" rows="3">{{ old('about_description_ar', $settings->about_description['ar'] ?? '') }}</textarea>
                                        @error('about_description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.about_button_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('about_button_text_en') is-invalid @enderror"
                                               name="about_button_text_en" value="{{ old('about_button_text_en', $settings->about_button_text['en'] ?? '') }}">
                                        @error('about_button_text_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.about_button_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('about_button_text_ar') is-invalid @enderror"
                                               name="about_button_text_ar" value="{{ old('about_button_text_ar', $settings->about_button_text['ar'] ?? '') }}">
                                        @error('about_button_text_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.about_button_url') }}</label>
                                <input type="text" class="form-control @error('about_button_url') is-invalid @enderror"
                                       name="about_button_url" value="{{ old('about_button_url', $settings->about_button_url ?? '') }}">
                                @error('about_button_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Projects Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.projects_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.projects_subtitle') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="projects_subtitle_en" value="{{ old('projects_subtitle_en', $settings->projects_subtitle['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.projects_subtitle') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="projects_subtitle_ar" value="{{ old('projects_subtitle_ar', $settings->projects_subtitle['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.projects_title') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control" name="projects_title_en" rows="2">{{ old('projects_title_en', $settings->projects_title['en'] ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.projects_title') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control" name="projects_title_ar" rows="2">{{ old('projects_title_ar', $settings->projects_title['ar'] ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="projects_button_text_en" value="{{ old('projects_button_text_en', $settings->projects_button_text['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="projects_button_text_ar" value="{{ old('projects_button_text_ar', $settings->projects_button_text['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.button_url') }}</label>
                                <input type="text" class="form-control" name="projects_button_url" value="{{ old('projects_button_url', $settings->projects_button_url ?? '') }}">
                            </div>
                        </div>

                        <!-- Services Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.services_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.services_subtitle') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="services_subtitle_en" value="{{ old('services_subtitle_en', $settings->services_subtitle['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.services_subtitle') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="services_subtitle_ar" value="{{ old('services_subtitle_ar', $settings->services_subtitle['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.services_title') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control" name="services_title_en" rows="2">{{ old('services_title_en', $settings->services_title['en'] ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.services_title') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control" name="services_title_ar" rows="2">{{ old('services_title_ar', $settings->services_title['ar'] ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="services_button_text_en" value="{{ old('services_button_text_en', $settings->services_button_text['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="services_button_text_ar" value="{{ old('services_button_text_ar', $settings->services_button_text['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.button_url') }}</label>
                                <input type="text" class="form-control" name="services_button_url" value="{{ old('services_button_url', $settings->services_button_url ?? '') }}">
                            </div>
                        </div>

                        <!-- Choose Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.choose_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.choose_title') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control" name="choose_title_en" rows="3">{{ old('choose_title_en', $settings->choose_title['en'] ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.choose_title') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control" name="choose_title_ar" rows="3">{{ old('choose_title_ar', $settings->choose_title['ar'] ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.choose_image') }}</label>
                                <input type="file" class="form-control" name="choose_image" accept="image/*">
                                @if($settings->choose_image)
                                    <div class="mt-2">
                                        <img src="{{ asset($settings->choose_image) }}" alt="Current Image" style="max-width: 200px; height: auto;">
                                        <p class="text-muted small mt-1">{{ __('admin.current_image') }}: {{ $settings->choose_image }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Testimonials Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.testimonials_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.testimonials_subtitle') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="testimonials_subtitle_en" value="{{ old('testimonials_subtitle_en', $settings->testimonials_subtitle['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.testimonials_subtitle') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="testimonials_subtitle_ar" value="{{ old('testimonials_subtitle_ar', $settings->testimonials_subtitle['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.testimonials_title') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control" name="testimonials_title_en" rows="2">{{ old('testimonials_title_en', $settings->testimonials_title['en'] ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.testimonials_title') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control" name="testimonials_title_ar" rows="2">{{ old('testimonials_title_ar', $settings->testimonials_title['ar'] ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="testimonials_button_text_en" value="{{ old('testimonials_button_text_en', $settings->testimonials_button_text['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="testimonials_button_text_ar" value="{{ old('testimonials_button_text_ar', $settings->testimonials_button_text['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.button_url') }}</label>
                                <input type="text" class="form-control" name="testimonials_button_url" value="{{ old('testimonials_button_url', $settings->testimonials_button_url ?? '') }}">
                            </div>
                        </div>

                        <!-- Brand Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.brand_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.brand_subtitle') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="brand_subtitle_en" value="{{ old('brand_subtitle_en', $settings->brand_subtitle['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.brand_subtitle') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="brand_subtitle_ar" value="{{ old('brand_subtitle_ar', $settings->brand_subtitle['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.brand_title') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control" name="brand_title_en" rows="2">{{ old('brand_title_en', $settings->brand_title['en'] ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.brand_title') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control" name="brand_title_ar" rows="2">{{ old('brand_title_ar', $settings->brand_title['ar'] ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="brand_button_text_en" value="{{ old('brand_button_text_en', $settings->brand_button_text['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="brand_button_text_ar" value="{{ old('brand_button_text_ar', $settings->brand_button_text['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.button_url') }}</label>
                                <input type="text" class="form-control" name="brand_button_url" value="{{ old('brand_button_url', $settings->brand_button_url ?? '') }}">
                            </div>
                        </div>

                        <!-- Achievements Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.achievements_section') }}</h5>

                            <!-- Achievement 1 -->
                            <div class="card mb-3">
                                <div class="card-header bg-light">{{ __('admin.achievement') }} 1</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('admin.text') }} ({{ __('admin.english') }})</label>
                                                <textarea class="form-control" name="achievement1_text_en" rows="2">{{ old('achievement1_text_en', $settings->achievement1_text['en'] ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('admin.text') }} ({{ __('admin.arabic') }})</label>
                                                <textarea class="form-control" name="achievement1_text_ar" rows="2">{{ old('achievement1_text_ar', $settings->achievement1_text['ar'] ?? '') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.icon_path') }}</label>
                                        <input type="file" class="form-control" name="achievement1_icon" accept="image/*">
                                        @if($settings->achievement1_icon)
                                            <div class="mt-2">
                                                <img src="{{ asset($settings->achievement1_icon) }}" alt="Icon" style="max-width: 100px; height: auto;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Achievement 2 -->
                            <div class="card mb-3">
                                <div class="card-header bg-light">{{ __('admin.achievement') }} 2</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('admin.text') }} ({{ __('admin.english') }})</label>
                                                <textarea class="form-control" name="achievement2_text_en" rows="2">{{ old('achievement2_text_en', $settings->achievement2_text['en'] ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('admin.text') }} ({{ __('admin.arabic') }})</label>
                                                <textarea class="form-control" name="achievement2_text_ar" rows="2">{{ old('achievement2_text_ar', $settings->achievement2_text['ar'] ?? '') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.icon_path') }}</label>
                                        <input type="file" class="form-control" name="achievement2_icon" accept="image/*">
                                        @if($settings->achievement2_icon)
                                            <div class="mt-2">
                                                <img src="{{ asset($settings->achievement2_icon) }}" alt="Icon" style="max-width: 100px; height: auto;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Achievement 3 -->
                            <div class="card mb-3">
                                <div class="card-header bg-light">{{ __('admin.achievement') }} 3</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('admin.text') }} ({{ __('admin.english') }})</label>
                                                <textarea class="form-control" name="achievement3_text_en" rows="2">{{ old('achievement3_text_en', $settings->achievement3_text['en'] ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('admin.text') }} ({{ __('admin.arabic') }})</label>
                                                <textarea class="form-control" name="achievement3_text_ar" rows="2">{{ old('achievement3_text_ar', $settings->achievement3_text['ar'] ?? '') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.icon_path') }}</label>
                                        <input type="file" class="form-control" name="achievement3_icon" accept="image/*">
                                        @if($settings->achievement3_icon)
                                            <div class="mt-2">
                                                <img src="{{ asset($settings->achievement3_icon) }}" alt="Icon" style="max-width: 100px; height: auto;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Achievement 4 -->
                            <div class="card mb-3">
                                <div class="card-header bg-light">{{ __('admin.achievement') }} 4</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('admin.text') }} ({{ __('admin.english') }})</label>
                                                <textarea class="form-control" name="achievement4_text_en" rows="2">{{ old('achievement4_text_en', $settings->achievement4_text['en'] ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('admin.text') }} ({{ __('admin.arabic') }})</label>
                                                <textarea class="form-control" name="achievement4_text_ar" rows="2">{{ old('achievement4_text_ar', $settings->achievement4_text['ar'] ?? '') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.icon_path') }}</label>
                                        <input type="file" class="form-control" name="achievement4_icon" accept="image/*">
                                        @if($settings->achievement4_icon)
                                            <div class="mt-2">
                                                <img src="{{ asset($settings->achievement4_icon) }}" alt="Icon" style="max-width: 100px; height: auto;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Brand Logos Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.brand_logos_slider') }}</h5>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.brand_logos') }}</label>
                                <input type="file" class="form-control" name="brand_logos[]" accept="image/*" multiple>
                                <small class="text-muted d-block mt-1">{{ __('admin.select_multiple_images') }}</small>

                                @if($settings->brand_logos && is_array($settings->brand_logos) && count($settings->brand_logos) > 0)
                                    <div class="mt-3">
                                        <p class="fw-bold">{{ __('admin.current_images') }}:</p>
                                        <div class="row g-2">
                                            @foreach($settings->brand_logos as $index => $logo)
                                                <div class="col-md-2 col-sm-3 col-4">
                                                    <div class="position-relative">
                                                        <img src="{{ asset($logo) }}" alt="Logo {{ $index + 1 }}" class="img-thumbnail w-100">
                                                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1" onclick="removeImage({{ $index }})">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                        <input type="hidden" name="existing_logos[]" value="{{ $logo }}">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" id="removed_logos" name="removed_logos" value="">

                        <script>
                            function removeImage(index) {
                                if(confirm('{{ __('admin.confirm_delete_image') }}')) {
                                    const logos = document.querySelectorAll('input[name="existing_logos[]"]');
                                    const removedLogos = document.getElementById('removed_logos');
                                    const currentRemoved = removedLogos.value ? JSON.parse(removedLogos.value) : [];

                                    currentRemoved.push(logos[index].value);
                                    removedLogos.value = JSON.stringify(currentRemoved);

                                    logos[index].closest('.col-md-2').remove();
                                }
                            }
                        </script>

                        <!-- Blog Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.blog_section') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.blog_subtitle') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="blog_subtitle_en" value="{{ old('blog_subtitle_en', $settings->blog_subtitle['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.blog_subtitle') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="blog_subtitle_ar" value="{{ old('blog_subtitle_ar', $settings->blog_subtitle['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.blog_title') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control" name="blog_title_en" rows="2">{{ old('blog_title_en', $settings->blog_title['en'] ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.blog_title') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control" name="blog_title_ar" rows="2">{{ old('blog_title_ar', $settings->blog_title['ar'] ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control" name="blog_button_text_en" value="{{ old('blog_button_text_en', $settings->blog_button_text['en'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.button_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control" name="blog_button_text_ar" value="{{ old('blog_button_text_ar', $settings->blog_button_text['ar'] ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.button_url') }}</label>
                                <input type="text" class="form-control" name="blog_button_url" value="{{ old('blog_button_url', $settings->blog_button_url ?? '') }}">
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
@endsection
