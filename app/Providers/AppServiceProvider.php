<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // You can bind services or interfaces here
        // Example: $this->app->bind(MyInterface::class, MyService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Fix for older versions of MySQL where default string length must be specified
        Schema::defaultStringLength(191);

        // You can also register view composers, macros, etc., here
    }
}