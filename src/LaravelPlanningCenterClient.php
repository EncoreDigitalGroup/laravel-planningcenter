<?php

/*
 * Encore Digital Group - Laravel Planning Center
 * Copyright (c) 2023-2024. Encore Digital Group
 */

namespace EncoreDigitalGroup\Laravel\PlanningCenter;

use EncoreDigitalGroup\PlanningCenter\ClientConfiguration;
use EncoreDigitalGroup\PlanningCenter\PlanningCenterClient;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;

class LaravelPlanningCenterClient extends PlanningCenterClient
{
    protected LaravelClientConfiguration|ClientConfiguration $config;
    protected GuzzleClient $client;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->config = $this->setConfiguration($config);
        $this->createClient();
    }

    public function setConfiguration(LaravelClientConfiguration|ClientConfiguration $config): LaravelClientConfiguration
    {
        $this->config = $config;

        return $this->config;
    }

    public function getConfiguration(): LaravelClientConfiguration
    {
        return $this->config;
    }

    public function createClient(): void
    {
        $handler = new CurlHandler;
        $stack = HandlerStack::create($handler);
        $this->client = new GuzzleClient([
            'base_uri' => 'https://api.planningcenteronline.com',
            'handler' => $stack,
        ]);
    }

    public function getClient(): GuzzleClient
    {
        return $this->client;
    }
}
