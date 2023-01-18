<?php

namespace Lewislarsen\GameQuery\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lewislarsen\GameQuery\GameQuery
 */
class GameQuery extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lewislarsen\GameQuery\GameQuery::class;
    }
}
