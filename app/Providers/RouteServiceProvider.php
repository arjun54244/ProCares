<?php

namespace App\Providers;

// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
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
        // Bind 'slug' to the Blog model
        Route::bind('blog', function ($value) {
            return \App\Models\Blog::where('slug', $value)->firstOrFail();
        });
    }
}
