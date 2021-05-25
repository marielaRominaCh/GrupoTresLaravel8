<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
//lo agregué
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //lo agregué
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }

    
}
