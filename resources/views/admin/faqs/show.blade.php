@extends('admin.layouts.master')

@section('title', __('admin.view_faq'))

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.faq_details') }}</h1>
        <div>
            <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> {{ __('admin.edit') }}
            </a>
            <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> {{ __('admin.back') }}
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.faq_details') }}</h6>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.question_en') }}</h6>
                            <p>{{ $faq->question['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.question_ar') }}</h6>
                            <p dir="rtl">{{ $faq->question['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.answer_en') }}</h6>
                            <p>{{ $faq->answer['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.answer_ar') }}</h6>
                            <p dir="rtl">{{ $faq->answer['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.category_en') }}</h6>
                            <p>{{ $faq->category['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.category_ar') }}</h6>
                            <p dir="rtl">{{ $faq->category['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.display_order') }}</h6>
                            <p>{{ $faq->order }}</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.status') }}</h6>
                            @if($faq->is_active)
                                <span class="badge badge-success">{{ __('admin.active') }}</span>
                            @else
                                <span class="badge badge-danger">{{ __('admin.inactive') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.created_at') }}</h6>
                            <p>{{ $faq->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.updated_at') }}</h6>
                            <p>{{ $faq->updated_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
