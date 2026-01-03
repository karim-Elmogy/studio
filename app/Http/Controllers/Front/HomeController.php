<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Project;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\HomePageSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured/active services (limit to 3)
        $services = Service::where('is_active', true)
            ->orderBy('order')
            ->limit(3)
            ->get();

        // Get featured projects (limit to 4)
        $projects = Project::where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('order')
            ->limit(4)
            ->get();

        // Get latest blog posts (limit to 3)
        $blogs = Blog::where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        // Get active testimonials
        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('order')
            ->get();

        // Get home page settings
        $pageSettings = HomePageSetting::getSettings();

        return view('front.home.index', compact('services', 'projects', 'blogs', 'testimonials', 'pageSettings'));
    }
}
