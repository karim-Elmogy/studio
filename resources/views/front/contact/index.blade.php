
@extends('front.layout.app')

@section('content')
<style>
/* ── unified phone field ─────────────────────────────── */
.tp-phone-field-group {
    display: flex;
    background: #302f32;
    border-radius: 10px;
    border: 1.5px solid #302f32;
    overflow: hidden;
    transition: border-color .25s, background .25s;
}
.tp-phone-field-group:focus-within {
    border-color: var(--tp-common-red-3);
    background: #1b1b1d;
}
.tp-phone-field-group.is-invalid {
    border-color: var(--tp-common-red-3) !important;
}

/* country select */
.tp-phone-country-select {
    flex-shrink: 0;
    width: 118px;
    background: transparent;
    border: none;
    border-inline-end: 1.5px solid rgba(255,255,255,.09);
    color: rgba(255,255,255,.85);
    font-size: 13.5px;
    cursor: pointer;
    appearance: none;
    -webkit-appearance: none;
    height: 60px;
    padding: 0 26px 0 13px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M1 1l4 4 4-4' stroke='%23777' stroke-width='1.5' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: calc(100% - 9px) center;
    outline: none;
}
[dir="rtl"] .tp-phone-country-select {
    padding: 0 13px 0 26px;
    background-position: 9px center;
}
.tp-phone-country-select option {
    background: #1b1b1d;
    color: #fff;
}

/* phone number input */
.tp-phone-field-group input[type="tel"] {
    flex: 1;
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    height: 60px;
    color: #fff;
    padding: 0 16px;
    font-size: 16px;
    outline: none !important;
    box-shadow: none !important;
}
.tp-phone-field-group input[type="tel"]:focus {
    background: transparent !important;
    border: none !important;
    box-shadow: none !important;
}
.tp-phone-field-group input[type="tel"]::placeholder {
    color: rgba(255,255,255,.28);
    font-size: 14px;
}

/* ── form label tweaks ───────────────────────────────── */
.tp-contact-us-wrap .tp-contact-form-input label {
    font-size: 12.5px;
    letter-spacing: .04em;
    text-transform: uppercase;
    opacity: .65;
    margin-bottom: 10px;
}

/* ── textarea height ─────────────────────────────────── */
.tp-contact-us-wrap .tp-contact-form-input textarea {
    height: 180px;
}

/* ── error message ───────────────────────────────────── */
.phone-error-msg {
    display: none;
    color: #ff5722;
    font-size: 12px;
    margin-top: 7px;
    padding-inline-start: 4px;
    letter-spacing: .01em;
}

