<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class DashboardHeader extends Component
{

    /**
     * @inheritDoc
     */
    public function render()
    {
        return $this->view('bootstrap::components.dashboard-header');
    }
}
