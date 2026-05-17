<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public function __construct(
        public string  $name,
        public ?string $label = null,
        public string  $style = 'default',
        public bool    $required = false,
        public string  $symbol = 'label',
    )
    {
    }

    public function render()
    {
        $selectClasses = [
            'form-select',
            "form-select-{$this->style}" => $this->style !== 'default',
        ];

        return view('bootstrap::components.select', [
            'selectClasses' => $selectClasses,
        ]);
    }
}
