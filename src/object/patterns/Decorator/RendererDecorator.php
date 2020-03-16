<?php

namespace Remember\Patterns\object\patterns\Decorator;
abstract class RendererDecorator implements RenderableInterface
{
    protected $wap;

    public function __construct(RenderableInterface $renderable)
    {
        $this->wap=$renderable;
    }

}