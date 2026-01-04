<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('order')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'role_en' => 'nullable|string|max:255',
            'role_ar' => 'nullable|string|max:255',
            'testimonial_en' => 'required|string',
            'testimonial_ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
            'rating' => 'required|integer|min:1|max:5',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $validated['image'] = $imagePath;
        }

        Testimonial::create([
            'name' => [
                'en' => $validated['name_en'],
                'ar' => $validated['name_ar'],
            ],
            'role' => [
                'en' => $validated['role_en'] ?? '',
                'ar' => $validated['role_ar'] ?? '',
            ],
            'testimonial' => [
                'en' => $validated['testimonial_en'],
                'ar' => $validated['testimonial_ar'],
            ],
            'image' => $validated['image'] ?? null,
            'rating' => $validated['rating'],
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial created successfully!');
    }

    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'role_en' => 'nullable|string|max:255',
            'role_ar' => 'nullable|string|max:255',
            'testimonial_en' => 'required|string',
            'testimonial_ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
            'rating' => 'required|integer|min:1|max:5',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $validated['image'] = $imagePath;
        } else {
            $validated['image'] = $testimonial->image;
        }

        $testimonial->update([
            'name' => [
                'en' => $validated['name_en'],
                'ar' => $validated['name_ar'],
            ],
            'role' => [
                'en' => $validated['role_en'] ?? '',
                'ar' => $validated['role_ar'] ?? '',
            ],
            'testimonial' => [
                'en' => $validated['testimonial_en'],
                'ar' => $validated['testimonial_ar'],
            ],
            'image' => $validated['image'],
            'rating' => $validated['rating'],
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            Storage::disk('public')->delete($testimonial->image);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted successfully!');
    }
}
