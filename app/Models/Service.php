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
        'image_2',
        'order',
        'is_active',
        // Details fields
        'hero_subtitle',
        'hero_title',
        'hero_description',
        'hero_image',
        'process_title',
        'process_steps',
        'process_description',
        'process_image',
        'benefits_title',
        'benefits_description',
        'features_title',
        'features_image',
        'gallery_images'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'features' => 'array',
        'is_active' => 'boolean',
        // Details casts
        'hero_subtitle' => 'array',
        'hero_title' => 'array',
        'hero_description' => 'array',
        'process_title' => 'array',
        'process_steps' => 'array',
        'process_description' => 'array',
        'benefits_title' => 'array',
        'benefits_description' => 'array',
        'features_title' => 'array',
        'gallery_images' => 'array'
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

    // Helper methods for details sections
    public function getTranslatedHeroSubtitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->hero_subtitle[$locale] ?? $this->hero_subtitle['en'] ?? '';
    }

    public function getTranslatedHeroTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->hero_title[$locale] ?? $this->hero_title['en'] ?? '';
    }

    public function getTranslatedHeroDescription($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->hero_description[$locale] ?? $this->hero_description['en'] ?? '';
    }

    public function getTranslatedProcessTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->process_title[$locale] ?? $this->process_title['en'] ?? '';
    }

    public function getTranslatedProcessSteps($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if (!$this->process_steps) return [];

        return array_map(function($step) use ($locale) {
            return $step[$locale] ?? $step['en'] ?? '';
        }, $this->process_steps);
    }

    public function getTranslatedProcessDescription($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->process_description[$locale] ?? $this->process_description['en'] ?? '';
    }

    public function getTranslatedBenefitsTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->benefits_title[$locale] ?? $this->benefits_title['en'] ?? '';
    }

    public function getTranslatedBenefitsDescription($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->benefits_description[$locale] ?? $this->benefits_description['en'] ?? '';
    }

    public function getTranslatedFeaturesTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->features_title[$locale] ?? $this->features_title['en'] ?? '';
    }
}
