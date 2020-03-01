<?php

namespace Remember\Patterns\object\ocp;

class TimeOutHandle extends AlertHandle
{
    public function check(ApiStatInfo $apiStatInfo)
    {
        if ($apiStatInfo->getTimeOut() > $this->rule->getMaxOutTime()) {
            $this->notification->notice($this->rule->getTimeOutMessage());
        }
    }
}