<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectPageSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectPageSettingController extends Controller
{
    public function edit()
    {
        $settings = ProjectPageSetting::getSettings();
        return view('admin.projects.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $validationRules = [
            'hero_subtitle_en' => 'required|string|max:500',
            'hero_subtitle_ar' => 'required|string|max:500',
            'hero_title_en' => 'required|string|max:255',
            'hero_title_ar' => 'required|string|max:255',
            'hero_background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'avatar_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'avatar_number' => 'nullable|string|max:50',
            'avatar_text_en' => 'nullable|string|max:255',
            'avatar_text_ar' => 'nullable|string|max:255',
            'button_text_en' => 'nullable|string|max:255',
            'button_text_ar' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:500',
        ];

        $request->validate($validationRules);

        $settings = ProjectPageSetting::getSettings();

        // Handle hero background image upload
        if ($request->hasFile('hero_background_image')) {
            if ($settings->hero_background_image) {
                Storage::disk('public')->delete($settings->hero_background_image);
            }
            $heroBgImagePath = $request->file('hero_background_image')->store('project-page', 'public');
            $settings->hero_background_image = $heroBgImagePath;
        }

        // Handle avatar image upload
        if ($request->hasFile('avatar_image')) {
            if ($settings->avatar_image) {
                Storage::disk('public')->delete($settings->avatar_image);
            }
            $avatarImagePath = $request->file('avatar_image')->store('project-page', 'public');
            $settings->avatar_image = $avatarImagePath;
        }

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

        // Update avatar number
        $settings->avatar_number = $request->avatar_number ?? '2500+';

        // Update avatar text
        $settings->avatar_text = [
            'en' => $request->avatar_text_en ?? 'Engaged and counting',
            'ar' => $request->avatar_text_ar ?? 'مشارك ومتزايد'
        ];

        // Update button text
        $settings->button_text = [
            'en' => $request->button_text_en ?? 'Explore Our Projects',
            'ar' => $request->button_text_ar ?? 'استكشف مشاريعنا'
        ];

        // Update button URL
        $settings->button_url = $request->button_url ?? '#';

        $settings->save();

        return redirect()->route('admin.project-page-settings.edit')
            ->with('success', __('admin.settings_updated_successfully'));
    }
}
