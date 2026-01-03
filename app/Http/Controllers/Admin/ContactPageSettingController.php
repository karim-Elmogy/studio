<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactPageSetting;
use Illuminate\Http\Request;

class ContactPageSettingController extends Controller
{
    public function edit()
    {
        $settings = ContactPageSetting::getSettings();
        return view('admin.contact-page-settings.edit', compact('settings'));
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
            'map_text_en' => 'nullable|string|max:255',
            'map_text_ar' => 'nullable|string|max:255',
            'studios_text_en' => 'nullable|string',
            'studios_text_ar' => 'nullable|string',
        ]);

        $settings = ContactPageSetting::getSettings();

        $settings->update([
            'hero_subtitle' => [
                'en' => $request->hero_subtitle_en,
                'ar' => $request->hero_subtitle_ar,
            ],
            'hero_title' => [
                'en' => $request->hero_title_en,
                'ar' => $request->hero_title_ar,
            ],
            'hero_description' => [
                'en' => $request->hero_description_en,
                'ar' => $request->hero_description_ar,
            ],
            'scroll_text' => [
                'en' => $request->scroll_text_en,
                'ar' => $request->scroll_text_ar,
            ],
            'map_text' => [
                'en' => $request->map_text_en,
                'ar' => $request->map_text_ar,
            ],
            'studios_text' => [
                'en' => $request->studios_text_en,
                'ar' => $request->studios_text_ar,
            ],
        ]);

        return redirect()->route('admin.contact-page-settings.edit')->with('success', __('admin.settings_updated_successfully'));
    }
}
