@extends('admin.layouts.master')

@section('title', __('Credentials'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ __('Credentials') }}</h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ __('Credentials') }}</li>
        </ul>
    </div>
@endsection

@section('content')
    {{-- Success Alert --}}
    @if(session('success'))
        <div class="alert alert-success d-flex align-items-center p-5 mb-7 alert-dismissible fade show" role="alert">
            <i class="ki-duotone ki-check fs-2hx text-success me-4">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <div class="d-flex flex-column">
                <h4 class="mb-1 text-success">{{ __('Success') }}</h4>
                <span>{{ session('success') }}</span>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Search & Filter Card --}}
    <div class="card mb-7 shadow-sm">
        <div class="card-header border-0 pt-6">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-5 text-gray-800">{{ __('Search & Filter') }}</span>
                <span class="text-muted mt-1 fw-semibold fs-7">{{ __('Find credentials quickly') }}</span>
            </h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-light-primary" id="clearFilters">
                    <i class="ki-duotone ki-arrows-circle fs-3">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    {{ __('Clear Filters') }}
                </button>
            </div>
        </div>
        <div class="card-body py-5">
            <form id="searchForm" method="GET" action="{{ route('credentials.index') }}" class="row g-4 align-items-end">
                <div class="col-md-4">
                    <label class="form-label fw-semibold">{{ __('Global Search') }}</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ki-duotone ki-magnifier fs-3"></i></span>
                        <input type="text" name="q" value="{{ $q ?? '' }}" class="form-control"
                               placeholder="{{ __('Search by URL, User, or Server') }}"
                               autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">{{ __('URL') }}</label>
                    <input type="text" name="url" value="{{ $url ?? '' }}" class="form-control"
                           placeholder="https://..." autocomplete="off">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">{{ __('User/Email') }}</label>
                    <input type="text" name="username" value="{{ $username ?? '' }}" class="form-control"
                           placeholder="user@example.com" autocomplete="off">
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">{{ __('Server') }}</label>
                    <input type="text" name="server_name" value="{{ $server ?? '' }}" class="form-control"
                           placeholder="{{ __('Server') }}" autocomplete="off">
                </div>
                <div class="col-12 d-flex gap-2">
                    <div class="text-muted fs-7" id="searchStatus"></div>
                    <a href="{{ route('credentials.create') }}" class="btn btn-success ms-auto">
                        <i class="ki-duotone ki-plus fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        {{ __('Add New') }}
                    </a>
                </div>
            </form>
        </div>
    </div>

    {{-- Credentials Table Card --}}
    <div class="card shadow-sm">
        <div class="card-header border-0 pt-6">
            <h3 class="card-title">
                <span class="card-label fw-bold fs-5 text-gray-800">{{ __('admin.all_credentials') }}</span>
                <span class="text-muted fw-semibold fs-7 ms-2">({{ __('admin.total_count', ['count' => $credentials->total()]) }})</span>
            </h3>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table credentials-table align-middle table-row-bordered fs-6 gy-4 mb-0">
                    <thead>
                    <tr class="text-start text-gray-600 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-300px">{{ __('URL') }}</th>
                        <th class="min-w-150px">{{ __('User') }}</th>
                        <th class="min-w-125px">{{ __('Server Name') }}</th>
                        <th class=" min-w-150px">{{ __('Actions') }}</th>
                    </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-700">
                    @forelse($credentials as $credential)
                        <tr data-row-id="{{ $credential->id }}" class="credential-row">
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-40px me-3">
                                        <div class="symbol-label bg-light-primary">
                                            <i class="ki-duotone ki-lock fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="{{ $credential->url }}" target="_blank"
                                           class="text-primary fw-semibold text-hover-primary text-decoration-underline fs-6"
                                           rel="noopener noreferrer">
                                            {{ Str::limit($credential->url, 50) }}
                                        </a>
                                        <span class="text-muted fs-7">
                                                {{ parse_url($credential->url, PHP_URL_HOST) ?? __('Invalid URL') }}
                                            </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                    <span class="badge badge-light-primary fs-7 fw-semibold">
                                        <i class="ki-duotone ki-user fs-5 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        {{ Str::limit($credential->username, 25) }}
                                    </span>
                            </td>
                            <td>
                                @if($credential->server_name)
                                    <span class="badge badge-light-info fs-7 fw-semibold">
                                            <i class="ki-duotone ki-tablet-book fs-5 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            {{ $credential->server_name }}
                                        </span>
                                @else
                                    <span class="text-gray-400 fs-7">—</span>
                                @endif
                            </td>
                            <td >
                                <div class="d-flex justify-content-start gap-2">
                                    {{-- Copy Password Button --}}
                                    <button type="button"
                                            class="btn btn-sm btn-icon btn-light btn-copy-password"
                                            data-credential-id="{{ $credential->id }}"
                                            title="{{ __('Copy Password') }}"
                                            aria-label="{{ __('Copy Password') }}">
                                        <i class="ki-duotone ki-copy fs-4 text-gray-700">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>

                                    {{-- View Button --}}
                                    <a href="{{ route('credentials.show', $credential) }}"
                                       class="btn btn-sm btn-icon btn-light"
                                       title="{{ __('View') }}"
                                       aria-label="{{ __('View') }}">
                                        <i class="ki-duotone ki-eye fs-4 text-gray-700">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </a>

                                    {{-- Edit Button --}}
                                    <a href="{{ route('credentials.edit', $credential) }}"
                                       class="btn btn-sm btn-icon btn-light-primary"
                                       title="{{ __('Edit') }}"
                                       aria-label="{{ __('Edit') }}">
                                        <i class="ki-duotone ki-pencil fs-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>

                                    {{-- Delete Button --}}
                                    <form action="{{ route('credentials.destroy', $credential) }}"
                                          method="POST"
                                          class="d-inline js-delete-form"
                                          data-id="{{ $credential->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-sm btn-icon btn-light-danger js-delete-btn"
                                                title="{{ __('Delete') }}"
                                                aria-label="{{ __('Delete') }}">
                                            <i class="ki-duotone ki-trash fs-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-10">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="ki-duotone ki-file-deleted fs-4x text-gray-400 mb-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <h4 class="text-gray-600 fw-semibold mb-2">{{ __('No records found') }}</h4>
                                    <p class="text-gray-400 fs-6">{{ __('Try adjusting your search filters') }}</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
            <div class="text-muted fs-7">
                {{ __('admin.showing_entries', [
                    'first' => $credentials->firstItem() ?? 0,
                    'last' => $credentials->lastItem() ?? 0,
                    'total' => $credentials->total()
                ]) }}
            </div>
            <div>{{ $credentials->links() }}</div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        (function() {
            'use strict';

            // ========== Search Form Auto-Submit ==========
            const searchForm = document.getElementById('searchForm');
            const searchStatus = document.getElementById('searchStatus');

            if (searchForm) {
                const inputs = searchForm.querySelectorAll('input[type="text"]');
                let debounceTimer;
                let isSearching = false;

                function showSearchStatus(message) {
                    if (searchStatus) {
                        searchStatus.textContent = message;
                        setTimeout(() => searchStatus.textContent = '', 2000);
                    }
                }

                function submitWithDebounce() {
                    clearTimeout(debounceTimer);
                    showSearchStatus('{{ __('Searching...') }}');
                    debounceTimer = setTimeout(() => {
                        if (!isSearching) {
                            isSearching = true;
                            searchForm.requestSubmit();
                        }
                    }, 400);
                }

                inputs.forEach(input => {
                    input.addEventListener('input', submitWithDebounce);
                    input.addEventListener('keypress', e => {
                        if (e.key === 'Enter') {
                            e.preventDefault();
                            clearTimeout(debounceTimer);
                            searchForm.requestSubmit();
                        }
                    });
                });
            }

            // ========== Clear Filters Button ==========
            const clearFiltersBtn = document.getElementById('clearFilters');
            if (clearFiltersBtn && searchForm) {
                clearFiltersBtn.addEventListener('click', () => {
                    searchForm.querySelectorAll('input[type="text"]').forEach(input => input.value = '');
                    window.location.href = '{{ route('credentials.index') }}';
                });
            }

            // ========== Copy Password Functionality ==========
            document.querySelectorAll('.btn-copy-password').forEach(btn => {
                btn.addEventListener('click', async function() {
                    const credentialId = this.dataset.credentialId;
                    const icon = this.querySelector('i');
                    const originalClasses = icon.className;

                    try {
                        // This would require an API endpoint to fetch the password
                        // For now, show a placeholder message
                        icon.className = 'ki-duotone ki-check fs-4 text-success';

                        if (window.Swal) {
                            Swal.fire({
                                icon: 'info',
                                title: '{{ __('Copy Password') }}',
                                text: '{{ __('This feature requires API endpoint implementation') }}',
                                timer: 2000,
                                showConfirmButton: false
                            });
                        }

                        setTimeout(() => {
                            icon.className = originalClasses;
                        }, 2000);
                    } catch (error) {
                        console.error('Copy failed:', error);
                        icon.className = originalClasses;
                    }
                });
            });

            // ========== Delete Functionality with AJAX ==========
            document.querySelectorAll('.js-delete-form').forEach(form => {
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    const deleteCredential = async () => {
                        const url = form.getAttribute('action');
                        const row = form.closest('tr');
                        const token = form.querySelector('input[name="_token"]').value;

                        try {
                            const response = await fetch(url, {
                                method: 'POST',
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': token,
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                },
                                body: new URLSearchParams(new FormData(form))
                            });

                            if (!response.ok) throw new Error('Network response was not ok');

                            // Animate row removal
                            if (row) {
                                row.style.transition = 'opacity 0.3s, transform 0.3s';
                                row.style.opacity = '0';
                                row.style.transform = 'translateX(-20px)';
                                setTimeout(() => row.remove(), 300);
                            }

                            if (window.Swal) {
                                Swal.fire({
                                    icon: 'success',
                                    title: '{{ __('Deleted!') }}',
                                    text: '{{ __('Credential has been deleted successfully') }}',
                                    timer: 2000,
                                    showConfirmButton: false
                                });
                            }
                        } catch (error) {
                            console.error('Delete failed:', error);
                            // Fallback to normal form submission
                            form.submit();
                        }
                    };

                    // Confirmation Dialog
                    if (window.Swal) {
                        const result = await Swal.fire({
                            title: '{{ __('Are you sure?') }}',
                            text: '{{ __('This action cannot be undone.') }}',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: '{{ __('Yes, delete it!') }}',
                            cancelButtonText: '{{ __('Cancel') }}',
                            reverseButtons: true,
                            buttonsStyling: false,
                            customClass: {
                                confirmButton: 'btn btn-danger me-3',
                                cancelButton: 'btn btn-light'
                            }
                        });

                        if (result.isConfirmed) {
                            await deleteCredential();
                        }
                    } else {
                        if (confirm('{{ __('Are you sure you want to delete this credential?') }}')) {
                            await deleteCredential();
                        }
                    }
                });
            });

            // ========== Row Hover Animation ==========
            document.querySelectorAll('.credential-row').forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.005)';
                    this.style.transition = 'transform 0.2s ease';
                });

                row.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        })();
    </script>
