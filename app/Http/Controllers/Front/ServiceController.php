<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServicePageSetting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order')
            ->paginate(12);

        $pageSettings = ServicePageSetting::getSettings();

        return view('front.services.index', compact('services', 'pageSettings'));
    }

    public function show($id)
    {
        $service = Service::where('is_active', true)->findOrFail($id);

        // Get related services
        $relatedServices = Service::where('is_active', true)
            ->where('id', '!=', $id)
            ->orderBy('order')
            ->limit(3)
            ->get();

        return view('front.services.show', compact('service', 'relatedServices'));
    }
}
