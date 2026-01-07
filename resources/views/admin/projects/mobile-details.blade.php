@extends('admin.layouts.master')

@section('title', __('admin.mobile_project_details'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.mobile_project_details') }}
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
            <li class="breadcrumb-item text-muted">{{ $project->title['en'] ?? 'N/A' }}</li>
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
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="fa-solid fa-circle-check fs-2 me-3 text-success"></i>
            <div>{{ session('success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('admin.projects.mobile-details.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow-sm">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-mobile-screen-button text-success me-2"></i>
                        {{ __('admin.mobile_app_details') }}
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">{{ __('admin.additional_mobile_info') }}</span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Hero Image --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.hero_image') }}</label>
                    <div class="col-lg-10">
                        @if($project->mobile_details['hero_image'] ?? null)
                            <div class="mb-3">
                                <img id="hero_image_preview" src="{{ asset('storage/' . $project->mobile_details['hero_image']) }}"
                                     alt="Hero Image"
                                     class="img-thumbnail"
                                     style="max-height: 200px;">
                            </div>
                        @else
                            <div class="mb-3">
                                <img id="hero_image_preview" src="#" alt="Preview"
                                     class="img-thumbnail"
                                     style="max-height: 200px; display: none;">
                            </div>
                        @endif
                        <input type="file" name="hero_image"
                               class="form-control form-control-solid @error('hero_image') is-invalid @enderror"
                               accept="image/*" />
                        <div class="form-text">{{ __('admin.optional_image') }}</div>
                        @error('hero_image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Problem Section --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.problem') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="problem_en" rows="4"
                                          class="form-control form-control-solid @error('problem_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.problem_en') }}">{{ old('problem_en', $project->mobile_details['problem']['en'] ?? '') }}</textarea>
                                @error('problem_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="problem_ar" rows="4"
                                          class="form-control form-control-solid @error('problem_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.problem_ar') }}" dir="rtl">{{ old('problem_ar', $project->mobile_details['problem']['ar'] ?? '') }}</textarea>
                                @error('problem_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Approach Section --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.approach') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="approach_en" rows="4"
                                          class="form-control form-control-solid @error('approach_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.approach_en') }}">{{ old('approach_en', $project->mobile_details['approach']['en'] ?? '') }}</textarea>
                                @error('approach_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="approach_ar" rows="4"
                                          class="form-control form-control-solid @error('approach_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.approach_ar') }}" dir="rtl">{{ old('approach_ar', $project->mobile_details['approach']['ar'] ?? '') }}</textarea>
                                @error('approach_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Solution Section --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.solution') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="solution_en" rows="4"
                                          class="form-control form-control-solid @error('solution_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.solution_en') }}">{{ old('solution_en', $project->mobile_details['solution']['en'] ?? '') }}</textarea>
                                @error('solution_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="solution_ar" rows="4"
                                          class="form-control form-control-solid @error('solution_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.solution_ar') }}" dir="rtl">{{ old('solution_ar', $project->mobile_details['solution']['ar'] ?? '') }}</textarea>
                                @error('solution_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Light Mode Title --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.light_mode_title') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="light_mode_title_en"
                                       class="form-control form-control-solid @error('light_mode_title_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.light_mode_title_en') }}"
                                       value="{{ old('light_mode_title_en', $project->mobile_details['light_mode_title']['en'] ?? '') }}" />
                                @error('light_mode_title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="light_mode_title_ar"
                                       class="form-control form-control-solid @error('light_mode_title_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.light_mode_title_ar') }}"
                                       value="{{ old('light_mode_title_ar', $project->mobile_details['light_mode_title']['ar'] ?? '') }}" dir="rtl" />
                                @error('light_mode_title_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Light Mode Images --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.light_mode_images') }}</label>
                    <div class="col-lg-10">
                        <div class="row mb-3" id="light_mode_preview_container">
                            @if(!empty($project->mobile_details['light_mode_images']))
                                @foreach($project->mobile_details['light_mode_images'] as $img)
                                    <div class="col-md-3 mb-2">
                                        <img src="{{ asset('storage/' . $img) }}"
                                             alt="Light Mode"
                                             class="img-thumbnail"
                                             style="max-height: 150px;">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <input type="file" name="light_mode_images[]"
                               class="form-control form-control-solid @error('light_mode_images') is-invalid @enderror"
                               accept="image/*" multiple />
                        <div class="form-text">{{ __('admin.multiple_images_help') }}</div>
                        @error('light_mode_images')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Mobile First Content --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.mobile_first_title') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="mobile_first_title_en"
                                       class="form-control form-control-solid @error('mobile_first_title_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.mobile_first_title_en') }}"
                                       value="{{ old('mobile_first_title_en', $project->mobile_details['mobile_first_title']['en'] ?? '') }}" />
                                @error('mobile_first_title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="mobile_first_title_ar"
                                       class="form-control form-control-solid @error('mobile_first_title_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.mobile_first_title_ar') }}"
                                       value="{{ old('mobile_first_title_ar', $project->mobile_details['mobile_first_title']['ar'] ?? '') }}" dir="rtl" />
                                @error('mobile_first_title_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.mobile_first_content') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="mobile_first_content_en" rows="5"
                                          class="form-control form-control-solid @error('mobile_first_content_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.mobile_first_content_en') }}">{{ old('mobile_first_content_en', $project->mobile_details['mobile_first_content']['en'] ?? '') }}</textarea>
                                @error('mobile_first_content_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="mobile_first_content_ar" rows="5"
                                          class="form-control form-control-solid @error('mobile_first_content_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.mobile_first_content_ar') }}" dir="rtl">{{ old('mobile_first_content_ar', $project->mobile_details['mobile_first_content']['ar'] ?? '') }}</textarea>
                                @error('mobile_first_content_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Mobile First Mockup --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.mobile_first_mockup') }}</label>
                    <div class="col-lg-10">
                        @if($project->mobile_details['mobile_first_mockup'] ?? null)
                            <div class="mb-3">
                                <img id="mockup_preview" src="{{ asset('storage/' . $project->mobile_details['mobile_first_mockup']) }}"
                                     alt="Mockup"
                                     class="img-thumbnail"
                                     style="max-height: 200px;">
                            </div>
                        @else
                            <div class="mb-3">
                                <img id="mockup_preview" src="#" alt="Preview"
                                     class="img-thumbnail"
                                     style="max-height: 200px; display: none;">
                            </div>
                        @endif
                        <input type="file" name="mobile_first_mockup"
                               class="form-control form-control-solid @error('mobile_first_mockup') is-invalid @enderror"
                               accept="image/*" />
                        <div class="form-text">{{ __('admin.optional_image') }}</div>
                        @error('mobile_first_mockup')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Additional Slider Images --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.slider_images') }}</label>
                    <div class="col-lg-10">
                        <div class="row mb-3" id="slider_preview_container">
                            @if(!empty($project->mobile_details['slider_images']))
                                @foreach($project->mobile_details['slider_images'] as $img)
                                    <div class="col-md-3 mb-2">
                                        <img src="{{ asset('storage/' . $img) }}"
                                             alt="Slider"
                                             class="img-thumbnail"
                                             style="max-height: 150px;">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <input type="file" name="slider_images[]"
                               class="form-control form-control-solid @error('slider_images') is-invalid @enderror"
                               accept="image/*" multiple />
                        <div class="form-text">{{ __('admin.multiple_images_help') }}</div>
                        @error('slider_images')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Portfolio Details Step Section --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.portfolio_step_heading') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="portfolio_step_heading_en" rows="3"
                                          class="form-control form-control-solid @error('portfolio_step_heading_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.portfolio_step_heading_en') }}">{{ old('portfolio_step_heading_en', $project->mobile_details['portfolio_step_heading']['en'] ?? '') }}</textarea>
                                @error('portfolio_step_heading_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="portfolio_step_heading_ar" rows="3"
                                          class="form-control form-control-solid @error('portfolio_step_heading_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.portfolio_step_heading_ar') }}" dir="rtl">{{ old('portfolio_step_heading_ar', $project->mobile_details['portfolio_step_heading']['ar'] ?? '') }}</textarea>
                                @error('portfolio_step_heading_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Step Item 1 --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.step_item') }} 01</label>
                    <div class="col-lg-10">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <input type="text" name="step_1_title_en"
                                       class="form-control form-control-solid @error('step_1_title_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.step_title_en') }}"
                                       value="{{ old('step_1_title_en', $project->mobile_details['step_1']['title']['en'] ?? '') }}" />
                                @error('step_1_title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="step_1_title_ar"
                                       class="form-control form-control-solid @error('step_1_title_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.step_title_ar') }}"
                                       value="{{ old('step_1_title_ar', $project->mobile_details['step_1']['title']['ar'] ?? '') }}" dir="rtl" />
                                @error('step_1_title_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="step_1_description_en" rows="3"
                                          class="form-control form-control-solid @error('step_1_description_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.step_description_en') }}">{{ old('step_1_description_en', $project->mobile_details['step_1']['description']['en'] ?? '') }}</textarea>
                                @error('step_1_description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="step_1_description_ar" rows="3"
                                          class="form-control form-control-solid @error('step_1_description_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.step_description_ar') }}" dir="rtl">{{ old('step_1_description_ar', $project->mobile_details['step_1']['description']['ar'] ?? '') }}</textarea>
                                @error('step_1_description_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Step Item 2 --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.step_item') }} 02</label>
                    <div class="col-lg-10">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <input type="text" name="step_2_title_en"
                                       class="form-control form-control-solid @error('step_2_title_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.step_title_en') }}"
                                       value="{{ old('step_2_title_en', $project->mobile_details['step_2']['title']['en'] ?? '') }}" />
                                @error('step_2_title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="step_2_title_ar"
                                       class="form-control form-control-solid @error('step_2_title_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.step_title_ar') }}"
                                       value="{{ old('step_2_title_ar', $project->mobile_details['step_2']['title']['ar'] ?? '') }}" dir="rtl" />
                                @error('step_2_title_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="step_2_description_en" rows="3"
                                          class="form-control form-control-solid @error('step_2_description_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.step_description_en') }}">{{ old('step_2_description_en', $project->mobile_details['step_2']['description']['en'] ?? '') }}</textarea>
                                @error('step_2_description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="step_2_description_ar" rows="3"
                                          class="form-control form-control-solid @error('step_2_description_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.step_description_ar') }}" dir="rtl">{{ old('step_2_description_ar', $project->mobile_details['step_2']['description']['ar'] ?? '') }}</textarea>
                                @error('step_2_description_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Step Item 3 --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.step_item') }} 03</label>
                    <div class="col-lg-10">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <input type="text" name="step_3_title_en"
                                       class="form-control form-control-solid @error('step_3_title_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.step_title_en') }}"
                                       value="{{ old('step_3_title_en', $project->mobile_details['step_3']['title']['en'] ?? '') }}" />
                                @error('step_3_title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="step_3_title_ar"
                                       class="form-control form-control-solid @error('step_3_title_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.step_title_ar') }}"
                                       value="{{ old('step_3_title_ar', $project->mobile_details['step_3']['title']['ar'] ?? '') }}" dir="rtl" />
                                @error('step_3_title_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="step_3_description_en" rows="3"
                                          class="form-control form-control-solid @error('step_3_description_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.step_description_en') }}">{{ old('step_3_description_en', $project->mobile_details['step_3']['description']['en'] ?? '') }}</textarea>
                                @error('step_3_description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="step_3_description_ar" rows="3"
                                          class="form-control form-control-solid @error('step_3_description_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.step_description_ar') }}" dir="rtl">{{ old('step_3_description_ar', $project->mobile_details['step_3']['description']['ar'] ?? '') }}</textarea>
                                @error('step_3_description_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Portfolio Details Thumb Images --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.portfolio_thumb_images') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-4">
                            {{-- Thumb Image 1 (Full Width) --}}
                            <div class="col-12">
                                <label class="form-label fw-semibold fs-7 mb-2">{{ __('admin.portfolio_thumb_image') }} 1 ({{ __('admin.full_width') }})</label>
                                @if(!empty($project->mobile_details['portfolio_thumb_images'][0] ?? null))
                                    <div class="mb-3">
                                        <img id="portfolio_thumb_1_preview" src="{{ asset('storage/' . $project->mobile_details['portfolio_thumb_images'][0]) }}"
                                             alt="Portfolio Thumb 1"
                                             class="img-thumbnail"
                                             style="max-height: 200px;">
                                    </div>
                                @else
                                    <div class="mb-3">
                                        <img id="portfolio_thumb_1_preview" src="#" alt="Preview"
                                             class="img-thumbnail"
                                             style="max-height: 200px; display: none;">
                                    </div>
                                @endif
                                <input type="file" name="portfolio_thumb_image_1"
                                       class="form-control form-control-solid @error('portfolio_thumb_image_1') is-invalid @enderror"
                                       accept="image/*" />
                                <div class="form-text">{{ __('admin.optional_image') }}</div>
                                @error('portfolio_thumb_image_1')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Thumb Image 2 (Half Width) --}}
                            <div class="col-md-6">
                                <label class="form-label fw-semibold fs-7 mb-2">{{ __('admin.portfolio_thumb_image') }} 2 ({{ __('admin.half_width') }})</label>
                                @if(!empty($project->mobile_details['portfolio_thumb_images'][1] ?? null))
                                    <div class="mb-3">
                                        <img id="portfolio_thumb_2_preview" src="{{ asset('storage/' . $project->mobile_details['portfolio_thumb_images'][1]) }}"
                                             alt="Portfolio Thumb 2"
                                             class="img-thumbnail"
                                             style="max-height: 200px;">
                                    </div>
                                @else
                                    <div class="mb-3">
                                        <img id="portfolio_thumb_2_preview" src="#" alt="Preview"
                                             class="img-thumbnail"
                                             style="max-height: 200px; display: none;">
                                    </div>
                                @endif
                                <input type="file" name="portfolio_thumb_image_2"
                                       class="form-control form-control-solid @error('portfolio_thumb_image_2') is-invalid @enderror"
                                       accept="image/*" />
                                <div class="form-text">{{ __('admin.optional_image') }}</div>
                                @error('portfolio_thumb_image_2')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Thumb Image 3 (Half Width) --}}
                            <div class="col-md-6">
                                <label class="form-label fw-semibold fs-7 mb-2">{{ __('admin.portfolio_thumb_image') }} 3 ({{ __('admin.half_width') }})</label>
                                @if(!empty($project->mobile_details['portfolio_thumb_images'][2] ?? null))
                                    <div class="mb-3">
                                        <img id="portfolio_thumb_3_preview" src="{{ asset('storage/' . $project->mobile_details['portfolio_thumb_images'][2]) }}"
                                             alt="Portfolio Thumb 3"
                                             class="img-thumbnail"
                                             style="max-height: 200px;">
                                    </div>
                                @else
                                    <div class="mb-3">
                                        <img id="portfolio_thumb_3_preview" src="#" alt="Preview"
                                             class="img-thumbnail"
                                             style="max-height: 200px; display: none;">
                                    </div>
                                @endif
                                <input type="file" name="portfolio_thumb_image_3"
                                       class="form-control form-control-solid @error('portfolio_thumb_image_3') is-invalid @enderror"
                                       accept="image/*" />
                                <div class="form-text">{{ __('admin.optional_image') }}</div>
                                @error('portfolio_thumb_image_3')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-light btn-active-light-primary me-2">
                    {{ __('admin.cancel') }}
                </a>
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-save"></i>
                    {{ __('admin.save_changes') }}
                </button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    // Preview single image
    function previewImage(input, previewId) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById(previewId);
                if (preview) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
            }
            reader.readAsDataURL(file);
        }
    }

    // Preview multiple images
    function previewMultipleImages(input, containerId) {
        const container = document.getElementById(containerId);
        if (!container) return;

        // Clear previous previews
        const existingPreviews = container.querySelectorAll('.preview-item');
        existingPreviews.forEach(item => item.remove());

        const files = input.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const div = document.createElement('div');
                    div.className = 'col-md-3 mb-2 preview-item';
                    div.innerHTML = `
                        <div class="position-relative">
                            <img src="${e.target.result}" alt="Preview" class="img-thumbnail" style="max-height: 150px;">
                            <span class="badge badge-success position-absolute top-0 end-0 m-1">New</span>
                        </div>
                    `;
                    container.appendChild(div);
                }
                reader.readAsDataURL(file);
            }
        }
    }

    // Initialize preview listeners
    document.addEventListener('DOMContentLoaded', function() {
        // Hero Image
        const heroImageInput = document.querySelector('input[name="hero_image"]');
        if (heroImageInput) {
            heroImageInput.addEventListener('change', function() {
                previewImage(this, 'hero_image_preview');
            });
        }

        // Mobile First Mockup
        const mockupInput = document.querySelector('input[name="mobile_first_mockup"]');
        if (mockupInput) {
            mockupInput.addEventListener('change', function() {
                previewImage(this, 'mockup_preview');
            });
        }

        // Light Mode Images
        const lightModeInput = document.querySelector('input[name="light_mode_images[]"]');
        if (lightModeInput) {
            lightModeInput.addEventListener('change', function() {
                previewMultipleImages(this, 'light_mode_preview_container');
            });
        }

        // Slider Images
        const sliderInput = document.querySelector('input[name="slider_images[]"]');
        if (sliderInput) {
            sliderInput.addEventListener('change', function() {
                previewMultipleImages(this, 'slider_preview_container');
            });
        }

        // Portfolio Thumb Images
        const portfolioThumb1Input = document.querySelector('input[name="portfolio_thumb_image_1"]');
        if (portfolioThumb1Input) {
            portfolioThumb1Input.addEventListener('change', function() {
                previewImage(this, 'portfolio_thumb_1_preview');
            });
        }

        const portfolioThumb2Input = document.querySelector('input[name="portfolio_thumb_image_2"]');
        if (portfolioThumb2Input) {
            portfolioThumb2Input.addEventListener('change', function() {
                previewImage(this, 'portfolio_thumb_2_preview');
            });
        }

        const portfolioThumb3Input = document.querySelector('input[name="portfolio_thumb_image_3"]');
        if (portfolioThumb3Input) {
            portfolioThumb3Input.addEventListener('change', function() {
                previewImage(this, 'portfolio_thumb_3_preview');
            });
        }
    });
</script>
@endpush
