<?php

namespace Lewislarsen\GameQuery\Games;

use Illuminate\Support\Facades\Http;

class Minecraft extends BaseGame
{
    protected string $nameAbbreviated = 'mc';

    protected string $name = 'Minecraft';

    protected int $defaultPort = 25565;

    protected ?string $joinLink = 'minecraft://';

    public function query(): array
    {
        try {
            $response = Http::timeout(60)->get("https://api.mcsrvstat.us/2/{$this->ipAddress}:{$this->defaultPort}");

            return $response->json();
        } catch (\Exception $e) {
            report($e);

            return [];
        }
    }

    public function output(): array
    {
        $serverOnline = !isset($this->query()['debug']['error']['ping']);

        return [
            'server_online' => $serverOnline,
            'game' => $this->name,
            'game_short' => $this->nameAbbreviated,
            'ip_address' => $this->ipAddress,
            'port' => $this->defaultPort,
            'query_port' => $this->queryPort,
            'join_link' => $this->joinLink . $this->ipAddress . ':' . $this->defaultPort,
            'name' => trim($this->query()['motd']['clean'][0]),
            'icon' => $this->query()['icon'] ?? null,
            'online_player_count' => $this->query()['players']['online'] ?? 0,
            'max_player_count' => $this->query()['players']['max'] ?? 0,
            'players' => isset($this->query()['players']['list']) ? implode(', ', $this->query()['players']['list']) : null,
            'errors' => $this->query()['debug']['error']['ping'] ?? null,
        ];
    }
}
