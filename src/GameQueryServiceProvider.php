<?php

namespace Lewislarsen\GameQuery;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->name('gamequery');
    }

    public function packageRegistered(): void
    {
        $this->app->bind('gamequery', function () {
            return new GameQuery();
        });
    }
}
