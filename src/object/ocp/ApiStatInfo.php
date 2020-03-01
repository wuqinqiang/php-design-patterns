<?php

namespace Remember\Patterns\object\ocp;

class ApiStatInfo
{
    private $errorCount;

    public $timeout;

    private $requestCount;


    public function setTimeOut(int $time): self
    {
        $this->timeout = $time;
        return $this;
    }

    public function setRequestCount(int $count): self
    {
        $this->errorCount = $count;
        return $this;
    }

    public function getError()
    {
        return $this->errorCount;
    }

    public function getTimeOut()
    {
        return $this->timeout;
    }
}