<?php

namespace EncoreDigitalGroup\Laravel\PlanningCenter;

use EncoreDigitalGroup\Laravel\PlanningCenter\Facades\CalendarEvent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ServiceProvider extends PackageServiceProvider
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
            ->hasConfigFile();
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/planningcenter.php' => config_path('planningcenter.php'),
        ], 'laravel-planningcenter-config');
    }

    //    public function register()
    //    {
    //        //
    //        $this->app->bind('calendarEvent',function(){
    //            return new CalendarEvent();
    //        });
    //    }
}
