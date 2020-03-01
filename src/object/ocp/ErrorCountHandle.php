<?php

namespace Remember\Patterns\object\ocp;

class ErrorCountHandle extends AlertHandle
{
    public function check(ApiStatInfo $apiStatInfo)
    {
        if ($apiStatInfo->getError() > $this->rule->getMaxErrorCount()) {
            $this->notification->notice($this->rule->getErrorCountMessage());
        }
    }
}