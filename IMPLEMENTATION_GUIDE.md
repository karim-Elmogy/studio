# دليل تحويل الموقع إلى محتوى ديناميكي

تم إنشاء هذا الملف لتوثيق الهيكل الكامل للنظام الديناميكي.

## 📋 الملفات التي تم إنشاؤها

### 1. Database Migrations ✅
- `2025_12_30_135447_create_services_table.php` - جدول الخدمات
- `2025_12_30_135449_create_projects_table.php` - جدول المشاريع
- `2025_12_30_135450_create_blogs_table.php` - جدول المدونة
- `2025_12_30_135452_create_testimonials_table.php` - جدول التقييمات
- `2025_12_30_135453_create_faqs_table.php` - جدول الأسئلة الشائعة
- `2025_12_30_135455_create_contacts_table.php` - جدول الرسائل
- `2025_12_30_135456_create_settings_table.php` - جدول الإعدادات

### 2. Models ✅
- `app/Models/Service.php` - موديل الخدمات ✅
- `app/Models/Project.php` - موديل المشاريع (يحتاج للتعديل)
- `app/Models/Blog.php` - موديل المدونة (يحتاج للتعديل)
- `app/Models/Testimonial.php` - موديل التقييمات (يحتاج للتعديل)
- `app/Models/Faq.php` - موديل الأسئلة (يحتاج للتعديل)
- `app/Models/Contact.php` - موديل الرسائل (يحتاج للتعديل)
- `app/Models/Setting.php` - موديل الإعدادات (يحتاج للتعديل)

## 📝 خطوات التنفيذ المتبقية

### المرحلة 1: إكمال الـ Models

#### Project Model
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'category', 'image', 'client',
        'year', 'tags', 'type', 'order', 'is_featured', 'is_active'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'category' => 'array',
        'tags' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean'
    ];

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

    public function getTranslatedCategory($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->category[$locale] ?? $this->category['en'] ?? '';
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('order');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}
```

#### Blog Model
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'content', 'excerpt', 'category', 'image',
        'author_name', 'author_role', 'author_image', 'published_date',
        'video_url', 'tags', 'order', 'is_featured', 'is_active'
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
        'excerpt' => 'array',
        'category' => 'array',
        'tags' => 'array',
        'published_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean'
    ];

    public function getTranslatedTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->title[$locale] ?? $this->title['en'] ?? '';
    }

    public function getTranslatedContent($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->content[$locale] ?? $this->content['en'] ?? '';
    }

    public function getTranslatedExcerpt($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->excerpt[$locale] ?? $this->excerpt['en'] ?? '';
    }

    public function getTranslatedCategory($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->category[$locale] ?? $this->category['en'] ?? '';
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('published_date', 'desc');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
```

#### Testimonial Model
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name', 'role', 'testimonial', 'image', 'rating', 'order', 'is_active'
    ];

    protected $casts = [
        'name' => 'array',
        'role' => 'array',
        'testimonial' => 'array',
        'is_active' => 'boolean'
    ];

    public function getTranslatedName($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->name[$locale] ?? $this->name['en'] ?? '';
    }

    public function getTranslatedRole($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->role[$locale] ?? $this->role['en'] ?? '';
    }

    public function getTranslatedTestimonial($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->testimonial[$locale] ?? $this->testimonial['en'] ?? '';
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('order');
    }
}
```

#### FAQ Model
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'question', 'answer', 'category', 'order', 'is_active'
    ];

    protected $casts = [
        'question' => 'array',
        'answer' => 'array',
        'category' => 'array',
        'is_active' => 'boolean'
    ];

    public function getTranslatedQuestion($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->question[$locale] ?? $this->question['en'] ?? '';
    }

    public function getTranslatedAnswer($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->answer[$locale] ?? $this->answer['en'] ?? '';
    }

    public function getTranslatedCategory($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->category[$locale] ?? $this->category['en'] ?? '';
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('order');
    }
}
```

#### Contact Model
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'subject', 'message', 'status'
    ];

    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeRead($query)
    {
        return $query->where('status', 'read');
    }

    public function scopeReplied($query)
    {
        return $query->where('status', 'replied');
    }
}
```

#### Setting Model
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key', 'value', 'type', 'description'
    ];

    protected $casts = [
        'value' => 'array',
        'description' => 'array'
    ];

    public static function get($key, $locale = null, $default = null)
    {
        $setting = static::where('key', $key)->first();

        if (!$setting) {
            return $default;
        }

        if ($locale) {
            return $setting->value[$locale] ?? $setting->value['en'] ?? $default;
        }

        return $setting->value;
    }

    public static function set($key, $value, $type = 'text', $description = null)
    {
        return static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'type' => $type,
                'description' => $description
            ]
        );
    }
}
```

