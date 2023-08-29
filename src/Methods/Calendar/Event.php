<?php

namespace EncoreDigitalGroup\Laravel\PlanningCenter\SDK\Calendar;

class Event
{
    public function all($PCOClient, $query = [])
    {
        $Event = new \EncoreDigitalGroup\PlanningCenter\Calendar\Event();
        $Query = $query;
        return $Event->all($PCOClient, $Query);
    }
}
