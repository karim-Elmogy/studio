<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::orderBy('key')->paginate(20);
        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|string|max:255|unique:settings,key',
            'value' => 'nullable|string',
            'type' => 'required|in:text,textarea,image,json',
            'description' => 'nullable|string|max:500',
        ]);

        // Handle image upload
        if ($validated['type'] === 'image' && $request->hasFile('value')) {
            $imagePath = $request->file('value')->store('settings', 'public');
            $validated['value'] = $imagePath;
        }

        // Handle JSON validation
        if ($validated['type'] === 'json' && !empty($validated['value'])) {
            $jsonValue = json_decode($validated['value'], true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                return back()->withErrors(['value' => 'Invalid JSON format.'])->withInput();
            }
        }

        Setting::create([
            'key' => $validated['key'],
            'value' => $validated['value'] ?? '',
            'type' => $validated['type'],
            'description' => $validated['description'] ?? null,
        ]);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Setting created successfully!');
    }

    public function show(Setting $setting)
    {
        return view('admin.settings.show', compact('setting'));
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $validated = $request->validate([
            'key' => 'required|string|max:255|unique:settings,key,' . $setting->id,
            'value' => 'nullable|string',
            'type' => 'required|in:text,textarea,image,json',
            'description' => 'nullable|string|max:500',
        ]);

        // Handle image upload
        if ($validated['type'] === 'image') {
            if ($request->hasFile('value')) {
                // Delete old image if exists
                if ($setting->value && $setting->type === 'image') {
                    Storage::disk('public')->delete($setting->value);
                }
                $imagePath = $request->file('value')->store('settings', 'public');
                $validated['value'] = $imagePath;
            } else {
                // Keep existing image
                $validated['value'] = $setting->value;
            }
        }

        // Handle JSON validation
        if ($validated['type'] === 'json' && !empty($validated['value'])) {
            $jsonValue = json_decode($validated['value'], true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                return back()->withErrors(['value' => 'Invalid JSON format.'])->withInput();
            }
        }

        $setting->update([
            'key' => $validated['key'],
            'value' => $validated['value'] ?? '',
            'type' => $validated['type'],
            'description' => $validated['description'] ?? null,
        ]);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Setting updated successfully!');
    }

    public function destroy(Setting $setting)
    {
        // Delete image file if it's an image setting
        if ($setting->type === 'image' && $setting->value) {
            Storage::disk('public')->delete($setting->value);
        }

        $setting->delete();

        return redirect()->route('admin.settings.index')
            ->with('success', 'Setting deleted successfully!');
    }
}
