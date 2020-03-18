<?php
namespace Remember\Patterns\object\patterns\Adapter;

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage():int;
}