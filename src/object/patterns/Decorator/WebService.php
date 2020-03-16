<?php
namespace Remember\Patterns\object\patterns\Decorator;
class WebService implements RenderableInterface
{

    private $data;
    public function __construct(string $data)
    {
         $this->data=$data;
    }

    public function renderDate(): string
    {
        return $this->data;
    }
}