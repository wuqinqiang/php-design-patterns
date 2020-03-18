<?php

namespace Remember\Patterns\object\patterns\Facade;
class WeChatMessage implements MessageInterface
{
    public function send(string $username)
    {
        echo $username . '购买课程成功'.PHP_EOL;
    }
}