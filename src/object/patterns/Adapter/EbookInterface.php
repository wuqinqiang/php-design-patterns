<?php
namespace Remember\Patterns\object\patterns\Adapter;

interface EbookInterface
{
    public function unlock();

    public function pressNext();

    public function getPage();

}