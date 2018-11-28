<?php

namespace Sisti\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);

       Validator::extend('alpha_spaces', function ($attribute, $value) {

        return preg_match('/^[\pL\s]+$/u', $value); 

        });

       Validator::extend('alpha_email', function ($attribute, $value) {
        if (strpos($value, '@sahum.gob.ve')) {
            return true;
        } elseif (strpos($value, '@SAHUM.GOB.VE')) {
            return true;
        }
        return false;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
    }
}
