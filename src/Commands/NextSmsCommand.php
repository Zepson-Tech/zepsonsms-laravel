<?php

namespace NotificationChannels\NextSms\Commands;

use Illuminate\Console\Command;

class NextSmsCommand extends Command
{
    public $signature = 'laravel-zepsonsms';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
