<?php

namespace App\Providers;

use Illuminate\Support\Provider;
use Illuminate\Support\Facades\Schema;

class AppProvider extends Provider
{
    /**
     * Register any application s.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application s.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
