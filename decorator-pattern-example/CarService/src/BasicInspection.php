<?php

namespace Acme\CarService;

class BasicInspection implements CarServiceInterface
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Basic inspection';
    }
}
