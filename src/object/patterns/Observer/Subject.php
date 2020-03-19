<?php

namespace Remember\Patterns\object\patterns\Observer;


Interface Subject
{
    public function registerObserver(ObServiceInterface $service);

    public function removeObserver(string $service);

    public function notice();
}