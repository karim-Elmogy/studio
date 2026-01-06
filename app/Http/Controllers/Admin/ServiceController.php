<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('order')->paginate(15);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'features_en' => 'nullable|string',
            'features_ar' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
            // Hero Section
            'hero_subtitle_en' => 'nullable|string|max:255',
            'hero_subtitle_ar' => 'nullable|string|max:255',
            'hero_title_en' => 'nullable|string|max:255',
            'hero_title_ar' => 'nullable|string|max:255',
            'hero_description_en' => 'nullable|string',
            'hero_description_ar' => 'nullable|string',
            // Process Section
            'process_title_en' => 'nullable|string|max:255',
            'process_title_ar' => 'nullable|string|max:255',
            'process_steps_en' => 'nullable|string',
            'process_steps_ar' => 'nullable|string',
            'process_description_en' => 'nullable|string',
            'process_description_ar' => 'nullable|string',
            'process_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // Benefits Section
            'benefits_title_en' => 'nullable|string|max:255',
            'benefits_title_ar' => 'nullable|string|max:255',
            'benefits_description_en' => 'nullable|string',
            'benefits_description_ar' => 'nullable|string',
            // Features Section
            'features_title_en' => 'nullable|string|max:255',
            'features_title_ar' => 'nullable|string|max:255',
            'features_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Process features
        $features = [];
        if ($request->features_en || $request->features_ar) {
            $featuresEn = array_filter(explode("\n", $request->features_en ?? ''));
            $featuresAr = array_filter(explode("\n", $request->features_ar ?? ''));

            $maxCount = max(count($featuresEn), count($featuresAr));
            for ($i = 0; $i < $maxCount; $i++) {
                $features[] = [
                    'en' => trim($featuresEn[$i] ?? ''),
                    'ar' => trim($featuresAr[$i] ?? '')
                ];
            }
        }

        // Process steps
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

        // Handle file uploads
        $iconPath = null;
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('services/icons', 'public');
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services/images', 'public');
        }

        $image2Path = null;
        if ($request->hasFile('image_2')) {
            $image2Path = $request->file('image_2')->store('services/images', 'public');
        }

        $bannerImagePath = null;
        if ($request->hasFile('banner_image')) {
            $bannerImagePath = $request->file('banner_image')->store('services/banners', 'public');
        }

        $processImagePath = null;
        if ($request->hasFile('process_image')) {
            $processImagePath = $request->file('process_image')->store('services/process', 'public');
        }

        $featuresImagePath = null;
        if ($request->hasFile('features_image')) {
            $featuresImagePath = $request->file('features_image')->store('services/features', 'public');
        }

        Service::create([
            'title' => [
                'en' => $validated['title_en'],
                'ar' => $validated['title_ar']
            ],
            'description' => [
                'en' => $validated['description_en'],
                'ar' => $validated['description_ar']
            ],
            'features' => $features,
            'icon' => $iconPath,
            'image' => $imagePath,
            'image_2' => $image2Path,
            'banner_image' => $bannerImagePath,
            'order' => $validated['order'],
            'is_active' => $request->has('is_active'),
            // Hero Section
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
            // Process Section
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
            // Benefits Section
            'benefits_title' => [
                'en' => $request->benefits_title_en,
                'ar' => $request->benefits_title_ar
            ],
            'benefits_description' => [
                'en' => $request->benefits_description_en,
                'ar' => $request->benefits_description_ar
            ],
            // Features Section
            'features_title' => [
                'en' => $request->features_title_en,
                'ar' => $request->features_title_ar
            ],
            'features_image' => $featuresImagePath,
        ]);

        return redirect()->route('admin.services.index')
            ->with('success', __('Service created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::findOrFail($id);

        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'features_en' => 'nullable|string',
            'features_ar' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
            // Hero Section
            'hero_subtitle_en' => 'nullable|string|max:255',
            'hero_subtitle_ar' => 'nullable|string|max:255',
            'hero_title_en' => 'nullable|string|max:255',
            'hero_title_ar' => 'nullable|string|max:255',
            'hero_description_en' => 'nullable|string',
            'hero_description_ar' => 'nullable|string',
            // Process Section
            'process_title_en' => 'nullable|string|max:255',
            'process_title_ar' => 'nullable|string|max:255',
            'process_steps_en' => 'nullable|string',
            'process_steps_ar' => 'nullable|string',
            'process_description_en' => 'nullable|string',
            'process_description_ar' => 'nullable|string',
            'process_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // Benefits Section
            'benefits_title_en' => 'nullable|string|max:255',
            'benefits_title_ar' => 'nullable|string|max:255',
            'benefits_description_en' => 'nullable|string',
            'benefits_description_ar' => 'nullable|string',
            // Features Section
            'features_title_en' => 'nullable|string|max:255',
            'features_title_ar' => 'nullable|string|max:255',
            'features_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Process features
        $features = [];
        if ($request->features_en || $request->features_ar) {
            $featuresEn = array_filter(explode("\n", $request->features_en ?? ''));
            $featuresAr = array_filter(explode("\n", $request->features_ar ?? ''));

            $maxCount = max(count($featuresEn), count($featuresAr));
            for ($i = 0; $i < $maxCount; $i++) {
                $features[] = [
                    'en' => trim($featuresEn[$i] ?? ''),
                    'ar' => trim($featuresAr[$i] ?? '')
                ];
            }
        }

        // Process steps
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

        // Handle icon upload
        $iconPath = $service->icon;
        if ($request->hasFile('icon')) {
            if ($service->icon && Storage::disk('public')->exists($service->icon)) {
                Storage::disk('public')->delete($service->icon);
            }
            $iconPath = $request->file('icon')->store('services/icons', 'public');
        }

        // Handle image upload
        $imagePath = $service->image;
        if ($request->hasFile('image')) {
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
            $imagePath = $request->file('image')->store('services/images', 'public');
        }

        // Handle image_2 upload
        $image2Path = $service->image_2;
        if ($request->hasFile('image_2')) {
            if ($service->image_2 && Storage::disk('public')->exists($service->image_2)) {
                Storage::disk('public')->delete($service->image_2);
            }
            $image2Path = $request->file('image_2')->store('services/images', 'public');
        }

        // Handle banner_image upload
        $bannerImagePath = $service->banner_image;
        if ($request->hasFile('banner_image')) {
            if ($service->banner_image && Storage::disk('public')->exists($service->banner_image)) {
                Storage::disk('public')->delete($service->banner_image);
            }
            $bannerImagePath = $request->file('banner_image')->store('services/banners', 'public');
        }

        // Handle process_image upload
        $processImagePath = $service->process_image;
        if ($request->hasFile('process_image')) {
            if ($service->process_image && Storage::disk('public')->exists($service->process_image)) {
                Storage::disk('public')->delete($service->process_image);
            }
            $processImagePath = $request->file('process_image')->store('services/process', 'public');
        }

        // Handle features_image upload
        $featuresImagePath = $service->features_image;
        if ($request->hasFile('features_image')) {
            if ($service->features_image && Storage::disk('public')->exists($service->features_image)) {
                Storage::disk('public')->delete($service->features_image);
            }
            $featuresImagePath = $request->file('features_image')->store('services/features', 'public');
        }

        $service->update([
            'title' => [
                'en' => $validated['title_en'],
                'ar' => $validated['title_ar']
            ],
            'description' => [
                'en' => $validated['description_en'],
                'ar' => $validated['description_ar']
            ],
            'features' => $features,
            'icon' => $iconPath,
            'image' => $imagePath,
            'image_2' => $image2Path,
            'banner_image' => $bannerImagePath,
            'order' => $validated['order'],
            'is_active' => $request->has('is_active'),
            // Hero Section
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
            // Process Section
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
            // Benefits Section
            'benefits_title' => [
                'en' => $request->benefits_title_en,
                'ar' => $request->benefits_title_ar
            ],
            'benefits_description' => [
                'en' => $request->benefits_description_en,
                'ar' => $request->benefits_description_ar
            ],
            // Features Section
            'features_title' => [
                'en' => $request->features_title_en,
                'ar' => $request->features_title_ar
            ],
            'features_image' => $featuresImagePath,
        ]);

        return redirect()->route('admin.services.index')
            ->with('success', __('Service updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);

        // Delete associated files
        if ($service->icon && Storage::disk('public')->exists($service->icon)) {
            Storage::disk('public')->delete($service->icon);
        }
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }
        if ($service->image_2 && Storage::disk('public')->exists($service->image_2)) {
            Storage::disk('public')->delete($service->image_2);
        }
        if ($service->banner_image && Storage::disk('public')->exists($service->banner_image)) {
            Storage::disk('public')->delete($service->banner_image);
        }

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', __('Service deleted successfully'));
    }
}
