<?php

/*
 * Encore Digital Group - Laravel Planning Center
 * Copyright (c) 2023-2024. Encore Digital Group
 */

namespace EncoreDigitalGroup\Laravel\PlanningCenter;

use EncoreDigitalGroup\PlanningCenter\ClientConfiguration;

class LaravelClientConfiguration extends ClientConfiguration
{
    protected string $authorization;
    protected array $calendar;
    protected array $groups;
    protected array $people;

    public function __construct()
    {
        parent::__construct();
        $this->calendar = [
            'apiVersion' => $this->getCalenderApiVersion(),
        ];
        $this->groups = [
            'apiVersion' => $this->getGroupsApiVersion(),
        ];
        $this->people = [
            'apiVersion' => $this->getPeopleApiVersion(),
        ];
    }

    public function setAuthorization(?string $authorization = null): void
    {
        $this->authorization = $authorization ?? $this->getAuthorization();
    }

    public function getAuthorization(): string
    {
        return $this->authorization ?? $this->getDefaultAuthorization();
    }

    public function setCalendarApiVersion(?string $version = null): void
    {
        $this->calendar['apiVersion'] = $version ?? $this->getCalenderApiVersion();
    }

    public function getCalenderApiVersion(): string
    {
        return $this->calendar['apiVersion'] ?? config('planningcenter.calendar.apiVersion');
    }

    public function setGroupsApiVersion(?string $version = null): void
    {
        $this->groups['apiVersion'] = $version ?? $this->getGroupsApiVersion();
    }

    public function getGroupsApiVersion(): string
    {
        return $this->groups['apiVersion'] ?? config('planningcenter.groups.apiVersion');
    }

    public function setPeopleApiVersion(?string $version = null): void
    {
        $this->people['apiVersion'] = $version ?? $this->getPeopleApiVersion();
    }

    public function getPeopleApiVersion(): string
    {
        return $this->people['apiVersion'] ?? config('planningcenter.people.apiVersion');
    }

    protected function getDefaultAuthorization(): string
    {
        $authorizationType = config('planningcenter.authorization.type');
        $authorizationKey = base64_encode(config('planningcenter.authorization.key'));

        return $authorizationType . ' ' . $authorizationKey;
    }
}
