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

    public function show(string $slug)
    {
        $service = Service::activeByRouteSlug($slug)->firstOrFail();

        // Get related services
        $relatedServices = Service::where('is_active', true)
            ->where('id', '!=', $service->id)
            ->orderBy('order')
            ->limit(3)
            ->get();

        return view('front.services.show', compact('service', 'relatedServices'));
    }
}
