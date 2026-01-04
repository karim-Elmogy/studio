<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'client',
        'year',
        'tags',
        'type',
        'order',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'category' => 'array',
        'tags' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Helper methods for multi-language support
    public function getTranslatedTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->title[$locale] ?? $this->title['en'] ?? '';
    }

    public function getTranslatedDescription($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->description[$locale] ?? $this->description['en'] ?? '';
    }

    public function getTranslatedCategory($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->category[$locale] ?? $this->category['en'] ?? '';
    }

    public function getTranslatedTags($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if (!$this->tags) return [];

        return array_map(function($tag) use ($locale) {
            return is_array($tag) ? ($tag[$locale] ?? $tag['en'] ?? '') : $tag;
        }, $this->tags);
    }

    // Get image URL
    public function getImageUrl()
    {
        return asset('storage/' . $this->image);
    }

    // Scope for active projects
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('order');
    }

    // Scope for featured projects
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
