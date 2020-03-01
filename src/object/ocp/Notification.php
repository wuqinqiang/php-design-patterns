<?php

namespace Remember\Patterns\object\ocp;

class Notification
{
    public function notice($message)
    {
        echo $message;
    }
}