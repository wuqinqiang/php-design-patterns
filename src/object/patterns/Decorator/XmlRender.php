<?php
namespace Remember\Patterns\object\patterns\Decorator;

class XmlRender extends RendererDecorator
{
    public function renderDate(): string
    {
        var_dump('xml');
       return  $this->wap->renderDate();
    }
}