<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Accordion extends Component
{
    public string $parentId;
    public function __construct(
        public bool $hasIcon = false,
        public bool $animated = true,
        public string $openIcon =  "solar:add-square-outline",
        public string $closeIcon =  "solar:minus-square-outline",
        ?string $id = null
    )
    {
       $this->parentId = $id ?? 'accordion-' . uniqid();
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bootstrap::components.accordion');
    }
}