<?php

require 'vendor/autoload.php';

use Acme\BasicInspection;
use Acme\OilChange;
use Acme\TireRotation;

// Basic Inspection
$invoice = new BasicInspection();
var_dump(
    "$" . "{$invoice->getCost()} - {$invoice->getDescription()}"
);

// Basic Inspection + Oil Change
$invoice = new OilChange(new BasicInspection());
var_dump(
    "$" . "{$invoice->getCost()} - {$invoice->getDescription()}"
);

// Basic Inspection + Oil Change + Tire Rotation
$invoice = new TireRotation(new OilChange(new BasicInspection()));
var_dump(
    "$" . "{$invoice->getCost()} - {$invoice->getDescription()}"
);
