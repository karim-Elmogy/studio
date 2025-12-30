@extends('admin.layouts.master')

@section('title', __('admin.view_testimonial'))

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.testimonial_details') }}</h1>
        <div>
            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> {{ __('admin.edit') }}
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> {{ __('admin.back') }}
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.testimonial_details') }}</h6>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.name_en') }}</h6>
                            <p>{{ $testimonial->name['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.name_ar') }}</h6>
                            <p dir="rtl">{{ $testimonial->name['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.role_en') }}</h6>
                            <p>{{ $testimonial->role['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.role_ar') }}</h6>
                            <p dir="rtl">{{ $testimonial->role['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.testimonial_en') }}</h6>
                            <p>{{ $testimonial->testimonial['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.testimonial_ar') }}</h6>
                            <p dir="rtl">{{ $testimonial->testimonial['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.rating') }}</h6>
                            <p>
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $testimonial->rating)
                                        <i class="fas fa-star text-warning"></i>
                                    @else
                                        <i class="far fa-star text-muted"></i>
                                    @endif
                                @endfor
                                <span class="ml-2">({{ $testimonial->rating }}/5)</span>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.display_order') }}</h6>
                            <p>{{ $testimonial->order }}</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.status') }}</h6>
                            @if($testimonial->is_active)
                                <span class="badge badge-success">{{ __('admin.active') }}</span>
                            @else
                                <span class="badge badge-danger">{{ __('admin.inactive') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.created_at') }}</h6>
                            <p>{{ $testimonial->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.updated_at') }}</h6>
                            <p>{{ $testimonial->updated_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.client_image') }}</h6>
                </div>
                <div class="card-body text-center">
                    @if($testimonial->image)
                        <img src="{{ asset('storage/' . $testimonial->image) }}"
                             alt="{{ $testimonial->name['en'] ?? '' }}"
                             class="img-fluid rounded-circle"
                             style="max-width: 250px; max-height: 250px; object-fit: cover;">
                    @else
                        <p class="text-muted">{{ __('admin.no_data') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
