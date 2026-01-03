<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPageSetting extends Model
{
    protected $fillable = [
        'hero_subtitle',
        'hero_title',
        'hero_background_image'
    ];

    protected $casts = [
        'hero_subtitle' => 'array',
        'hero_title' => 'array'
    ];

    // Helper methods for multi-language support
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

    // Get or create singleton instance
    public static function getSettings()
    {
        $settings = self::first();

        if (!$settings) {
            $settings = self::create([
                'hero_subtitle' => [
                    'en' => 'Blog Post',
                    'ar' => 'مقالات المدونة'
                ],
                'hero_title' => [
                    'en' => 'Best blog of the week...',
                    'ar' => 'أفضل مقالات الأسبوع...'
                ],
                'hero_background_image' => 'front/assets/img/blog/blog-masonry/blog-bradcum-bg.png'
            ]);
        }

        return $settings;
    }
}
