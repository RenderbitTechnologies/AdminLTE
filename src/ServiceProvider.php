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

        $this->publishes([
            'vendor/almasaeed2010/adminlte/dist' => public_path('adminlte'),
            'vendor/almasaeed2010/adminlte/bower_components' => public_path('adminlte/plugins'),
        ], 'assets');
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
