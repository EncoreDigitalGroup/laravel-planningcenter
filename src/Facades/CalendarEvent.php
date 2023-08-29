<?php

namespace EncoreDigitalGroup\PlanningCenter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EncoreDigitalGroup\PlanningCenter\CalendarEvent
 */
class CalendarEvent extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \EncoreDigitalGroup\PlanningCenter\CalendarEvent::class;
    }
}
