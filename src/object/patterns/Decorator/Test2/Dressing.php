<?php

namespace Remember\Patterns\object\patterns\Decorator\Test2;

class Dressing implements CoffeeInterface
{

    protected $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    public function cost()
    {
        return $this->coffee->cost();
    }
}