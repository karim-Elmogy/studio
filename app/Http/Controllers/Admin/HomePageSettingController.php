<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageSetting;
use Illuminate\Http\Request;

class HomePageSettingController extends Controller
{
    public function edit()
    {
        $settings = HomePageSetting::getSettings();
        return view('admin.home-page-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero_title_en' => 'required|string|max:255',
            'hero_title_ar' => 'required|string|max:255',
            'hero_description_en' => 'nullable|string',
            'hero_description_ar' => 'nullable|string',
            'hero_video_url' => 'nullable|url',
            'hero_button1_text_en' => 'nullable|string|max:255',
            'hero_button1_text_ar' => 'nullable|string|max:255',
            'hero_button1_url' => 'nullable|string|max:255',
            'hero_button2_text_en' => 'nullable|string|max:255',
            'hero_button2_text_ar' => 'nullable|string|max:255',
            'hero_button2_url' => 'nullable|string|max:255',
            'about_subtitle_en' => 'nullable|string|max:255',
            'about_subtitle_ar' => 'nullable|string|max:255',
            'about_description_en' => 'nullable|string',
            'about_description_ar' => 'nullable|string',
            'about_button_text_en' => 'nullable|string|max:255',
            'about_button_text_ar' => 'nullable|string|max:255',
            'about_button_url' => 'nullable|string|max:255',
            'projects_subtitle_en' => 'nullable|string|max:255',
            'projects_subtitle_ar' => 'nullable|string|max:255',
            'projects_title_en' => 'nullable|string',
            'projects_title_ar' => 'nullable|string',
            'projects_button_text_en' => 'nullable|string|max:255',
            'projects_button_text_ar' => 'nullable|string|max:255',
            'projects_button_url' => 'nullable|string|max:255',
            'services_subtitle_en' => 'nullable|string|max:255',
            'services_subtitle_ar' => 'nullable|string|max:255',
            'services_title_en' => 'nullable|string',
            'services_title_ar' => 'nullable|string',
            'services_button_text_en' => 'nullable|string|max:255',
            'services_button_text_ar' => 'nullable|string|max:255',
            'services_button_url' => 'nullable|string|max:255',
            'choose_title_en' => 'nullable|string',
            'choose_title_ar' => 'nullable|string',
            'choose_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'testimonials_subtitle_en' => 'nullable|string|max:255',
            'testimonials_subtitle_ar' => 'nullable|string|max:255',
            'testimonials_title_en' => 'nullable|string',
            'testimonials_title_ar' => 'nullable|string',
            'testimonials_button_text_en' => 'nullable|string|max:255',
            'testimonials_button_text_ar' => 'nullable|string|max:255',
            'testimonials_button_url' => 'nullable|string|max:255',
            'brand_subtitle_en' => 'nullable|string|max:255',
            'brand_subtitle_ar' => 'nullable|string|max:255',
            'brand_title_en' => 'nullable|string',
            'brand_title_ar' => 'nullable|string',
            'brand_button_text_en' => 'nullable|string|max:255',
            'brand_button_text_ar' => 'nullable|string|max:255',
            'brand_button_url' => 'nullable|string|max:255',
            'achievement1_text_en' => 'nullable|string',
            'achievement1_text_ar' => 'nullable|string',
            'achievement1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'achievement2_text_en' => 'nullable|string',
            'achievement2_text_ar' => 'nullable|string',
            'achievement2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'achievement3_text_en' => 'nullable|string',
            'achievement3_text_ar' => 'nullable|string',
            'achievement3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'achievement4_text_en' => 'nullable|string',
            'achievement4_text_ar' => 'nullable|string',
            'achievement4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'blog_subtitle_en' => 'nullable|string|max:255',
            'blog_subtitle_ar' => 'nullable|string|max:255',
            'blog_title_en' => 'nullable|string',
            'blog_title_ar' => 'nullable|string',
            'blog_button_text_en' => 'nullable|string|max:255',
            'blog_button_text_ar' => 'nullable|string|max:255',
            'blog_button_url' => 'nullable|string|max:255',
            'brand_logos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $settings = HomePageSetting::getSettings();

        // Update hero section
        $settings->hero_title = ['en' => $request->hero_title_en, 'ar' => $request->hero_title_ar];
        $settings->hero_description = ['en' => $request->hero_description_en ?? '', 'ar' => $request->hero_description_ar ?? ''];
        $settings->hero_video_url = $request->hero_video_url;
        $settings->hero_button1_text = ['en' => $request->hero_button1_text_en ?? '', 'ar' => $request->hero_button1_text_ar ?? ''];
        $settings->hero_button1_url = $request->hero_button1_url;
        $settings->hero_button2_text = ['en' => $request->hero_button2_text_en ?? '', 'ar' => $request->hero_button2_text_ar ?? ''];
        $settings->hero_button2_url = $request->hero_button2_url;

        // Update about section
        $settings->about_subtitle = ['en' => $request->about_subtitle_en ?? '', 'ar' => $request->about_subtitle_ar ?? ''];
        $settings->about_description = ['en' => $request->about_description_en ?? '', 'ar' => $request->about_description_ar ?? ''];
        $settings->about_button_text = ['en' => $request->about_button_text_en ?? '', 'ar' => $request->about_button_text_ar ?? ''];
        $settings->about_button_url = $request->about_button_url;

        // Update projects section
        $settings->projects_subtitle = ['en' => $request->projects_subtitle_en ?? '', 'ar' => $request->projects_subtitle_ar ?? ''];
        $settings->projects_title = ['en' => $request->projects_title_en ?? '', 'ar' => $request->projects_title_ar ?? ''];
        $settings->projects_button_text = ['en' => $request->projects_button_text_en ?? '', 'ar' => $request->projects_button_text_ar ?? ''];
        $settings->projects_button_url = $request->projects_button_url;

        // Update services section
        $settings->services_subtitle = ['en' => $request->services_subtitle_en ?? '', 'ar' => $request->services_subtitle_ar ?? ''];
        $settings->services_title = ['en' => $request->services_title_en ?? '', 'ar' => $request->services_title_ar ?? ''];
        $settings->services_button_text = ['en' => $request->services_button_text_en ?? '', 'ar' => $request->services_button_text_ar ?? ''];
        $settings->services_button_url = $request->services_button_url;

        // Update choose section
        $settings->choose_title = ['en' => $request->choose_title_en ?? '', 'ar' => $request->choose_title_ar ?? ''];

        // Handle choose_image upload
        if ($request->hasFile('choose_image')) {
            // Delete old image
            if ($settings->choose_image && file_exists(public_path($settings->choose_image))) {
                unlink(public_path($settings->choose_image));
            }

            $file = $request->file('choose_image');
            $filename = time() . '_choose.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home-page-settings'), $filename);
            $settings->choose_image = 'uploads/home-page-settings/' . $filename;
        }

