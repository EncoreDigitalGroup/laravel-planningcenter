<?php

namespace EncoreDigitalGroup\Laravel\PlanningCenter\SDK\Groups;

class TagGroup
{
    public function all($PCOClient, $query = []): string
    {
        $TagGroup = new \EncoreDigitalGroup\PlanningCenter\Groups\TagGroup;

        return $TagGroup->all($PCOClient, $query);
    }

    public function tag($PCOClient, $id, $tag = '', $query = []): string
    {
        $TagGroup = new \EncoreDigitalGroup\PlanningCenter\Groups\TagGroup;

        return $TagGroup->tag($PCOClient, $id, $tag, $query);
    }
}
