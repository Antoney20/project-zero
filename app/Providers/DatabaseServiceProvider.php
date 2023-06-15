<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $defaultConnection = Config::get('database.default');
        $con = $defaultConnection;
        View::share('con', $con);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
