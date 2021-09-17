<?php

namespace NotificationChannels\NextSms;

use NotificationChannels\NextSms\Commands\NextSmsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NextSmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /**
         *
         */
        $package
            ->name('laravel-zepsonsms')
            ->hasConfigFile()
            ->hasCommand(NextSmsCommand::class);
    }
}
