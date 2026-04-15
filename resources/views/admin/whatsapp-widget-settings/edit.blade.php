@extends('admin.layouts.master', ['hideToolbar' => true])

@section('title', __('admin.whatsapp_widget_settings'))

@push('styles')
<style>
    .wa-settings-hero-icon {
        width: 3rem;
        height: 3rem;
        border-radius: 0.75rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, rgba(37, 211, 102, 0.18) 0%, rgba(18, 140, 126, 0.12) 100%);
        color: #128c7e;
        font-size: 1.5rem;
    }
    .wa-settings-panel {
        border: 1px dashed rgba(0, 0, 0, 0.08);
        border-radius: 0.75rem;
        background: var(--bs-gray-100, #f9f9f9);
    }
    [data-bs-theme="dark"] .wa-settings-panel {
        border-color: rgba(255, 255, 255, 0.1);
        background: rgba(255, 255, 255, 0.04);
    }
    .wa-settings-switch-card {
        border-radius: 0.75rem;
        border: 1px solid rgba(37, 211, 102, 0.25);
        background: linear-gradient(180deg, rgba(37, 211, 102, 0.06) 0%, transparent 100%);
    }
    .wa-tip-bullet {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #25d366;
        margin-top: 0.45rem;
        flex-shrink: 0;
    }
    .wa-tips-sidebar {
        position: sticky;
        top: calc(var(--kt-app-header-height, 70px) + 1rem);
        align-self: flex-start;
    }
    /* Tighter page top: toolbar hidden + slight lift inside content container */
    .wa-settings-page {
        margin-top: -0.25rem;
    }
</style>
@endpush

@section('content')
<div class="container-fluid wa-settings-page px-0 px-lg-1" style="padding-top: 60px !important;">
    {{-- DOM: main (8) then tips (4) → LTR: form | tips ; RTL: tips | form (نصائح يسار) --}}
    <div class="row g-4 g-lg-6 align-items-lg-start">
        <div class="col-lg-8">
            @include('admin.whatsapp-widget-settings.partials.form-card', ['settings' => $settings])
        </div>
        <div class="col-lg-4">
            @include('admin.whatsapp-widget-settings.partials.tips-card')
        </div>
    </div>
</div>
@endsection
