<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //
        $this->registerMiddleware();
        Paginator::useBootstrapFive();
    }

    protected function registerMiddleware()
    { 
        Route::aliasMiddleware('isAdmin', \App\Http\Middleware\CheckIsAdmin::class);
    }
}
