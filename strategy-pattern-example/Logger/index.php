<?php


require 'vendor/autoload.php';

use Acme\Logger\App;
use Acme\Logger\LogToDatabase;
use Acme\Logger\LogToWebService;

$app = new App();

// Log to default (File)
$app->log('Log to default');

// Log to Database
$app->log('Log to database', new LogToDatabase());

// Log to Web Service
$app->log('Log to web service', new LogToWebService());
