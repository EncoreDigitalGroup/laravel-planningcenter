<?php

namespace EncoreDigitalGroup\Laravel\PlanningCenter\Facades;

use EncoreDigitalGroup\Laravel\PlanningCenter\SDK\Calendar\Event;
use Illuminate\Support\Facades\Facade;

class CalendarEvent extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Event::class;
    }
}
