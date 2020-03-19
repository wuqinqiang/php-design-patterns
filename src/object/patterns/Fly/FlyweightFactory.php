<?php

namespace Remember\Patterns\object\patterns\Fly;

class FlyweightFactory implements \Countable
{
    protected $pool = [];

    public function get($name): CharacterFlyweight
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFlyweight($name);
        }

        return $this->pool[$name];
    }

    public function count(): int
    {
        return count($this->pool);
    }

}