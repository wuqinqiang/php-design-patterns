<?php

namespace Remember\Patterns\object\ocp;

abstract class AlertHandle
{
    protected $apiStatus;
    protected $rule;

    public function __construct(Rule $rule, Notification $notification)
    {
        $this->notification = $notification;
        $this->rule = $rule;
    }

    abstract function check(ApiStatInfo $apiStatInfo);
}
