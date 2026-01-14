<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share global settings and categories with all views
        try {
            $settings = \App\Models\Setting::all()->pluck('value', 'key')->toArray();
            $categories = \App\Models\ProductCategory::where('is_active', true)->get();
            
            view()->share('globalSettings', $settings);
            view()->share('globalCategories', $categories);
        } catch (\Exception $e) {
            // Handle case where database might not be ready (e.g. during migration)
            view()->share('globalSettings', []);
            view()->share('globalCategories', []);
        }
    }
}
