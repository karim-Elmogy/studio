<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhatsappWidgetSetting;
use Illuminate\Http\Request;

class WhatsappWidgetSettingController extends Controller
{
    public function edit()
    {
        $settings = WhatsappWidgetSetting::getSettings();

        return view('admin.whatsapp-widget-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'is_enabled' => 'nullable|boolean',
            'phone' => 'nullable|string|max:32',
            'default_message' => 'nullable|string|max:2000',
            'horizontal_position' => 'required|in:left,right',
        ]);

        $settings = WhatsappWidgetSetting::getSettings();

        $settings->is_enabled = $request->boolean('is_enabled');
        $settings->phone = $validated['phone'] ?? null;
        $settings->default_message = $validated['default_message'] ?? null;
        $settings->horizontal_position = $validated['horizontal_position'];

        if ($settings->is_enabled && $settings->phoneDigits() === '') {
            return back()
                ->withErrors(['phone' => __('admin.whatsapp_widget_phone_required_when_enabled')])
                ->withInput();
        }

        $settings->save();

        return redirect()->route('admin.whatsapp-widget-settings.edit')
            ->with('success', __('admin.settings_updated_successfully'));
    }
}
