<?php

namespace App\Providers;
use Carbon\Carbon;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\App::setLocale('ru');
        \Carbon\Carbon::setLocale('ru');
        Carbon::setLocale('ru');
        setlocale(LC_TIME, 'ru_RU.UTF-8', 'ru_RU', 'ru');

    }
}
