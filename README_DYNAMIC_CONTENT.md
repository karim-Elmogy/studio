# 🎯 دليل المحتوى الديناميكي - Agntix Studio

## ✅ ما تم إنجازه

### 1. Database Structure (قاعدة البيانات)
تم إنشاء 7 جداول رئيسية:

| الجدول | الوصف | الحقول الرئيسية |
|--------|--------|-----------------|
| **services** | الخدمات | title, description, features, icon, image |
| **projects** | المشاريع | title, description, category, image, type (web/mobile) |
| **blogs** | المقالات | title, content, author, category, tags |
| **testimonials** | آراء العملاء | name, role, testimonial, rating |
| **faqs** | الأسئلة الشائعة | question, answer, category |
| **contacts** | الرسائل | name, email, message, status |
| **settings** | الإعدادات | key, value, type |

### 2. Models (النماذج)
تم إنشاء 7 نماذج بميزات متقدمة:
- ✅ دعم اللغتين (عربي/إنجليزي)
- ✅ JSON Storage للبيانات متعددة اللغات
- ✅ Helper Methods للترجمة التلقائية
- ✅ Scopes للاستعلامات الشائعة

### 3. Controllers (المتحكمات)
تم إنشاء الهيكل الأساسي لـ:
- ✅ `Admin/ServiceController` - إدارة الخدمات
- ✅ `Front/HomeController` - الصفحة الرئيسية
- ✅ `Front/ServiceController` - عرض الخدمات
- ✅ `Front/BlogController` - عرض المدونة
- ✅ `Front/ContactController` - نموذج الاتصال

---

## 📋 الخطوات المتبقية للتنفيذ الكامل

### المرحلة 1: إكمال الـ Models (استبدال المحتوى)

قم بنسخ الكود التالي لكل موديل:

#### 📄 `app/Models/Project.php`
<details>
<summary>انقر لعرض الكود</summary>

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
</details>

#### 📄 `app/Models/Blog.php`, `Testimonial.php`, `Faq.php`, `Contact.php`, `Setting.php`
راجع ملف `IMPLEMENTATION_GUIDE.md` للكود الكامل لكل موديل.

---

### المرحلة 2: إنشاء Seeders (البيانات الافتراضية)

#### الخطوة 1: إنشاء الـ Seeders
```bash
php artisan make:seeder ServiceSeeder
php artisan make:seeder ProjectSeeder
php artisan make:seeder BlogSeeder
php artisan make:seeder TestimonialSeeder
php artisan make:seeder FaqSeeder
php artisan make:seeder SettingSeeder
```

