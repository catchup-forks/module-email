<?php

return [
    'backend_sidebar' => [
        [
            'route' => 'backend.contact.manager',
            'text' => 'Contact Mail Manager',
            'icon' => 'fa-envelope',
            'order' => 6,
            'permission' => 'read@contact_backend',
            'activePattern' => '\/contact\/*',
        ]
    ],
];
