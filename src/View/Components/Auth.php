<?php

namespace Quantavoxel\LaravelBootstrapComponent\View\Components;

use Illuminate\View\Component;

class Auth extends Component
{

    /**
     * @param string $pageTitle
     * @param 'corporate'|'overlay'|'creative'|'fancy' $layout
     * @param bool $login
     * @param bool $register
     * @param bool $forgotPassword
     * @param bool $resetPassword
     */
    public function __construct(
        public string  $pageTitle = 'Authentication',

        public string  $layout = 'corporate',
        public string  $mode = 'corporate'
    )
    {
        // Validate layout
        $allowedLayouts = ['corporate', 'overlay', 'creative', 'fancy'];
        if (!in_array($this->layout, $allowedLayouts, true)) {
            $this->layout = 'corporate'; // fallback
        }

        // Validate mode and adjust titles dynamically if they weren't customized
        $allowedModes = ['login', 'register', 'forgot', 'reset'];
        if (!in_array($this->mode, $allowedModes, true)) {
            $this->mode = 'login';
        }
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bootstrap::components.auth.index');
    }
}