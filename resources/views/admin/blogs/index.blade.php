@extends('admin.layouts.master')

@section('title', __('admin.blogs_management'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.blogs_management') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('admin.blogs') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-plus"></i>
            {{ __('admin.add_blog') }}
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

    <div class="card shadow-sm">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="fa-solid fa-magnifying-glass fs-3 position-absolute ms-5"></i>
                    <input type="text" class="form-control form-control-solid w-250px ps-13"
                           placeholder="{{ __('admin.search') }}..." id="searchInput">
                </div>
            </div>
            <div class="card-toolbar">
                <div class="d-flex justify-content-end gap-2" data-kt-subscription-table-toolbar="base">
                    <button type="button" class="btn btn-light-primary btn-sm">
                        <i class="fa-solid fa-filter"></i>
                        {{ __('admin.filter') }}
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="blogsTable">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                            <th class="min-w-200px">{{ __('admin.blog') }}</th>
                            <th class="min-w-125px">{{ __('admin.category') }}</th>
                            <th class="min-w-125px">{{ __('admin.author') }}</th>
                            <th class="min-w-100px">{{ __('admin.date') }}</th>
                            <th class="min-w-100px">{{ __('admin.status') }}</th>
                            <th class=" min-w-100px">{{ __('admin.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @forelse($blogs as $blog)
                            <tr>

                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($blog->image)
                                            <div class="symbol symbol-50px me-3">
                                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title['en'] ?? '' }}" />
                                            </div>
                                        @else
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-primary">
                                                    <i class="fa-solid fa-blog fs-2x text-primary"></i>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('admin.blogs.show', $blog) }}"
                                               class="text-gray-800 text-hover-primary mb-1 fw-bold">
                                                {{ Str::limit($blog->title[app()->getLocale()] ?? $blog->title['en'] ?? 'N/A', 50) }}
                                            </a>
                                            @if($blog->excerpt && isset($blog->excerpt[app()->getLocale()]))
                                                <span class="text-muted fs-7">
                                                    {{ Str::limit($blog->excerpt[app()->getLocale()], 60) }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-light-info">
                                        {{ $blog->category[app()->getLocale()] ?? $blog->category['en'] ?? 'N/A' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($blog->author_image)
                                            <div class="symbol symbol-circle symbol-25px me-2">
                                                <img src="{{ asset('storage/' . $blog->author_image) }}" alt="{{ $blog->author_name }}" />
                                            </div>
                                        @endif
                                        <div class="d-flex flex-column">
                                            <span class="text-gray-800 fw-bold">{{ $blog->author_name ?? 'N/A' }}</span>
                                            @if($blog->author_role)
                                                <span class="text-muted fs-8">{{ $blog->author_role }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-gray-800">
                                        {{ $blog->published_date ? date('d M Y', strtotime($blog->published_date)) : 'N/A' }}
                                    </span>
                                </td>
                                <td>
                                    @if($blog->is_featured)
                                        <span class="badge badge-light-warning me-1">
                                            <i class="fa-solid fa-star"></i> {{ __('admin.featured') }}
                                        </span>
                                    @endif
                                    @if($blog->is_active)
                                        <span class="badge badge-light-success">
                                            {{ __('admin.active') }}
                                        </span>
                                    @else
                                        <span class="badge badge-light-danger">
                                            {{ __('admin.inactive') }}
                                        </span>
                                    @endif
                                </td>
                                <td class="">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        {{ __('admin.actions') }}
                                        <i class="fa-solid fa-chevron-down fs-7 ms-1"></i>
                                    </a>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                         data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.blogs.show', $blog) }}" class="menu-link px-3">
                                                <i class="fa-solid fa-eye me-2"></i>{{ __('admin.view') }}
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="menu-link px-3">
                                                <i class="fa-solid fa-pen me-2"></i>{{ __('admin.edit') }}
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <form action="{{ route('admin.blogs.destroy', $blog) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('{{ __('admin.confirm_delete') }}');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="menu-link px-3 w-100 text-start btn btn-link text-danger p-0">
                                                    <i class="fa-solid fa-trash me-2"></i>{{ __('admin.delete') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-10">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="fa-solid fa-blog fs-3x text-gray-400 mb-4"></i>
                                        <span class="text-gray-600 fs-4 fw-bold mb-2">{{ __('admin.no_blogs') }}</span>
                                        <span class="text-muted fs-6">{{ __('admin.no_blogs_description') }}</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if(method_exists($blogs, 'hasPages') && $blogs->hasPages())
                <div class="d-flex justify-content-between align-items-center flex-wrap pt-5">
                    <div class="fs-6 fw-semibold text-gray-700">
                        {{ __('admin.showing') }} {{ $blogs->firstItem() }} {{ __('admin.to') }} {{ $blogs->lastItem() }}
                        {{ __('admin.of') }} {{ $blogs->total() }} {{ __('admin.entries') }}
                    </div>
                    <div>
                        {{ $blogs->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Simple search functionality
    document.getElementById('searchInput')?.addEventListener('keyup', function() {
        const value = this.value.toLowerCase();
        const rows = document.querySelectorAll('#blogsTable tbody tr');

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(value) ? '' : 'none';
        });
    });
</script>
@endpush
