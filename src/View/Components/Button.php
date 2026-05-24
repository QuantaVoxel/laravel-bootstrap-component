<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;
use Quantavoxel\LaravelBootstrapComponent\Enums\ButtonHoverEffect;
use Quantavoxel\LaravelBootstrapComponent\Enums\Color;

class Button extends Component
{

    /**
     * @param 'primary'|'danger' $color
     * @param string $type
     * @param string|null $hoverEffect
     * @param bool $outline
     * @param string $outlineType
     * @param string|null $icon
     * @param string|null $iconSize
     * @param bool $iconOnly
     * @param string|null $size
     * @param bool $flex
     * @param bool $withBadge
     * @param string $badgeColor
     * @param string $badgeText
     * @param string $badgePosition
     * @param bool $badgeOutline
     * @param bool $badgeLight
     * @param string|null $badgeShape
     * @param string $badgeSize
     */
    public function __construct(
        public string  $color,
        public string  $htmlType = 'button',
        public ?string $hoverEffect = ButtonHoverEffect::ELEVATE_UP->value,
        public bool    $outline = false,
        public string  $outlineType = 'solid',
        public ?string $icon = null,
        public ?string    $iconSize = "1",
        public bool    $iconOnly = false,
        public ?string $size = null,
        public bool    $flex = false,

        public bool $withBadge = false,
        public string $badgeColor = 'primary',
        public string $badgeText = '',
        public string $badgePosition = 'top-right',
        public bool $badgeOutline = false,
        public bool $badgeLight = false,
        public ?string $badgeShape = 'circle',
        public string $badgeSize = 'md',
    )
    {
    }

    public function render()
    {

        $badgeClass = match ($this->badgePosition) {
            'top-right' => 'position-absolute top-0 start-100 translate-middle',
            'top-left' => 'position-absolute top-0 start-0 translate-middle',
            'bottom-right' => 'position-absolute top-100 start-100 translate-middle',
            'bottom-left' => 'position-absolute top-100 start-0 translate-middle',
            default => 'position-absolute top-0 start-0 translate-middle',
        };

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
                "position-relative" => $this->withBadge,
            ],
            'badgeClass' => $badgeClass,
        ]);
    }
}