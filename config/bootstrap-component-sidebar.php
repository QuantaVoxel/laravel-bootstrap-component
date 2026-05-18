<?php

return [
    add_heading('Dashboard'),
    add_single_menu('Dashboard', 'solar:buildings-3-bold', '/'),
    add_accordion_menu('Components', 'solar:box-bold', [
        add_sub_menu('Accordion', '/'),
    ])
];
