<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('published_date', 'desc')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_ar' => 'required|string',
            'excerpt_en' => 'nullable|string',
            'excerpt_ar' => 'nullable|string',
            'category_en' => 'required|string|max:255',
            'category_ar' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'author_name' => 'nullable|string|max:255',
            'author_role' => 'nullable|string|max:255',
            'author_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
            'published_date' => 'nullable|date',
            'video_url' => 'nullable|url|max:500',
            'tags' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $validated['image'] = $imagePath;
        }

        if ($request->hasFile('author_image')) {
            $authorImagePath = $request->file('author_image')->store('authors', 'public');
            $validated['author_image'] = $authorImagePath;
        }

        $tags = [];
        if ($request->filled('tags')) {
            $tagsList = explode(',', $request->tags);
            foreach ($tagsList as $tag) {
                $tags[] = ['en' => trim($tag), 'ar' => trim($tag)];
            }
        }

        Blog::create([
            'title' => [
                'en' => $validated['title_en'],
                'ar' => $validated['title_ar'],
            ],
            'content' => [
                'en' => $validated['content_en'],
                'ar' => $validated['content_ar'],
            ],
            'excerpt' => [
                'en' => $validated['excerpt_en'] ?? '',
                'ar' => $validated['excerpt_ar'] ?? '',
            ],
            'category' => [
                'en' => $validated['category_en'],
                'ar' => $validated['category_ar'],
            ],
            'image' => $validated['image'],
            'author_name' => $validated['author_name'] ?? null,
            'author_role' => $validated['author_role'] ?? null,
            'author_image' => $validated['author_image'] ?? null,
            'published_date' => $validated['published_date'] ?? now(),
            'video_url' => $validated['video_url'] ?? null,
            'tags' => $tags,
            'is_featured' => $request->has('is_featured'),
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog created successfully!');
    }

    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_ar' => 'required|string',
            'excerpt_en' => 'nullable|string',
            'excerpt_ar' => 'nullable|string',
            'category_en' => 'required|string|max:255',
            'category_ar' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'author_name' => 'nullable|string|max:255',
            'author_role' => 'nullable|string|max:255',
            'author_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
            'published_date' => 'nullable|date',
            'video_url' => 'nullable|url|max:500',
            'tags' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $imagePath = $request->file('image')->store('blogs', 'public');
            $validated['image'] = $imagePath;
        } else {
            $validated['image'] = $blog->image;
        }

        if ($request->hasFile('author_image')) {
            if ($blog->author_image) {
                Storage::disk('public')->delete($blog->author_image);
            }
            $authorImagePath = $request->file('author_image')->store('authors', 'public');
            $validated['author_image'] = $authorImagePath;
        } else {
            $validated['author_image'] = $blog->author_image;
        }

        $tags = [];
        if ($request->filled('tags')) {
            $tagsList = explode(',', $request->tags);
            foreach ($tagsList as $tag) {
                $tags[] = ['en' => trim($tag), 'ar' => trim($tag)];
            }
        }

        $blog->update([
            'title' => [
                'en' => $validated['title_en'],
                'ar' => $validated['title_ar'],
            ],
            'content' => [
                'en' => $validated['content_en'],
                'ar' => $validated['content_ar'],
            ],
            'excerpt' => [
                'en' => $validated['excerpt_en'] ?? '',
                'ar' => $validated['excerpt_ar'] ?? '',
            ],
            'category' => [
                'en' => $validated['category_en'],
                'ar' => $validated['category_ar'],
            ],
            'image' => $validated['image'],
            'author_name' => $validated['author_name'] ?? null,
            'author_role' => $validated['author_role'] ?? null,
            'author_image' => $validated['author_image'],
            'published_date' => $validated['published_date'] ?? $blog->published_date,
            'video_url' => $validated['video_url'] ?? null,
            'tags' => $tags,
            'is_featured' => $request->has('is_featured'),
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        if ($blog->author_image) {
            Storage::disk('public')->delete($blog->author_image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog deleted successfully!');
    }
}
