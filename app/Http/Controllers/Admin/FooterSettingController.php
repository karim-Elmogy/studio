<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterSetting;
use Illuminate\Http\Request;

class FooterSettingController extends Controller
{
    public function edit()
    {
        $settings = FooterSetting::getSettings();
        return view('admin.footer-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'footer_title_en' => 'nullable|string|max:255',
            'footer_title_ar' => 'nullable|string|max:255',
            'footer_description_en' => 'nullable|string',
            'footer_description_ar' => 'nullable|string',
            'footer_email' => 'nullable|email|max:255',
            'footer_phone' => 'nullable|string|max:255',
            'footer_address' => 'nullable|url|max:500',
            'footer_address_text_en' => 'nullable|string',
            'footer_address_text_ar' => 'nullable|string',
            'footer_facebook' => 'nullable|url|max:255',
            'footer_twitter' => 'nullable|url|max:255',
            'footer_dribbble' => 'nullable|url|max:255',
            'footer_instagram' => 'nullable|url|max:255',
            'footer_copyright_text' => 'nullable|string|max:255',
            'footer_terms_text_en' => 'nullable|string|max:255',
            'footer_terms_text_ar' => 'nullable|string|max:255',
            'footer_privacy_text_en' => 'nullable|string|max:255',
            'footer_privacy_text_ar' => 'nullable|string|max:255',
            'footer_terms_url' => 'nullable|string|max:255',
            'footer_privacy_url' => 'nullable|string|max:255',
            'footer_logo_text' => 'nullable|string|max:255',
            'back_to_top_text_en' => 'nullable|string|max:255',
            'back_to_top_text_ar' => 'nullable|string|max:255',
        ]);

        $settings = FooterSetting::getSettings();

        $settings->footer_title = ['en' => $request->footer_title_en ?? '', 'ar' => $request->footer_title_ar ?? ''];
        $settings->footer_description = ['en' => $request->footer_description_en ?? '', 'ar' => $request->footer_description_ar ?? ''];
        $settings->footer_email = $request->footer_email;
        $settings->footer_phone = $request->footer_phone;
        $settings->footer_address = $request->footer_address;
        $settings->footer_address_text = ['en' => $request->footer_address_text_en ?? '', 'ar' => $request->footer_address_text_ar ?? ''];
        $settings->footer_facebook = $request->footer_facebook;
        $settings->footer_twitter = $request->footer_twitter;
        $settings->footer_dribbble = $request->footer_dribbble;
        $settings->footer_instagram = $request->footer_instagram;
        $settings->footer_copyright_text = $request->footer_copyright_text;
        $settings->footer_terms_text = ['en' => $request->footer_terms_text_en ?? '', 'ar' => $request->footer_terms_text_ar ?? ''];
        $settings->footer_privacy_text = ['en' => $request->footer_privacy_text_en ?? '', 'ar' => $request->footer_privacy_text_ar ?? ''];
        $settings->footer_terms_url = $request->footer_terms_url;
        $settings->footer_privacy_url = $request->footer_privacy_url;
        $settings->footer_logo_text = $request->footer_logo_text;
        $settings->back_to_top_text = ['en' => $request->back_to_top_text_en ?? "Agntix I've gone too far, send me back up 👆", 'ar' => $request->back_to_top_text_ar ?? 'Agntix لقد ذهبت بعيداً، أعدني للأعلى 👆'];

        $settings->save();

        return redirect()->route('admin.footer-settings.edit')
            ->with('success', __('admin.settings_updated_successfully'));
    }
}
