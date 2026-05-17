<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Avatar extends Component
{
    public function __construct(
        public ?string $image = null,
        public ?string $bgImage = null,
        public ?string $label = null,
        public ?string $color = null,
        public ?string $textColor = null,
        public string $size = '50px',
        public ?string $shape = null,
        public ?string $ratio = null,
        public mixed $badge = null,
        public string $badgeColor = 'success',
        public string $badgePosition = 'start-100',
    ) {
    }

    public function render()
    {
        return view('bootstrap::components.avatar', [
            'symbolClasses' => [
                'symbol',
                "symbol-{$this->size}",
                "symbol-{$this->shape}" => $this->shape,
                "symbol-{$this->ratio}" => $this->ratio,
            ],
        ]);
    }
}
