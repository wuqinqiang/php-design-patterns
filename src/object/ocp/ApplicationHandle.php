<?php

namespace Remember\Patterns\object\ocp;

class ApplicationHandle
{
    protected $handles = [];

    public function addHandle(AlertHandle $handle)
    {
        $this->handles[] = $handle;
    }

    public function init()
    {
        $rule = new Rule();
        $notice = new Notification();
        $this->addHandle(new ErrorCountHandle($rule, $notice));
        $this->addHandle(new TimeOutHandle($rule, $notice));
    }

    public function check(ApiStatInfo $apiStatInfo)
    {
        foreach ($this->handles as $handle) {
            $handle->check($apiStatInfo);
        }
    }
}