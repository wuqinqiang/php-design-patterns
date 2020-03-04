<?php
namespace Remember\Patterns\object\Di;

class SmsMessage implements Message
{
    public function send()
    {
        echo "短信发送通知";
    }
}