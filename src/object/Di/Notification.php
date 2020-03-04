<?php

namespace Remember\Patterns\object\Di;

class Notification
{
    private $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function notification()
    {
        $this->message->send();
    }
}
