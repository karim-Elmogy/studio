<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqPageSetting;
use Illuminate\Http\Request;

class FaqPageSettingController extends Controller
{
    public function edit()
    {
        $settings = FaqPageSetting::getSettings();
        return view('admin.faq-page-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero_subtitle_en' => 'required|string|max:255',
            'hero_subtitle_ar' => 'required|string|max:255',
            'hero_title_en' => 'required|string|max:255',
            'hero_title_ar' => 'required|string|max:255',
            'hero_description_en' => 'nullable|string',
            'hero_description_ar' => 'nullable|string',
            'scroll_text_en' => 'nullable|string|max:255',
            'scroll_text_ar' => 'nullable|string|max:255',
            'cta_title_en' => 'nullable|string|max:255',
            'cta_title_ar' => 'nullable|string|max:255',
            'cta_description_en' => 'nullable|string',
            'cta_description_ar' => 'nullable|string',
        ]);

        $settings = FaqPageSetting::getSettings();

        // Update hero section
        $settings->hero_subtitle = [
            'en' => $request->hero_subtitle_en,
            'ar' => $request->hero_subtitle_ar
        ];

        $settings->hero_title = [
            'en' => $request->hero_title_en,
            'ar' => $request->hero_title_ar
        ];

        $settings->hero_description = [
            'en' => $request->hero_description_en ?? '',
            'ar' => $request->hero_description_ar ?? ''
        ];

        $settings->scroll_text = [
            'en' => $request->scroll_text_en ?? '',
            'ar' => $request->scroll_text_ar ?? ''
        ];

        // Update CTA section
        $settings->cta_title = [
            'en' => $request->cta_title_en ?? '',
            'ar' => $request->cta_title_ar ?? ''
        ];

        $settings->cta_description = [
            'en' => $request->cta_description_en ?? '',
            'ar' => $request->cta_description_ar ?? ''
        ];

        $settings->save();

        return redirect()->route('admin.faq-page-settings.edit')
            ->with('success', __('admin.settings_updated_successfully'));
    }
}
