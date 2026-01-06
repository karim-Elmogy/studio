<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        // Filter by type if provided
        if ($request->has('type') && in_array($request->type, ['web', 'mobile'])) {
            $query->where('type', $request->type);
        }

        $projects = $query->orderBy('order')->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'category_en' => 'required|string|max:255',
            'category_ar' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'client' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:4',
            'tags' => 'nullable|string',
            'type' => 'required|in:web,mobile',
            'order' => 'nullable|integer',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
            $validated['image'] = $imagePath;
        }

        $tags = [];
        if ($request->filled('tags')) {
            $tagsList = explode(',', $request->tags);
            foreach ($tagsList as $tag) {
                $tags[] = ['en' => trim($tag), 'ar' => trim($tag)];
            }
        }

        Project::create([
            'title' => [
                'en' => $validated['title_en'],
                'ar' => $validated['title_ar'],
            ],
            'description' => [
                'en' => $validated['description_en'] ?? '',
                'ar' => $validated['description_ar'] ?? '',
            ],
            'category' => [
                'en' => $validated['category_en'],
                'ar' => $validated['category_ar'],
            ],
            'image' => $validated['image'],
            'client' => $validated['client'] ?? null,
            'year' => $validated['year'] ?? null,
            'tags' => $tags,
            'type' => $validated['type'],
            'order' => $validated['order'] ?? 0,
            'is_featured' => $request->has('is_featured'),
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully!');
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'category_en' => 'required|string|max:255',
            'category_ar' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'client' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:4',
            'tags' => 'nullable|string',
            'type' => 'required|in:web,mobile',
            'order' => 'nullable|integer',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $imagePath = $request->file('image')->store('projects', 'public');
            $validated['image'] = $imagePath;
        } else {
            $validated['image'] = $project->image;
        }

        $tags = [];
        if ($request->filled('tags')) {
            $tagsList = explode(',', $request->tags);
            foreach ($tagsList as $tag) {
                $tags[] = ['en' => trim($tag), 'ar' => trim($tag)];
            }
        }

        $project->update([
            'title' => [
                'en' => $validated['title_en'],
                'ar' => $validated['title_ar'],
            ],
            'description' => [
                'en' => $validated['description_en'] ?? '',
                'ar' => $validated['description_ar'] ?? '',
            ],
            'category' => [
                'en' => $validated['category_en'],
                'ar' => $validated['category_ar'],
            ],
            'image' => $validated['image'],
            'client' => $validated['client'] ?? null,
            'year' => $validated['year'] ?? null,
            'tags' => $tags,
            'type' => $validated['type'],
            'order' => $validated['order'] ?? 0,
            'is_featured' => $request->has('is_featured'),
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully!');
    }

    // Mobile Details Methods
    public function editMobileDetails(Project $project)
    {
        if ($project->type !== 'mobile') {
            return redirect()->route('admin.projects.index')
                ->with('error', 'This project is not a mobile project.');
        }

        return view('admin.projects.mobile-details', compact('project'));
    }

    public function updateMobileDetails(Request $request, Project $project)
    {
        if ($project->type !== 'mobile') {
            return redirect()->route('admin.projects.index')
                ->with('error', 'This project is not a mobile project.');
        }

        $validated = $request->validate([
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'problem_en' => 'nullable|string',
            'problem_ar' => 'nullable|string',
            'approach_en' => 'nullable|string',
            'approach_ar' => 'nullable|string',
            'solution_en' => 'nullable|string',
            'solution_ar' => 'nullable|string',
            'light_mode_title_en' => 'nullable|string|max:255',
            'light_mode_title_ar' => 'nullable|string|max:255',
            'light_mode_images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'mobile_first_title_en' => 'nullable|string|max:255',
            'mobile_first_title_ar' => 'nullable|string|max:255',
            'mobile_first_content_en' => 'nullable|string',
            'mobile_first_content_ar' => 'nullable|string',
            'mobile_first_mockup' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'slider_images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $mobileDetails = $project->mobile_details ?? [];

        // Handle Hero Image
        if ($request->hasFile('hero_image')) {
            if (isset($mobileDetails['hero_image'])) {
                Storage::disk('public')->delete($mobileDetails['hero_image']);
            }
            $mobileDetails['hero_image'] = $request->file('hero_image')->store('projects/mobile', 'public');
        }

        // Handle Text Fields
        $mobileDetails['problem'] = [
            'en' => $request->problem_en ?? '',
            'ar' => $request->problem_ar ?? '',
        ];
        $mobileDetails['approach'] = [
            'en' => $request->approach_en ?? '',
            'ar' => $request->approach_ar ?? '',
        ];
        $mobileDetails['solution'] = [
            'en' => $request->solution_en ?? '',
            'ar' => $request->solution_ar ?? '',
        ];
        $mobileDetails['light_mode_title'] = [
            'en' => $request->light_mode_title_en ?? '',
            'ar' => $request->light_mode_title_ar ?? '',
        ];
        $mobileDetails['mobile_first_title'] = [
            'en' => $request->mobile_first_title_en ?? '',
            'ar' => $request->mobile_first_title_ar ?? '',
        ];
        $mobileDetails['mobile_first_content'] = [
            'en' => $request->mobile_first_content_en ?? '',
            'ar' => $request->mobile_first_content_ar ?? '',
        ];

        // Handle Light Mode Images
        if ($request->hasFile('light_mode_images')) {
            $lightModeImages = [];
            foreach ($request->file('light_mode_images') as $image) {
                $lightModeImages[] = $image->store('projects/mobile/light-mode', 'public');
            }
            $mobileDetails['light_mode_images'] = array_merge($mobileDetails['light_mode_images'] ?? [], $lightModeImages);
        }

        // Handle Mobile First Mockup
        if ($request->hasFile('mobile_first_mockup')) {
            if (isset($mobileDetails['mobile_first_mockup'])) {
                Storage::disk('public')->delete($mobileDetails['mobile_first_mockup']);
            }
            $mobileDetails['mobile_first_mockup'] = $request->file('mobile_first_mockup')->store('projects/mobile', 'public');
        }

        // Handle Slider Images
        if ($request->hasFile('slider_images')) {
            $sliderImages = [];
            foreach ($request->file('slider_images') as $image) {
                $sliderImages[] = $image->store('projects/mobile/slider', 'public');
            }
            $mobileDetails['slider_images'] = array_merge($mobileDetails['slider_images'] ?? [], $sliderImages);
        }

        $project->update(['mobile_details' => $mobileDetails]);

        return redirect()->route('admin.projects.mobile-details.edit', $project)
            ->with('success', 'Mobile project details updated successfully!');
    }

    // Web Details Methods
    public function editWebDetails(Project $project)
    {
        if ($project->type !== 'web') {
            return redirect()->route('admin.projects.index')
                ->with('error', 'This project is not a web project.');
        }

        return view('admin.projects.web-details', compact('project'));
    }

    public function updateWebDetails(Request $request, Project $project)
    {
        if ($project->type !== 'web') {
            return redirect()->route('admin.projects.index')
                ->with('error', 'This project is not a web project.');
        }

        $validated = $request->validate([
            'hero_banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'subtitle_en' => 'nullable|string|max:255',
            'subtitle_ar' => 'nullable|string|max:255',
            'overview_en' => 'nullable|string',
            'overview_ar' => 'nullable|string',
            'service_en' => 'nullable|string|max:255',
            'service_ar' => 'nullable|string|max:255',
            'website_url' => 'nullable|url',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'challenge_en' => 'nullable|string',
            'challenge_ar' => 'nullable|string',
            'challenge_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'solution_en' => 'nullable|string',
            'solution_ar' => 'nullable|string',
            'solution_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'additional_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $webDetails = $project->web_details ?? [];

        // Handle Hero Banner
        if ($request->hasFile('hero_banner')) {
            if (isset($webDetails['hero_banner'])) {
                Storage::disk('public')->delete($webDetails['hero_banner']);
            }
            $webDetails['hero_banner'] = $request->file('hero_banner')->store('projects/web', 'public');
        }

        // Handle Text Fields
        $webDetails['subtitle'] = [
            'en' => $request->subtitle_en ?? '',
            'ar' => $request->subtitle_ar ?? '',
        ];
        $webDetails['overview'] = [
            'en' => $request->overview_en ?? '',
            'ar' => $request->overview_ar ?? '',
        ];
        $webDetails['service'] = [
            'en' => $request->service_en ?? '',
            'ar' => $request->service_ar ?? '',
        ];
        $webDetails['challenge'] = [
            'en' => $request->challenge_en ?? '',
            'ar' => $request->challenge_ar ?? '',
        ];
        $webDetails['solution'] = [
            'en' => $request->solution_en ?? '',
            'ar' => $request->solution_ar ?? '',
        ];
        $webDetails['website_url'] = $request->website_url ?? '';

        // Handle Gallery Images
        if ($request->hasFile('gallery_images')) {
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryImages[] = $image->store('projects/web/gallery', 'public');
            }
            $webDetails['gallery_images'] = array_merge($webDetails['gallery_images'] ?? [], $galleryImages);
        }

        // Handle Challenge Image
        if ($request->hasFile('challenge_image')) {
            if (isset($webDetails['challenge_image'])) {
                Storage::disk('public')->delete($webDetails['challenge_image']);
            }
            $webDetails['challenge_image'] = $request->file('challenge_image')->store('projects/web', 'public');
        }

        // Handle Solution Image
        if ($request->hasFile('solution_image')) {
            if (isset($webDetails['solution_image'])) {
                Storage::disk('public')->delete($webDetails['solution_image']);
            }
            $webDetails['solution_image'] = $request->file('solution_image')->store('projects/web', 'public');
        }

        // Handle Additional Gallery
        if ($request->hasFile('additional_gallery')) {
            $additionalGallery = [];
            foreach ($request->file('additional_gallery') as $image) {
                $additionalGallery[] = $image->store('projects/web/additional', 'public');
            }
            $webDetails['additional_gallery'] = array_merge($webDetails['additional_gallery'] ?? [], $additionalGallery);
        }

        $project->update(['web_details' => $webDetails]);

        return redirect()->route('admin.projects.web-details.edit', $project)
            ->with('success', 'Web project details updated successfully!');
    }
}
