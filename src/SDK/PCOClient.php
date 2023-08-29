<?php

namespace EncoreDigitalGroup\Laravel\PlanningCenter\SDK;

use EncoreDigitalGroup\PlanningCenter\Client as SDKClient;

class PCOClient
{
    public function create()
    {
        $PCOClient = new SDKClient;
        $PCOClient->configure([
            'authorization' => config('planningcenter.authorization.type') . ' ' . config('planningcenter.authorization.key'),
            'calendar' => [
                'apiVersion' => config('planningcenter.calendar.apiVersion'),
            ],
        ]);

        return $PCOClient;
    }
}
