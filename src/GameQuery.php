<?php

namespace Lewislarsen\GameQuery;

use Lewislarsen\GameQuery\Exceptions\InvalidGameType;
use Lewislarsen\GameQuery\Games\Minecraft;

class GameQuery
{
    protected string $gameType;

    protected string $ipAddress;

    protected int $port;

    protected ?int $queryPort = null;

    protected array $data;

    /**
     * @throws InvalidGameType
     */
    public function gameType(string $type): self
    {
        if (! in_array($type, array_keys(GameQuery::determineGameClass()))) {
            throw new InvalidGameType();
        }

        $this->gameType = $type;

        return $this;
    }

    public function ipAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function port(int $port): self
    {
        $this->port = $port;

        return $this;
    }

    public function queryPort(int $queryPort): self
    {
        $this->queryPort = $queryPort;

        return $this;
    }

    public function retrieve(): array
    {
        if (! isset($this->gameType, $this->ipAddress, $this->port)) {
            return [];
        }

        $game = GameQuery::determineGameClass()[$this->gameType];

        $game = new $game($this->ipAddress, $this->port, $this->queryPort);

        return $game->output();
    }

    private static function determineGameClass(): array
    {
        return [
            'mc' => Minecraft::class,
        ];
    }
}
