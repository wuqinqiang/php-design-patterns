<?php

namespace Remember\Patterns\object\patterns\Builder;

class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addWheel();
        $builder->AddEngine();
        return $builder->getVehicle();
    }
}

