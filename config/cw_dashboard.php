<?php

return [
    'site' => [],
    'admin' => [
        'layout' => env('CW_ADMIN_LAYOUT', 'layouts.app'),
        'views' => env('CW_ADMIN_VIEWS', 'dashboard::'),
        'route' => [
            'index' => env('CW_DASHBOARD_INDEX', '/')
        ]
    ]
];
