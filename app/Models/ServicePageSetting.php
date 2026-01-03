<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePageSetting extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_image',
        'banner_text',
        'banner_image',
        'slider_text'
    ];

    protected $casts = [
        'hero_title' => 'array',
        'hero_subtitle' => 'array',
        'banner_text' => 'array',
        'slider_text' => 'array'
    ];

    // Helper methods for multi-language support
    public function getTranslatedHeroTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->hero_title[$locale] ?? $this->hero_title['en'] ?? '';
    }

    public function getTranslatedHeroSubtitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->hero_subtitle[$locale] ?? $this->hero_subtitle['en'] ?? '';
    }

    public function getTranslatedBannerText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if (!$this->banner_text) return [];

        return array_map(function($text) use ($locale) {
            if (is_array($text)) {
                return $text[$locale] ?? $text['en'] ?? '';
            }
            return $text;
        }, $this->banner_text);
    }

    public function getTranslatedSliderText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->slider_text[$locale] ?? $this->slider_text['en'] ?? '';
    }

    // Get or create singleton instance
    public static function getSettings()
    {
        $settings = self::first();

        if (!$settings) {
            $settings = self::create([
                'hero_title' => [
                    'en' => 'Service',
                    'ar' => 'الخدمات'
                ],
                'hero_subtitle' => [
                    'en' => 'Motion design Studio',
                    'ar' => 'استوديو تصميم الحركة'
                ],
                'banner_text' => [
                    'en' => ['A', 'collective', 'of', 'the', 'best', 'independent', 'premium', 'publishers'],
                    'ar' => ['مجموعة', 'من', 'أفضل', 'الناشرين', 'المستقلين', 'المتميزين']
                ],
                'slider_text' => [
                    'en' => 'HAVE A GREAT PROJECT?',
                    'ar' => 'هل لديك مشروع رائع؟'
                ]
            ]);
        }

        return $settings;
    }
}
