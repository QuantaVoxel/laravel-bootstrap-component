<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Separator extends Component
{
    public function __construct(
        public ?int $size = null,
        public ?string $color = null,
        public ?string $style = null,
    ) {
    }

    public function render()
    {
        return view('bootstrap::components.separator');
    }
}
