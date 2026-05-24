<?php

if (!function_exists('qv_add_header_single_menu')) {
    function qv_add_header_single_menu(string $title, string $url = ''): array
    {
        return [
            'title' => $title,
            'url' => $url,
        ];
    }
}

if (!function_exists('qv_add_header_dropdown_menu')) {
    function qv_add_header_dropdown_menu(string $title, array $sub = []): array
    {
        return [
            'title' => $title,
            'sub' => $sub,
        ];
    }
}

if (!function_exists('qv_add_header_sub_menu')) {
    function qv_add_header_sub_menu(string $title, string $url): array
    {
        return ['title' => $title, 'url' => $url];
    }
}


if (!function_exists('qv_add_heading')) {
    function qv_add_heading(string $title): array
    {
        return [
            'type' => 'heading',
            'title' => $title,
        ];
    }
}
if (!function_exists('qv_add_single_menu')) {
    function qv_add_single_menu(string $title, string $icon, string $url = ''): array
    {
        return
            [
                'title' => $title,
                'icon' => $icon,
                'url' => $url,
            ];
    }
}

if (!function_exists('qv_add_accordion_menu')) {
    function qv_add_accordion_menu(string $title, string $icon, array $sub = []): array
    {
        return
            [
                'title' => $title,
                'icon' => $icon,
                'sub' => $sub,
            ];
    }
}
if (!function_exists('qv_add_sub_menu')) {
    function qv_add_sub_menu(string $title, string $url): array
    {
        return ['title' => $title, 'url' => $url];
    }
}
