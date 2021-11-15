<?php

require 'vendor/autoload.php';

use Acme\HomeSecurity\Alarm;
use Acme\HomeSecurity\HomeStatus;
use Acme\HomeSecurity\Lights;
use Acme\HomeSecurity\Locks;

$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus());

var_dump('All checks passed');
