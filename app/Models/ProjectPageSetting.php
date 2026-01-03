<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPageSetting extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_description',
        'scroll_text'
    ];

    protected $casts = [
        'hero_title' => 'array',
        'hero_subtitle' => 'array',
        'hero_description' => 'array',
        'scroll_text' => 'array'
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

    public function getTranslatedHeroDescription($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->hero_description[$locale] ?? $this->hero_description['en'] ?? '';
    }

    public function getTranslatedScrollText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->scroll_text[$locale] ?? $this->scroll_text['en'] ?? '';
    }

    // Get or create singleton instance
    public static function getSettings()
    {
        $settings = self::first();

        if (!$settings) {
            $settings = self::create([
                'hero_title' => [
                    'en' => 'Our Creative Projects',
                    'ar' => 'مشاريعنا الإبداعية'
                ],
                'hero_subtitle' => [
                    'en' => 'Portfolio',
                    'ar' => 'المعرض'
                ],
                'hero_description' => [
                    'en' => 'Explore our portfolio of innovative designs and successful digital transformations.',
                    'ar' => 'استكشف معرضنا من التصاميم المبتكرة والتحولات الرقمية الناجحة.'
                ],
                'scroll_text' => [
                    'en' => 'Scroll to explore',
                    'ar' => 'قم بالتمرير للاستكشاف'
                ]
            ]);
        }

        return $settings;
    }
}
