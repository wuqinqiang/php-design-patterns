<?php

namespace Remember\Patterns\object\patterns\Builder;

Interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function AddEngine();

    public function getVehicle():Vehicle;

}