@endpush

@push('styles')
    <style>
        /* ========== Card & Layout Improvements ========== */
        .card.shadow-sm {
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08) !important;
            transition: box-shadow 0.3s ease;
        }

        .card.shadow-sm:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12) !important;
        }

        /* ========== Table Improvements ========== */
        .credentials-table thead th {
            background: linear-gradient(to bottom, #f9fafb 0%, #f5f7fa 100%);
            border-bottom: 2px solid #e4e6ef !important;
            color: #5e6278;
            letter-spacing: 0.5px;
            font-weight: 600;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .credentials-table th,
        .credentials-table td {
            padding: 16px 20px !important;
            vertical-align: middle;
        }

        .credentials-table tbody tr {
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .credentials-table tbody tr:hover {
            background: linear-gradient(to right, #f8f9fc 0%, #f5f8fa 100%);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
        }

        /* ========== Button Improvements ========== */
        .credentials-table .btn.btn-sm.btn-icon {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.2s ease;
            border: 1px solid transparent;
        }

        .credentials-table .btn.btn-light {
            background: #f5f8fa;
            border-color: #e4e6ef;
        }

        .credentials-table .btn.btn-light:hover {
            background: #e4f1ff;
            border-color: #b5d9f5;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .credentials-table .btn.btn-light-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        }

        .credentials-table .btn.btn-light-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
        }

        /* ========== Badge Improvements ========== */
        .credentials-table .badge {
            padding: 0.65rem 0.85rem;
            border-radius: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        /* ========== Icon Improvements ========== */
        .symbol-label {
            border-radius: 10px;
        }

        /* ========== Input Group Improvements ========== */
        .input-group-text {
            background: #f5f8fa;
            border-color: #e4e6ef;
        }

        /* ========== Dark Mode Refinements ========== */
        [data-bs-theme="dark"] .card.shadow-sm {
            background: #1e1e2d;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3) !important;
        }

        [data-bs-theme="dark"] .credentials-table thead th {
            background: linear-gradient(to bottom, #1b1f2a 0%, #151821 100%);
            border-bottom-color: #2b2f3a !important;
            color: #a1a5b7;
        }

        [data-bs-theme="dark"] .credentials-table tbody tr:hover {
            background: linear-gradient(to right, #1f2430 0%, #252836 100%);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        [data-bs-theme="dark"] .btn.btn-light {
            background: #1e2129;
            border-color: #2b2f3a;
            color: #a1a5b7;
        }

        [data-bs-theme="dark"] .btn.btn-light:hover {
            background: #252836;
            border-color: #3a3f52;
            color: #e0e3e7;
        }

        [data-bs-theme="dark"] .input-group-text {
            background: #1e2129;
            border-color: #2b2f3a;
            color: #a1a5b7;
        }

        [data-bs-theme="dark"] .symbol-label.bg-light-primary {
            background: #1f2a44 !important;
        }

        [data-bs-theme="dark"] .badge {
            background: #1e2129;
            color: #a1a5b7;
            border: 1px solid #2b2f3a;
        }

        /* ========== Animation Improvements ========== */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .credential-row {
            animation: fadeIn 0.3s ease;
        }

        /* ========== Responsive Improvements ========== */
        /* Remove horizontal scroller from table containers (DataTables and Bootstrap wrappers) */
        .table-responsive { overflow-x: hidden; }
        .dataTables_wrapper .dataTables_scrollBody { overflow-x: hidden !important; }
        .dataTables_wrapper .dataTables_scroll { overflow: visible !important; }
        .credentials-table { width: 100% !important; }
        @media (max-width: 768px) {
            .credentials-table th,
            .credentials-table td {
                padding: 12px 10px !important;
            }

            .d-flex.gap-2 {
                gap: 0.5rem !important;
            }

            .btn.btn-sm.btn-icon {
                width: 32px;
                height: 32px;
            }
        }
    </style>
@endpush
