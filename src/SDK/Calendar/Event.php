<?php

namespace EncoreDigitalGroup\Laravel\PlanningCenter\SDK\Calendar;

class Event
{
    public function all($PCOClient, $query = []): string
    {
        $Event = new \EncoreDigitalGroup\PlanningCenter\Calendar\Event;

        return $Event->all($PCOClient, $query);
    }

    public function future($PCOClient, $query = []): string
    {
        $Event = new \EncoreDigitalGroup\PlanningCenter\Calendar\Event;

        return $Event->future($PCOClient, $query);
    }

    public function get($PCOClient, $id, $query = []): string
    {
        $Event = new \EncoreDigitalGroup\PlanningCenter\Calendar\Event;

        return $Event->get($PCOClient, $id, $query);
    }

    public function instance($PCOClient, $id, $instance = '', $query = []): string
    {
        $Event = new \EncoreDigitalGroup\PlanningCenter\Calendar\Event;

        return $Event->instance($PCOClient, $id, $instance, $query);
    }

    public function connection($PCOClient, $id, $connection = '', $query = []): string
    {
        $Event = new \EncoreDigitalGroup\PlanningCenter\Calendar\Event;

        return $Event->connection($PCOClient, $id, $connection, $query);
    }
}
