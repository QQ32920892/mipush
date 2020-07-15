<?php

namespace Supen\MiPush;

use Illuminate\Support\ServiceProvider;

class MiPushServiceProvider extends ServiceProvider
{
    public $config;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('MiPushSender', function ($app) {
            $this->config = $app['config']['mipush'];
            return new MiPushSender($this->config);
        });

        $this->registerAliases();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/mipush.php');
        require base_path().'/vendor/autoload.php';

        $this->publishes([$path => config_path('mipush.php')], 'config');
    }

    public function registerAliases()
    {
        $this->app->alias('MiPushSender', MiPushSender::class);
    }
}