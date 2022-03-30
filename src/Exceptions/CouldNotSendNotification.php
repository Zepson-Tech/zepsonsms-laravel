<?php

namespace NotificationChannels\ZepsonSms\Exceptions;

use Exception;

class CouldNotSendNotification extends Exception
{
    /**
     * @param string $error
     * @return CouldNotSendNotification
     */
    public static function serviceRespondedWithAnError(string $error): self
    {
        return new static("Zepson service responded with an error: {$error}");
    }
}
