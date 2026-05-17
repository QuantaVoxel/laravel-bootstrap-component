<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class AvatarGroup extends Component
{
    public function __construct(
        public bool $hover = true,
    ) {
    }

    public function render()
    {
        return view('bootstrap::components.avatar-group');
    }
}
