<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public function __construct(
        public string  $name,
        public string  $type = 'text',
        public ?string $label = null,
        public string  $style = 'default',
        public bool    $required = false,
        public string  $symbol = 'label',
    )
    {
    }

    public function render()
    {
        $inputClasses = [
            'form-control',
            "form-control-{$this->style}" => $this->style !== 'default',
        ];

        return view('bootstrap::components.input', [
            'inputClasses' => $inputClasses,
        ]);
    }
}
