<?php

namespace Remember\Patterns\object\patterns\Fly;

Interface FlyweightInterface
{
    public function render(string $extrinsicState): string;
}