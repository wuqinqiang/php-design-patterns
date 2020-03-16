<?php
namespace Remember\Patterns\object\patterns\Decorator;

class JSonRender extends RendererDecorator
{
    public function renderDate(): string
    {
        var_dump('Json');
        return json_encode($this->wap->renderDate());
    }
}