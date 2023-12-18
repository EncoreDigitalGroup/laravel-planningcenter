<?php

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
