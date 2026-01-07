<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPageSetting extends Model
{
    protected $fillable = [
        'hero_subtitle',
        'hero_title',
        'hero_background_image',
        'avatar_image',
        'avatar_number',
        'avatar_text',
        'button_text',
        'button_url',
    ];

    protected $casts = [
        'hero_subtitle' => 'array',
        'hero_title' => 'array',
        'avatar_text' => 'array',
        'button_text' => 'array',
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

    public function getTranslatedAvatarText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->avatar_text[$locale] ?? $this->avatar_text['en'] ?? '';
    }

    public function getTranslatedButtonText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->button_text[$locale] ?? $this->button_text['en'] ?? '';
    }

    // Get or create singleton instance
    public static function getSettings()
    {
        $settings = self::first();

        if (!$settings) {
            $settings = self::create([
                'hero_subtitle' => [
                    'en' => 'Best-in-class local <br> benefits for everyone, everywhere',
                    'ar' => 'فوائد محلية من الطراز الأول <br> للجميع في كل مكان'
                ],
                'hero_title' => [
                    'en' => 'Portfolio',
                    'ar' => 'المشاريع'
                ],
                'avatar_number' => '2500+',
                'avatar_text' => [
                    'en' => 'Engaged and counting',
                    'ar' => 'مشارك ومتزايد'
                ],
                'button_text' => [
                    'en' => 'Explore Our Projects',
                    'ar' => 'استكشف مشاريعنا'
                ],
                'button_url' => '#',
            ]);
        }

        return $settings;
    }
}
