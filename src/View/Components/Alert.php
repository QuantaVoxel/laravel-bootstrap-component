<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;

    public string $message;
    public  string $color;

    public function __construct(string $type = 'info', string $message = '')
    {
        $this->type = $type;
        $this->message = $message;

        $this->color = match ($type) {
            'success' => 'alert-success',
            'info' => 'alert-info',
            'warning' => 'alert-warning',
            'danger' => 'alert-danger',
            default => 'alert-primary',
        };

    }
    public function render()
    {
        return view('bootstrap::components.alert');
    }
}
