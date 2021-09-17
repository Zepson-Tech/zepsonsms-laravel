<?php

namespace NotificationChannels\NextSms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NotificationChannels\NextSms\Commands\NextSmsCommand;

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
