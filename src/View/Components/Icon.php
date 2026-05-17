<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{

    public function __construct(
        public string $name,
        public bool   $isInline = false
    )
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return $this->view('bootstrap::components.icon');
    }
}
