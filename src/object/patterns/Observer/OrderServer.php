<?php

namespace Remember\Patterns\object\patterns\Observer;

class OrderServer implements Subject
{
    protected $obServices = [];


    public function registerObserver(ObServiceInterface $service)
    {
        $this->obServices[] = $service;
    }

    public function removeObserver(string $service)
    {
        unset($this->obServices[$service]);
    }

    public function notice()
    {
        $pid = pcntl_fork();
        if ($pid > 0) {
            return;
        } elseif ($pid == 0) {
            foreach ($this->obServices as $service) {
                $service->update();
            }
            exit();
        }
    }
}