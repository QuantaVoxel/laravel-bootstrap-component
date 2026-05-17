<?php

namespace Quantavoxel\LaravelBootstrapComponent;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

final class BootstrapComponentServiceProvider extends ServiceProvider
{

    public function register()
    {

    }


    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bootstrap');

        Blade::componentNamespace('Quantavoxel\\LaravelBootstrapComponent\\View\\Components', 'bootstrap');

        Blade::directive('bootstrapComponentStyle', function () {
            return <<<ECHO
<link rel="stylesheet" href="{{asset('vendor/quantavoxel/bootstrap-component/assets/style.css')}}" >
ECHO;

        });
        Blade::directive('bootstrapComponentScript', function () {
            return <<<ECHO
<script src="{{asset('vendor/quantavoxel/bootstrap-component/assets/icon.js')}}" ></script>
ECHO;

        });


        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/../public/build' => public_path('vendor/quantavoxel/bootstrap-component'),
            ]);
        }
    }


}
