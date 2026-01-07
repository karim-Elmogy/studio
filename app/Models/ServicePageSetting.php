<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePageSetting extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_info_text',
        'contact_email',
        'hero_image',
        'banner_text',
        'banner_image',
        'recent_work_text',
        'slider_text',
        'bg_image_1',
        'bg_image_2',
        'bg_image_3',
        'bg_image_4',
        'bg_image_5',
        'bg_image_6',
        'bg_image_7',
        'bg_image_8',
        'bg_image_9',
        'bg_image_10',
        'bg_image_11',
        'bg_image_12',
        'bg_image_13',
        'bg_image_14',
        'bg_image_15',
        'bg_image_16'
    ];

    protected $casts = [
        'hero_title' => 'array',
        'hero_subtitle' => 'array',
        'hero_info_text' => 'array',
        'banner_text' => 'array',
        'recent_work_text' => 'array',
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

    public function getTranslatedHeroInfoText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->hero_info_text[$locale] ?? $this->hero_info_text['en'] ?? '';
    }

    public function getTranslatedBannerText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        if (!$this->banner_text) return [];

        // Check if banner_text has locale keys at top level
        if (isset($this->banner_text[$locale]) && is_array($this->banner_text[$locale])) {
            return $this->banner_text[$locale];
        }

        // Fallback to English if current locale not found
        if (isset($this->banner_text['en']) && is_array($this->banner_text['en'])) {
            return $this->banner_text['en'];
        }

        // Old format: array of objects with locale keys
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

    public function getTranslatedRecentWorkText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->recent_work_text[$locale] ?? $this->recent_work_text['en'] ?? 'Our recent Digital work';
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
                'hero_info_text' => [
                    'en' => 'test',
                    'ar' => 'اختبار'
                ],
                'contact_email' => 'info@agntix.studio',
                'banner_text' => [
                    'en' => ['A', 'collective', 'of', 'the', 'best', 'independent', 'premium', 'publishers'],
                    'ar' => ['مجموعة', 'من', 'أفضل', 'الناشرين', 'المستقلين', 'المتميزين']
                ],
                'recent_work_text' => [
                    'en' => 'Our recent Digital work',
                    'ar' => 'أعمالنا الرقمية الحديثة'
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
