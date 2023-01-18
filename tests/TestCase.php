<?php

namespace Lewislarsen\GameQuery\Tests;

use Lewislarsen\GameQuery\GameQueryServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            GameQueryServiceProvider::class,
        ];
    }
}
