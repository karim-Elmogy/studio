<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'category',
        'image',
        'author_name',
        'author_role',
        'author_image',
        'published_date',
        'video_url',
        'tags',
        'order',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
        'excerpt' => 'array',
        'category' => 'array',
        'tags' => 'array',
        'published_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Get translated title
     */
    public function getTranslatedTitle(): string
    {
        $locale = App::getLocale();
        return $this->title[$locale] ?? $this->title['en'] ?? '';
    }

    /**
     * Get translated content
     */
    public function getTranslatedContent(): string
    {
        $locale = App::getLocale();
        return $this->content[$locale] ?? $this->content['en'] ?? '';
    }

    /**
     * Get translated excerpt
     */
    public function getTranslatedExcerpt(): string
    {
        $locale = App::getLocale();
        return $this->excerpt[$locale] ?? $this->excerpt['en'] ?? '';
    }

    /**
     * Get translated category
     */
    public function getTranslatedCategory(): string
    {
        $locale = App::getLocale();
        return $this->category[$locale] ?? $this->category['en'] ?? '';
    }

    /**
     * Get image URL
     */
    public function getImageUrl(): string
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('front/assets/img/home-04/blog/blog-1.jpg'); // Default image
    }

    /**
     * Get blog URL
     */
    public function getUrl(): string
    {
        return route('blog.show', $this->id);
    }

    /**
     * Get formatted published date
     */
    public function getFormattedDate(): string
    {
        if ($this->published_date) {
            return $this->published_date->translatedFormat('F d, Y');
        }
        return $this->created_at->translatedFormat('F d, Y');
    }

    /**
     * Get slug from title
     */
    public function getSlug(): string
    {
        return Str::slug($this->getTranslatedTitle());
    }
}
