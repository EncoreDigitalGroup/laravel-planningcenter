<?php

// config for EncoreDigitalGroup/Event
return [
    'authorization' => [
        'type' => env('PLANNING_CENTER_AUTHORIZATION_TYPE', 'Basic'),
        'key' => env('PLANNING_CENTER_AUTHORIZATION_KEY', ''),
    ],
    'calendar' => [
        'apiVersion' => env('PLANNING_CENTER_CALENDAR_API_VERSION', '2021-07-20'),
    ],
];
