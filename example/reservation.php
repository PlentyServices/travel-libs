<?php
require_once '../vendor/autoload.php';

use \PlentyServices\TravelLibs\Protobuf\Reservation;
use \PlentyServices\TravelLibs\Protobuf\Product;
use \PlentyServices\TravelLibs\Protobuf\Person;
use \PlentyServices\TravelLibs\TravelApiRequest;
use \DrSlump\Protobuf\Codec\Json;

$reservation = new Reservation();

/* General Parameters */
$general = new Reservation\General();

$general->setSystem('camper');
$general->setStatus('request');
$general->setTransactionType('direct');
$general->setOperator('veranstalter');
$general->setBroker('vermittler');
$general->setCurrency('eur');
$general->setPaymentType('invoice');

$reservation->setGeneral($general);

/* Contractor */
$contractor = new Person();

$contractor->setNameFirst('Darth');
$contractor->setNameLast('Vader');
$contractor->setNameTitle('Dr.');
$contractor->setGender('male');
$contractor->setDob('1921-07-02');
$contractor->setCompany('Lukas Arts');
$contractor->setPostal('12345');
$contractor->setCity('Smallville');
$contractor->setStreet('Batman Str. 123');
$contractor->setEmail('batboy77@heromail.com');
$contractor->setPhone('0123456');
$contractor->addTags('driver');

$license = new Person\Id();

$license->setType('drivers-license');
$license->setId('DE1234');

$contractor->addIds($license);

$reservation->setContractor($contractor);


/* Product */
$product = new Product();

$product->setProductAlias('JUCNZ_CASA6');
$product->setVendorAlias('MAUI_AF_FTI');
$product->setPlaceFrom('SYD1');
$product->setDateFrom('2016-10-01');
$product->setPlaceTo('Syd1');
$product->setDateTo('2016-10-14');


/* Fare */
$fare = new Product\Fare();

$fare->setPurchaseExchange(0.86);
$fare->setPurchaseCurrency('aud');
$fare->setPurchaseNett(3000.21);
$fare->setPaxHolds(0);
$fare->setDisplay('Basis Paket');
$fare->setDisplayDescription('Hier sind die Standard Leistungen enthalten');
$fare->setCommissionBrokerAmount(5);
$fare->setRetailPrice(5000);

$condition = new Product\Fare\TagCondition();
$condition->setTag('driver');
$condition->addRequiredIds('drivers-license');

$charge = new Product\Fare\Charge();
$charge->setDisplay('Vor Ort Gebühr');
$charge->setRetailPrice(100);
$charge->setRetailCurrency('aud');
$charge->setPayable('on-arrival');

$fare->addTagConditions($condition);
$fare->addCharges($charge);
$fare->addPassengers($contractor);

$product->addFares($fare);


$reservation->addProducts($product);


$codec = new Json();

echo $ro = $reservation->serialize($codec);


/* MAKE REQUEST

$request = new TravelApiRequest();

$request->setAction('/reservation');
$request->setApiEndpoint('travel.plenty.services');
$request->devMode();
$request->setAccessKey('58E66190-BDDD-42EA-8D8F-D3BFBD05B91A');
$request->addJsonDocument($ro);

$result = $request->request();

*/

