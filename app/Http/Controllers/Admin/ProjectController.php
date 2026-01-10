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

        $mobileDetails = $project->mobile_details ?? [];

        // Handle Save Order Only (AJAX Request)
        if ($request->has('save_order_only')) {
            // Handle Light Mode Images Order
            if ($request->filled('light_mode_images_order')) {
                $orderArray = json_decode($request->light_mode_images_order, true);
                if (is_array($orderArray) && !empty($mobileDetails['light_mode_images'])) {
                    $currentImages = $mobileDetails['light_mode_images'];
                    $reorderedImages = [];
                    foreach ($orderArray as $index) {
                        if (isset($currentImages[$index])) {
                            $reorderedImages[] = $currentImages[$index];
                        }
                    }
                    $mobileDetails['light_mode_images'] = $reorderedImages;
                }
            }

            // Handle Slider Images Order
            if ($request->filled('slider_images_order')) {
                $orderArray = json_decode($request->slider_images_order, true);
                if (is_array($orderArray) && !empty($mobileDetails['slider_images'])) {
                    $currentImages = $mobileDetails['slider_images'];
                    $reorderedImages = [];
                    foreach ($orderArray as $index) {
                        if (isset($currentImages[$index])) {
                            $reorderedImages[] = $currentImages[$index];
                        }
                    }
                    $mobileDetails['slider_images'] = $reorderedImages;
                }
            }

            $project->update(['mobile_details' => $mobileDetails]);
            return response()->json(['success' => true, 'message' => 'تم حفظ الترتيب بنجاح!']);
        }

        // Handle Delete Operations
        // Only process delete if the field exists AND has a non-empty value
        // This prevents false positives when the form is submitted normally
        $deleteLightModeImage = $request->input('delete_light_mode_image');
        if (!empty($deleteLightModeImage) && is_string($deleteLightModeImage) && strlen(trim($deleteLightModeImage)) > 0) {
            return $this->deleteImageFromArray($project, $mobileDetails, 'light_mode_images', $deleteLightModeImage);
        }

        $deleteSliderImage = $request->input('delete_slider_image');
        if (!empty($deleteSliderImage) && is_string($deleteSliderImage) && strlen(trim($deleteSliderImage)) > 0) {
            return $this->deleteImageFromArray($project, $mobileDetails, 'slider_images', $deleteSliderImage);
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
            // Portfolio Step Section
            'portfolio_step_heading_en' => 'nullable|string',
            'portfolio_step_heading_ar' => 'nullable|string',
            'step_1_title_en' => 'nullable|string|max:255',
            'step_1_title_ar' => 'nullable|string|max:255',
            'step_1_description_en' => 'nullable|string',
            'step_1_description_ar' => 'nullable|string',
            'step_2_title_en' => 'nullable|string|max:255',
            'step_2_title_ar' => 'nullable|string|max:255',
            'step_2_description_en' => 'nullable|string',
            'step_2_description_ar' => 'nullable|string',
            'step_3_title_en' => 'nullable|string|max:255',
            'step_3_title_ar' => 'nullable|string|max:255',
            'step_3_description_en' => 'nullable|string',
            'step_3_description_ar' => 'nullable|string',
            // Portfolio Thumb Images
            'portfolio_thumb_image_1' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'portfolio_thumb_image_2' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'portfolio_thumb_image_3' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // CRITICAL: Preserve existing images BEFORE any updates
        // Get current mobile_details from database (don't use $mobileDetails from line 194 as it may be outdated)
        $currentMobileDetails = $project->mobile_details ?? [];
        
        // Store existing images in a separate variable to ensure they're preserved
        // This is the source of truth for existing images
        $existingImages = [
            'hero_image' => $currentMobileDetails['hero_image'] ?? null,
            'light_mode_images' => $currentMobileDetails['light_mode_images'] ?? [],
            'mobile_first_mockup' => $currentMobileDetails['mobile_first_mockup'] ?? null,
            'slider_images' => $currentMobileDetails['slider_images'] ?? [],
            'portfolio_thumb_images' => $currentMobileDetails['portfolio_thumb_images'] ?? [],
        ];
        
        // Ensure arrays are properly formatted and filter out empty values
        if (!is_array($existingImages['light_mode_images'])) {
            $existingImages['light_mode_images'] = [];
        } else {
            $existingImages['light_mode_images'] = array_values(array_filter($existingImages['light_mode_images'], function($img) {
                return !empty($img) && is_string($img);
            }));
        }
        
        if (!is_array($existingImages['slider_images'])) {
            $existingImages['slider_images'] = [];
        } else {
            $existingImages['slider_images'] = array_values(array_filter($existingImages['slider_images'], function($img) {
                return !empty($img) && is_string($img);
            }));
        }
        
        if (!is_array($existingImages['portfolio_thumb_images'])) {
            $existingImages['portfolio_thumb_images'] = [];
        } else {
            $existingImages['portfolio_thumb_images'] = array_values(array_filter($existingImages['portfolio_thumb_images'], function($img) {
                return !empty($img) && is_string($img);
            }));
        }
        
        // Start with fresh mobileDetails from database
        $mobileDetails = $currentMobileDetails;

        // Handle Hero Image - preserve existing if no new file uploaded
        $mobileDetails['hero_image'] = $this->handleSingleImage(
            $request,
            'hero_image',
            $existingImages['hero_image'],
            'projects/mobile'
        );

        // Handle Text Fields
        $mobileDetails['problem'] = [
            'en' => $request->problem_en ?? ($mobileDetails['problem']['en'] ?? ''),
            'ar' => $request->problem_ar ?? ($mobileDetails['problem']['ar'] ?? ''),
        ];
        $mobileDetails['approach'] = [
            'en' => $request->approach_en ?? ($mobileDetails['approach']['en'] ?? ''),
            'ar' => $request->approach_ar ?? ($mobileDetails['approach']['ar'] ?? ''),
        ];
        $mobileDetails['solution'] = [
            'en' => $request->solution_en ?? ($mobileDetails['solution']['en'] ?? ''),
            'ar' => $request->solution_ar ?? ($mobileDetails['solution']['ar'] ?? ''),
        ];
        $mobileDetails['light_mode_title'] = [
            'en' => $request->light_mode_title_en ?? ($mobileDetails['light_mode_title']['en'] ?? ''),
            'ar' => $request->light_mode_title_ar ?? ($mobileDetails['light_mode_title']['ar'] ?? ''),
        ];
        $mobileDetails['mobile_first_title'] = [
            'en' => $request->mobile_first_title_en ?? ($mobileDetails['mobile_first_title']['en'] ?? ''),
            'ar' => $request->mobile_first_title_ar ?? ($mobileDetails['mobile_first_title']['ar'] ?? ''),
        ];
        $mobileDetails['mobile_first_content'] = [
            'en' => $request->mobile_first_content_en ?? ($mobileDetails['mobile_first_content']['en'] ?? ''),
            'ar' => $request->mobile_first_content_ar ?? ($mobileDetails['mobile_first_content']['ar'] ?? ''),
        ];

        // Handle Light Mode Images - preserve existing and merge with new ones
        $mobileDetails['light_mode_images'] = $this->handleMultipleImages(
            $request,
            'light_mode_images',
            $existingImages['light_mode_images'],
            'projects/mobile/light-mode'
        );

        // Handle Mobile First Mockup - preserve existing if no new file uploaded
        $mobileDetails['mobile_first_mockup'] = $this->handleSingleImage(
            $request,
            'mobile_first_mockup',
            $existingImages['mobile_first_mockup'],
            'projects/mobile'
        );

        // Handle Slider Images - preserve existing and merge with new ones
        $mobileDetails['slider_images'] = $this->handleMultipleImages(
            $request,
            'slider_images',
            $existingImages['slider_images'],
            'projects/mobile/slider'
        );

        // Handle Portfolio Step Heading
        $mobileDetails['portfolio_step_heading'] = [
            'en' => $request->portfolio_step_heading_en ?? ($mobileDetails['portfolio_step_heading']['en'] ?? ''),
            'ar' => $request->portfolio_step_heading_ar ?? ($mobileDetails['portfolio_step_heading']['ar'] ?? ''),
        ];

        // Handle Step 1
        $mobileDetails['step_1'] = [
            'title' => [
                'en' => $request->step_1_title_en ?? ($mobileDetails['step_1']['title']['en'] ?? ''),
                'ar' => $request->step_1_title_ar ?? ($mobileDetails['step_1']['title']['ar'] ?? ''),
            ],
            'description' => [
                'en' => $request->step_1_description_en ?? ($mobileDetails['step_1']['description']['en'] ?? ''),
                'ar' => $request->step_1_description_ar ?? ($mobileDetails['step_1']['description']['ar'] ?? ''),
            ],
        ];

        // Handle Step 2
        $mobileDetails['step_2'] = [
            'title' => [
                'en' => $request->step_2_title_en ?? ($mobileDetails['step_2']['title']['en'] ?? ''),
                'ar' => $request->step_2_title_ar ?? ($mobileDetails['step_2']['title']['ar'] ?? ''),
            ],
            'description' => [
                'en' => $request->step_2_description_en ?? ($mobileDetails['step_2']['description']['en'] ?? ''),
                'ar' => $request->step_2_description_ar ?? ($mobileDetails['step_2']['description']['ar'] ?? ''),
            ],
        ];

        // Handle Step 3
        $mobileDetails['step_3'] = [
            'title' => [
                'en' => $request->step_3_title_en ?? ($mobileDetails['step_3']['title']['en'] ?? ''),
                'ar' => $request->step_3_title_ar ?? ($mobileDetails['step_3']['title']['ar'] ?? ''),
            ],
            'description' => [
                'en' => $request->step_3_description_en ?? ($mobileDetails['step_3']['description']['en'] ?? ''),
                'ar' => $request->step_3_description_ar ?? ($mobileDetails['step_3']['description']['ar'] ?? ''),
            ],
        ];

        // Handle Portfolio Thumb Images - preserve existing if no new files uploaded
        $mobileDetails['portfolio_thumb_images'] = $this->handlePortfolioThumbImages(
            $request,
            $existingImages['portfolio_thumb_images']
        );

        // Final check: Ensure all images are preserved
        // This is a safety net to ensure images are never lost
        // Only override if the field is truly empty/null and we have existing images
        if (($mobileDetails['hero_image'] === null || $mobileDetails['hero_image'] === '') && 
            !empty($existingImages['hero_image'])) {
            $mobileDetails['hero_image'] = $existingImages['hero_image'];
        }
        if (($mobileDetails['mobile_first_mockup'] === null || $mobileDetails['mobile_first_mockup'] === '') && 
            !empty($existingImages['mobile_first_mockup'])) {
            $mobileDetails['mobile_first_mockup'] = $existingImages['mobile_first_mockup'];
        }
        if ((empty($mobileDetails['light_mode_images']) || !is_array($mobileDetails['light_mode_images'])) && 
            !empty($existingImages['light_mode_images']) && is_array($existingImages['light_mode_images'])) {
            $mobileDetails['light_mode_images'] = $existingImages['light_mode_images'];
        }
        if ((empty($mobileDetails['slider_images']) || !is_array($mobileDetails['slider_images'])) && 
            !empty($existingImages['slider_images']) && is_array($existingImages['slider_images'])) {
            $mobileDetails['slider_images'] = $existingImages['slider_images'];
        }
        if ((empty($mobileDetails['portfolio_thumb_images']) || !is_array($mobileDetails['portfolio_thumb_images'])) && 
            !empty($existingImages['portfolio_thumb_images']) && is_array($existingImages['portfolio_thumb_images'])) {
            $mobileDetails['portfolio_thumb_images'] = $existingImages['portfolio_thumb_images'];
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

        $webDetails = $project->web_details ?? [];

        // Handle Save Order Only (AJAX Request)
        if ($request->has('save_order_only')) {
            // Handle Gallery Images Order
            if ($request->filled('gallery_images_order')) {
                $orderArray = json_decode($request->gallery_images_order, true);
                if (is_array($orderArray) && !empty($webDetails['gallery_images'])) {
                    $currentImages = $webDetails['gallery_images'];
                    $reorderedImages = [];
                    foreach ($orderArray as $index) {
                        if (isset($currentImages[$index])) {
                            $reorderedImages[] = $currentImages[$index];
                        }
                    }
                    $webDetails['gallery_images'] = $reorderedImages;
                }
            }

            // Handle Additional Gallery Order
            if ($request->filled('additional_gallery_order')) {
                $orderArray = json_decode($request->additional_gallery_order, true);
                if (is_array($orderArray) && !empty($webDetails['additional_gallery'])) {
                    $currentImages = $webDetails['additional_gallery'];
                    $reorderedImages = [];
                    foreach ($orderArray as $index) {
                        if (isset($currentImages[$index])) {
                            $reorderedImages[] = $currentImages[$index];
                        }
                    }
                    $webDetails['additional_gallery'] = $reorderedImages;
                }
            }

            $project->update(['web_details' => $webDetails]);
            return response()->json(['success' => true, 'message' => 'تم حفظ الترتيب بنجاح!']);
        }

        // Handle Delete Gallery Image
        // Only process delete if the field exists AND has a non-empty value
        $deleteGalleryImage = $request->input('delete_gallery_image');
        if (!empty($deleteGalleryImage) && is_string($deleteGalleryImage) && strlen(trim($deleteGalleryImage)) > 0) {
            Storage::disk('public')->delete($deleteGalleryImage);

            $currentGalleryImages = $webDetails['gallery_images'] ?? [];
            $webDetails['gallery_images'] = array_values(array_filter($currentGalleryImages, function($img) use ($deleteGalleryImage) {
                return $img !== $deleteGalleryImage && !empty($img);
            }));

            $project->update(['web_details' => $webDetails]);
            
            // Check if this is an AJAX request
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => true, 'message' => 'تم حذف الصورة بنجاح!']);
            }
            
            return redirect()->route('admin.projects.web-details.edit', $project)
                ->with('success', 'تم حذف الصورة بنجاح!');
        }

        // Handle Delete Additional Gallery Image
        // Only process delete if the field exists AND has a non-empty value
        $deleteAdditionalGalleryImage = $request->input('delete_additional_gallery_image');
        if (!empty($deleteAdditionalGalleryImage) && is_string($deleteAdditionalGalleryImage) && strlen(trim($deleteAdditionalGalleryImage)) > 0) {
            Storage::disk('public')->delete($deleteAdditionalGalleryImage);

            $currentAdditionalGallery = $webDetails['additional_gallery'] ?? [];
            $webDetails['additional_gallery'] = array_values(array_filter($currentAdditionalGallery, function($img) use ($deleteAdditionalGalleryImage) {
                return $img !== $deleteAdditionalGalleryImage && !empty($img);
            }));

            $project->update(['web_details' => $webDetails]);
            
            // Check if this is an AJAX request
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => true, 'message' => 'تم حذف الصورة بنجاح!']);
            }
            
            return redirect()->route('admin.projects.web-details.edit', $project)
                ->with('success', 'تم حذف الصورة بنجاح!');
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
            'gallery_images_order' => 'nullable|string',
            'challenge_en' => 'nullable|string',
            'challenge_ar' => 'nullable|string',
            'challenge_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'solution_en' => 'nullable|string',
            'solution_ar' => 'nullable|string',
            'solution_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'additional_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'additional_gallery_order' => 'nullable|string',
        ]);

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

        // Handle Gallery Images Order
        if ($request->filled('gallery_images_order')) {
            $orderArray = json_decode($request->gallery_images_order, true);
            if (is_array($orderArray) && !empty($webDetails['gallery_images'])) {
                $currentImages = $webDetails['gallery_images'];
                $reorderedImages = [];
                foreach ($orderArray as $index) {
                    if (isset($currentImages[$index])) {
                        $reorderedImages[] = $currentImages[$index];
                    }
                }
                $webDetails['gallery_images'] = $reorderedImages;
            }
        }

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

        // Handle Additional Gallery Order
        if ($request->filled('additional_gallery_order')) {
            $orderArray = json_decode($request->additional_gallery_order, true);
            if (is_array($orderArray) && !empty($webDetails['additional_gallery'])) {
                $currentImages = $webDetails['additional_gallery'];
                $reorderedImages = [];
                foreach ($orderArray as $index) {
                    if (isset($currentImages[$index])) {
                        $reorderedImages[] = $currentImages[$index];
                    }
                }
                $webDetails['additional_gallery'] = $reorderedImages;
            }
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

    /**
     * Delete an image from a specific array in mobile_details
     * 
     * @param Project $project
     * @param array $mobileDetails
     * @param string $arrayKey The key in mobile_details array (e.g., 'light_mode_images', 'slider_images')
     * @param string $imageToDelete The image path to delete
     * @return \Illuminate\Http\RedirectResponse
     */
    private function deleteImageFromArray(Project $project, array $mobileDetails, string $arrayKey, string $imageToDelete)
    {
        // Delete the physical file from storage
        if (!empty($imageToDelete)) {
            Storage::disk('public')->delete($imageToDelete);
        }

        // Get current images array
        $currentImages = $mobileDetails[$arrayKey] ?? [];
        
        // Remove the image from array
        $updatedImages = array_values(array_filter($currentImages, function($img) use ($imageToDelete) {
            return $img !== $imageToDelete && !empty($img);
        }));

        // Update mobile_details
        $mobileDetails[$arrayKey] = $updatedImages;
        $project->update(['mobile_details' => $mobileDetails]);

        // Check if this is an AJAX request
        if (request()->ajax() || request()->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'تم حذف الصورة بنجاح!']);
        }

        return redirect()->route('admin.projects.mobile-details.edit', $project)
            ->with('success', 'تم حذف الصورة بنجاح!');
    }

    /**
     * Handle single image upload - preserve existing if no new file uploaded
     * 
     * @param Request $request
     * @param string $fieldName The form field name
     * @param string|null $existingImage The existing image path
     * @param string $storagePath The storage path for new images
     * @return string|null The image path or null
     */
    private function handleSingleImage(Request $request, string $fieldName, ?string $existingImage, string $storagePath): ?string
    {
        if ($request->hasFile($fieldName)) {
            // Delete existing image if present
            if (!empty($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
            // Store new image
            return $request->file($fieldName)->store($storagePath, 'public');
        }
        
        // Preserve existing image
        return $existingImage;
    }

    /**
     * Handle multiple images upload - preserve existing and merge with new ones
     * 
     * @param Request $request
     * @param string $fieldName The form field name (should be array, e.g., 'light_mode_images[]')
     * @param array $existingImages Array of existing image paths
     * @param string $storagePath The storage path for new images
     * @return array Array of image paths
     */
    private function handleMultipleImages(Request $request, string $fieldName, array $existingImages, string $storagePath): array
    {
        // Ensure existingImages is an array
        if (!is_array($existingImages)) {
            $existingImages = [];
        }
        
        // Filter out any null or empty values from existing images
        $existingImages = array_filter($existingImages, function($img) {
            return !empty($img) && is_string($img);
        });
        
        if ($request->hasFile($fieldName)) {
            $newImages = [];
            foreach ($request->file($fieldName) as $image) {
                $newImages[] = $image->store($storagePath, 'public');
            }
            // Merge existing with new images
            return array_merge(array_values($existingImages), $newImages);
        }
        
        // Preserve existing images - return as indexed array
        return array_values($existingImages);
    }

    /**
     * Handle portfolio thumb images - preserve existing if no new files uploaded
     * 
     * @param Request $request
     * @param array $existingImages Array of existing image paths
     * @return array Array of cleaned image paths
     */
    private function handlePortfolioThumbImages(Request $request, array $existingImages): array
    {
        // Ensure existingImages is an array
        if (!is_array($existingImages)) {
            $existingImages = [];
        }
        
        // Start with existing images - preserve them
        $portfolioThumbImages = array_values(array_filter($existingImages, function($img) {
            return !empty($img) && is_string($img);
        }));
        
        // Handle Thumb Image 1 (Full Width)
        if ($request->hasFile('portfolio_thumb_image_1')) {
            // Delete old image at index 0 if exists
            if (isset($portfolioThumbImages[0]) && !empty($portfolioThumbImages[0])) {
                Storage::disk('public')->delete($portfolioThumbImages[0]);
            }
            $portfolioThumbImages[0] = $request->file('portfolio_thumb_image_1')->store('projects/mobile/portfolio-thumb', 'public');
        }
        
        // Handle Thumb Image 2 (Half Width)
        if ($request->hasFile('portfolio_thumb_image_2')) {
            // Delete old image at index 1 if exists
            if (isset($portfolioThumbImages[1]) && !empty($portfolioThumbImages[1])) {
                Storage::disk('public')->delete($portfolioThumbImages[1]);
            }
            $portfolioThumbImages[1] = $request->file('portfolio_thumb_image_2')->store('projects/mobile/portfolio-thumb', 'public');
        }
        
        // Handle Thumb Image 3 (Half Width)
        if ($request->hasFile('portfolio_thumb_image_3')) {
            // Delete old image at index 2 if exists
            if (isset($portfolioThumbImages[2]) && !empty($portfolioThumbImages[2])) {
                Storage::disk('public')->delete($portfolioThumbImages[2]);
            }
            $portfolioThumbImages[2] = $request->file('portfolio_thumb_image_3')->store('projects/mobile/portfolio-thumb', 'public');
        }
        
        // Ensure array is properly indexed and contains only valid images
        $cleanedThumbImages = [];
        foreach ($portfolioThumbImages as $image) {
            if (!empty($image) && $image !== null && is_string($image)) {
                $cleanedThumbImages[] = $image;
            }
        }
        
        return $cleanedThumbImages;
    }
}
