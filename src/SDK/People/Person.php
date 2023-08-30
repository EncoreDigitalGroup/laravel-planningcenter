<?php

namespace EncoreDigitalGroup\Laravel\PlanningCenter\SDK\People;

class Person
{
    public function all($PCOClient, $query = [])
    {
        $Person = new ˘\EncoreDigitalGroup\PlanningCenter\People\Person;

        return $Person->all($PCOClient, $query);
    }

    public function get($PCOClient, $id, $query = [])
    {
        $Person = new \EncoreDigitalGroup\PlanningCenter\People\Person;

        return $Person->get($PCOClient, $id, $query);
    }
}
