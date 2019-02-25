<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Tutorial: https://sebastiandedeyne.com/theme-based-views-in-laravel-using-vendor-namespaces/
     * Reads theme from config and apply it, if not found use default one.
     *
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $theme_name = config('settings.theme_name');

        $views = [
            resource_path("views/themes/{$theme_name}"),
            resource_path("views/themes/default")
        ];

        $this->loadViewsFrom($views, 'theme');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
