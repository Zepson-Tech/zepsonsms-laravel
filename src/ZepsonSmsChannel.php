<?php

namespace NotificationChannels\ZepsonSms;

use Exception;
use Illuminate\Notifications\Notification;
use NotificationChannels\ZepsonSms\Exceptions\CouldNotSendNotification;
use Str;
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
        $phone_field = $message->getPhoneField();

        if (! $phoneNumber = $notifiable->routeNotificationFor('ZepsonSms')) {
            $phoneNumber = $this->formatContacts($notifiable->$phone_field, config('zepsonsms.country_code'));
        }

        try {
            dd($this->ZepsonSms->sendSms([
                'recipient' => $phoneNumber,
                'message' => $message->getContent(),
                'sender_id' => $message->getSender() ?? config('zepsonsms.from'),
            ]));
        } catch (Exception $e) {
            throw CouldNotSendNotification::serviceRespondedWithAnError($e->getMessage());
        }
    }

    public function formatContacts($contact, $countryCode)
    {
        $phoneNumbers = null;

        $totalDigits = Str::length($contact);
        if ($totalDigits == 10) {
            $phoneNumbers = $countryCode.Str::substr($contact, 1, 9);
        }
        if ($totalDigits == 12) {
            $phoneNumbers = $contact;
        }
        if ($totalDigits == 13) {
            $phoneNumbers = $countryCode::substr($contact, 1, 13);
        }
        if ($totalDigits == 14) {
            $phoneNumbers = $countryCode.Str::substr($contact, 5, 14);
        }


        // dd($phoneNumbers);
        return $phoneNumbers;
    }
}
