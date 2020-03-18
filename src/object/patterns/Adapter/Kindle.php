<?php
namespace Remember\Patterns\object\patterns\Adapter;

class Kindle implements EbookInterface
{
    public function getPage()
    {
        return 222;
    }

    public function pressNext()
    {
        return 333;
    }

    public function unlock()
    {
        return 4444;
    }
}