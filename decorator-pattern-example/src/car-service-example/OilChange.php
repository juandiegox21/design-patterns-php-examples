<?php

namespace Acme;

class OilChange implements CarServiceInterface
{
    protected CarServiceInterface $carService;

    public function __construct(CarServiceInterface $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 20 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', oil change';
    }
}
