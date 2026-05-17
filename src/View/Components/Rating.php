<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Rating extends Component
{
    public function __construct(
        public ?string $name = null,
        public int $value = 0,
        public int $max = 5,
        public bool $edit = false,
        public bool $showReset = false,
        public string $icon = 'solar:star-bold',
        public string $iconColor = 'warning',
    ) {
    }

    public function render()
    {
        return view('bootstrap::components.rating');
    }
}
