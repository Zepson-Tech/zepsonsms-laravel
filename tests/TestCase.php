<?php

namespace NotificationChannels\NextSms\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use NotificationChannels\NextSms\NextSmsServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            NextSmsServiceProvider::class,
        ];
    }
}
