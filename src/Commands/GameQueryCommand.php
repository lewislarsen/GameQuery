<?php

namespace Lewislarsen\GameQuery\Commands;

use Illuminate\Console\Command;

class GameQueryCommand extends Command
{
    public $signature = 'gamequery';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
