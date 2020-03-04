<?php

namespace Remember\Patterns\object\Di;

class EmailMessage implements Message
{
    public function send()
    {
        echo "邮件发送通知";
    }
}