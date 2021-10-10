<?php

namespace NotificationChannels\ZepsonSms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NotificationChannels\ZepsonSms\ZepsonSms
 */
class ZepsonSmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zepsonsmsservice';
    }
}
