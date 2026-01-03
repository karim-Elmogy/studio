<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPageSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPageSettingController extends Controller
{
    public function edit()
    {
        $settings = BlogPageSetting::getSettings();
        return view('admin.blog-page-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero_subtitle_en' => 'required|string|max:255',
            'hero_subtitle_ar' => 'required|string|max:255',
            'hero_title_en' => 'required|string|max:255',
            'hero_title_ar' => 'required|string|max:255',
            'hero_background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $settings = BlogPageSetting::getSettings();

        // Update hero subtitle
        $settings->hero_subtitle = [
            'en' => $request->hero_subtitle_en,
            'ar' => $request->hero_subtitle_ar
        ];

        // Update hero title
        $settings->hero_title = [
            'en' => $request->hero_title_en,
            'ar' => $request->hero_title_ar
        ];

        // Handle image upload
        if ($request->hasFile('hero_background_image')) {
            // Delete old image if exists
            if ($settings->hero_background_image && Storage::disk('public')->exists($settings->hero_background_image)) {
                Storage::disk('public')->delete($settings->hero_background_image);
            }

            // Store new image
            $path = $request->file('hero_background_image')->store('blog-page-settings', 'public');
            $settings->hero_background_image = $path;
        }

        $settings->save();

        return redirect()->route('admin.blog-page-settings.edit')
            ->with('success', __('admin.settings_updated_successfully'));
    }
}
