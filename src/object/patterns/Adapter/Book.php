<?php
namespace Remember\Patterns\object\patterns\Adapter;

class Book implements BookInterface
{
    protected $page;

    public function getPage(): int
    {
        return $this->page;
    }

    public function open()
    {
        $this->page=1;
    }
    public function turnPage()
    {
        $this->page++;
    }
}