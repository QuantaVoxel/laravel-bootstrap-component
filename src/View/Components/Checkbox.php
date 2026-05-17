<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public function __construct(
        public string  $name,
        public string  $value = '',
        public ?string $label = null,
        public bool    $custom = false,
        public bool    $solid = false,
        public ?string $color = null,
        public ?string $size = null,
        public ?string $image = null,
        public bool    $switch = false,
    )
    {
    }

    public function render()
    {
        $wrapperClasses = [
            'form-check',
            'form-check-custom' => $this->custom || $this->solid || $this->color || $this->size || $this->image,
            'form-check-solid' => $this->solid,
            'form-switch' => $this->switch,
            "form-check-{$this->color}" => $this->color,
            "form-check-{$this->size}" => in_array($this->size, ['sm', 'lg']),
        ];

        $inputClasses = [
            'form-check-input',
            "h-{$this->size}px w-{$this->size}px" => is_numeric($this->size),
        ];

        return view('bootstrap::components.checkbox', [
            'wrapperClasses' => $wrapperClasses,
            'inputClasses' => $inputClasses,
        ]);
    }
}
