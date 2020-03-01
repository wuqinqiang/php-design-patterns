<?php

namespace Remember\Patterns\object\ocp;
class Rule
{
    public function getMaxErrorCount()
    {
        return 5;
    }

    public function getMaxOutTime()
    {
        return 10;
    }

    public function getErrorCountMessage()
    {
        return "超出错误限制了";
    }

    public function getTimeOutMessage()
    {
        return "请求超时了";
    }
}