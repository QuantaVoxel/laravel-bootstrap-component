<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class DashboardSidebar extends Component
{
    public array $menu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menu = config('bootstrap-component-sidebar', []);
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bootstrap::components.dashboard-sidebar');
    }
}
