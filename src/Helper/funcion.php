<?php

if (!function_exists('add_header_single_menu')) {
    function add_header_single_menu(string $title, string $url = ''): array
    {
        return [
            'title' => $title,
            'url' => $url,
        ];
    }
}

if (!function_exists('add_header_dropdown_menu')) {
    function add_header_dropdown_menu(string $title, array $sub = []): array
    {
        return [
            'title' => $title,
            'sub' => $sub,
        ];
    }
}

if (!function_exists('add_header_sub_menu')) {
    function add_header_sub_menu(string $title, string $url): array
    {
        return ['title' => $title, 'url' => $url];
    }
}


if (!function_exists('add_heading')) {
    function add_heading(string $title): array
    {
        return [
            'type' => 'heading',
            'title' => $title,
        ];
    }
}
if (!function_exists('add_single_menu')) {
    function add_single_menu(string $title, string $icon, string $url = ''): array
    {
        return
            [
                'title' => $title,
                'icon' => $icon,
                'url' => $url,
            ];
    }
}

if (!function_exists('add_accordion_menu')) {
    function add_accordion_menu(string $title, string $icon, array $sub = []): array
    {
        return
            [
                'title' => $title,
                'icon' => $icon,
                'sub' => $sub,
            ];
    }
}
if (!function_exists('add_sub_menu')) {
    function add_sub_menu(string $title, string $url): array
    {
        return ['title' => $title, 'url' => $url];
    }
}
