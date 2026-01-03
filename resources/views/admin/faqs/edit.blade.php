@extends('admin.layouts.master')

@section('title', __('admin.edit_faq'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.edit_faq') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('admin.faqs.index') }}" class="text-muted text-hover-primary">{{ __('admin.faqs') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('admin.edit') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.faqs.index') }}" class="btn btn-sm btn-light">
            <i class="fa-solid fa-arrow-left"></i>
            {{ __('admin.back') }}
        </a>
    </div>
@endsection

@section('content')
    <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card shadow-sm">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-question-circle text-primary me-2"></i>
                        {{ __('admin.faq_information') }}
                    </span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Question --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.question') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="question_en"
                                       class="form-control form-control-lg form-control-solid @error('question_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.question_en') }}"
                                       value="{{ old('question_en', $faq->question['en'] ?? '') }}" required />
                                @error('question_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="question_ar"
                                       class="form-control form-control-lg form-control-solid @error('question_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.question_ar') }}"
                                       value="{{ old('question_ar', $faq->question['ar'] ?? '') }}" required dir="rtl" />
                                @error('question_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Answer --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('admin.answer') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="answer_en" rows="6"
                                          class="form-control form-control-solid @error('answer_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.answer_en') }}" required>{{ old('answer_en', $faq->answer['en'] ?? '') }}</textarea>
                                @error('answer_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="answer_ar" rows="6"
                                          class="form-control form-control-solid @error('answer_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.answer_ar') }}" required dir="rtl">{{ old('answer_ar', $faq->answer['ar'] ?? '') }}</textarea>
                                @error('answer_ar')
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
                                       placeholder="e.g., General, Pricing, Technical"
                                       value="{{ old('category_en', $faq->category['en'] ?? '') }}" required />
                                @error('category_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="category_ar"
                                       class="form-control form-control-solid @error('category_ar') is-invalid @enderror"
                                       placeholder="مثال: عام، التسعير، تقني"
                                       value="{{ old('category_ar', $faq->category['ar'] ?? '') }}" required dir="rtl" />
                                @error('category_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Settings --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.display_order') }}</label>
                    <div class="col-lg-10">
                        <input type="number" name="order"
                               class="form-control form-control-solid @error('order') is-invalid @enderror"
                               value="{{ old('order', $faq->order) }}" min="0" />
                        @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.status') }}</label>
                    <div class="col-lg-10">
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                   value="1" {{ old('is_active', $faq->is_active) ? 'checked' : '' }} />
                            <label class="form-check-label" for="is_active">
                                {{ __('admin.active') }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('admin.faqs.index') }}" class="btn btn-light btn-active-light-primary me-2">
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
