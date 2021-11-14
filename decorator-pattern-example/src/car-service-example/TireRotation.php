<?php

namespace Acme;

class TireRotation implements CarServiceInterface
{
    protected CarServiceInterface $carService;

    public function __construct(CarServiceInterface $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 50 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', tire rotation';
    }
}
