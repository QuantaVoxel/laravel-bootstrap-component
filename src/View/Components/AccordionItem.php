<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class AccordionItem extends Component
{
    public string $itemId;

    public function __construct(
        public string $title,

        public bool   $active = false,
        ?string       $id = null,
    )
    {
        $this->itemId = $id ?? 'accordion-item-' . uniqid();

    }

    /**
     * @inheritDoc
     */
    public
    function render()
    {
        return view('bootstrap::components.accordion-item');
    }
}