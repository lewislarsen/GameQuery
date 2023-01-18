<?php

namespace Lewislarsen\GameQuery;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lewislarsen\GameQuery\Commands\GameQueryCommand;

class GameQueryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('gamequery')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_gamequery_table')
            ->hasCommand(GameQueryCommand::class);
    }
}
