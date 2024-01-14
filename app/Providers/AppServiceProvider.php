<?php

namespace App\Providers;

use App\Repository\AdminRepository;
use App\Repository\IAdminRepository;
use App\Repository\IProductRepository;
use App\Repository\ProductRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IProductRepository::class,ProductRepository::class);
        $this->app->bind(IAdminRepository::class,AdminRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
