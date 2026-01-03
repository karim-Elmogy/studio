@extends('admin.layouts.master')

@section('title', __('admin.settings_management'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.settings_management') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('admin.settings') }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.settings.create') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-plus"></i>
            {{ __('admin.add_setting') }}
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

    <div class="alert alert-info d-flex align-items-center mb-5">
        <i class="fa-solid fa-circle-info fs-2x me-3"></i>
        <div>
            <strong>{{ __('admin.tip') }}:</strong> {{ __('admin.settings_tip') }}
        </div>
    </div>

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
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="settingsTable">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                            <th class="min-w-200px">{{ __('admin.key') }}</th>
                            <th class="min-w-250px">{{ __('admin.value_preview') }}</th>
                            <th class="min-w-125px">{{ __('admin.type') }}</th>
                            <th class="min-w-200px">{{ __('admin.description') }}</th>
                            <th class=" min-w-100px">{{ __('admin.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @forelse($settings as $setting)
                            <tr>

                                <td>
                                    <code class="text-primary fw-bold">{{ $setting->key }}</code>
                                </td>
                                <td>
                                    @if($setting->type === 'image' && $setting->value)
                                        <div class="symbol symbol-50px">
                                            <img src="{{ asset('storage/' . $setting->value) }}"
                                                 alt="{{ $setting->key }}"
                                                 class="rounded" />
                                        </div>
                                    @elseif($setting->type === 'boolean')
                                        @if($setting->value === 'true' || $setting->value === '1')
                                            <span class="badge badge-light-success">
                                                <i class="fa-solid fa-check"></i> {{ __('admin.true') }}
                                            </span>
                                        @else
                                            <span class="badge badge-light-danger">
                                                <i class="fa-solid fa-times"></i> {{ __('admin.false') }}
                                            </span>
                                        @endif
                                    @else
                                        <span class="text-gray-800">
                                            {{ Str::limit($setting->value ?? 'N/A', 50) }}
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if($setting->type === 'text')
                                        <span class="badge badge-light-primary">{{ __('admin.text') }}</span>
                                    @elseif($setting->type === 'textarea')
                                        <span class="badge badge-light-info">{{ __('admin.textarea') }}</span>
                                    @elseif($setting->type === 'image')
                                        <span class="badge badge-light-success">{{ __('admin.image') }}</span>
                                    @elseif($setting->type === 'boolean')
                                        <span class="badge badge-light-warning">{{ __('admin.boolean') }}</span>
                                    @elseif($setting->type === 'number')
                                        <span class="badge badge-light-secondary">{{ __('admin.number') }}</span>
                                    @else
                                        <span class="badge badge-light">{{ ucfirst($setting->type) }}</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="text-gray-600">
                                        {{ Str::limit($setting->description['en'] ?? 'N/A', 40) }}
                                    </span>
                                </td>
                                <td class="">
                                    <a href="{{ route('admin.settings.edit', $setting) }}"
                                       class="btn btn-sm btn-light btn-active-light-primary me-2">
                                        <i class="fa-solid fa-pen"></i>
                                        {{ __('admin.edit') }}
                                    </a>
                                    <form action="{{ route('admin.settings.destroy', $setting) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('{{ __('admin.confirm_delete') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-light-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-10">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="fa-solid fa-gear fs-3x text-gray-400 mb-4"></i>
                                        <span class="text-gray-600 fs-4 fw-bold mb-2">{{ __('admin.no_settings') }}</span>
                                        <span class="text-muted fs-6">{{ __('admin.no_settings_description') }}</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if(method_exists($settings, 'hasPages') && $settings->hasPages())
                <div class="d-flex justify-content-between align-items-center flex-wrap pt-5">
                    <div class="fs-6 fw-semibold text-gray-700">
                        {{ __('admin.showing') }} {{ $settings->firstItem() }} {{ __('admin.to') }} {{ $settings->lastItem() }}
                        {{ __('admin.of') }} {{ $settings->total() }} {{ __('admin.entries') }}
                    </div>
                    <div>
                        {{ $settings->links() }}
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
        const rows = document.querySelectorAll('#settingsTable tbody tr');

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(value) ? '' : 'none';
        });
    });
</script>
@endpush
