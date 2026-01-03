@extends('admin.layouts.master')

@section('title', __('Dashboard') . ' | Agntix Studio')

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('Dashboard') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-muted">{{ __('Dashboard') }}</li>
        </ul>
    </div>
@endsection

@section('content')
    {{-- Dynamic Content Statistics --}}
    <div class="row g-5 g-xl-10 mb-5">
        <div class="col-12">
            <h3 class="mb-4">{{ __('Content Statistics') }}</h3>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm h-100 border-start border-primary border-4">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-50px me-4">
                        <div class="symbol-label bg-light-primary">
                            <i class="fa-solid fa-briefcase fs-2 text-primary"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">{{ __('Total Services') }}</div>
                        <div class="fs-2 fw-bold text-primary">{{ $totalServices ?? 0 }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm h-100 border-start border-success border-4">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-50px me-4">
                        <div class="symbol-label bg-light-success">
                            <i class="fa-solid fa-folder-open fs-2 text-success"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">{{ __('Total Projects') }}</div>
                        <div class="fs-2 fw-bold text-success">{{ $totalProjects ?? 0 }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm h-100 border-start border-info border-4">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-50px me-4">
                        <div class="symbol-label bg-light-info">
                            <i class="fa-solid fa-newspaper fs-2 text-info"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">{{ __('Total Blog Posts') }}</div>
                        <div class="fs-2 fw-bold text-info">{{ $totalBlogs ?? 0 }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm h-100 border-start border-warning border-4">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-50px me-4">
                        <div class="symbol-label bg-light-warning">
                            <i class="fa-solid fa-envelope fs-2 text-warning"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">{{ __('Total Messages') }}</div>
                        <div class="fs-2 fw-bold text-warning">{{ $totalContacts ?? 0 }}</div>
                        @if(($newContacts ?? 0) > 0)
                            <span class="badge badge-light-danger">{{ $newContacts }} {{ __('New') }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Original System Statistics --}}
    <div class="row g-5 g-xl-10 mb-5">
        <div class="col-12">
            <h3 class="mb-4">{{ __('System Statistics') }}</h3>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-45px me-4">
                        <div class="symbol-label bg-light-primary">
                            <i class="fa-solid fa-vault text-primary"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">{{ __('Total Credentials') }}</div>
                        <div class="fs-2 fw-bold">{{ $totalCredentials ?? 0 }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-45px me-4">
                        <div class="symbol-label bg-light-success">
                            <i class="fa-solid fa-server text-success"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">{{ __('With Server Name') }}</div>
                        <div class="fs-2 fw-bold">{{ $withServer ?? 0 }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-45px me-4">
                        <div class="symbol-label bg-light-warning">
                            <i class="fa-solid fa-circle-minus text-warning"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">{{ __('Without Server Name') }}</div>
                        <div class="fs-2 fw-bold">{{ $withoutServer ?? 0 }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-45px me-4">
                        <div class="symbol-label bg-light-info">
                            <i class="fa-solid fa-users text-info"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">{{ __('Users') }}</div>
                        <div class="fs-2 fw-bold">{{ $totalUsers ?? 0 }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Activity --}}
    <div class="row g-5 g-xl-10">
        {{-- Recent Blog Posts --}}
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">{{ __('Recent Blog Posts') }}</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">{{ __('Latest published articles') }}</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    @if(isset($recentBlogs) && $recentBlogs->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                <thead>
                                    <tr class="fw-bold text-muted">
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Date') }}</th>
                                        <th>{{ __('Status') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentBlogs as $blog)
                                    <tr>
                                        <td>
                                            <span class="text-dark fw-bold d-block fs-6">
                                                {{ is_array($blog->title) ? ($blog->title[app()->getLocale()] ?? $blog->title['en'] ?? '') : $blog->title }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-semibold d-block fs-7">
                                                {{ $blog->created_at->diffForHumans() }}
                                            </span>
                                        </td>
                                        <td>
                                            @if($blog->is_active ?? true)
                                                <span class="badge badge-light-success">{{ __('Active') }}</span>
                                            @else
                                                <span class="badge badge-light-danger">{{ __('Inactive') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-10">
                            <i class="fa-solid fa-newspaper fs-3x text-muted mb-5"></i>
                            <p class="text-muted">{{ __('No blog posts yet') }}</p>
                            <p class="text-muted fs-7">{{ __('Start by running migrations and seeders') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Recent Contact Messages --}}
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">{{ __('Recent Messages') }}</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">{{ __('Latest contact form submissions') }}</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    @if(isset($recentContacts) && $recentContacts->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                <thead>
                                    <tr class="fw-bold text-muted">
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Status') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentContacts as $contact)
                                    <tr>
                                        <td>
                                            <span class="text-dark fw-bold d-block fs-6">{{ $contact->name }}</span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-semibold d-block fs-7">{{ $contact->email }}</span>
                                        </td>
                                        <td>
                                            @if($contact->status == 'new')
                                                <span class="badge badge-light-warning">{{ __('New') }}</span>
                                            @elseif($contact->status == 'read')
                                                <span class="badge badge-light-info">{{ __('Read') }}</span>
                                            @else
                                                <span class="badge badge-light-success">{{ __('Replied') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-10">
                            <i class="fa-solid fa-envelope-open fs-3x text-muted mb-5"></i>
                            <p class="text-muted">{{ __('No messages yet') }}</p>
                            <p class="text-muted fs-7">{{ __('Messages will appear here when visitors contact you') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="row g-5 g-xl-10 mt-5">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Quick Actions') }}</h3>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <a href="#" class="btn btn-light-primary w-100">
                                <i class="fa-solid fa-plus me-2"></i>
                                {{ __('Add Service') }}
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-light-success w-100">
                                <i class="fa-solid fa-plus me-2"></i>
                                {{ __('Add Project') }}
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-light-info w-100">
                                <i class="fa-solid fa-plus me-2"></i>
                                {{ __('Add Blog Post') }}
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-light-warning w-100">
                                <i class="fa-solid fa-envelope me-2"></i>
                                {{ __('View Messages') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Getting Started Card (shown when no data) --}}
    @if(($totalServices + $totalProjects + $totalBlogs) == 0)
    <div class="row g-5 g-xl-10 mt-5">
        <div class="col-12">
            <div class="card shadow-sm bg-light-primary">
                <div class="card-body text-center py-10">
                    <i class="fa-solid fa-rocket fs-3x text-primary mb-5"></i>
                    <h2 class="mb-5">{{ __('Welcome to Agntix Studio Dashboard!') }}</h2>
                    <p class="fs-4 text-muted mb-8">
                        {{ __('Your dynamic content system is ready. Follow these steps to get started:') }}
                    </p>

                    <div class="row g-5 justify-content-center">
                        <div class="col-md-4">
                            <div class="card bg-white">
                                <div class="card-body">
                                    <div class="fs-1 text-primary mb-3">1</div>
                                    <h4>{{ __('Run Migrations') }}</h4>
                                    <code class="d-block my-3">php artisan migrate</code>
                                    <p class="text-muted small">{{ __('Create database tables') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-white">
                                <div class="card-body">
                                    <div class="fs-1 text-success mb-3">2</div>
                                    <h4>{{ __('Run Seeders') }}</h4>
                                    <code class="d-block my-3">php artisan db:seed</code>
                                    <p class="text-muted small">{{ __('Add default content') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-white">
                                <div class="card-body">
                                    <div class="fs-1 text-info mb-3">3</div>
                                    <h4>{{ __('Start Managing') }}</h4>
                                    <p class="text-muted small">{{ __('Add, edit, and manage your content') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="{{ asset('START_HERE.md') }}" target="_blank" class="btn btn-primary btn-lg me-3">
                            <i class="fa-solid fa-book me-2"></i>
                            {{ __('Read Documentation') }}
                        </a>
                        <a href="{{ asset('QUICK_START.md') }}" target="_blank" class="btn btn-success btn-lg">
                            <i class="fa-solid fa-rocket me-2"></i>
                            {{ __('Quick Start Guide') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
