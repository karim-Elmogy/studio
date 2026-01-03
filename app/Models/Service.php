<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'features',
        'icon',
        'image',
        'order',
        'is_active'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'features' => 'array',
        'is_active' => 'boolean'
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

    public function getTranslatedFeatures($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if (!$this->features) return [];

        return array_map(function($feature) use ($locale) {
            return $feature[$locale] ?? $feature['en'] ?? '';
        }, $this->features);
    }

    // Scope for active services
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('order');
    }
}
