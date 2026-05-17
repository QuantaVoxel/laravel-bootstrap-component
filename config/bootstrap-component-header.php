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

return [
    add_header_single_menu('Dashboards', '/'),
    add_header_dropdown_menu('Pages', [
        add_header_sub_menu('About', '/about'),
        add_header_sub_menu('Contact', '/contact'),
    ]),
    add_header_dropdown_menu('Apps', [
        add_header_sub_menu('Projects', '/apps/projects'),
    ]),
];