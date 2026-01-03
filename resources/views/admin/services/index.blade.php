@extends('admin.layouts.master')

@section('title', __('admin.services_management'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.services_management') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('admin.services') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.services.create') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-plus"></i>
            {{ __('admin.add_service') }}
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

    {{-- Statistics Cards --}}
    @php
        $totalServices = method_exists($services, 'total') ? $services->total() : $services->count();
        $allServices = method_exists($services, 'items') ? collect($services->items()) : $services;
        // For statistics, we need all services if it's a paginator
        $allServicesForStats = method_exists($services, 'items')
            ? \App\Models\Service::all()
            : $services;
    @endphp


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
            @if($allServices->count() > 0)
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="servicesTable">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                                <th class="min-w-100px">{{ __('admin.image') }}</th>
                                <th class="min-w-200px">{{ __('admin.service') }}</th>
                                <th class="min-w-200px">{{ __('admin.description') }}</th>
                                <th class="min-w-100px">{{ __('admin.order') }}</th>
                                <th class="min-w-100px">{{ __('admin.status') }}</th>
                                <th class=" min-w-100px">{{ __('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            @foreach($allServices as $service)
                                <tr>

                                    <td>
                                        @if($service->image)
                                            <div class="symbol symbol-50px me-3">
                                                <img src="{{ asset('storage/' . $service->image) }}"
                                                     alt="{{ $service->title['en'] ?? '' }}"
                                                     class="rounded" />
                                            </div>
                                        @elseif($service->icon)
                                            <div class="symbol symbol-50px me-3">
                                                <img src="{{ asset('storage/' . $service->icon) }}"
                                                     alt="{{ $service->title['en'] ?? '' }}"
                                                     class="rounded" />
                                            </div>
                                        @else
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-primary">
                                                    <i class="fa-solid fa-briefcase fs-2x text-primary"></i>
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('admin.services.edit', $service->id) }}"
                                               class="text-gray-800 text-hover-primary mb-1 fw-bold">
                                                {{ Str::limit($service->title[app()->getLocale()] ?? $service->title['en'] ?? 'N/A', 50) }}
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-gray-600">
                                            {{ Str::limit($service->description[app()->getLocale()] ?? $service->description['en'] ?? 'N/A', 80) }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary">
                                            {{ $service->order }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($service->is_active)
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
                                                <a href="{{ route('admin.services.edit', $service->id) }}" class="menu-link px-3">
                                                    <i class="fa-solid fa-pen me-2"></i>{{ __('admin.edit') }}
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <form action="{{ route('admin.services.destroy', $service->id) }}"
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
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if(method_exists($services, 'hasPages') && $services->hasPages())
                    <div class="d-flex justify-content-between align-items-center flex-wrap pt-5">
                        <div class="fs-6 fw-semibold text-gray-700">
                            {{ __('admin.showing') }} {{ $services->firstItem() }} {{ __('admin.to') }} {{ $services->lastItem() }}
                            {{ __('admin.of') }} {{ $services->total() }} {{ __('admin.entries') }}
                        </div>
                        <div>
                            {{ $services->links() }}
                        </div>
                    </div>
                @endif
            @else
                {{-- Empty State --}}
                <div class="text-center py-10">
                    <div class="d-flex flex-column align-items-center">
                        <i class="fa-solid fa-briefcase fs-3x text-gray-400 mb-4"></i>
                        <span class="text-gray-600 fs-4 fw-bold mb-2">{{ __('admin.no_services') }}</span>
                        <span class="text-muted fs-6 mb-8">{{ __('admin.no_services_description') }}</span>
                        <a href="{{ route('admin.services.create') }}" class="btn btn-lg btn-primary">
                            <i class="fa-solid fa-plus fs-2 me-2"></i>
                            {{ __('admin.add_first_service') }}
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('styles')
<style>
    .hover-elevate-up {
        transition: all 0.3s ease;
    }

    .hover-elevate-up:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1.5rem 0.5rem rgba(0, 0, 0, 0.075) !important;
    }
</style>
@endpush

@push('scripts')
<script>
    document.getElementById('searchInput')?.addEventListener('keyup', function() {
        const value = this.value.toLowerCase();
        const rows = document.querySelectorAll('#servicesTable tbody tr');

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(value) ? '' : 'none';
        });
    });
</script>
@endpush
