<?php

use Lewislarsen\GameQuery\Facades\GameQuery;

it('can retrieve server details and determine if it is online', function () {

    $gameServer = GameQuery::gameType('mc')->ipAddress('play.hypixel.net')->port(25565)->retrieve();

    $this->assertTrue($gameServer['server_online']);
    $this->assertEquals($gameServer['game'], 'Minecraft');
    $this->assertEquals($gameServer['game_short'], 'mc');
    $this->assertEquals($gameServer['ip_address'], 'play.hypixel.net');
    $this->assertEquals($gameServer['port'], 25565);
    $this->assertEquals($gameServer['query_port'], null);
    $this->assertEquals($gameServer['join_link'], 'minecraft://play.hypixel.net:25565');
    $this->assertEquals($gameServer['name'], str_contains($gameServer['name'], 'Hypixel Network'));
    $this->assertGreaterThan(0, $gameServer['online_player_count']);
    $this->assertEquals(100000, $gameServer['max_player_count']);
    $this->assertNull($gameServer['errors']);
});

it('can retrieve server details and determine that it is offline', function () {

    $gameServer = GameQuery::gameType('mc')->ipAddress('localhost')->port(25565)->retrieve();

    $this->assertFalse($gameServer['server_online']);
    $this->assertNotNull($gameServer['errors']);
});

it('throws an exception if an invalid game is provided', function () {

    GameQuery::gameType('invalid')->ipAddress('localhost')->port(25565)->retrieve();
})->throws(\Exception::class);
