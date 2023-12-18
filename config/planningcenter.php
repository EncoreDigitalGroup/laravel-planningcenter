<?php

return [
    'authorization' => [
        'type' => env('PLANNING_CENTER_AUTHORIZATION_TYPE', 'Basic'),
        'key' => env('PLANNING_CENTER_AUTHORIZATION_KEY', ''),
    ],
    'calendar' => [
        'apiVersion' => env('PLANNING_CENTER_CALENDAR_API_VERSION', '2021-07-20'),
    ],
    'groups' => [
        'apiVersion' => env('PLANNING_CENTER_GROUPS_API_VERSION', '2023-07-10'),
    ],
    'people' => [
        'apiVersion' => env('PLANNING_CENTER_PEOPLE_API_VERSION', '2023-02-15'),
    ],
    'timezone' => env('PLANNING_CENTER_TIMEZONE', 'UTC'),
];