        // Update testimonials section
        $settings->testimonials_subtitle = ['en' => $request->testimonials_subtitle_en ?? '', 'ar' => $request->testimonials_subtitle_ar ?? ''];
        $settings->testimonials_title = ['en' => $request->testimonials_title_en ?? '', 'ar' => $request->testimonials_title_ar ?? ''];
        $settings->testimonials_button_text = ['en' => $request->testimonials_button_text_en ?? '', 'ar' => $request->testimonials_button_text_ar ?? ''];
        $settings->testimonials_button_url = $request->testimonials_button_url;

        // Update brand section
        $settings->brand_subtitle = ['en' => $request->brand_subtitle_en ?? '', 'ar' => $request->brand_subtitle_ar ?? ''];
        $settings->brand_title = ['en' => $request->brand_title_en ?? '', 'ar' => $request->brand_title_ar ?? ''];
        $settings->brand_button_text = ['en' => $request->brand_button_text_en ?? '', 'ar' => $request->brand_button_text_ar ?? ''];
        $settings->brand_button_url = $request->brand_button_url;

        // Update achievements
        $settings->achievement1_text = ['en' => $request->achievement1_text_en ?? '', 'ar' => $request->achievement1_text_ar ?? ''];
        if ($request->hasFile('achievement1_icon')) {
            if ($settings->achievement1_icon && file_exists(public_path($settings->achievement1_icon))) {
                unlink(public_path($settings->achievement1_icon));
            }
            $file = $request->file('achievement1_icon');
            $filename = time() . '_ach1.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home-page-settings'), $filename);
            $settings->achievement1_icon = 'uploads/home-page-settings/' . $filename;
        }

        $settings->achievement2_text = ['en' => $request->achievement2_text_en ?? '', 'ar' => $request->achievement2_text_ar ?? ''];
        if ($request->hasFile('achievement2_icon')) {
            if ($settings->achievement2_icon && file_exists(public_path($settings->achievement2_icon))) {
                unlink(public_path($settings->achievement2_icon));
            }
            $file = $request->file('achievement2_icon');
            $filename = time() . '_ach2.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home-page-settings'), $filename);
            $settings->achievement2_icon = 'uploads/home-page-settings/' . $filename;
        }

        $settings->achievement3_text = ['en' => $request->achievement3_text_en ?? '', 'ar' => $request->achievement3_text_ar ?? ''];
        if ($request->hasFile('achievement3_icon')) {
            if ($settings->achievement3_icon && file_exists(public_path($settings->achievement3_icon))) {
                unlink(public_path($settings->achievement3_icon));
            }
            $file = $request->file('achievement3_icon');
            $filename = time() . '_ach3.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home-page-settings'), $filename);
            $settings->achievement3_icon = 'uploads/home-page-settings/' . $filename;
        }

        $settings->achievement4_text = ['en' => $request->achievement4_text_en ?? '', 'ar' => $request->achievement4_text_ar ?? ''];
        if ($request->hasFile('achievement4_icon')) {
            if ($settings->achievement4_icon && file_exists(public_path($settings->achievement4_icon))) {
                unlink(public_path($settings->achievement4_icon));
            }
            $file = $request->file('achievement4_icon');
            $filename = time() . '_ach4.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home-page-settings'), $filename);
            $settings->achievement4_icon = 'uploads/home-page-settings/' . $filename;
        }

        // Update blog section
        $settings->blog_subtitle = ['en' => $request->blog_subtitle_en ?? '', 'ar' => $request->blog_subtitle_ar ?? ''];
        $settings->blog_title = ['en' => $request->blog_title_en ?? '', 'ar' => $request->blog_title_ar ?? ''];
        $settings->blog_button_text = ['en' => $request->blog_button_text_en ?? '', 'ar' => $request->blog_button_text_ar ?? ''];
        $settings->blog_button_url = $request->blog_button_url;

        // Update brand logos
        $brandLogos = $request->input('existing_logos', []);

        // Handle removed logos
        if ($request->removed_logos) {
            $removedLogos = json_decode($request->removed_logos, true);
            if (is_array($removedLogos)) {
                foreach ($removedLogos as $removedLogo) {
                    // Delete file
                    if (file_exists(public_path($removedLogo))) {
                        unlink(public_path($removedLogo));
                    }
                    // Remove from array
                    $brandLogos = array_filter($brandLogos, function($logo) use ($removedLogo) {
                        return $logo !== $removedLogo;
                    });
                }
            }
        }

        // Handle new logo uploads
        if ($request->hasFile('brand_logos')) {
            foreach ($request->file('brand_logos') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/home-page-settings/brand-logos'), $filename);
                $brandLogos[] = 'uploads/home-page-settings/brand-logos/' . $filename;
            }
        }

        $settings->brand_logos = array_values($brandLogos);

        $settings->save();

        return redirect()->route('admin.home-page-settings.edit')
            ->with('success', __('admin.settings_updated_successfully'));
    }
}
