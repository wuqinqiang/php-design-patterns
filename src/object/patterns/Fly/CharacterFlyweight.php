<?php

namespace Remember\Patterns\object\patterns\Fly;

class CharacterFlyweight implements FlyweightInterface
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name=$name;
    }

    public function render(string $font): string
    {
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}