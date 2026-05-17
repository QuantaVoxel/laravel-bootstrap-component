<?php

namespace Quantavoxel\LaravelBootstrapComponent;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

final class BootstrapComponentServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/bootstrap-component.php', 'bootstrap-component');
        $this->mergeConfigFrom(__DIR__ . '/../config/bootstrap-component-sidebar.php', 'bootstrap-component-sidebar');
        $this->mergeConfigFrom(__DIR__ . '/../config/bootstrap-component-header.php', 'bootstrap-component-header');
    }


    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bootstrap');

        $this->bladeConfigure();
        $this->assetConfigure();

    }

    private function bladeConfigure(): void
    {
        Blade::componentNamespace('Quantavoxel\\LaravelBootstrapComponent\\View\\Components', 'bootstrap');
    }

    private function assetConfigure(): void
    {
        Blade::directive('qvComponentStyles', function () {
            return <<<ECHO
<link rel="stylesheet" href="{{asset('vendor/quantavoxel/bootstrap-component/assets/plugins/global/plugins.bundle.css')}}" >
<link rel="stylesheet" href="{{asset('vendor/quantavoxel/bootstrap-component/assets/css/style.bundle.css')}}" >
ECHO;
        });

        Blade::directive('qvComponentScripts', function () {
            return <<<ECHO
<script src="{{asset('vendor/quantavoxel/bootstrap-component/assets/icon.js')}}" ></script>
<script src="{{asset('vendor/quantavoxel/bootstrap-component/assets/plugins/global/plugins.bundle.js')}}" ></script>
<script src="{{asset('vendor/quantavoxel/bootstrap-component/assets/js/scripts.bundle.js')}}" ></script>
ECHO;
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../public/assets' => public_path('vendor/quantavoxel/bootstrap-component/assets'),
                __DIR__ . '/../public/build' => public_path('vendor/quantavoxel/bootstrap-component'),
            ], 'qv-component-assets');

            $this->publishes([
                __DIR__ . '/../config/bootstrap-component.php' => config_path('bootstrap-component.php'),
                __DIR__ . '/../config/bootstrap-component-sidebar.php' => config_path('bootstrap-component-sidebar.php'),
                __DIR__ . '/../config/bootstrap-component-header.php' => config_path('bootstrap-component-header.php'),
            ], 'qv-component-config');
        }
    }

}
