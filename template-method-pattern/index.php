<?php

use Acme\TurkeySub;
use Acme\VeggieSub;

require "vendor/autoload.php";

// Make a turkey sub
var_dump('------ making a turkey sub ------');
(new TurkeySub())->make();

//
var_dump('======================');

// Make a veggie sub
var_dump('------ making a veggie sub ------');
(new VeggieSub())->make();
