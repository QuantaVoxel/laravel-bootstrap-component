<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $header = null,
        public ?string $toolbar = null,
        public ?string $body = null,
        public ?string $footer = null,
        public bool $shadow = true,
        public ?string $bg = null,
        public bool $scroll = false,
        public ?string $height = null,
        public bool $collapsible = false,
        public bool $expanded = true,
        public bool $flush = false,
        public bool $px0 = false,
        public bool $bordered = false,
        public bool $dashed = false,
        public ?string $stretch = null,
        public ?string $bodyClass = null,
        public string $tag = 'div',
        public bool $withoutBody = false,
    ) {
    }

    public function render()
    {
        return view('bootstrap::components.card', [
            'cardClasses' => [
                'card',
                'shadow-sm' => $this->shadow && !$this->bordered && !$this->dashed,
                "bg-{$this->bg}" => $this->bg,
                'card-flush' => $this->flush,
                'card-px-0' => $this->px0,
                'card-bordered' => $this->bordered,
                'card-dashed' => $this->dashed,
                "card-{$this->stretch}" => $this->stretch,
            ],
            'bodyClasses' => [
                'card-body',
                'card-scroll' => $this->scroll,
                "h-{$this->height}" => $this->scroll && $this->height,
                $this->bodyClass => $this->bodyClass,
            ],
        ]);
    }
}
