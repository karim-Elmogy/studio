<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqPageSetting extends Model
{
    protected $fillable = [
        'hero_subtitle',
        'hero_title',
        'hero_description',
        'scroll_text',
        'cta_title',
        'cta_description'
    ];

    protected $casts = [
        'hero_subtitle' => 'array',
        'hero_title' => 'array',
        'hero_description' => 'array',
        'scroll_text' => 'array',
        'cta_title' => 'array',
        'cta_description' => 'array'
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

    public function getTranslatedCtaTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->cta_title[$locale] ?? $this->cta_title['en'] ?? '';
    }

    public function getTranslatedCtaDescription($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->cta_description[$locale] ?? $this->cta_description['en'] ?? '';
    }

    // Get or create singleton instance
    public static function getSettings()
    {
        $settings = self::first();

        if (!$settings) {
            $settings = self::create([
                'hero_subtitle' => [
                    'en' => 'FAQ',
                    'ar' => 'الأسئلة الشائعة'
                ],
                'hero_title' => [
                    'en' => 'Frequently Asked Questions',
                    'ar' => 'الأسئلة المتكررة'
                ],
                'hero_description' => [
                    'en' => 'Find answers to common questions about our services, process, and how we can help your business grow.',
                    'ar' => 'ابحث عن إجابات للأسئلة الشائعة حول خدماتنا وعملياتنا وكيف يمكننا مساعدة عملك على النمو.'
                ],
                'scroll_text' => [
                    'en' => 'Scroll to explore',
                    'ar' => 'قم بالتمرير للاستكشاف'
                ],
                'cta_title' => [
                    'en' => 'Still have questions?',
                    'ar' => 'لا تزال لديك أسئلة؟'
                ],
                'cta_description' => [
                    'en' => 'Get in touch with our team for personalized answers',
                    'ar' => 'تواصل مع فريقنا للحصول على إجابات مخصصة'
                ]
            ]);
        }

        return $settings;
    }
}
