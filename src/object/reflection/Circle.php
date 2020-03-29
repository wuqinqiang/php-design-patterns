<?php

namespace Remember\Patterns\object\reflection;

class Circle
{
    public $radius;

    public $center;

    const test=2;

    public function __construct(Point $point, $radius = 1)
    {
        $this->center = $point;
        $this->radius = $radius;
    }

    public function printCenter()
    {
        var_dump('center coordinate is (%d, %d)', $this->center->x, $this->center->y);
    }

    public function area()
    {
        return 3.14 * pow($this->radius, 2);
    }
}