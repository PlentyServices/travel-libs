<?php
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use \TravelLibs\Protobuf\Reservation;
use \TravelLibs\TravelApiRequest;

//$reservation = new TravelLibs\Reservation();

$request = new TravelApiRequest();
echo 'test';

$general = new Reservation();
echo 'test';



$codec = \DrSlump\Protobuf\Codec\Xml::class;

echo 'test';
print_r($general->serialize($codec));



