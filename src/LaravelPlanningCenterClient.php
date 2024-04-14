<?php

/*
 * Encore Digital Group - Laravel Planning Center
 * Copyright (c) 2023-2024. Encore Digital Group
 */

namespace EncoreDigitalGroup\Laravel\PlanningCenter;

use EncoreDigitalGroup\PlanningCenter\PlanningCenterClient;
use EncoreDigitalGroup\SdkClientFoundation\ClientConfiguration as BaseClientConfiguration;

class LaravelPlanningCenterClient extends PlanningCenterClient
{
    public function __construct(BaseClientConfiguration $config)
    {
        parent::__construct($config);
    }
}
