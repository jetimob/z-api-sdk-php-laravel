<?php

namespace Jetimob\ZApi;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Jetimob\ZApi\Console\ZApiInstallPackage;

class ZApiServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(): void
    {
        $src = realpath($raw = __DIR__ . '/../config/z-api.php') ?: $raw;

        if ($this->app->runningInConsole()) {
            $this->publishes([$src => config_path('z-api.php')], 'config');
            $this->commands([
                ZApiInstallPackage::class,
            ]);
        }

        $this->mergeConfigFrom($src, 'z-api');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('jetimob.z-api', function (Container $app) {
            return new ZApi($app['config']['z-api'] ?? []);
        });

        $this->app->alias('jetimob.z-api', ZApi::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides(): array
    {
        return [
            'jetimob.z-api',
        ];
    }
}
