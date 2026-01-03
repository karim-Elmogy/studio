<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectPageSetting;
use Illuminate\Http\Request;

class ProjectPageSettingController extends Controller
{
    public function edit()
    {
        $settings = ProjectPageSetting::getSettings();
        return view('admin.project-page-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero_title_en' => 'required|string|max:255',
            'hero_title_ar' => 'required|string|max:255',
            'hero_subtitle_en' => 'nullable|string|max:255',
            'hero_subtitle_ar' => 'nullable|string|max:255',
            'hero_description_en' => 'nullable|string',
            'hero_description_ar' => 'nullable|string',
            'scroll_text_en' => 'nullable|string|max:255',
            'scroll_text_ar' => 'nullable|string|max:255',
        ]);

        $settings = ProjectPageSetting::getSettings();

        // Update hero title
        $settings->hero_title = [
            'en' => $request->hero_title_en,
            'ar' => $request->hero_title_ar
        ];

        // Update hero subtitle
        $settings->hero_subtitle = [
            'en' => $request->hero_subtitle_en ?? '',
            'ar' => $request->hero_subtitle_ar ?? ''
        ];

        // Update hero description
        $settings->hero_description = [
            'en' => $request->hero_description_en ?? '',
            'ar' => $request->hero_description_ar ?? ''
        ];

        // Update scroll text
        $settings->scroll_text = [
            'en' => $request->scroll_text_en ?? '',
            'ar' => $request->scroll_text_ar ?? ''
        ];

        $settings->save();

        return redirect()->route('admin.project-page-settings.edit')
            ->with('success', __('admin.settings_updated_successfully'));
    }
}
