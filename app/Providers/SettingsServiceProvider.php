<?php

namespace App\Providers;

use App\ShopSettings;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        config()->set('settings', ShopSettings::pluck('value', 'key')->all());
    }
}
