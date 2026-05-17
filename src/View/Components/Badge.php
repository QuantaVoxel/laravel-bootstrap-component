<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public function __construct(
        public string  $color,
        public string  $text,
        public bool    $light = false,
        public ?string $shape = null, // default, square, circle
        public bool    $outline = false,
        public string  $size = "md",
    )
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $badgeClass = "badge";
        if ($this->light) {
            $badgeClass .= "-light";
        }
        $badgeClass .= "-{$this->color}";


        return view('bootstrap::components.badge', [
            'class' => [
                "badge",
                $badgeClass,
                "badge-{$this->size}",
                "badge-{$this->shape}" => $this->shape,
                "badge-outline" => $this->outline,
            ]
        ]);
    }
}