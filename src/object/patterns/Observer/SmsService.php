<?php

namespace Remember\Patterns\object\patterns\Observer;

class SmsService implements ObServiceInterface
{
    public function update()
    {
        sleep(10);
        file_put_contents('test.log', '短信通知', FILE_APPEND);
    }
}