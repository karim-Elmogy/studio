<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPageSetting extends Model
{
    protected $fillable = [
        'hero_subtitle',
        'hero_title',
        'hero_description',
        'scroll_text',
        'map_text',
        'studios_text'
    ];

    protected $casts = [
        'hero_subtitle' => 'array',
        'hero_title' => 'array',
        'hero_description' => 'array',
        'scroll_text' => 'array',
        'map_text' => 'array',
        'studios_text' => 'array'
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

    public function getTranslatedMapText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->map_text[$locale] ?? $this->map_text['en'] ?? '';
    }

    public function getTranslatedStudiosText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->studios_text[$locale] ?? $this->studios_text['en'] ?? '';
    }

    // Get or create singleton instance
    public static function getSettings()
    {
        $settings = self::first();

        if (!$settings) {
            $settings = self::create([
                'hero_subtitle' => [
                    'en' => 'contact us',
                    'ar' => 'اتصل بنا'
                ],
                'hero_title' => [
                    'en' => 'Your creative journey starts here',
                    'ar' => 'رحلتك الإبداعية تبدأ هنا'
                ],
                'hero_description' => [
                    'en' => 'Agntix is a beacon of best innovation and the dynamic parent a company of wealcoder and many other subsidiaries.',
                    'ar' => 'Agntix هي منارة لأفضل الابتكارات والشركة الأم الديناميكية لـ wealcoder والعديد من الشركات التابعة الأخرى.'
                ],
                'scroll_text' => [
                    'en' => 'Scroll to explore',
                    'ar' => 'قم بالتمرير للاستكشاف'
                ],
                'map_text' => [
                    'en' => 'See in Map our Office',
                    'ar' => 'شاهد مكتبنا على الخريطة'
                ],
                'studios_text' => [
                    'en' => 'Or, you can contact one of our studios directly below. We aim to respond within 24 hours.',
                    'ar' => 'أو يمكنك الاتصال بأحد استوديوهاتنا مباشرة أدناه. نحن نهدف إلى الرد خلال 24 ساعة.'
                ]
            ]);
        }

        return $settings;
    }
}
