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
        // Input Group Properties
        public ?string $prefix = null,
        public ?string $suffix = null,
        public ?string $prefixIcon = null,
        public ?string $suffixIcon = null,
        public ?string $groupSize = null,
        public bool    $groupSolid = false,
        // Floating Label Property
        public bool    $floating = false,
        // Sizing Property
        public ?string $size = null,
    )
    {
    }

    public function hasGroup($slots): bool
    {
        return $this->prefix || $this->suffix || $this->prefixIcon || $this->suffixIcon || isset($slots['prepend']) || isset($slots['append']);
    }

    public function render()
    {
        $inputClasses = [
            'form-control',
            "form-control-{$this->style}" => $this->style !== 'default',
            "form-control-{$this->size}" => $this->size,
        ];

        return view('bootstrap::components.input', [
            'inputClasses' => $inputClasses,
        ]);
    }
}
