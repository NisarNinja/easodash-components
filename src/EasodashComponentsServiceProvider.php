<?php

namespace Easoblue\EasodashComponents;

use Illuminate\Support\ServiceProvider;


class EasodashComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */

    public function boot()
    {   
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'easodash');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/easodash-components.php', 'easodash-components');
    }
}