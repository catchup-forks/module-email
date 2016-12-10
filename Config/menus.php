<?php

return [
    'backend_sidebar' => [
        [
            'route' => 'admin.contact.manager',
            'text' => 'Contact Mail Manager',
            'icon' => 'fa-envelope',
            'order' => 6,
            'permission' => 'read@contact_backend',
            'activePattern' => '\/contact\/*',
        ],
    ],
];
