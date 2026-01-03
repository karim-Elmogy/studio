<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqPageSetting;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('is_active', true)
            ->orderBy('order')
            ->orderBy('id')
            ->get();

        $pageSettings = FaqPageSetting::getSettings();
        return view('front.FAQ.index', compact('pageSettings', 'faqs'));
    }
}
