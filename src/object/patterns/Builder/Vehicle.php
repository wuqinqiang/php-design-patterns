<?php

namespace Remember\Patterns\object\patterns\Builder;

abstract class Vehicle
{
    private $data = [];

    public function setPart($key, $val)
    {
        $this->data[$key] = $val;
    }
}