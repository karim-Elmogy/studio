<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;

// Front-end Routes
Route::get('/', function () {
    return view('front.home.index');
})->name('home');

Route::get('/services', function () {
    return view('front.services.index');
})->name('services.index');

Route::get('/blog', function () {
    return view('front.blog.index');
})->name('blog.index');

Route::get('/contact', function () {
    return view('front.contact.index');
})->name('contact.index');

Route::get('/faq', function () {
    return view('front.faq.index');
})->name('faq.index');

Route::get('/projects', function () {
    return view('front.projects.index');
})->name('projects.index');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Two-Factor Authentication Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/2fa', [TwoFactorController::class, 'show'])->name('2fa.show');
    Route::post('/2fa/verify', [TwoFactorController::class, 'verify'])->name('2fa.verify');
    Route::post('/2fa/resend', [TwoFactorController::class, 'resend'])->name('2fa.resend');
    // Prevent accidental GET to POST endpoints from showing 419
    Route::get('/2fa/verify', function () {
        return redirect()->route('2fa.show');
    });
});

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $totalCredentials = \App\Models\Credential::count();
        $withServer = \App\Models\Credential::whereNotNull('server_name')->where('server_name', '!=', '')->count();
        $withoutServer = $totalCredentials - $withServer;
        $recentCredentials = \App\Models\Credential::latest()->take(5)->get();
        $totalUsers = \App\Models\User::count();

        return view('dashboard', compact('totalCredentials','withServer','withoutServer','recentCredentials','totalUsers'));
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Credentials CRUD
    Route::resource('credentials', \App\Http\Controllers\CredentialController::class);
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
