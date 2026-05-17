<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Range extends Component
{
    public function __construct(
        public string  $name,
        public ?string $label = null,
    )
    {
    }

    public function render()
    {
        return view('bootstrap::components.range');
    }
}
