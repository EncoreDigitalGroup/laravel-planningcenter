<?php

namespace EncoreDigitalGroup\Laravel\PlanningCenter\SDK\Groups;

class Group
{
    public function all($PCOClient, $query = []): string
    {
        $Group = new \EncoreDigitalGroup\PlanningCenter\Groups\Group;

        return $Group->all($PCOClient, $query);
    }

    public function mine($PCOClient, $query = []): string
    {
        $Group = new \EncoreDigitalGroup\PlanningCenter\Groups\Group;

        return $Group->mine($PCOClient, $query);
    }

    public function get($PCOClient, $id, $query = []): string
    {
        $Group = new \EncoreDigitalGroup\PlanningCenter\Groups\Group;

        return $Group->get($PCOClient, $id, $query);
    }

    public function enrollment($PCOClient, $id, $query = []): string
    {
        $Group = new \EncoreDigitalGroup\PlanningCenter\Groups\Group;

        return $Group->enrollment($PCOClient, $id, $query);
    }

    public function event($PCOClient, $id, $query = []): string
    {
        $Group = new \EncoreDigitalGroup\PlanningCenter\Groups\Group;

        return $Group->event($PCOClient, $id, $query);
    }

    public function membership($PCOClient, $id, $query = []): string
    {
        $Group = new \EncoreDigitalGroup\PlanningCenter\Groups\Group;

        return $Group->membership($PCOClient, $id, $query);
    }

    public function people($PCOClient, $id, $query = []): string
    {
        $Group = new \EncoreDigitalGroup\PlanningCenter\Groups\Group;

        return $Group->people($PCOClient, $id, $query);
    }
}
