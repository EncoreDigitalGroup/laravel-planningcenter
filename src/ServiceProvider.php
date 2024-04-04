<?php

/*
 * Encore Digital Group - Laravel Planning Center
 * Copyright (c) 2023-2024. Encore Digital Group
 */

namespace EncoreDigitalGroup\Laravel\PlanningCenter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-planningcenter')
            ->hasConfigFile('planningcenter');
    }
}
