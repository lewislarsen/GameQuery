<?php

namespace Lewislarsen\GameQuery\Exceptions;

use Exception;

final class InvalidGameType extends Exception
{
    public static function make(?string $name): self
    {
        return new InvalidGameType("Invalid game type `{$name}`");
    }
}
