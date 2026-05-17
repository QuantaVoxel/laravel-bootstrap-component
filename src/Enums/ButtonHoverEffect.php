<?php

namespace Quantavoxel\LaravelBootstrapComponent\Enums;

enum ButtonHoverEffect: string
{
    case ELEVATE_UP = 'hover-elevate-up';
    case ELEVATE_DOWN = 'hover-elevate-down';
    case SCALE = 'hover-scale';
    case ROTATE_END = 'hover-rotate-end';
    case ROTATE_START = 'hover-rotate-start';
}