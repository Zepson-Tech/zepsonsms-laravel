<?php

namespace NotificationChannels\ZepsonSms\Tests;

use NotificationChannels\ZepsonSms\ZepsonSmsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            ZepsonSmsServiceProvider::class,
        ];
    }
}
