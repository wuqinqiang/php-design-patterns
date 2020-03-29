<?php

namespace Remember\Patterns\object\patterns\Decorator\Test2;

class Mocha extends Dressing
{
    public function cost()
    {
        return $this->coffee->cost() + 0.5;
    }
}