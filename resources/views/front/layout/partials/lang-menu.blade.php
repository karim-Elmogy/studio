
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4">
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <div class="fw-bold fs-5">{{ __('Select Language') }}</div>
        </div>
    </div>

    <div class="separator my-2"></div>

    <div class="menu-item px-3">
        <a href="{{ route('lang.switch', 'en') }}"
           class="menu-link px-3 {{ app()->getLocale() == 'en' ? 'active' : '' }}">
            <span class="menu-icon">
                <span class="fi fi-us fs-4"></span>
            </span>
            <span class="menu-title">{{ __('English') }}</span>
        </a>
    </div>

    <div class="menu-item px-3">
        <a href="{{ route('lang.switch', 'ar') }}"
           class="menu-link px-3 {{ app()->getLocale() == 'ar' ? 'active' : '' }}">
            <span class="menu-icon">
                <span class="fi fi-sa fs-4"></span>
            </span>
            <span class="menu-title">{{ __('Arabic') }}</span>
        </a>
    </div>
</div>