### المرحلة 2: إنشاء الـ Controllers

يجب إنشاء الكنترولرات التالية:

#### Frontend Controllers
1. `app/Http/Controllers/Front/HomeController.php`
2. `app/Http/Controllers/Front/ServiceController.php`
3. `app/Http/Controllers/Front/ProjectController.php`
4. `app/Http/Controllers/Front/BlogController.php`
5. `app/Http/Controllers/Front/ContactController.php`
6. `app/Http/Controllers/Front/FaqController.php`

#### Admin Controllers
1. `app/Http/Controllers/Admin/ServiceController.php`
2. `app/Http/Controllers/Admin/ProjectController.php`
3. `app/Http/Controllers/Admin/BlogController.php`
4. `app/Http/Controllers/Admin/TestimonialController.php`
5. `app/Http/Controllers/Admin/FaqController.php`
6. `app/Http/Controllers/Admin/ContactController.php`
7. `app/Http/Controllers/Admin/SettingController.php`

### المرحلة 3: تحديث الـ Views

يجب تحديث الصفحات التالية لاستخدام البيانات الديناميكية:
- `resources/views/front/home/index.blade.php`
- `resources/views/front/services/index.blade.php`
- `resources/views/front/blog/index.blade.php`
- `resources/views/front/contact/index.blade.php`
- `resources/views/front/FAQ/index.blade.php`

### المرحلة 4: إنشاء Seeders

يجب إنشاء Seeders تحتوي على البيانات الافتراضية من الصفحات الحالية:
- `database/seeders/ServiceSeeder.php`
- `database/seeders/ProjectSeeder.php`
- `database/seeders/BlogSeeder.php`
- `database/seeders/TestimonialSeeder.php`
- `database/seeders/FaqSeeder.php`
- `database/seeders/SettingSeeder.php`

### المرحلة 5: تحديث الـ Routes

تحديث ملف `routes/web.php` لإضافة:
- مسارات الصفحات الأمامية
- مسارات لوحة التحكم

## 🎯 البيانات الافتراضية

### Services (الخدمات)
من صفحة services/index.blade.php:
1. Branding
2. Digital Design
3. Marketing Assets
4. Development

### Projects (المشاريع)
من صفحة home/index.blade.php:
1. Urban Green Spaces
2. Logistics Made Simple
3. AI in Healthcare
4. Social Media Impact

### Blog Posts (المقالات)
من صفحة blog/index.blade.php:
1. Understanding the process of 3D modeling
2. 21 Web Design Mistakes to Avoid Right Now
3. 8 Tips to Design Better Text Input Controls
4. Everything You Should Know About Return

### Testimonials (التقييمات)
من صفحة home/index.blade.php:
1. Bradley Gordon - "Agntix went above and beyond to make sure we got something we were happy with."
2. Tisha Norton - "The team at Agntix was incredibly attentive..."
3. Emma Berger - "We're beyond satisfied..."
4. Mary Cruz - "From start to finish, Agntix went the extra mile..."

## 🚀 الخطوات التالية

1. نسخ محتوى Models المذكور أعلاه إلى الملفات المقابلة
2. تشغيل `php artisan migrate` لإنشاء الجداول
3. إنشاء Controllers
4. إنشاء Admin Views
5. تحديث Frontend Views
6. إنشاء Seeders
7. تشغيل `php artisan db:seed`

## 📚 ملاحظات مهمة

- جميع الـ Models تدعم اللغتين العربية والإنجليزية
- البيانات المخزنة بصيغة JSON للحقول متعددة اللغات
- تم إضافة Scopes للاستعلامات الشائعة
- تم إضافة Helper Methods للحصول على الترجمات

## 🔍 مثال على استخدام الـ Models

```php
// الحصول على الخدمات النشطة
$services = Service::active()->get();

// الحصول على العنوان المترجم
$title = $service->getTranslatedTitle(); // يستخدم اللغة الحالية
$titleAr = $service->getTranslatedTitle('ar'); // العربية
$titleEn = $service->getTranslatedTitle('en'); // الإنجليزية

// الحصول على المشاريع المميزة
$featured = Project::active()->featured()->get();

// البحث في المدونة
$blogs = Blog::active()->latest()->paginate(6);
```
