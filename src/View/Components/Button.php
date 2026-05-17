<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;
use Quantavoxel\LaravelBootstrapComponent\Enums\ButtonHoverEffect;

class Button extends Component
{

    public function __construct(
        public string  $color,
        public string  $type = 'button',
        public ?string $hoverEffect = ButtonHoverEffect::ELEVATE_UP->value,
        public bool    $outline = false,
        public string  $outlineType = 'solid',
        public ?string $icon = null,
        public ?string    $iconSize = "1",
        public bool    $iconOnly = false,
        public ?string $size = null,
        public bool    $flex = false,
    )
    {
    }

    public
    function render()
    {
        return view('bootstrap::components.button', [
            'class' => [
                "btn",
                "btn-{$this->color}" => !$this->outline,
                "{$this->hoverEffect}" => $this->hoverEffect,
                "btn-{$this->size}" => $this->size,
                "btn-flex" => $this->flex,
                "btn-outline" => $this->outline,
                "btn-outline-{$this->color}" => $this->outline,
                "btn-outline-{$this->outlineType}" => $this->outline,
                "btn-icon" => $this->iconOnly,
            ]
        ]);
    }
}