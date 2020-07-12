<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider; 
// use Illuminate\Database\Schema\Builder; // Import Builder where defaultStringLength method is
use Illuminate\Support\Facades\Schema; // Import Facades schema where defaultStringLength method is

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
        //
        Schema::defaultStringLength(191); //Update defaultStringLength
    }
}
