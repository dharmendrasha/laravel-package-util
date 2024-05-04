<?php

namespace Soni\Util;
use Illuminate\Support\ServiceProvider;
use Soni\Util\Util;

class UtilServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/soni-util.php' => config_path('soni-util.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton(Util::class, function ($app) {
            return new Util();
        });
    }
}