<?php

namespace EncoreDigitalGroup\PlanningCenter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use EncoreDigitalGroup\PlanningCenter\Commands\PlanningCenterCommand;

class PlanningCenterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-planningcenter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-planningcenter_table')
            ->hasCommand(PlanningCenterCommand::class);
    }
}
