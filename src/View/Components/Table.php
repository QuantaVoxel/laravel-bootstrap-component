<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public function __construct(
        public bool $responsive = true,
        public bool $bordered = false,
        public bool $rowBordered = false,
        public bool $rowDashed = false,
        public ?string $rowColor = null,
        public bool $striped = false,
        public bool $rounded = false,
        public bool $flush = false,
        public bool $hover = false,
        public ?int $gy = null,
        public ?int $gs = null,
        public ?int $gx = null,
    ) {
    }

    public function render()
    {
        return view('bootstrap::components.table', [
            'tableClasses' => [
                'table',
                'table-bordered' => $this->bordered,
                'table-row-bordered' => $this->rowBordered,
                'table-row-dashed' => $this->rowDashed,
                "table-row-{$this->rowColor}" => $this->rowColor,
                'table-striped' => $this->striped,
                'table-rounded' => $this->rounded,
                'table-flush' => $this->flush,
                'table-hover' => $this->hover,
                "gy-{$this->gy}" => $this->gy,
                "gs-{$this->gs}" => $this->gs,
                "gx-{$this->gx}" => $this->gx,
            ],
        ]);
    }
}
