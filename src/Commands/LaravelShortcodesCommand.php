<?php

namespace Designbycode\LaravelShortcodes\Commands;

use Illuminate\Console\Command;

class LaravelShortcodesCommand extends Command
{
    public $signature = 'laravel-shortcodes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
