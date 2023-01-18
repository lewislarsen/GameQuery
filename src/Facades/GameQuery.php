<?php

namespace Lewislarsen\GameQuery\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static self gameType(string $gameType)
 * @method static self ipAddress(string $ipAddress)
 * @method static self port(int $port)
 * @method static self queryPort(int $queryPort)
 * @method static array retrieve()
 *
 * @see \Lewislarsen\GameQuery\GameQuery
 */
class GameQuery extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Lewislarsen\GameQuery\GameQuery::class;
    }
}
