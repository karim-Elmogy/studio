@extends('admin.layouts.master')

@section('title', __('admin.view_blog'))

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.blog_details') }}</h1>
        <div>
            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> {{ __('admin.edit') }}
            </a>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> {{ __('admin.back') }}
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.blog_details') }}</h6>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.title_en') }}</h6>
                            <p>{{ $blog->title['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.title_ar') }}</h6>
                            <p dir="rtl">{{ $blog->title['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.excerpt_en') }}</h6>
                            <p>{{ $blog->excerpt['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.excerpt_ar') }}</h6>
                            <p dir="rtl">{{ $blog->excerpt['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.content_en') }}</h6>
                            <p>{{ $blog->content['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.content_ar') }}</h6>
                            <p dir="rtl">{{ $blog->content['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.category_en') }}</h6>
                            <p>{{ $blog->category['en'] ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.category_ar') }}</h6>
                            <p dir="rtl">{{ $blog->category['ar'] ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.author_name') }}</h6>
                            <div class="d-flex align-items-center">
                                @if($blog->author_image)
                                    <img src="{{ asset('storage/' . $blog->author_image) }}"
                                         alt="{{ $blog->author_name }}"
                                         class="rounded-circle mr-2"
                                         style="width: 50px; height: 50px; object-fit: cover;">
                                @endif
                                <div>
                                    <strong>{{ $blog->author_name ?? 'N/A' }}</strong><br>
                                    <small class="text-muted">{{ $blog->author_role ?? 'N/A' }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.published_date') }}</h6>
                            <p>{{ $blog->published_date ? date('F d, Y', strtotime($blog->published_date)) : 'N/A' }}</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.video_url') }}</h6>
                            @if($blog->video_url)
                                <a href="{{ $blog->video_url }}" target="_blank">{{ $blog->video_url }}</a>
                            @else
                                <p>N/A</p>
                            @endif
                        </div>
                    </div>

                    @if($blog->tags && count($blog->tags) > 0)
                        <div class="mb-3">
                            <h6 class="text-muted">{{ __('admin.tags') }}</h6>
                            @foreach($blog->tags as $tag)
                                <span class="badge badge-secondary mr-1">{{ $tag['en'] ?? '' }}</span>
                            @endforeach
                        </div>
                    @endif

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.display_order') }}</h6>
                            <p>{{ $blog->order }}</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.featured') }}</h6>
                            @if($blog->is_featured)
                                <span class="badge badge-warning">{{ __('admin.yes') }}</span>
                            @else
                                <span class="badge badge-secondary">{{ __('admin.no') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">{{ __('admin.status') }}</h6>
                            @if($blog->is_active)
                                <span class="badge badge-success">{{ __('admin.active') }}</span>
                            @else
                                <span class="badge badge-danger">{{ __('admin.inactive') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.created_at') }}</h6>
                            <p>{{ $blog->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.updated_at') }}</h6>
                            <p>{{ $blog->updated_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.blog_image') }}</h6>
                </div>
                <div class="card-body text-center">
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}"
                             alt="{{ $blog->title['en'] ?? '' }}"
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
