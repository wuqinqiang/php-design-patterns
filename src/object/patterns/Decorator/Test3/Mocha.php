<?php
namespace Remember\Patterns\object\patterns\Decorator\Test3;

class Mocha extends Dressing
{
    public function cost(Espresso $espresso, \Closure $closure)
    {
        $espresso->cost=$espresso->cost()+0.5;
        return $closure($espresso);
    }
}