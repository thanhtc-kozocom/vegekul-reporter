<?php

namespace Vegekul\Reporter;

use Illuminate\Support\ServiceProvider;

class ReporterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'vegekul-reporter');
        $this->publishes([
            __DIR__.'/../config/reporter.php' => config_path('reporter.php'),
            __DIR__.'/../public' => public_path('vendor/vegekul-reporter'),
        ], 'vegekul-reporter');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/reporter.php', 'reporter');
    }
}
