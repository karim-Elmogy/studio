<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->orderBy('created_at', 'desc')->paginate(15);
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
}
