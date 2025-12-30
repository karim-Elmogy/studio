@extends('layouts.master')

@section('title', __('Credential Details'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ __('Credential Details') }}</h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted"><a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted"><a href="{{ route('credentials.index') }}" class="text-muted text-hover-primary">{{ __('Credentials') }}</a></li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">#{{ $credential->id }}</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="card shadow-sm credential-card">
        <div class="card-header border-0 pt-6 pb-4">
            <div class="d-flex align-items-center flex-grow-1">
                <div class="site-icon me-3">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div>
                    <h3 class="fw-bold mb-1">{{ parse_url($credential->url, PHP_URL_HOST) ?? $credential->url }}</h3>
                    <div class="text-muted fs-7">{{ __('Credential ID') }}: #{{ $credential->id }}</div>
                </div>
            </div>
            <div class="card-toolbar d-flex gap-2">
                <a href="{{ route('credentials.edit', $credential) }}" class="btn btn-sm btn-light-primary toolbar-btn" title="{{ __('Edit') }}">
                    <i class="fa-regular fa-pen-to-square"></i>
                    <span class="d-none d-sm-inline ms-2">{{ __('Edit') }}</span>
                </a>
                <a href="{{ route('credentials.index') }}" class="btn btn-sm btn-light toolbar-btn" title="{{ __('Back') }}">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <form action="{{ route('credentials.destroy', $credential) }}" method="POST" class="d-inline js-delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-light-danger toolbar-btn" title="{{ __('Delete') }}">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="card-body p-6">
            <div class="row g-5">
                <!-- URL Section -->
                <div class="col-12 col-md-6">
                    <div class="credential-box h-100">
                        <div class="credential-box-header">
                            <i class="fa-solid fa-link"></i>
                            <span>{{ __('URL') }}</span>
                        </div>
                        <div class="credential-box-body">
                            <a href="{{ $credential->url }}" target="_blank" class="credential-value text-primary text-hover-underline d-block mb-3">
                                {{ $credential->url }}
                            </a>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-light-primary flex-fill js-copy" data-copy="{{ $credential->url }}" title="{{ __('Copy') }}">
                                    <i class="fa-regular fa-copy me-2"></i>{{ __('Copy') }}
                                </button>
                                <a href="{{ $credential->url }}" target="_blank" class="btn btn-sm btn-light-primary" title="{{ __('Open') }}">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Username Section -->
                <div class="col-12 col-md-6">
                    <div class="credential-box h-100">
                        <div class="credential-box-header">
                            <i class="fa-solid fa-user"></i>
                            <span>{{ __('User / Email') }}</span>
                        </div>
                        <div class="credential-box-body">
                            <div class="credential-value badge badge-light-info fs-6 py-2 px-3 w-100 text-start mb-3">
                                {{ $credential->username }}
                            </div>
                            <button class="btn btn-sm btn-light-info w-100 js-copy" data-copy="{{ $credential->username }}" title="{{ __('Copy') }}">
                                <i class="fa-regular fa-copy me-2"></i>{{ __('Copy') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Password Section -->
                <div class="col-12 col-md-6">
                    <div class="credential-box h-100">
                        <div class="credential-box-header">
                            <i class="fa-solid fa-key"></i>
                            <span>{{ __('Password') }}</span>
                        </div>
                        <div class="credential-box-body">
                            <div class="password-input-wrapper mb-3">
                                <input type="password" class="form-control form-control-solid" value="{{ $credential->password }}" readonly id="passwordField">
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-light-success flex-fill" id="togglePw" type="button" title="{{ __('Show/Hide') }}">
                                    <i class="fa-regular fa-eye me-2"></i>{{ __('Show') }}
                                </button>
                                <button class="btn btn-sm btn-light-success flex-fill js-copy" data-copy="{{ $credential->password }}" title="{{ __('Copy') }}">
                                    <i class="fa-regular fa-copy me-2"></i>{{ __('Copy') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Server Name Section -->
                <div class="col-12 col-md-6">
                    <div class="credential-box h-100">
                        <div class="credential-box-header">
                            <i class="fa-solid fa-server"></i>
                            <span>{{ __('Server Name') }}</span>
                        </div>
                        <div class="credential-box-body">
                            @if($credential->server_name)
                                <div class="credential-value badge badge-light-warning fs-6 py-2 px-3 w-100 text-start mb-3">
                                    {{ $credential->server_name }}
                                </div>
                            @else
                                <div class="text-muted text-center py-4">
                                    <i class="fa-solid fa-minus fs-3"></i>
                                    <div class="mt-2">{{ __('No server name') }}</div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Metadata Section -->
                <div class="col-12">
                    <div class="credential-box">
                        <div class="credential-box-header">
                            <i class="fa-solid fa-clock"></i>
                            <span>{{ __('Meta') }}</span>
                        </div>
                        <div class="credential-box-body">
                            <div class="row g-4">
                                <div class="col-12 col-md-6">
                                    <div class="meta-item">
                                        <i class="fa-solid fa-calendar-plus text-success"></i>
                                        <div>
                                            <div class="meta-label">{{ __('Created') }}</div>
                                            <div class="meta-value">{{ $credential->created_at->format('Y-m-d H:i') }}</div>
                                        </div>
                                    </div>
                                </div>
                                @if($credential->updated_at && $credential->updated_at != $credential->created_at)
                                    <div class="col-12 col-md-6">
                                        <div class="meta-item">
                                            <i class="fa-solid fa-pen text-primary"></i>
                                            <div>
                                                <div class="meta-label">{{ __('Updated') }}</div>
                                                <div class="meta-value">{{ $credential->updated_at->format('Y-m-d H:i') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Copy buttons with animation
        document.querySelectorAll('.js-copy').forEach(btn => {
            btn.addEventListener('click', async () => {
                try {
                    await navigator.clipboard.writeText(btn.dataset.copy || '');
                    const icon = btn.querySelector('i');
                    const originalClass = icon.className;
                    icon.className = 'fa-solid fa-check';

                    if (window.Swal) {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            timer: 1500,
                            showConfirmButton: false,
                            icon: 'success',
                            title: '{{ __('Copied') }}',
                            timerProgressBar: true
                        });
                    }

                    setTimeout(() => {
                        icon.className = originalClass;
                    }, 1500);
                } catch (e) {
                    console.error('Copy failed:', e);
                }
            });
        });

        // Delegated copy to support clicking the icon itself (fa-copy)
        document.addEventListener('click', async function(e){
            const icon = e.target.closest('.fa-copy');
            if (!icon) return;
            const container = icon.closest('[data-copy], .js-copy');
            const text = (container && container.dataset && container.dataset.copy) ? container.dataset.copy : '';
            if (!text) return;
            try {
                await (navigator.clipboard?.writeText ? navigator.clipboard.writeText(text) : Promise.resolve());
                icon.classList.add('text-success');
                setTimeout(()=> icon.classList.remove('text-success'), 1000);
            } catch (err) {}
        });

        // Toggle password show/hide
        const pw = document.getElementById('passwordField');
        const toggle = document.getElementById('togglePw');
        if (pw && toggle) {
            toggle.addEventListener('click', () => {
                const isPwd = pw.type === 'password';
                pw.type = isPwd ? 'text' : 'password';
                const icon = toggle.querySelector('i');
                const text = toggle.querySelector('i').nextSibling;
                icon.className = isPwd ? 'fa-regular fa-eye-slash me-2' : 'fa-regular fa-eye me-2';
                if (text && text.nodeValue) {
                    text.nodeValue = isPwd ? '{{ __('Hide') }}' : '{{ __('Show') }}';
                }
            });
        }

        // Delete confirmation
        const delForm = document.querySelector('.js-delete-form');
        if (delForm) {
            delForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                if (window.Swal) {
                    const res = await Swal.fire({
                        title: '{{ __('Are you sure?') }}',
                        text: '{{ __('This action cannot be undone.') }}',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#f1416c',
                        cancelButtonColor: '#7239ea',
                        confirmButtonText: '{{ __('Yes, delete') }}',
                        cancelButtonText: '{{ __('Cancel') }}'
                    });
                    if (!res.isConfirmed) return;
                } else if (!confirm('{{ __('Delete this item?') }}')) {
                    return;
                }
                delForm.submit();
            });
        }
    </script>
@endpush

@push('styles')
    <style>
        .credential-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.5rem 2rem;
        }

        [data-bs-theme="dark"] .card-header {
            background: linear-gradient(135deg, #4a5568 0%, #2d3748 100%);
        }

        .card-header h3,
        .card-header .text-muted {
            color: white !important;
            opacity: 1;
        }

        .card-header .text-muted {
            opacity: 0.8;
        }

        .site-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            backdrop-filter: blur(10px);
        }

        .credential-box {
            background: #f9fafb;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e4e6ef;
            transition: all 0.3s ease;
        }

        .credential-box:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }

        [data-bs-theme="dark"] .credential-box {
            background: #1e1e2d;
            border-color: #2b2f3a;
        }

        .credential-box-header {
            background: linear-gradient(135deg, #f5f8fa 0%, #e4e6ef 100%);
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 600;
            font-size: 0.875rem;
            color: #3f4254;
            border-bottom: 1px solid #e4e6ef;
        }

        [data-bs-theme="dark"] .credential-box-header {
            background: linear-gradient(135deg, #2b2f3a 0%, #1e1e2d 100%);
            color: #a1a5b7;
            border-bottom-color: #2b2f3a;
        }

        .credential-box-header i {
            font-size: 1.1rem;
            color: #7239ea;
        }

        [data-bs-theme="dark"] .credential-box-header i {
            color: #9d7dea;
        }

        .credential-box-body {
            padding: 1.5rem;
        }

        .credential-value {
            font-size: 0.95rem;
            font-weight: 500;
            word-break: break-all;
            line-height: 1.6;
        }

        .password-input-wrapper input {
            font-family: 'Courier New', monospace;
            font-size: 1rem;
            letter-spacing: 2px;
            border: none;
            background-color: #e8f4fd;
            padding: 0.75rem 1rem;
            font-weight: 500;
        }

        [data-bs-theme="dark"] .password-input-wrapper input {
            background-color: #1a2837;
            color: #a1a5b7;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: #f5f8fa;
            border-radius: 8px;
        }

        [data-bs-theme="dark"] .meta-item {
            background: #1a1a27;
        }

        .meta-item i {
            font-size: 1.5rem;
        }

        .meta-label {
            font-size: 0.75rem;
            color: #7e8299;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.25rem;
        }

        .meta-value {
            font-size: 0.95rem;
            font-weight: 600;
            color: #3f4254;
        }

        [data-bs-theme="dark"] .meta-value {
            color: #c8cbcf;
        }

        .toolbar-btn {
            border-radius: 8px;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.2s ease;
        }

        .toolbar-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .badge-light-info {
            background-color: #e8f4fd;
            color: #0095e8;
            font-weight: 500;
            border: 1px solid #c6e9ff;
        }

        [data-bs-theme="dark"] .badge-light-info {
            background-color: #1a2837;
            color: #5eb3f6;
            border-color: #2a3f53;
        }

        .badge-light-warning {
            background-color: #fff8e1;
            color: #f6ab2f;
            font-weight: 500;
            border: 1px solid #ffe9a6;
        }

        [data-bs-theme="dark"] .badge-light-warning {
            background-color: #2d2616;
            color: #f6ab2f;
            border-color: #3d321f;
        }

        .btn-light-primary {
            background-color: #e8f4fd;
            color: #0095e8;
            border: none;
            font-weight: 500;
        }

        .btn-light-primary:hover {
            background-color: #d1ebfc;
            color: #0080c9;
        }

        [data-bs-theme="dark"] .btn-light-primary {
            background-color: #1a2837;
            color: #5eb3f6;
        }

        [data-bs-theme="dark"] .btn-light-primary:hover {
            background-color: #233647;
            color: #7fc4f7;
        }

        .btn-light-info {
            background-color: #e8f4fd;
            color: #0095e8;
            border: none;
            font-weight: 500;
        }

        .btn-light-info:hover {
            background-color: #d1ebfc;
            color: #0080c9;
        }

        [data-bs-theme="dark"] .btn-light-info {
            background-color: #1a2837;
            color: #5eb3f6;
        }

        .btn-light-success {
            background-color: #e8f8f5;
            color: #50cd89;
            border: none;
            font-weight: 500;
        }

        .btn-light-success:hover {
            background-color: #d1f2e8;
            color: #47be7d;
        }

        [data-bs-theme="dark"] .btn-light-success {
            background-color: #1c3238;
            color: #50cd89;
        }

        .btn-light-danger {
            background-color: #fff5f8;
            color: #f1416c;
            border: none;
            font-weight: 500;
        }

        .btn-light-danger:hover {
            background-color: #ffe2ed;
            color: #d9214e;
        }

        [data-bs-theme="dark"] .btn-light-danger {
            background-color: #3a2434;
            color: #f1416c;
        }

        .btn-light {
            background-color: #f5f8fa;
            color: #5e6278;
            border: none;
            font-weight: 500;
        }

        .btn-light:hover {
            background-color: #e4e6ef;
            color: #3f4254;
        }

        [data-bs-theme="dark"] .btn-light {
            background-color: #1e1e2d;
            color: #a1a5b7;
        }

        [data-bs-theme="dark"] .btn-light:hover {
            background-color: #2b2f3a;
            color: #c8cbcf;
        }

        @media (max-width: 768px) {
            .card-header {
                padding: 1.25rem 1.5rem;
                flex-direction: column;
                align-items: flex-start !important;
            }

            .card-toolbar {
                margin-top: 1rem;
                width: 100%;
                justify-content: flex-end;
            }
        }
    </style>
@endpush
