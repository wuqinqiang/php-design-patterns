<?php

namespace Remember\Patterns\object\patterns\Decorator\Test2;

class Espresso implements CoffeeInterface
{
    public function cost()
    {
        return 2.5;
    }
}