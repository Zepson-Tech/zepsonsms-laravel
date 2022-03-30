<?php

namespace NotificationChannels\ZepsonSms;

class ZepsonSmsMessage
{
    /** @var string */
    protected $content;

    /** @var string|null */
    protected $from;

    /** @var string|null */
    protected $phoneField;

    /**
     * Set content for this message.
     */
    public function content(string $content): self
    {
        $this->content = trim($content);

        return $this;
    }

    /**
     * Set phone db field for this message.
     */
    public function phoneField(string $phoneField): self
    {
        $this->phoneField = trim($phoneField);

        return $this;
    }

    /**
     * Set sender for this message.
     */
    public function from(string $from): self
    {
        $this->from = trim($from);

        return $this;
    }

    /**
     * Get message content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Get sender info.
     *
     * @return string
     */
    public function getSender()
    {
        return $this->from ?? config('zepsonsms.from');
    }

    /**
     * Get phone db field.
     *
     * @return string
     */
    public function getPhoneField()
    {
        return $this->phoneField ?? 'phone_number';
    }
}
