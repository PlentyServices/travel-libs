<?php
error_reporting(E_ALL);
$loader = require_once '../protobuf/protobuf/vendor/autoload.php';
$loader->add('PlentyTravel\Reservation', '../protobuf/protobuf/src');

use PlentyTravel\Reservation\Reservation;
use PlentyTravel\Reservation\General;

$reservation = new Reservation();

$general = new General();

$general->setOperator('alacampa');
$general->setTransactionType(General\TransactionType::reseller());

echo $general;

$reservation->setGeneral($general);

print_r($general->toStream());