<?php

namespace NotificationChannels\NextSms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NotificationChannels\NextSms\NextSms
 */
class NextSmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-zepsonsms';
    }
}
