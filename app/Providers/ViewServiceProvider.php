<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\FooterSetting;
use App\Models\WhatsappWidgetSetting;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('front.layout.footer', function ($view) {
            $footerSettings = FooterSetting::getSettings();
            $view->with('footerSettings', $footerSettings);
        });

        View::composer('front.layout.app', function ($view) {
            $view->with('whatsappWidgetSettings', WhatsappWidgetSetting::getSettings());
        });
    }
}
