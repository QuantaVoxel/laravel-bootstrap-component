<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Dashboard extends Component
{

    public string $title;

    public function __construct(
        string $title = 'Dashboard'
    )
    {
        $this->title = $title;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bootstrap::components.dashboard');
    }
}
