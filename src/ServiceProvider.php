<?php

namespace RenderbitTechnologies\AdminLTE;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/adminlte.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('adminlte.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'adminlte'
        );

        $this->app->bind('adminlte', function () {
            return new AdminLTE();
        });
    }
}
