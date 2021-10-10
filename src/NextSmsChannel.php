<?php

namespace NotificationChannels\ZepsonSms;

use Exception;
use Illuminate\Notifications\Notification;
use NotificationChannels\ZepsonSms\Exceptions\CouldNotSendNotification;
use ZepsonSms\SDK\ZepsonSms as ZepsonSmsSDK;

class ZepsonSmsChannel
{
    /** @var ZepsonSmsSDK */
    protected $ZepsonSms;

    /** @param ZepsonSmsSDK $ZepsonSms */
    public function __construct(ZepsonSmsSDK $ZepsonSms)
    {
        $this->ZepsonSms = $ZepsonSms;
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     *
     * @throws CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toZepsonSms($notifiable);

        if (! $phoneNumber = $notifiable->routeNotificationFor('ZepsonSms')) {
            $phoneNumber = $notifiable->phone_number;
        }

        try {
            $this->ZepsonSms->singleDestination([
                'to' => $phoneNumber,
                'text' => $message->getContent(),
                'from' => $message->getSender(),
            ]);
        } catch (Exception $e) {
            throw CouldNotSendNotification::serviceRespondedWithAnError($e->getMessage());
        }
    }
}
