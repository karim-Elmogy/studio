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
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        // Process features
        $features = [];
        if ($request->features_en || $request->features_ar) {
            $featuresEn = array_filter(explode("\n", $request->features_en ?? ''));
            $featuresAr = array_filter(explode("\n", $request->features_ar ?? ''));

            $maxCount = max(count($featuresEn), count($featuresAr));
            for ($i = 0; $i < $maxCount; $i++) {
                $features[] = [
                    'en' => $featuresEn[$i] ?? '',
                    'ar' => $featuresAr[$i] ?? ''
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
            'order' => $validated['order'],
            'is_active' => $request->has('is_active')
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
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
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

        // Handle icon upload
        $iconPath = $service->icon;
        if ($request->hasFile('icon')) {
            // Delete old icon
            if ($service->icon && Storage::disk('public')->exists($service->icon)) {
                Storage::disk('public')->delete($service->icon);
            }
            $iconPath = $request->file('icon')->store('services/icons', 'public');
        }

        // Handle image upload
        $imagePath = $service->image;
        if ($request->hasFile('image')) {
            // Delete old image
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
            $imagePath = $request->file('image')->store('services/images', 'public');
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
            'order' => $validated['order'],
            'is_active' => $request->has('is_active')
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

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', __('Service deleted successfully'));
    }
}
