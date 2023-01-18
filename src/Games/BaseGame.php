<?php

namespace Lewislarsen\GameQuery\Games;

class BaseGame
{
    protected string $nameAbbreviated;

    protected string $name = '';

    protected string $ipAddress;
    protected int $defaultPort = 0;
    protected ?int $queryPort;

    protected ?string $joinLink;

    public function __construct(string $ipAddress, int $defaultPort, int $queryPort = null)
    {
        $this->ipAddress = $ipAddress;
        $this->defaultPort = $defaultPort;
        $this->queryPort = $queryPort;
    }

    public function query(): array
    {
        return [];
    }

    public function output(): array
    {
        return $this->query();
    }
}
