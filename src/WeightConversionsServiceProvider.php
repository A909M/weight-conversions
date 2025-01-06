<?php

namespace A909M\WeightConversions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use A909M\WeightConversions\Commands\WeightConversionsCommand;

class WeightConversionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('weight-conversions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_weight_conversions_table')
            ->hasCommand(WeightConversionsCommand::class);
    }
}