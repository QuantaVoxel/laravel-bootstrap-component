<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    public function __construct(
        public string $title,

        public ?string $titleColor = null,
        public ?string $description = null,
        public string $color = 'primary',
        public bool $dismissible = false,
        public string $dismissibleColor = 'dark',
        public bool $show = true,
        public string $icon = 'solar:shield-warning-outline',
        public string $iconColor = 'primary',
        public bool $withoutIcon = false,
        public string $type = "alert", // alert, solid , light
        public ?string $borderType = "solid" , // solid, dashed, dotted
    )
    {
        if(!$this->titleColor){
            $this->titleColor = $this->color;
        }
    }

    public function render()
    {


        return view('bootstrap::components.alert', [
            'class' => [
                "alert",
                "{$this->type}-{$this->color}" ,
                "alert-dismissible" => $this->dismissible,
                "d-flex align-items-center p-5",
                "d-none" => !$this->show,
                "border-{$this->borderType}",
                "border-{$this->color}"
            ],
        ]);
    }
}
