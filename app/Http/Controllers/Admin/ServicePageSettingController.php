<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePageSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicePageSettingController extends Controller
{
    public function edit()
    {
        $settings = ServicePageSetting::getSettings();
        return view('admin.service-page-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero_title_en' => 'required|string|max:255',
            'hero_title_ar' => 'required|string|max:255',
            'hero_subtitle_en' => 'nullable|string|max:255',
            'hero_subtitle_ar' => 'nullable|string|max:255',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'banner_text_en.*' => 'nullable|string|max:255',
            'banner_text_ar.*' => 'nullable|string|max:255',
            'slider_text_en' => 'nullable|string|max:255',
            'slider_text_ar' => 'nullable|string|max:255',
        ]);

        $settings = ServicePageSetting::getSettings();

        // Handle hero image upload
        if ($request->hasFile('hero_image')) {
            if ($settings->hero_image) {
                Storage::disk('public')->delete($settings->hero_image);
            }
            $heroImagePath = $request->file('hero_image')->store('service-page', 'public');
            $settings->hero_image = $heroImagePath;
        }

        // Handle banner image upload
        if ($request->hasFile('banner_image')) {
            if ($settings->banner_image) {
                Storage::disk('public')->delete($settings->banner_image);
            }
            $bannerImagePath = $request->file('banner_image')->store('service-page', 'public');
            $settings->banner_image = $bannerImagePath;
        }

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

        // Update banner text
        $bannerTextEn = array_filter($request->banner_text_en ?? []);
        $bannerTextAr = array_filter($request->banner_text_ar ?? []);

        $settings->banner_text = [
            'en' => array_values($bannerTextEn),
            'ar' => array_values($bannerTextAr)
        ];

        // Update slider text
        $settings->slider_text = [
            'en' => $request->slider_text_en ?? '',
            'ar' => $request->slider_text_ar ?? ''
        ];

        $settings->save();

        return redirect()->route('admin.service-page-settings.edit')
            ->with('success', __('admin.settings_updated_successfully'));
    }
}
