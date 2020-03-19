<?php
namespace Remember\Patterns\object\patterns\Observer;

class WechatService implements ObServiceInterface
{
    public function update()
    {
        sleep(1);
        file_put_contents('test.log', '微信通知', FILE_APPEND);
    }
}