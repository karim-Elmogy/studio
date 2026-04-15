@php
    /** @var \App\Models\WhatsappWidgetSetting $settings */
@endphp
<div class="card card-flush shadow-sm">
    <div class="card-header border-0 pt-4 pt-lg-5 pb-0">
        <div class="d-flex flex-wrap align-items-center gap-4">
            <div class="wa-settings-hero-icon">
                <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            </div>
            <div class="flex-grow-1" style="min-width: 12rem;">
                <h3 class="card-title fw-bold mb-1">{{ __('admin.whatsapp_widget_settings') }}</h3>
                <p class="text-muted fs-6 mb-0">{{ __('admin.whatsapp_widget_page_subtitle') }}</p>
            </div>
        </div>
    </div>
    <div class="card-body pt-4 pt-lg-5 pb-6 pb-lg-8">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center gap-2" role="alert">
                <i class="fa-solid fa-circle-check fs-4 text-success" aria-hidden="true"></i>
                <div class="flex-grow-1">{{ session('success') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('admin.whatsapp-widget-settings.update') }}" method="POST" class="wa-settings-form">
            @csrf

            <div class="mb-8">
                <h5 class="fw-semibold text-gray-800 mb-4 pb-2 border-bottom border-gray-300">
                    {{ __('admin.whatsapp_widget_section_status') }}
                </h5>
                <div class="wa-settings-switch-card p-5">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div class="pe-md-4">
                            <label class="form-check-label fw-semibold fs-5 text-gray-900 cursor-pointer" for="is_enabled">
                                {{ __('admin.whatsapp_widget_enable') }}
                            </label>
                            <p class="text-muted fs-7 mb-0 mt-2 max-w-xl">{{ __('admin.whatsapp_widget_enable_help') }}</p>
                        </div>
                        <div class="form-check form-switch form-check-custom form-check-solid form-check-success">
                            <input class="form-check-input h-35px w-60px" type="checkbox" name="is_enabled" value="1" id="is_enabled"
                                {{ old('is_enabled', $settings->is_enabled) ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-8">
                <h5 class="fw-semibold text-gray-800 mb-4 pb-2 border-bottom border-gray-300">
                    {{ __('admin.whatsapp_widget_section_chat') }}
                </h5>
                <div class="row g-4">
                    <div class="col-12">
                        <label class="form-label fw-semibold" for="phone">{{ __('admin.whatsapp_widget_phone') }}</label>
                        <div class="input-group input-group-lg input-group-solid">
                            <span class="input-group-text"><i class="fa-solid fa-phone text-gray-600" aria-hidden="true"></i></span>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                                value="{{ old('phone', $settings->phone) }}" placeholder="+966501234567" autocomplete="tel">
                            @error('phone')
                                <div class="invalid-feedback d-block w-100">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-text mt-2">{{ __('admin.whatsapp_widget_phone_help') }}</div>
                    </div>
                    <div class="col-12">
                        <label class="form-label fw-semibold" for="default_message">{{ __('admin.whatsapp_widget_default_message') }}</label>
                        <textarea class="form-control form-control-solid @error('default_message') is-invalid @enderror" id="default_message" name="default_message" rows="4" placeholder="">{{ old('default_message', $settings->default_message) }}</textarea>
                        @error('default_message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text mt-2">{{ __('admin.whatsapp_widget_default_message_help') }}</div>
                    </div>
                </div>
            </div>

            <div class="mb-2">
                <h5 class="fw-semibold text-gray-800 mb-4 pb-2 border-bottom border-gray-300">
                    {{ __('admin.whatsapp_widget_section_appearance') }}
                </h5>
                <div class="wa-settings-panel p-5">
                    <label class="form-label fw-semibold" for="horizontal_position">{{ __('admin.whatsapp_widget_position') }}</label>
                    <select class="form-select form-select-solid form-select-lg @error('horizontal_position') is-invalid @enderror" id="horizontal_position" name="horizontal_position">
                        <option value="right" @selected(old('horizontal_position', $settings->horizontal_position) === 'right')>{{ __('admin.whatsapp_widget_position_right') }}</option>
                        <option value="left" @selected(old('horizontal_position', $settings->horizontal_position) === 'left')>{{ __('admin.whatsapp_widget_position_left') }}</option>
                    </select>
                    @error('horizontal_position')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    <div class="form-text mt-2">{{ __('admin.whatsapp_widget_position_help') }}</div>
                </div>
            </div>

            <div class="separator separator-dashed my-8"></div>

            <div class="d-flex flex-wrap justify-content-end gap-3">
                <button type="submit" class="btn btn-primary btn-lg px-8 d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-floppy-disk" aria-hidden="true"></i>
                    <span>{{ __('admin.save') }}</span>
                </button>
            </div>
        </form>
    </div>
</div>