/* ── form row spacing ────────────────────────────────── */
#contact-form .row {
    --bs-gutter-y: 1.5rem;
}
</style>

    <main>

        <!-- hero area start -->
        <div class="tp-contact-us-ptb p-relative">
            <div class="container container-1230">
                <div class="ar-about-us-4-hero-ptb">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="tp-contact-us-heading tp_fade_anim" data-delay=".3">
                                <div class="ar-about-us-4-title-box d-flex align-items-center mb-20">
                                    <span class="tp-section-subtitle pre text-white tp_fade_anim">{{ $pageSettings->getTranslatedHeroSubtitle() }}</span>
                                    <div class="ar-about-us-4-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9" fill="none">
                                            <rect y="4" width="80" height="1" fill="#fff" />
                                            <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="tp-career-title text-white pb-30">{{ $pageSettings->getTranslatedHeroTitle() }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <div class="tp-faq-text tp_fade_anim">
                                <p class="text-white m-0">{{ $pageSettings->getTranslatedHeroDescription() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-contact-us-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tp-contact-us-text smooth">
                                <a href="#down">
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewBox="0 0 15 21" fill="none">
                                            <rect x="6.25781" width="1.5" height="21" fill="#F5F7F5" />
                                            <path d="M14.1641 13.6257C10.28 13.6257 7.13714 16.9239 7.13714 21" stroke="#F5F7F5" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path d="M7.13672 21C7.13672 16.9239 3.99384 13.6257 0.109797 13.6257" stroke="#F5F7F5" stroke-width="1.5" stroke-miterlimit="10" />
                                        </svg> {{ $pageSettings->getTranslatedScrollText() }}</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tp-contact-us-text d-none d-md-block {{ app()->getLocale() == 'ar' ? 'text-md-start' : 'text-md-end' }}">
                                <p>{{ $pageSettings->getTranslatedMapText() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->

        <!-- contact form area start -->
        <div id="down" class="tp-contact-us-form-ptb pt-60 pb-120">
            <div class="container container-1230">
                <div class="tp-contact-us-form-wrapper">
                    <div class="row">
                        <!-- <div class="col-lg-6">
                            <div class="tp-contact-us-map p-relative">
                                <div class="tp-contact-map-icon-box">
                                    <div class="tp-contact-map-icon">
                                        <span><img src="{{asset('front/assets/img/contact/map-icon.svg')}}" alt=""></span>
                                    </div>
                                </div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193596.26002818075!2d-74.1443121872927!3d40.69728463485858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1745055504744!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <div class="tp-contact-us-wrap">
                                <h4 class="tp-contact-us-title mb-55">{{ __('Send a Message') }}</h4>
                                <form id="contact-form" action="{{asset('front/assets/mail.php')}}" method="POST" autocomplete="off">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="tp-contact-form-input mb-20">
                                                <label>{{ __('Full name*') }}</label>
                                                <input name="name" type="text" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="tp-contact-form-input mb-20">
                                                <label>{{ __('Email address*') }}</label>
                                                <input name="email" type="email" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="tp-contact-form-input mb-20">
                                                <label>{{ __('Mobile number*') }}</label>
                                                <div class="tp-phone-field-group">
                                                    <select id="country-code-select" class="tp-phone-country-select" aria-label="{{ __('Country code') }}">
                                                        <option value="+20">🇪🇬 +20</option>
                                                        <option value="+966">🇸🇦 +966</option>
                                                        <option value="+971">🇦🇪 +971</option>
                                                        <option value="+965">🇰🇼 +965</option>
                                                        <option value="+974">🇶🇦 +974</option>
                                                        <option value="+973">🇧🇭 +973</option>
                                                        <option value="+968">🇴🇲 +968</option>
                                                        <option value="+962">🇯🇴 +962</option>
                                                        <option value="+961">🇱🇧 +961</option>
                                                        <option value="+964">🇮🇶 +964</option>
                                                        <option value="+218">🇱🇾 +218</option>
                                                        <option value="+216">🇹🇳 +216</option>
                                                        <option value="+213">🇩🇿 +213</option>
                                                        <option value="+212">🇲🇦 +212</option>
                                                        <option value="+249">🇸🇩 +249</option>
                                                        <option value="+1">🇺🇸 +1</option>
                                                        <option value="+44">🇬🇧 +44</option>
                                                        <option value="+49">🇩🇪 +49</option>
                                                        <option value="+33">🇫🇷 +33</option>
                                                    </select>
                                                    <input name="phone" type="tel" id="phone-input" placeholder="{{ __('e.g. 501234567') }}" autocomplete="off">
                                                </div>
                                                <small class="phone-error-msg"></small>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="tp-contact-form-input mb-20">
                                                <label>{{ __('How Can We Help You*') }}
                                                </label>
                                                <textarea name="message"></textarea>
                                            </div>
                                            <div class="tp-contact-form-btn">
                                                <button class="w-100" type="submit"><span>
                                                                <span class="text-1">{{ __('Send Message') }}</span>
                                                                <span class="text-2">{{ __('Send Message') }}</span>
                                                            </span>
                                                </button>
                                                <p class="ajax-response mt-5"></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact form area end -->

        <!-- about area start -->
        <div class="cn-contactform-support-area mb-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cn-contactform-support-bg d-flex align-items-center justify-content-center" data-background="{{asset('front/assets/img/contact/contact-us/contact-us-shape.png')}}">
                            <div class="cn-contactform-support-text text-center">
                                <span>{{ $pageSettings->getTranslatedStudiosText() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->

        <!-- contact area start -->
        <!-- <div class="tp-contact-us-info-area pb-120">
            <div class="container container-1230">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="tp-contact-us-content text-center" data-speed="1.2">
                            <div class="tp-contact-us-thumb d-flex justify-content-center">
                                <img src="{{asset('front/assets/img/contact/contact-us/contact-us-thumb-1.jpg')}}" alt="">
                            </div>
                            <div class="tp-contact-us-bottom">
                                <div class="tp-contact-us-info-details">
                                    <h4 class="tp-contact-us-info-title">{{ __('San Francisco') }}</h4>
                                    <a href="mailto:sydney@contact.com">sydney@contact.com</a>
                                    <a href="tel:(+91)76001726">(+91) 76001726</a>
                                </div>
                                <div class="tp-contact-us-btn">
                                    <a class="tp-btn-yellow-green w-100" target="_blank" href="https://www.google.com/maps">
                                                <span>
                                                    <span class="text-1">{{ __('View Location') }}</span>
                                                    <span class="text-2">{{ __('View Location') }}</span>
                                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="tp-contact-us-content text-center mt-60" data-speed=".9">
                            <div class="tp-contact-us-thumb d-flex justify-content-center">
                                <img src="{{asset('front/assets/img/contact/contact-location-2.jpg')}}" alt="">
                            </div>
                            <div class="tp-contact-us-bottom">
                                <div class="tp-contact-us-info-details">
                                    <h4 class="tp-contact-us-info-title">{{ __('Germany') }}</h4>
                                    <a href="mailto:sydney@contact.com">sydney@contact.com</a>
                                    <a href="tel:(+91)76001726">(+91) 76001726</a>
                                </div>
                                <div class="tp-contact-us-btn">
                                    <a class="tp-btn-yellow-green active w-100" target="_blank" href="https://www.google.com/maps">
                                                <span>
                                                    <span class="text-1">{{ __('View Location') }}</span>
                                                    <span class="text-2">{{ __('View Location') }}</span>
                                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="tp-contact-us-content text-center" data-speed="1.2">
                            <div class="tp-contact-us-thumb d-flex justify-content-center">
                                <img src="{{asset('front/assets/img/contact/contact-location-3.jpg')}}" alt="">
                            </div>
                            <div class="tp-contact-us-bottom">
                                <div class="tp-contact-us-info-details">
                                    <h4 class="tp-contact-us-info-title">{{ __('New Zealand') }}</h4>
                                    <a href="mailto:sydney@contact.com">sydney@contact.com</a>
                                    <a href="tel:(+91)76001726">(+91) 76001726</a>
                                </div>
                                <div class="tp-contact-us-btn">
                                    <a class="tp-btn-yellow-green w-100" target="_blank" href="https://www.google.com/maps">
                                                <span>
                                                    <span class="text-1">{{ __('View Location') }}</span>
                                                    <span class="text-2">{{ __('View Location') }}</span>
                                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- contact area end -->

    </main>

<script>
(function ($) {
    var phoneInput    = $('#phone-input');
    var phoneGroup    = phoneInput.closest('.tp-phone-field-group');
    var countrySelect = $('#country-code-select');
    var phoneError    = $('.phone-error-msg');
    var errorMsg      = '{{ __("Please enter a valid phone number (digits only, 7-15 digits).") }}';

    function validatePhone() {
        var val    = phoneInput.val().trim();
        var digits = val.replace(/[\s\-()]/g, '');
        if (val === '' || !/^\d{7,15}$/.test(digits)) {
            phoneError.text(errorMsg).fadeIn(150);
            phoneGroup.addClass('is-invalid');
            return false;
        }
        phoneError.fadeOut(100);
        phoneGroup.removeClass('is-invalid');
        return true;
    }

    phoneInput.on('input', function () {
        if (phoneGroup.hasClass('is-invalid')) validatePhone();
    });

    phoneInput.on('blur', function () {
        if ($(this).val().trim() !== '') validatePhone();
    });

    $('#contact-form').on('submit', function (e) {
        if (!validatePhone()) {
            e.stopImmediatePropagation();
            e.preventDefault();
            phoneInput.focus();
            return false;
        }
        phoneInput.val(countrySelect.val() + phoneInput.val().trim());
    });
})(jQuery);
</script>

@endsection
