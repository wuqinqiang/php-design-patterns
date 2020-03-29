<?php

namespace Remember\Patterns\object\patterns\Decorator\Test3;
class Dressing
{
    public function cost(Espresso $espresso, \Closure $closure)
    {
        return  ($espresso);
    }
}