<?php

namespace NotificationChannels\ZepsonSms\Exceptions;

use Exception;

class InvalidConfiguration extends Exception
{
    public static function configurationNotSet(): self
    {
        return new static('To send notifications via Zepsonsms you need to add credentials in the `zepsonsms` configs.');
    }
}
