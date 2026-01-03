@extends('admin.layouts.master')

@section('title', __('admin.testimonials_management'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.testimonials_management') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('admin.testimonials') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-plus"></i>
            {{ __('admin.add_testimonial') }}
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
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="testimonialsTable">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                            <th class="min-w-100px">{{ __('admin.image') }}</th>
                            <th class="min-w-200px">{{ __('admin.name') }}</th>
                            <th class="min-w-150px">{{ __('admin.role') }}</th>
                            <th class="min-w-150px">{{ __('admin.testimonial') }}</th>
                            <th class="min-w-100px">{{ __('admin.rating') }}</th>
                            <th class="min-w-100px">{{ __('admin.status') }}</th>
                            <th class=" min-w-100px">{{ __('admin.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @forelse($testimonials as $testimonial)
                            <tr>

                                <td>
                                    @if($testimonial->image)
                                        <div class="symbol symbol-circle symbol-50px me-3">
                                            <img src="{{ asset('storage/' . $testimonial->image) }}"
                                                 alt="{{ $testimonial->name['en'] ?? '' }}" />
                                        </div>
                                    @else
                                        <div class="symbol symbol-circle symbol-50px me-3">
                                            <div class="symbol-label bg-light-primary">
                                                <i class="fa-solid fa-user fs-2x text-primary"></i>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="text-gray-800 fw-bold mb-1">
                                            {{ $testimonial->name[app()->getLocale()] ?? $testimonial->name['en'] ?? 'N/A' }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-gray-600">
                                        {{ $testimonial->role[app()->getLocale()] ?? $testimonial->role['en'] ?? 'N/A' }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-gray-600">
                                        {{ Str::limit($testimonial->testimonial[app()->getLocale()] ?? $testimonial->testimonial['en'] ?? 'N/A', 80) }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $testimonial->rating)
                                                <i class="fa-solid fa-star text-warning fs-5"></i>
                                            @else
                                                <i class="fa-regular fa-star text-gray-300 fs-5"></i>
                                            @endif
                                        @endfor
                                        <span class="text-gray-600 ms-2">({{ $testimonial->rating }}/5)</span>
                                    </div>
                                </td>
                                <td>
                                    @if($testimonial->is_active)
                                        <span class="badge badge-light-success">
                                            <i class="fa-solid fa-check-circle"></i> {{ __('admin.active') }}
                                        </span>
                                    @else
                                        <span class="badge badge-light-danger">
                                            <i class="fa-solid fa-times-circle"></i> {{ __('admin.inactive') }}
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
                                            <a href="{{ route('admin.testimonials.show', $testimonial) }}" class="menu-link px-3">
                                                <i class="fa-solid fa-eye me-2"></i>{{ __('admin.view') }}
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="menu-link px-3">
                                                <i class="fa-solid fa-pen me-2"></i>{{ __('admin.edit') }}
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}"
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
                                <td colspan="8" class="text-center py-10">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="fa-solid fa-comment-dots fs-3x text-gray-400 mb-4"></i>
                                        <span class="text-gray-600 fs-4 fw-bold mb-2">{{ __('admin.no_testimonials') }}</span>
                                        <span class="text-muted fs-6">{{ __('admin.no_testimonials_description') }}</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if(method_exists($testimonials, 'hasPages') && $testimonials->hasPages())
                <div class="d-flex justify-content-between align-items-center flex-wrap pt-5">
                    <div class="fs-6 fw-semibold text-gray-700">
                        {{ __('admin.showing') }} {{ $testimonials->firstItem() }} {{ __('admin.to') }} {{ $testimonials->lastItem() }}
                        {{ __('admin.of') }} {{ $testimonials->total() }} {{ __('admin.entries') }}
                    </div>
                    <div>
                        {{ $testimonials->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById('searchInput')?.addEventListener('keyup', function() {
        const value = this.value.toLowerCase();
        const rows = document.querySelectorAll('#testimonialsTable tbody tr');

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(value) ? '' : 'none';
        });
    });
</script>
@endpush
