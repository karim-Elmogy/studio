@extends('admin.layouts.master')

@section('title', __('admin.view_project'))

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.project_details') }}</h1>
        <div>
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> {{ __('admin.edit') }}
            </a>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> {{ __('admin.back') }}
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.project_details') }}</h6>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.title_en') }}</h6>
                            <p>{{ $project->title['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.title_ar') }}</h6>
                            <p dir="rtl">{{ $project->title['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.description_en') }}</h6>
                            <p>{{ $project->description['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.description_ar') }}</h6>
                            <p dir="rtl">{{ $project->description['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.category_en') }}</h6>
                            <p>{{ $project->category['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.category_ar') }}</h6>
                            <p dir="rtl">{{ $project->category['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.type') }}</h6>
                            <span class="badge badge-{{ $project->type === 'web' ? 'info' : 'success' }} badge-lg">
                                {{ ucfirst($project->type) }}
                            </span>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.client') }}</h6>
                            <p>{{ $project->client ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.year') }}</h6>
                            <p>{{ $project->year ?? 'N/A' }}</p>
                        </div>
                    </div>

                    @if($project->tags && count($project->tags) > 0)
                        <div class="mb-3">
                            <h6 class="text-muted">{{ __('admin.tags') }}</h6>
                            @foreach($project->tags as $tag)
                                <span class="badge badge-secondary mr-1">{{ $tag['en'] ?? '' }}</span>
                            @endforeach
                        </div>
                    @endif

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.display_order') }}</h6>
                            <p>{{ $project->order }}</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.featured') }}</h6>
                            @if($project->is_featured)
                                <span class="badge badge-warning">{{ __('admin.yes') }}</span>
                            @else
                                <span class="badge badge-secondary">{{ __('admin.no') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.status') }}</h6>
                            @if($project->is_active)
                                <span class="badge badge-success">{{ __('admin.active') }}</span>
                            @else
                                <span class="badge badge-danger">{{ __('admin.inactive') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.created_at') }}</h6>
                            <p>{{ $project->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.updated_at') }}</h6>
                            <p>{{ $project->updated_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.project_image') }}</h6>
                </div>
                <div class="card-body text-center">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}"
                             alt="{{ $project->title['en'] ?? '' }}"
                             class="img-fluid rounded">
                    @else
                        <p class="text-muted">{{ __('admin.no_data') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
