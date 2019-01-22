<?php

namespace ShuM\Unifiedcode;

use Illuminate\Support\ServiceProvider;

class UnifiedcodeServiceProvider extends ServiceProvider
{
    /**
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('unifiedcode', function ($app) {
            return new Unifiedcode($app['config']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['unifiedcode'];
    }
}
