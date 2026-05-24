<?php

return [
    qv_add_heading('Dashboard'),
    qv_add_single_menu('Dashboard', 'solar:buildings-3-bold', '/'),
    qv_add_accordion_menu('Components', 'solar:box-bold', [
        qv_add_sub_menu('Accordion', '/'),
    ])
];
