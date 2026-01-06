# دليل إدارة تفاصيل المشاريع / Services Details Management Guide

## نظرة عامة / Overview

تم إنشاء نظام ديناميكي كامل لإدارة تفاصيل صفحات عرض المشاريع/الخدمات بشكل مرن من لوحة التحكم.

A complete dynamic system has been created to manage service/project details pages flexibly from the admin panel.

---

## المميزات الجديدة / New Features

### 1. Hero Section (القسم الرئيسي)
- **Subtitle**: عنوان فرعي للصفحة
- **Title**: العنوان الرئيسي
- **Description**: الوصف التفصيلي
- **Background Image**: صورة خلفية مخصصة

### 2. Process Section (قسم العمليات)
- **Process Title**: عنوان قسم العمليات
- **Process Steps**: خطوات العمل (حتى 10 خطوات)
- **Process Description**: وصف تفصيلي للعمليات
- **Process Image**: صورة توضيحية

### 3. Benefits Section (قسم المميزات)
- **Benefits Title**: عنوان قسم الفوائد
- **Benefits Description**: وصف المميزات والفوائد

### 4. Features Highlight Section (قسم العروض المميزة)
- **Features Title**: عنوان العروض الخاصة
- **Features Image**: صورة بارزة للعروض

### 5. Gallery Section (معرض الصور)
- إمكانية رفع عدة صور للمشروع
- عرض جميع الصور في معرض منظم
- إمكانية حذف الصور

---

## كيفية الاستخدام / How to Use

### الوصول لصفحة إدارة التفاصيل / Access Details Management

#### طريقة 1: من قائمة الخدمات
1. اذهب إلى: **لوحة التحكم > Services**
2. اضغط على زر **Actions** بجوار الخدمة
3. اختر **Manage Details**

#### طريقة 2: من صفحة تعديل الخدمة
1. افتح صفحة تعديل الخدمة
2. اضغط على زر **Manage Details** في الأعلى

---

## البنية التقنية / Technical Structure

### Database Fields (حقول قاعدة البيانات)
```php
// Hero Section
hero_subtitle (JSON)       // {en: '', ar: ''}
hero_title (JSON)          // {en: '', ar: ''}
hero_description (JSON)    // {en: '', ar: ''}
hero_image (STRING)        // Path to image

// Process Section
process_title (JSON)       // {en: '', ar: ''}
process_steps (JSON)       // [{en: '', ar: ''}, ...]
process_description (JSON) // {en: '', ar: ''}
process_image (STRING)     // Path to image

// Benefits Section
benefits_title (JSON)      // {en: '', ar: ''}
benefits_description (JSON)// {en: '', ar: ''}

// Features Section
features_title (JSON)      // {en: '', ar: ''}
features_image (STRING)    // Path to image

// Gallery
gallery_images (JSON)      // ['path1.jpg', 'path2.jpg', ...]
```

### Routes (المسارات)
```php
GET  /admin/services/{service}/details      // عرض صفحة التفاصيل
POST /admin/services/{service}/details      // حفظ التفاصيل
```

### Controller
- **ServiceDetailController**: يدير جميع عمليات التفاصيل
  - `edit()`: عرض نموذج التفاصيل
  - `update()`: حفظ التفاصيل

### Model Methods (دوال النموذج)
```php
$service->getTranslatedHeroSubtitle()
$service->getTranslatedHeroTitle()
$service->getTranslatedHeroDescription()
$service->getTranslatedProcessTitle()
$service->getTranslatedProcessSteps()
$service->getTranslatedProcessDescription()
$service->getTranslatedBenefitsTitle()
$service->getTranslatedBenefitsDescription()
$service->getTranslatedFeaturesTitle()
```

---

## ملاحظات مهمة / Important Notes

1. **جميع الحقول اختيارية**: إذا لم يتم ملء حقل معين، سيتم استخدام القيم الافتراضية من الخدمة الأساسية

2. **دعم متعدد اللغات**: كل حقل نصي يدعم اللغتين العربية والإنجليزية

3. **Process Steps**: اكتب كل خطوة في سطر منفصل

4. **Gallery Images**: يمكن رفع عدة صور في نفس الوقت باستخدام Ctrl/Cmd + Click

5. **الصور المحذوفة**: عند تحديد "Remove" وحفظ التغييرات، سيتم حذف الصورة نهائياً

---

## مثال عملي / Practical Example

### مثال لملء قسم Process Steps:

**English:**
```
Thinking and research
Discovering the problem
Scratch, design, and wireframing
Implementation and solution
Testing and deployment
```

**العربية:**
```
التفكير والبحث
اكتشاف المشكلة
التصميم الأولي والإطار السلكي
التنفيذ والحل
الاختبار والنشر
```

---

## الملفات المعدلة / Modified Files

### Migration
- `2026_01_05_152353_add_service_details_fields_to_services_table.php`

### Model
- `app/Models/Service.php`

### Controllers
- `app/Http/Controllers/Admin/ServiceDetailController.php` (جديد)

### Routes
- `routes/web.php`

### Views
- `resources/views/admin/services/details.blade.php` (جديد)
- `resources/views/admin/services/index.blade.php` (محدث)
- `resources/views/admin/services/edit.blade.php` (محدث)
- `resources/views/front/services/show.blade.php` (محدث - ديناميكي بالكامل)

---

## Support / الدعم

للمزيد من المساعدة، يمكنك مراجعة الكود المصدري أو التواصل مع فريق التطوير.

For more help, you can review the source code or contact the development team.
