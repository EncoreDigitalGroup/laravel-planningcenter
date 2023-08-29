<?php

namespace EncoreDigitalGroup\Laravel\PlanningCenter\SDK;

use EncoreDigitalGroup\PlanningCenter\Client as PCOClient;

class Client
{
    public function create()
    {
        $PCOClient = new PCOClient;
        $PCOClient->configure([
            'authorization' => config('planningcenter.authorization.type') . ' ' . config('planningcenter.authorization.key'),
            'calendar' => [
                'apiVersion' => config('planningcenter.calendar.apiVersion'),
            ],
        ]);

        return $PCOClient;
    }
}
