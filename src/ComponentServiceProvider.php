<?php

namespace TheRiptide\LaravelFrontComponents;

use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{

    public function boot() {

        $this->loadViewsFrom(__DIR__.'/../views', 'froco');

        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/froco'),
        ]);
    }

    public function register() {


    }
}