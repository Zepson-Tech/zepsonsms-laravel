<?php

namespace NotificationChannels\ZepsonSms\Commands;

use Illuminate\Console\Command;

class ZepsonSmsCommand extends Command
{
    public $signature = 'laravel-zepsonsms';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
