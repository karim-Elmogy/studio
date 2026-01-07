<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;

// Front-end Routes
Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('home');

// Services Routes
Route::get('/services', [\App\Http\Controllers\Front\ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [\App\Http\Controllers\Front\ServiceController::class, 'show'])->name('services.show');

// Projects Routes
Route::get('/projects', [\App\Http\Controllers\Front\ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}', [\App\Http\Controllers\Front\ProjectController::class, 'show'])->name('projects.show');

// Blog Routes
Route::get('/blog', [\App\Http\Controllers\Front\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [\App\Http\Controllers\Front\BlogController::class, 'show'])->name('blog.show');

// Contact Route
Route::get('/contact', [\App\Http\Controllers\Front\ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [\App\Http\Controllers\Front\ContactController::class, 'store'])->name('contact.store');

// FAQ Route
Route::get('/faq', [\App\Http\Controllers\Front\FaqController::class, 'index'])->name('faq.index');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $totalCredentials = \App\Models\Credential::count();
        $withServer = \App\Models\Credential::whereNotNull('server_name')->where('server_name', '!=', '')->count();
        $withoutServer = $totalCredentials - $withServer;
        $recentCredentials = \App\Models\Credential::latest()->take(5)->get();
        $totalUsers = \App\Models\User::count();

        return view('admin.dashboard', compact('totalCredentials','withServer','withoutServer','recentCredentials','totalUsers'));
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Credentials CRUD
    Route::resource('credentials', \App\Http\Controllers\CredentialController::class);

    // Dynamic Content Management
    Route::resource('admin/services', \App\Http\Controllers\Admin\ServiceController::class)->names('admin.services');
    Route::resource('admin/projects', \App\Http\Controllers\Admin\ProjectController::class)->names('admin.projects');

    // Project Details Routes
    Route::get('admin/projects/{project}/mobile-details', [\App\Http\Controllers\Admin\ProjectController::class, 'editMobileDetails'])->name('admin.projects.mobile-details.edit');
    Route::put('admin/projects/{project}/mobile-details', [\App\Http\Controllers\Admin\ProjectController::class, 'updateMobileDetails'])->name('admin.projects.mobile-details.update');
    Route::get('admin/projects/{project}/web-details', [\App\Http\Controllers\Admin\ProjectController::class, 'editWebDetails'])->name('admin.projects.web-details.edit');
    Route::put('admin/projects/{project}/web-details', [\App\Http\Controllers\Admin\ProjectController::class, 'updateWebDetails'])->name('admin.projects.web-details.update');

    Route::resource('admin/blogs', \App\Http\Controllers\Admin\BlogController::class)->names('admin.blogs');
    Route::resource('admin/testimonials', \App\Http\Controllers\Admin\TestimonialController::class)->names('admin.testimonials');
    Route::resource('admin/faqs', \App\Http\Controllers\Admin\FaqController::class)->names('admin.faqs');
    Route::resource('admin/settings', \App\Http\Controllers\Admin\SettingController::class)->names('admin.settings');

    // Service Page Settings
    Route::get('admin/service-page-settings', [\App\Http\Controllers\Admin\ServicePageSettingController::class, 'edit'])->name('admin.service-page-settings.edit');
    Route::post('admin/service-page-settings', [\App\Http\Controllers\Admin\ServicePageSettingController::class, 'update'])->name('admin.service-page-settings.update');

    // Home Page Settings
    Route::get('admin/home-page-settings', [\App\Http\Controllers\Admin\HomePageSettingController::class, 'edit'])->name('admin.home-page-settings.edit');
    Route::post('admin/home-page-settings', [\App\Http\Controllers\Admin\HomePageSettingController::class, 'update'])->name('admin.home-page-settings.update');

    // Blog Page Settings
    Route::get('admin/blog-page-settings', [\App\Http\Controllers\Admin\BlogPageSettingController::class, 'edit'])->name('admin.blog-page-settings.edit');
    Route::post('admin/blog-page-settings', [\App\Http\Controllers\Admin\BlogPageSettingController::class, 'update'])->name('admin.blog-page-settings.update');

    // FAQ Page Settings
    Route::get('admin/faq-page-settings', [\App\Http\Controllers\Admin\FaqPageSettingController::class, 'edit'])->name('admin.faq-page-settings.edit');
    Route::post('admin/faq-page-settings', [\App\Http\Controllers\Admin\FaqPageSettingController::class, 'update'])->name('admin.faq-page-settings.update');

    // Contact Page Settings
    Route::get('admin/contact-page-settings', [\App\Http\Controllers\Admin\ContactPageSettingController::class, 'edit'])->name('admin.contact-page-settings.edit');
    Route::post('admin/contact-page-settings', [\App\Http\Controllers\Admin\ContactPageSettingController::class, 'update'])->name('admin.contact-page-settings.update');

    // Project Page Settings
    Route::get('admin/project-page-settings', [\App\Http\Controllers\Admin\ProjectPageSettingController::class, 'edit'])->name('admin.project-page-settings.edit');
    Route::post('admin/project-page-settings', [\App\Http\Controllers\Admin\ProjectPageSettingController::class, 'update'])->name('admin.project-page-settings.update');

    // Footer Settings
    Route::get('admin/footer-settings', [\App\Http\Controllers\Admin\FooterSettingController::class, 'edit'])->name('admin.footer-settings.edit');
    Route::post('admin/footer-settings', [\App\Http\Controllers\Admin\FooterSettingController::class, 'update'])->name('admin.footer-settings.update');

    // Contacts (read-only, no create/edit)
    Route::get('admin/contacts', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('admin/contacts/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'show'])->name('admin.contacts.show');
    Route::delete('admin/contacts/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('admin.contacts.destroy');
    Route::post('admin/contacts/{contact}/status', [\App\Http\Controllers\Admin\ContactController::class, 'updateStatus'])->name('admin.contacts.updateStatus');
});

// Language switcher
Route::get('/lang/{locale}', function (string $locale) {
    $allowed = ['en', 'ar'];
    if (! in_array($locale, $allowed, true)) {
        $locale = config('app.locale');
    }
    session(['locale' => $locale]);
    App::setLocale($locale);
    return redirect()->back();
})->name('lang.switch');
