<?php

namespace Remember\Patterns\object\patterns\Builder;

class TruckBuilder implements BuilderInterface
{

    private $vehicle;

    public function AddEngine()
    {
        $this->vehicle->setPart('1', new Wheel());
    }

    public function addWheel()
    {
        $this->vehicle->setPart('2', new Door());
    }

    public function createVehicle()
    {
        $this->vehicle = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
}