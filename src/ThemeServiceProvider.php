<?php

namespace Archangel\Themes;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'Theme');
    }


    public function register()
    {
        $this->registerPublishable();
    }

    public function registerPublishable()
    {
        $basepath = dirname(__DIR__);
        $arr_publishable = [
            'migrations' => [$basepath . '/src/publishables/database/migrations' => database_path('migrations')],
        ];

        foreach ($arr_publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }
}
