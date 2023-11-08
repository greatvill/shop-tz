<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Shop\Application\ProductService;
use Shop\Domain\ProductRepositoryInterface;
use Shop\Domain\ProductServiceInterface;
use Shop\Infrastructure\EloquentProductRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, EloquentProductRepository::class);
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
