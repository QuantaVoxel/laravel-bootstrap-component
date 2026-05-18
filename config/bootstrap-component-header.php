<?php

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