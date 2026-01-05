<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterSetting extends Model
{
    protected $fillable = [
        'footer_title',
        'footer_description',
        'footer_email',
        'footer_phone',
        'footer_address',
        'footer_address_text',
        'footer_facebook',
        'footer_twitter',
        'footer_dribbble',
        'footer_instagram',
        'footer_copyright_text',
        'footer_terms_text',
        'footer_privacy_text',
        'footer_terms_url',
        'footer_privacy_url',
        'footer_logo_text',
        'back_to_top_text'
    ];

    protected $casts = [
        'footer_title' => 'array',
        'footer_description' => 'array',
        'footer_address_text' => 'array',
        'footer_terms_text' => 'array',
        'footer_privacy_text' => 'array',
        'back_to_top_text' => 'array'
    ];

    public function getTranslatedFooterTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->footer_title[$locale] ?? $this->footer_title['en'] ?? '';
    }

    public function getTranslatedFooterDescription($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->footer_description[$locale] ?? $this->footer_description['en'] ?? '';
    }

    public function getTranslatedFooterAddressText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->footer_address_text[$locale] ?? $this->footer_address_text['en'] ?? '';
    }

    public function getTranslatedFooterTermsText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->footer_terms_text[$locale] ?? $this->footer_terms_text['en'] ?? '';
    }

    public function getTranslatedFooterPrivacyText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->footer_privacy_text[$locale] ?? $this->footer_privacy_text['en'] ?? '';
    }

    public function getTranslatedBackToTopText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->back_to_top_text[$locale] ?? $this->back_to_top_text['en'] ?? "Agntix I've gone too far, send me back up 👆";
    }

    public static function getSettings()
    {
        $settings = self::first();

        if (!$settings) {
            $settings = self::create([
                'footer_title' => ['en' => 'Helping start-ups scale & grow.', 'ar' => 'مساعدة الشركات الناشئة على التوسع والنمو.'],
                'footer_description' => ['en' => '', 'ar' => ''],
                'footer_email' => 'agntixs@studio.com',
                'footer_phone' => '+(302) 555-0107',
                'footer_address' => 'https://www.google.com/maps/',
                'footer_address_text' => ['en' => '4517 Washington Ave. Manchester, Kentucky 39495', 'ar' => '4517 شارع واشنطن، مانشستر، كنتاكي 39495'],
                'footer_facebook' => '#',
                'footer_twitter' => '#',
                'footer_dribbble' => '#',
                'footer_instagram' => '#',
                'footer_copyright_text' => '©2025 Agntix Design Studio.',
                'footer_terms_text' => ['en' => 'Terms and Conditions', 'ar' => 'الشروط والأحكام'],
                'footer_privacy_text' => ['en' => 'Privacy Policy', 'ar' => 'سياسة الخصوصية'],
                'footer_terms_url' => '#',
                'footer_privacy_url' => '#',
                'footer_logo_text' => 'Agntix.studio',
                'back_to_top_text' => ['en' => "Agntix I've gone too far, send me back up 👆", 'ar' => 'Agntix لقد ذهبت بعيداً، أعدني للأعلى 👆']
            ]);
        }

        return $settings;
    }
}
