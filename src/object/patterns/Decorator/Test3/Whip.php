<?php
namespace Remember\Patterns\object\patterns\Decorator\Test3;

class Whip extends Dressing
{
    public function cost(Espresso $espresso, \Closure $closure)
    {
        $espresso->cost=$espresso->cost()+0.1;
        return $closure($espresso);
    }
}