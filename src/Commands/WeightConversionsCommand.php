<?php

namespace A909M\WeightConversions\Commands;

use Illuminate\Console\Command;

class WeightConversionsCommand extends Command
{
    public $signature = 'weight-conversions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
