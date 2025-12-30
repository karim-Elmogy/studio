@extends('admin.layouts.master')

@section('title', __('admin.add_faq'))

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.add_faq') }}</h1>
        <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> {{ __('admin.back_to_faqs') }}
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.faqs.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="question_en">{{ __('admin.question_en') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('question_en') is-invalid @enderror"
                                   id="question_en" name="question_en" value="{{ old('question_en') }}" required>
                            @error('question_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="question_ar">{{ __('admin.question_ar') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('question_ar') is-invalid @enderror"
                                   id="question_ar" name="question_ar" value="{{ old('question_ar') }}" required dir="rtl">
                            @error('question_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="answer_en">{{ __('admin.answer_en') }} <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('answer_en') is-invalid @enderror"
                                      id="answer_en" name="answer_en" rows="6" required>{{ old('answer_en') }}</textarea>
                            @error('answer_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="answer_ar">{{ __('admin.answer_ar') }} <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('answer_ar') is-invalid @enderror"
                                      id="answer_ar" name="answer_ar" rows="6" required dir="rtl">{{ old('answer_ar') }}</textarea>
                            @error('answer_ar')
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
                                   id="category_en" name="category_en" value="{{ old('category_en') }}" required
                                   placeholder="e.g., General, Pricing, Technical">
                            @error('category_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category_ar">{{ __('admin.category_ar') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('category_ar') is-invalid @enderror"
                                   id="category_ar" name="category_ar" value="{{ old('category_ar') }}" required dir="rtl"
                                   placeholder="مثال: عام، التسعير، تقني">
                            @error('category_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="order">{{ __('admin.display_order') }}</label>
                            <input type="number" class="form-control @error('order') is-invalid @enderror"
                                   id="order" name="order" value="{{ old('order', 0) }}" min="0">
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active"
                                       value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">{{ __('admin.active') }}</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> {{ __('admin.create') }}
                    </button>
                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">
                        {{ __('admin.cancel') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
