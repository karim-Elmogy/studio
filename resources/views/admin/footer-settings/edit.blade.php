@extends('admin.layouts.master')

@section('title', __('admin.footer_settings'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('admin.footer_settings') }}</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('admin.footer-settings.update') }}" method="POST">
                        @csrf

                        <!-- Footer Title Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.footer_title') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.footer_title') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('footer_title_en') is-invalid @enderror"
                                               name="footer_title_en" value="{{ old('footer_title_en', $settings->footer_title['en'] ?? '') }}">
                                        @error('footer_title_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.footer_title') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('footer_title_ar') is-invalid @enderror"
                                               name="footer_title_ar" value="{{ old('footer_title_ar', $settings->footer_title['ar'] ?? '') }}">
                                        @error('footer_title_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.footer_description') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control @error('footer_description_en') is-invalid @enderror"
                                               name="footer_description_en" rows="3">{{ old('footer_description_en', $settings->footer_description['en'] ?? '') }}</textarea>
                                        @error('footer_description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.footer_description') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control @error('footer_description_ar') is-invalid @enderror"
                                               name="footer_description_ar" rows="3">{{ old('footer_description_ar', $settings->footer_description['ar'] ?? '') }}</textarea>
                                        @error('footer_description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.contact_information') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.email') }}</label>
                                        <input type="email" class="form-control @error('footer_email') is-invalid @enderror"
                                               name="footer_email" value="{{ old('footer_email', $settings->footer_email ?? '') }}">
                                        @error('footer_email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.phone') }}</label>
                                        <input type="text" class="form-control @error('footer_phone') is-invalid @enderror"
                                               name="footer_phone" value="{{ old('footer_phone', $settings->footer_phone ?? '') }}">
                                        @error('footer_phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.address_url') }}</label>
                                <input type="url" class="form-control @error('footer_address') is-invalid @enderror"
                                       name="footer_address" value="{{ old('footer_address', $settings->footer_address ?? '') }}"
                                       placeholder="https://www.google.com/maps/">
                                @error('footer_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.address_text') }} ({{ __('admin.english') }})</label>
                                        <textarea class="form-control @error('footer_address_text_en') is-invalid @enderror"
                                               name="footer_address_text_en" rows="2">{{ old('footer_address_text_en', $settings->footer_address_text['en'] ?? '') }}</textarea>
                                        @error('footer_address_text_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.address_text') }} ({{ __('admin.arabic') }})</label>
                                        <textarea class="form-control @error('footer_address_text_ar') is-invalid @enderror"
                                               name="footer_address_text_ar" rows="2">{{ old('footer_address_text_ar', $settings->footer_address_text['ar'] ?? '') }}</textarea>
                                        @error('footer_address_text_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.social_media') }}</h5>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.facebook') }}</label>
                                        <input type="url" class="form-control @error('footer_facebook') is-invalid @enderror"
                                               name="footer_facebook" value="{{ old('footer_facebook', $settings->footer_facebook ?? '') }}">
                                        @error('footer_facebook')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.twitter') }}</label>
                                        <input type="url" class="form-control @error('footer_twitter') is-invalid @enderror"
                                               name="footer_twitter" value="{{ old('footer_twitter', $settings->footer_twitter ?? '') }}">
                                        @error('footer_twitter')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.dribbble') }}</label>
                                        <input type="url" class="form-control @error('footer_dribbble') is-invalid @enderror"
                                               name="footer_dribbble" value="{{ old('footer_dribbble', $settings->footer_dribbble ?? '') }}">
                                        @error('footer_dribbble')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.instagram') }}</label>
                                        <input type="url" class="form-control @error('footer_instagram') is-invalid @enderror"
                                               name="footer_instagram" value="{{ old('footer_instagram', $settings->footer_instagram ?? '') }}">
                                        @error('footer_instagram')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Bottom Section -->
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2">{{ __('admin.footer_bottom') }}</h5>

                            <div class="mb-3 mt-3">
                                <label class="form-label">{{ __('admin.logo_text') }}</label>
                                <input type="text" class="form-control @error('footer_logo_text') is-invalid @enderror"
                                       name="footer_logo_text" value="{{ old('footer_logo_text', $settings->footer_logo_text ?? '') }}">
                                @error('footer_logo_text')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.copyright_text') }}</label>
                                <input type="text" class="form-control @error('footer_copyright_text') is-invalid @enderror"
                                       name="footer_copyright_text" value="{{ old('footer_copyright_text', $settings->footer_copyright_text ?? '') }}">
                                @error('footer_copyright_text')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.terms_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('footer_terms_text_en') is-invalid @enderror"
                                               name="footer_terms_text_en" value="{{ old('footer_terms_text_en', $settings->footer_terms_text['en'] ?? '') }}">
                                        @error('footer_terms_text_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.terms_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('footer_terms_text_ar') is-invalid @enderror"
                                               name="footer_terms_text_ar" value="{{ old('footer_terms_text_ar', $settings->footer_terms_text['ar'] ?? '') }}">
                                        @error('footer_terms_text_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.terms_url') }}</label>
                                <input type="text" class="form-control @error('footer_terms_url') is-invalid @enderror"
                                       name="footer_terms_url" value="{{ old('footer_terms_url', $settings->footer_terms_url ?? '') }}">
                                @error('footer_terms_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.privacy_text') }} ({{ __('admin.english') }})</label>
                                        <input type="text" class="form-control @error('footer_privacy_text_en') is-invalid @enderror"
                                               name="footer_privacy_text_en" value="{{ old('footer_privacy_text_en', $settings->footer_privacy_text['en'] ?? '') }}">
                                        @error('footer_privacy_text_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('admin.privacy_text') }} ({{ __('admin.arabic') }})</label>
                                        <input type="text" class="form-control @error('footer_privacy_text_ar') is-invalid @enderror"
                                               name="footer_privacy_text_ar" value="{{ old('footer_privacy_text_ar', $settings->footer_privacy_text['ar'] ?? '') }}">
                                        @error('footer_privacy_text_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('admin.privacy_url') }}</label>
                                <input type="text" class="form-control @error('footer_privacy_url') is-invalid @enderror"
                                       name="footer_privacy_url" value="{{ old('footer_privacy_url', $settings->footer_privacy_url ?? '') }}">
                                @error('footer_privacy_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">{{ __('admin.update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
