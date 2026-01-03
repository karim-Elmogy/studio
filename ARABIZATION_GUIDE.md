# دليل التعريب - Arabization Guide

## نظرة عامة

تم تعريب لوحة التحكم بالكامل باستخدام نظام الترجمة المدمج في Laravel. جميع النصوص تستخدم دوال الترجمة `__()` للحصول على النصوص من ملفات اللغة.

## ملفات الترجمة

### 1. ملف الترجمة الرئيسي للوحة التحكم
**المسار:** `resources/lang/ar/admin.php`

يحتوي على جميع الترجمات الخاصة بلوحة التحكم:
- الكلمات الشائعة (حفظ، إلغاء، تعديل، حذف، إلخ)
- إدارة الخدمات (Services)
- إدارة المشاريع (Projects)
- إدارة المدونة (Blogs)
- إدارة آراء العملاء (Testimonials)
- إدارة الأسئلة الشائعة (FAQs)
- إدارة الرسائل (Contacts)
- إدارة الإعدادات (Settings)
- لوحة التحكم (Dashboard)
- الملف الشخصي (Profile)

**مثال على الاستخدام:**
```blade
{{ __('admin.dashboard') }}
{{ __('admin.services') }}
{{ __('admin.add_service') }}
```

### 2. ملف الترجمة العام للتطبيق
**المسار:** `resources/lang/ar/app.php`

يحتوي على الترجمات العامة:
- تسجيل الدخول (Login)
- بيانات الاعتماد (Credentials)
- الرسائل العامة
- الأزرار والإجراءات
- التنقل

**مثال على الاستخدام:**
```blade
{{ __('app.Email') }}
{{ __('app.Password') }}
{{ __('app.Sign In') }}
```

### 3. ملف الترجمة للواجهة الأمامية
**المسار:** `resources/lang/ar/front.php`

يحتوي على ترجمات الموقع الأمامي (سيتم تطويره لاحقاً).

## الصفحات المعربة

### ✅ تم التعريب بالكامل:

1. **لوحة التحكم الرئيسية**
   - `resources/views/admin/dashboard.blade.php`
   - جميع العناوين والإحصائيات معربة

2. **القائمة الجانبية**
   - `resources/views/admin/layouts/sidebar.blade.php`
   - جميع عناصر القائمة معربة

3. **إدارة الخدمات**
   - `resources/views/admin/services/index.blade.php`
   - `resources/views/admin/services/create.blade.php`
   - `resources/views/admin/services/edit.blade.php`

4. **إدارة المشاريع**
   - `resources/views/admin/projects/index.blade.php`
   - `resources/views/admin/projects/create.blade.php`
   - `resources/views/admin/projects/edit.blade.php`
   - `resources/views/admin/projects/show.blade.php`

5. **إدارة المدونة**
   - `resources/views/admin/blogs/index.blade.php`
   - `resources/views/admin/blogs/create.blade.php`
   - `resources/views/admin/blogs/edit.blade.php`
   - `resources/views/admin/blogs/show.blade.php`

6. **إدارة آراء العملاء**
   - `resources/views/admin/testimonials/index.blade.php`
   - `resources/views/admin/testimonials/create.blade.php`
   - `resources/views/admin/testimonials/edit.blade.php`
   - `resources/views/admin/testimonials/show.blade.php`

7. **إدارة الأسئلة الشائعة**
   - `resources/views/admin/faqs/index.blade.php`
   - `resources/views/admin/faqs/create.blade.php`
   - `resources/views/admin/faqs/edit.blade.php`
   - `resources/views/admin/faqs/show.blade.php`

8. **إدارة الرسائل**
   - `resources/views/admin/contacts/index.blade.php`
   - `resources/views/admin/contacts/show.blade.php`

9. **إدارة الإعدادات**
   - `resources/views/admin/settings/index.blade.php`
   - `resources/views/admin/settings/create.blade.php`
   - `resources/views/admin/settings/edit.blade.php`

10. **الملف الشخصي**
    - `resources/views/admin/profile/edit.blade.php`

11. **صفحة تسجيل الدخول**
    - `resources/views/admin/auth/login.blade.php`

12. **إدارة بيانات الاعتماد**
    - `resources/views/admin/credentials/index.blade.php`
    - `resources/views/admin/credentials/create.blade.php`
    - `resources/views/admin/credentials/edit.blade.php`
    - `resources/views/admin/credentials/show.blade.php`

## إعدادات اللغة

تم تكوين التطبيق لاستخدام اللغة العربية افتراضياً في ملف `config/app.php`:

```php
'locale' => 'ar',
'fallback_locale' => 'ar',
'faker_locale' => 'ar_SA',
```

## كيفية إضافة ترجمات جديدة

### 1. للوحة التحكم:
أضف المفتاح والقيمة في `resources/lang/ar/admin.php`:
```php
'new_key' => 'النص العربي',
```

ثم استخدمه في ملف Blade:
```blade
{{ __('admin.new_key') }}
```

### 2. للتطبيق العام:
أضف المفتاح والقيمة في `resources/lang/ar/app.php`:
```php
'new_key' => 'النص العربي',
```

ثم استخدمه في ملف Blade:
```blade
{{ __('app.new_key') }}
```

## الترجمات مع المتغيرات

يمكن استخدام متغيرات في الترجمات:

```php
// في ملف الترجمة
'showing_entries' => 'عرض :first إلى :last من أصل :total سجل',

// في ملف Blade
{{ __('admin.showing_entries', [
    'first' => 1,
    'last' => 10,
    'total' => 100
]) }}
```

## الميزات المُطبقة

✅ جميع صفحات لوحة التحكم معربة بالكامل
✅ جميع الأزرار والقوائم والنماذج معربة
✅ الرسائل التنبيهية والتحذيرية معربة
✅ رسائل التأكيد والحذف معربة
✅ الترجمة ديناميكية وقابلة للتوسع
✅ يدعم التبديل بين العربية والإنجليزية بسهولة

## ملاحظات مهمة

1. **اتجاه النص (RTL)**: تأكد من أن التطبيق يدعم RTL للغة العربية في ملف CSS أو عبر إعدادات Bootstrap.

2. **الخطوط**: تأكد من استخدام خطوط عربية واضحة ومقروءة.

3. **التواريخ والأرقام**: قد تحتاج إلى تنسيق التواريخ والأرقام بما يتناسب مع اللغة العربية.

4. **التحقق من الصحة**: رسائل التحقق من Laravel يمكن تعريبها من خلال ملف `resources/lang/ar/validation.php`.

## الخطوات التالية (اختياري)

- [ ] تعريب رسائل التحقق من الصحة
- [ ] تعريب رسائل الأخطاء
- [ ] إضافة دعم RTL كامل
- [ ] تعريب رسائل البريد الإلكتروني
- [ ] تعريب الإشعارات

## الدعم

إذا واجهت أي مشاكل أو كان لديك أسئلة حول التعريب، يمكنك:
1. مراجعة ملفات الترجمة في مجلد `resources/lang/ar/`
2. فحص الصفحات الموجودة لمعرفة كيفية استخدام دوال الترجمة
3. إضافة مفاتيح جديدة حسب الحاجة

---

**تم بواسطة:** Claude Code
**التاريخ:** 2025-12-31
**الإصدار:** 1.0
