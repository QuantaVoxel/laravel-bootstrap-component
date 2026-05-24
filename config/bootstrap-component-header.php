<?php

return [
    qv_add_header_single_menu('Dashboards', '/'),
    qv_add_header_dropdown_menu('Pages', [
        qv_add_header_sub_menu('About', '/about'),
        qv_add_header_sub_menu('Contact', '/contact'),
    ]),
    qv_add_header_dropdown_menu('Apps', [
        qv_add_header_sub_menu('Projects', '/apps/projects'),
    ]),
];