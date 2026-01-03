<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogPageSetting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        $pageSettings = BlogPageSetting::getSettings();

        return view('front.blog.index', compact('blogs', 'pageSettings'));
    }

    public function show($id)
    {
        $blog = Blog::where('is_active', true)->findOrFail($id);

        // Get related blog posts
        $relatedBlogs = Blog::where('is_active', true)
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('front.blog.show', compact('blog', 'relatedBlogs'));
    }
}
