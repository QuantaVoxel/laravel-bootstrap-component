<?php

namespace Quantavoxel\LaravelBootstrapComponent;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

final class BootstrapComponentServiceProvider extends ServiceProvider
{

    public function register(): void
    {

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
            return "<?php if(config('bootstrap-component.load_assets', true)): ?>
<link rel=\"stylesheet\" href=\"<?php echo asset('vendor/quantavoxel/bootstrap-component/assets/plugins/global/plugins.bundle.css'); ?>\" >
<link rel=\"stylesheet\" href=\"<?php echo asset('vendor/quantavoxel/bootstrap-component/assets/css/style.bundle.css'); ?>\" >
<?php endif; ?>";
        });

        Blade::directive('qvComponentScripts', function () {
            return "<?php if(config('bootstrap-component.load_assets', true)): ?>
<script src=\"<?php echo asset('vendor/quantavoxel/bootstrap-component/assets/icon.js'); ?>\" ></script>
<script src=\"<?php echo asset('vendor/quantavoxel/bootstrap-component/assets/plugins/global/plugins.bundle.js'); ?>\" ></script>
<script src=\"<?php echo asset('vendor/quantavoxel/bootstrap-component/assets/js/scripts.bundle.js'); ?>\" ></script>
<?php endif; ?>";
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
