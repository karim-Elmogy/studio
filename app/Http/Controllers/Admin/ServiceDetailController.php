<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceDetailController extends Controller
{
    /**
     * Show the form for editing service details
     */
    public function edit($serviceId)
    {
        $service = Service::findOrFail($serviceId);

        // Get related services (other active services excluding current one)
        // $relatedServices = Service::where('is_active', true)
        //     ->where('id', '!=', $serviceId)
        //     ->orderBy('created_at', 'desc')
        //     ->take(5)
        //     ->get();

        return view('admin.services.details', compact('service'));
    }

    /**
     * Update service details
     */
    public function update(Request $request, $serviceId)
    {
        $service = Service::findOrFail($serviceId);

        $validated = $request->validate([
            // Hero section
            'hero_subtitle_en' => 'nullable|string|max:255',
            'hero_subtitle_ar' => 'nullable|string|max:255',
            'hero_title_en' => 'nullable|string|max:255',
            'hero_title_ar' => 'nullable|string|max:255',
            'hero_description_en' => 'nullable|string',
            'hero_description_ar' => 'nullable|string',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            // Process section
            'process_title_en' => 'nullable|string|max:255',
            'process_title_ar' => 'nullable|string|max:255',
            'process_steps_en' => 'nullable|string',
            'process_steps_ar' => 'nullable|string',
            'process_description_en' => 'nullable|string',
            'process_description_ar' => 'nullable|string',
            'process_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            // Benefits section
            'benefits_title_en' => 'nullable|string|max:255',
            'benefits_title_ar' => 'nullable|string|max:255',
            'benefits_description_en' => 'nullable|string',
            'benefits_description_ar' => 'nullable|string',

            // Features section
            'features_title_en' => 'nullable|string|max:255',
            'features_title_ar' => 'nullable|string|max:255',
            'features_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Process process steps
        $processSteps = [];
        if ($request->process_steps_en || $request->process_steps_ar) {
            $stepsEn = array_filter(explode("\n", $request->process_steps_en ?? ''));
            $stepsAr = array_filter(explode("\n", $request->process_steps_ar ?? ''));

            $maxCount = max(count($stepsEn), count($stepsAr));
            for ($i = 0; $i < $maxCount; $i++) {
                $processSteps[] = [
                    'en' => trim($stepsEn[$i] ?? ''),
                    'ar' => trim($stepsAr[$i] ?? '')
                ];
            }
        }

        // Handle hero image upload
        $heroImagePath = $service->hero_image;
        if ($request->hasFile('hero_image')) {
            if ($service->hero_image && Storage::disk('public')->exists($service->hero_image)) {
                Storage::disk('public')->delete($service->hero_image);
            }
            $heroImagePath = $request->file('hero_image')->store('services/details/hero', 'public');
        }

        // Handle process image upload
        $processImagePath = $service->process_image;
        if ($request->hasFile('process_image')) {
            if ($service->process_image && Storage::disk('public')->exists($service->process_image)) {
                Storage::disk('public')->delete($service->process_image);
            }
            $processImagePath = $request->file('process_image')->store('services/details/process', 'public');
        }

        // Handle features image upload
        $featuresImagePath = $service->features_image;
        if ($request->hasFile('features_image')) {
            if ($service->features_image && Storage::disk('public')->exists($service->features_image)) {
                Storage::disk('public')->delete($service->features_image);
            }
            $featuresImagePath = $request->file('features_image')->store('services/details/features', 'public');
        }

        $service->update([
            'hero_subtitle' => [
                'en' => $request->hero_subtitle_en,
                'ar' => $request->hero_subtitle_ar
            ],
            'hero_title' => [
                'en' => $request->hero_title_en,
                'ar' => $request->hero_title_ar
            ],
            'hero_description' => [
                'en' => $request->hero_description_en,
                'ar' => $request->hero_description_ar
            ],
            'hero_image' => $heroImagePath,
            'process_title' => [
                'en' => $request->process_title_en,
                'ar' => $request->process_title_ar
            ],
            'process_steps' => $processSteps,
            'process_description' => [
                'en' => $request->process_description_en,
                'ar' => $request->process_description_ar
            ],
            'process_image' => $processImagePath,
            'benefits_title' => [
                'en' => $request->benefits_title_en,
                'ar' => $request->benefits_title_ar
            ],
            'benefits_description' => [
                'en' => $request->benefits_description_en,
                'ar' => $request->benefits_description_ar
            ],
            'features_title' => [
                'en' => $request->features_title_en,
                'ar' => $request->features_title_ar
            ],
            'features_image' => $featuresImagePath
        ]);

        return redirect()->route('admin.services.details.edit', $serviceId)
            ->with('success', __('Service details updated successfully'));
    }
}
