<?php

namespace NotificationChannels\ZepsonSms;

use NotificationChannels\ZepsonSms\Commands\ZepsonSmsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ZepsonSms\SDK\ZepsonSms as ZepsonSmsSdk;
use NotificationChannels\ZepsonSms\Exceptions\InvalidConfiguration;


class ZepsonSmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /**
         *
         */
        $package
            ->name('zepsonsms')
            ->hasConfigFile()
            ->hasCommand(ZepsonSmsCommand::class);
    }


    public function bootingPackage()

    {
        /*
         * Bootstrap the application services.
         */
        $this->app->when(ZepsonSmsChannel::class)
            ->needs(ZepsonSmsSdk::class)
            ->give(function () {
                return $this->makeZepsonSmsService();
            });
    }

    public function registeringPackage()
    {
        $this->app->bind('zepsonsmsservice', function ($app) {
            return $this->makeZepsonSmsService();
        });
    }

    /**
     * @return ZepsonSmsSdk
     * @throws InvalidConfiguration
     */
    public function makeZepsonSmsService(): ZepsonSmsSdk
    {
        $apiKey = config('zepsonsms.apiKey');
        $environment = config('zepsonsms.environment', 'production');

        if (is_null($apiKey)) {
            throw InvalidConfiguration::configurationNotSet();
        }

        return new ZepsonSmsSdk([
            'apiKey' => $apiKey,
            'environment' => $environment,
        ]);
    }
}
