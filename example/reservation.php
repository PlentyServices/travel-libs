<?php
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use \PlentyServices\TravelLibs\Protobuf\Reservation;
use \PlentyServices\TravelLibs\Protobuf\Product;
use \PlentyServices\TravelLibs\Protobuf\Person;
use \PlentyServices\TravelLibs\TravelApiRequest;
use \DrSlump\Protobuf\Codec\Json;

$reservation = new Reservation();

$general = new Reservation\General();

$general->setSystem('travel');
$general->setStatus('request');
$general->setTransactionType('direct');
$general->setOperator('alacampa');
$general->setCurrency('eur');
$general->setPaymentType('invoice');

$reservation->setGeneral($general);


$product = new Product();

$fare = new Product\Fare();

$person = new Person();


$codec = new Json();

print_r($reservation->serialize($codec));


/* MAKE REQUEST

$request = new TravelApiRequest();

$request->setAction('/create/reservation');
$request->setApiEndpoint('travel.plenty.services');
$request->devMode();
$request->setAccessKey('58E66190-BDDD-42EA-8D8F-D3BFBD05B91A');
$request->addJsonDocument($ro);

$result = $request->request();

*/

