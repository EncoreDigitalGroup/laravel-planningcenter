<?php

namespace EncoreDigitalGroup\PlanningCenter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EncoreDigitalGroup\PlanningCenter\PlanningCenter
 */
class PlanningCenter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \EncoreDigitalGroup\PlanningCenter\PlanningCenter::class;
    }
}
