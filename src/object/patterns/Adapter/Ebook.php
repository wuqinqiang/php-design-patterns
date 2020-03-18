<?php

namespace Remember\Patterns\object\patterns\Adapter;

class Ebook implements BookInterface
{
    protected $eBook;

    public function __construct(EbookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function turnPage()
    {
       return  $this->eBook->pressNext();
    }

    public function open()
    {
        return $this->eBook->unlock();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage();
    }
}