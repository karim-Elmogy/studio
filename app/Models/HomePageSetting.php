<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageSetting extends Model
{
    protected $fillable = [
        'hero_title', 'hero_description', 'hero_video_url',
        'hero_button1_text', 'hero_button1_url',
        'hero_button2_text', 'hero_button2_url',
        'about_subtitle', 'about_description',
        'about_button_text', 'about_button_url',
        'projects_subtitle', 'projects_title', 'projects_button_text', 'projects_button_url',
        'services_subtitle', 'services_title', 'services_button_text', 'services_button_url',
        'choose_title', 'choose_image',
        'testimonials_subtitle', 'testimonials_title', 'testimonials_button_text', 'testimonials_button_url',
        'brand_subtitle', 'brand_title', 'brand_button_text', 'brand_button_url',
        'achievement1_text', 'achievement1_icon', 'achievement2_text', 'achievement2_icon',
        'achievement3_text', 'achievement3_icon', 'achievement4_text', 'achievement4_icon',
        'blog_subtitle', 'blog_title', 'blog_button_text', 'blog_button_url',
        'brand_logos'
    ];

    protected $casts = [
        'hero_title' => 'array',
        'hero_description' => 'array',
        'hero_button1_text' => 'array',
        'hero_button2_text' => 'array',
        'about_subtitle' => 'array',
        'about_description' => 'array',
        'about_button_text' => 'array',
        'projects_subtitle' => 'array',
        'projects_title' => 'array',
        'projects_button_text' => 'array',
        'services_subtitle' => 'array',
        'services_title' => 'array',
        'services_button_text' => 'array',
        'choose_title' => 'array',
        'testimonials_subtitle' => 'array',
        'testimonials_title' => 'array',
        'testimonials_button_text' => 'array',
        'brand_subtitle' => 'array',
        'brand_title' => 'array',
        'brand_button_text' => 'array',
        'achievement1_text' => 'array',
        'achievement2_text' => 'array',
        'achievement3_text' => 'array',
        'achievement4_text' => 'array',
        'blog_subtitle' => 'array',
        'blog_title' => 'array',
        'blog_button_text' => 'array',
        'brand_logos' => 'array'
    ];

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

    public function getTranslatedHeroButton1Text($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->hero_button1_text[$locale] ?? $this->hero_button1_text['en'] ?? '';
    }

    public function getTranslatedHeroButton2Text($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->hero_button2_text[$locale] ?? $this->hero_button2_text['en'] ?? '';
    }

    public function getTranslatedAboutSubtitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->about_subtitle[$locale] ?? $this->about_subtitle['en'] ?? '';
    }

    public function getTranslatedAboutDescription($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->about_description[$locale] ?? $this->about_description['en'] ?? '';
    }

    public function getTranslatedAboutButtonText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->about_button_text[$locale] ?? $this->about_button_text['en'] ?? '';
    }

    // Projects Section
    public function getTranslatedProjectsSubtitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'Work Showcase', 'ar' => 'عرض الأعمال'];
        return $this->projects_subtitle[$locale] ?? $this->projects_subtitle['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedProjectsTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'Discover my Creative Expertise', 'ar' => 'اكتشف خبرتي الإبداعية'];
        return $this->projects_title[$locale] ?? $this->projects_title['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedProjectsButtonText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'View Projects', 'ar' => 'عرض المشاريع'];
        return $this->projects_button_text[$locale] ?? $this->projects_button_text['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    // Services Section
    public function getTranslatedServicesSubtitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'Our Services', 'ar' => 'خدماتنا'];
        return $this->services_subtitle[$locale] ?? $this->services_subtitle['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedServicesTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'How we take your business to the next level', 'ar' => 'كيف ننقل عملك إلى المستوى التالي'];
        return $this->services_title[$locale] ?? $this->services_title['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedServicesButtonText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'See all Services', 'ar' => 'شاهد جميع الخدمات'];
        return $this->services_button_text[$locale] ?? $this->services_button_text['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    // Choose Section
    public function getTranslatedChooseTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'We provide special offers for the best customers', 'ar' => 'نقدم عروضًا خاصة لأفضل العملاء'];
        return $this->choose_title[$locale] ?? $this->choose_title['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    // Testimonials Section
    public function getTranslatedTestimonialsSubtitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'Testimonials', 'ar' => 'آراء العملاء'];
        return $this->testimonials_subtitle[$locale] ?? $this->testimonials_subtitle['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedTestimonialsTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'What our happy clients say about us', 'ar' => 'ماذا يقول عملاؤنا السعداء عنا'];
        return $this->testimonials_title[$locale] ?? $this->testimonials_title['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedTestimonialsButtonText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => "Let's chat", 'ar' => 'لنتحدث'];
        return $this->testimonials_button_text[$locale] ?? $this->testimonials_button_text['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    // Brand Section
    public function getTranslatedBrandSubtitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'Sharing the love', 'ar' => 'مشاركة الحب'];
        return $this->brand_subtitle[$locale] ?? $this->brand_subtitle['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedBrandTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'Speak up in a crowded digital world. Build a reputation on the voice of your brand.', 'ar' => 'تحدث في عالم رقمي مزدحم. ابنِ سمعة على صوت علامتك التجارية.'];
        return $this->brand_title[$locale] ?? $this->brand_title['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedBrandButtonText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => "Let's chat", 'ar' => 'لنتحدث'];
        return $this->brand_button_text[$locale] ?? $this->brand_button_text['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    // Achievements
    public function getTranslatedAchievement1Text($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => '#1 Team in the world on Dribbble', 'ar' => 'فريق رقم 1 في العالم على Dribbble'];
        return $this->achievement1_text[$locale] ?? $this->achievement1_text['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedAchievement2Text($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'Top 100 Global Companies on Clutch', 'ar' => 'أفضل 100 شركة عالمية على Clutch'];
        return $this->achievement2_text[$locale] ?? $this->achievement2_text['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedAchievement3Text($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => '5 Stars Rating on GoodFirms', 'ar' => 'تقييم 5 نجوم على GoodFirms'];
        return $this->achievement3_text[$locale] ?? $this->achievement3_text['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedAchievement4Text($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => '100% Job Success on Upwork', 'ar' => '100٪ نجاح في العمل على Upwork'];
        return $this->achievement4_text[$locale] ?? $this->achievement4_text['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    // Blog Section
    public function getTranslatedBlogSubtitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'Featured Works', 'ar' => 'الأعمال المميزة'];
        return $this->blog_subtitle[$locale] ?? $this->blog_subtitle['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedBlogTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'Newest trends and insights from our team', 'ar' => 'أحدث الاتجاهات والرؤى من فريقنا'];
        return $this->blog_title[$locale] ?? $this->blog_title['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public function getTranslatedBlogButtonText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $defaults = ['en' => 'See all Articles', 'ar' => 'شاهد جميع المقالات'];
        return $this->blog_button_text[$locale] ?? $this->blog_button_text['en'] ?? $defaults[$locale] ?? $defaults['en'];
    }

    public static function getSettings()
    {
        $settings = self::first();

        if (!$settings) {
            $settings = self::create([
                'hero_title' => ['en' => 'Scale your Business', 'ar' => 'طور عملك'],
                'hero_description' => ['en' => 'An independent web design & branding agency', 'ar' => 'وكالة مستقلة للتصميم والعلامة التجارية'],
                'hero_video_url' => 'https://html.aqlova.com/videos/liko/liko.mp4',
                'hero_button1_text' => ['en' => 'View our work', 'ar' => 'شاهد أعمالنا'],
                'hero_button1_url' => '/projects',
                'hero_button2_text' => ['en' => 'Meet the team', 'ar' => 'تعرف على الفريق'],
                'hero_button2_url' => '/about',
                'about_subtitle' => ['en' => 'Who we are?', 'ar' => 'من نحن؟'],
                'about_description' => ['en' => 'Our design and strategy solutions support social impact businesses, forward-thinking brands, and eco-friendly products guiding consumers toward smarter, more sustainable choices.', 'ar' => 'تدعم حلول التصميم والاستراتيجية الخاصة بنا الشركات ذات التأثير الاجتماعي والعلامات التجارية المتقدمة والمنتجات الصديقة للبيئة التي توجه المستهلكين نحو خيارات أكثر ذكاءً واستدامة.'],
                'about_button_text' => ['en' => 'About Agntix', 'ar' => 'عن Agntix'],
                'about_button_url' => '/about',
                'projects_subtitle' => ['en' => 'Work Showcase', 'ar' => 'عرض الأعمال'],
                'projects_title' => ['en' => 'Discover my Creative Expertise', 'ar' => 'اكتشف خبرتي الإبداعية'],
                'projects_button_text' => ['en' => 'About Agntix', 'ar' => 'عن Agntix'],
                'projects_button_url' => '#',
                'services_subtitle' => ['en' => 'Our Services', 'ar' => 'خدماتنا'],
                'services_title' => ['en' => 'How we take your business to the next level', 'ar' => 'كيف ننقل عملك إلى المستوى التالي'],
                'services_button_text' => ['en' => 'See all Articles', 'ar' => 'شاهد جميع المقالات'],
                'services_button_url' => '/services',
                'choose_title' => ['en' => 'We provide special offers for the best customers', 'ar' => 'نقدم عروضًا خاصة لأفضل العملاء'],
                'choose_image' => 'front/assets/img/home-04/choose/chose-1.jpg',
                'testimonials_subtitle' => ['en' => 'Testimonials', 'ar' => 'آراء العملاء'],
                'testimonials_title' => ['en' => 'What our happy clients say about us', 'ar' => 'ماذا يقول عملاؤنا السعداء عنا'],
                'testimonials_button_text' => ['en' => "Let's chat", 'ar' => 'لنتحدث'],
                'testimonials_button_url' => '/contact',
                'brand_subtitle' => ['en' => 'Sharing the love', 'ar' => 'مشاركة الحب'],
                'brand_title' => ['en' => 'Speak up in a crowded digital world. Build a reputation on the voice of your brand.', 'ar' => 'تحدث في عالم رقمي مزدحم. ابنِ سمعة على صوت علامتك التجارية.'],
                'brand_button_text' => ['en' => "Let's chat", 'ar' => 'لنتحدث'],
                'brand_button_url' => '/contact',
                'achievement1_text' => ['en' => '#1 Team in the world on Dribbble', 'ar' => 'فريق رقم 1 في العالم على Dribbble'],
                'achievement1_icon' => 'front/assets/img/home-04/brand/brand-1-1.png',
                'achievement2_text' => ['en' => 'Top 100 Global Companies on Clutch', 'ar' => 'أفضل 100 شركة عالمية على Clutch'],
                'achievement2_icon' => 'front/assets/img/home-04/brand/brand-1-2.png',
                'achievement3_text' => ['en' => '5 Stars Rating on GoodFirms', 'ar' => 'تقييم 5 نجوم على GoodFirms'],
                'achievement3_icon' => 'front/assets/img/home-04/brand/brand-1-3.png',
                'achievement4_text' => ['en' => '100% Job Success on Upwork', 'ar' => '100٪ نجاح في العمل على Upwork'],
                'achievement4_icon' => 'front/assets/img/home-04/brand/brand-1-4.png',
                'blog_subtitle' => ['en' => 'Featured Works', 'ar' => 'الأعمال المميزة'],
                'blog_title' => ['en' => 'Newest trends and insights from our team', 'ar' => 'أحدث الاتجاهات والرؤى من فريقنا'],
                'blog_button_text' => ['en' => 'See all Articles', 'ar' => 'شاهد جميع المقالات'],
                'blog_button_url' => '/blog',
                'brand_logos' => [
                    'front/assets/img/home-04/brand/brand-1.png',
                    'front/assets/img/home-04/brand/brand-6.png',
                    'front/assets/img/home-04/brand/brand-3.png',
                    'front/assets/img/home-04/brand/brand-4.png',
                    'front/assets/img/home-04/brand/brand-5.png'
                ]
            ]);
        }

        return $settings;
    }
}
