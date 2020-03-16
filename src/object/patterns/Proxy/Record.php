<?php

namespace Remember\Patterns\object\patterns\Proxy;

use http\Exception\InvalidArgumentException;

class Record
{

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (!isset($this->data[$name])) {
            throw new InvalidArgumentException('no');
        }

        return $this->data[$name];
    }
}