#### الخطوة 2: ملء ServiceSeeder
قم بإنشاء ملف `database/seeders/ServiceSeeder.php`:

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'title' => [
                    'en' => 'Branding',
                    'ar' => 'العلامة التجارية'
                ],
                'description' => [
                    'en' => 'Strong branding sets your startup apart, signaling quality and professionalism.',
                    'ar' => 'العلامة التجارية القوية تميز شركتك الناشئة وتشير إلى الجودة والاحترافية.'
                ],
                'features' => [
                    ['en' => 'Brand Naming', 'ar' => 'تسمية العلامة التجارية'],
                    ['en' => 'Creative Direction', 'ar' => 'التوجيه الإبداعي'],
                    ['en' => 'Brand Strategy', 'ar' => 'استراتيجية العلامة التجارية'],
                    ['en' => 'Graphic charter', 'ar' => 'الميثاق الجرافيكي'],
                    ['en' => 'Logo Design', 'ar' => 'تصميم الشعار']
                ],
                'order' => 1,
                'is_active' => true
            ],
            [
                'title' => [
                    'en' => 'Digital Design',
                    'ar' => 'التصميم الرقمي'
                ],
                'description' => [
                    'en' => 'A process of assumption & validation with a goal of taking into account all the necessary variables.',
                    'ar' => 'عملية افتراض وتحقق بهدف أخذ جميع المتغيرات الضرورية في الاعتبار.'
                ],
                'features' => [
                    ['en' => 'Wireframe', 'ar' => 'الإطار الشبكي'],
                    ['en' => 'UI design', 'ar' => 'تصميم واجهة المستخدم'],
                    ['en' => 'Prototyping', 'ar' => 'النماذج الأولية'],
                    ['en' => 'Design system', 'ar' => 'نظام التصميم'],
                    ['en' => 'Interactive Experiences', 'ar' => 'التجارب التفاعلية']
                ],
                'order' => 2,
                'is_active' => true
            ],
            [
                'title' => [
                    'en' => 'Marketing Assets',
                    'ar' => 'أصول التسويق'
                ],
                'description' => [
                    'en' => 'We focus on creating visuals that communicate your value and engage your audience.',
                    'ar' => 'نركز على إنشاء عناصر مرئية تنقل قيمتك وتشرك جمهورك.'
                ],
                'features' => [
                    ['en' => 'Animated logos', 'ar' => 'شعارات متحركة'],
                    ['en' => 'Product Illustrations', 'ar' => 'رسوم توضيحية للمنتج'],
                    ['en' => 'Launch Videos', 'ar' => 'فيديوهات الإطلاق'],
                    ['en' => 'Visual Effects', 'ar' => 'المؤثرات البصرية']
                ],
                'order' => 3,
                'is_active' => true
            ],
            [
                'title' => [
                    'en' => 'Development',
                    'ar' => 'التطوير'
                ],
                'description' => [
                    'en' => 'Efficiency and scalability. The two factors which any decision gets filtered out with.',
                    'ar' => 'الكفاءة وقابلية التوسع. العاملان اللذان يتم تصفية أي قرار بهما.'
                ],
                'features' => [
                    ['en' => 'Integration', 'ar' => 'التكامل'],
                    ['en' => 'Front-end', 'ar' => 'الواجهة الأمامية'],
                    ['en' => 'Back-end', 'ar' => 'الواجهة الخلفية'],
                    ['en' => 'Webflow', 'ar' => 'ويب فلو']
                ],
                'order' => 4,
                'is_active' => true
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
```

#### الخطوة 3: تحديث DatabaseSeeder
قم بتحديث ملف `database/seeders/DatabaseSeeder.php`:

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ServiceSeeder::class,
            ProjectSeeder::class,
            BlogSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
```

---

### المرحلة 3: تحديث Frontend Controllers

#### 📄 `app/Http/Controllers/Front/HomeController.php`
```php
<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Service, Project, Blog, Testimonial};

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'services' => Service::active()->take(3)->get(),
            'projects' => Project::active()->featured()->take(4)->get(),
            'testimonials' => Testimonial::active()->get(),
            'blogs' => Blog::active()->take(3)->get(),
        ];

        return view('front.home.index', $data);
    }
}
```

#### 📄 `app/Http/Controllers/Front/ServiceController.php`
```php
<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::active()->get();
        return view('front.services.index', compact('services'));
    }

    public function show($id)
    {
        $service = Service::active()->findOrFail($id);
        return view('front.services.show', compact('service'));
    }
}
```

#### 📄 `app/Http/Controllers/Front/BlogController.php`
```php
<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::active()->paginate(6);
        return view('front.blog.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::active()->findOrFail($id);
        return view('front.blog.show', compact('blog'));
    }
}
```

#### 📄 `app/Http/Controllers/Front/ContactController.php`
```php
<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return back()->with('success', __('Your message has been sent successfully!'));
    }
}
```

---

### المرحلة 4: تحديث Routes

قم بتحديث ملف `routes/web.php`:

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\{
    HomeController,
    ServiceController,
    BlogController,
    ContactController,
    FaqController
};

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('/{id}', [ServiceController::class, 'show'])->name('show');
});

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{id}', [BlogController::class, 'show'])->name('show');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/', [ContactController::class, 'store'])->name('store');
});

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// Admin Routes
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('faqs', \App\Http\Controllers\Admin\FaqController::class);
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class);
    Route::resource('settings', \App\Http\Controllers\Admin\SettingController::class);
});
```

---

### المرحلة 5: تحديث Frontend Views

#### مثال: تحديث صفحة الخدمات
قم بتحديث `resources/views/front/services/index.blade.php`:

```blade
@foreach($services as $service)
    <div class="tp-inner-service-item mb-200">
        <div class="inner-service-1-right">
            <div class="row">
                <div class="col-xl-4">
                    <div class="inner-service-1-number">
                        <h1>{{ $loop->iteration }}</h1>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="inner-service-1-text">
                        <span>{{ $service->getTranslatedTitle() }}</span>
                        <p>{{ $service->getTranslatedDescription() }}</p>
                    </div>
                    <div class="inner-service-1-category">
                        @foreach($service->getTranslatedFeatures() as $feature)
                            <a href="#" class="inner-service-1-category-item">
                                <span>{{ $feature }}</span>
                                <i><!-- SVG Icon --></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
```

---

## 🚀 خطوات التنفيذ النهائية

### 1. تشغيل الـ Migrations
```bash
php artisan migrate
```

### 2. تشغيل الـ Seeders
```bash
php artisan db:seed
```

### 3. التحقق من البيانات
```bash
php artisan tinker
>>> App\Models\Service::count()
>>> App\Models\Project::count()
```

---

## 📊 ميزات النظام الجديد

### ✨ للمستخدم العادي (Frontend)
- عرض المحتوى من قاعدة البيانات بدلاً من الكود المباشر
- دعم اللغتين العربية والإنجليزية تلقائياً
- إمكانية الفلترة والبحث
- تحميل سريع وأداء محسّن

### 🛠️ للمدير (Admin Panel)
- إضافة/تعديل/حذف الخدمات
- إدارة المشاريع والمقالات
- التحكم في آراء العملاء
- إدارة الأسئلة الشائعة
- عرض الرسائل الواردة
- تخصيص الإعدادات العامة

### 🌍 الترجمة التلقائية
- كل محتوى يُخزن بلغتين (عربي/إنجليزي)
- التبديل التلقائي حسب اللغة المختارة
- إمكانية إضافة لغات إضافية

---

## 📚 الملفات المرجعية

1. **IMPLEMENTATION_GUIDE.md** - دليل التنفيذ الكامل بالتفصيل
2. **README_DYNAMIC_CONTENT.md** - هذا الملف (الدليل السريع)

---

## 💡 نصائح مهمة

1. ✅ احفظ نسخة احتياطية من قاعدة البيانات قبل التنفيذ
2. ✅ اختبر كل خطوة على حدة قبل الانتقال للتالية
3. ✅ راجع الكود قبل النسخ للتأكد من التوافق مع مشروعك
4. ✅ استخدم `php artisan tinker` للتحقق من البيانات

---

## 🎉 بعد الانتهاء

ستكون لديك لوحة تحكم كاملة لإدارة:
- ✅ الخدمات
- ✅ المشاريع
- ✅ المقالات
- ✅ آراء العملاء
- ✅ الأسئلة الشائعة
- ✅ الرسائل
- ✅ الإعدادات العامة

**جميعها تدعم اللغتين العربية والإنجليزية!** 🌍
