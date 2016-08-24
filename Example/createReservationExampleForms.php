<?php

require '../Service/Reservation.php';

$reservation = new Reservation();

$general = new General();

$general->setStatus('booking'); //request, booking
$general->setOperator('hm-touristik');
$general->setBroker('service');
$general->setTravelType('rail');
$general->setCurrency('eur'); //vk
$general->setIpReferred('127.0.0.1');
$general->addConsultantNotice('Freitext Bemerkung vom Reiseanmelder');

$reservation->setGeneralParameters($general);

$contractor = new Contractor();

$contractor->setFirstName('Peter');
$contractor->setLastName('Parker');
$contractor->setGender('male');
$contractor->setDateOfBirth('1921-07-02');
$contractor->setPostal('12345');
$contractor->setCity('Smallville');
$contractor->setStreet('Batman Str. 123');
$contractor->setEmail('badboy77@heromail.com');
$contractor->setPhone('0123456');
$contractor->isPassenger();
$contractor->addTag('adult'); //tags für kalkulationsabhängigkeiten
$contractor->addId('passport', 'DE123435678490');

$pax1 = $reservation->setContractor($contractor);

$passenger = new Passenger();

$passenger->setFirstName('John');
$passenger->setLastName('Doe');
$passenger->setGender('male');
$passenger->addTag('adult');
$passenger->addId('passport', 'DE123435678491');

$pax2 = $reservation->addPassenger($passenger);

$product = new Product();

$product->setProductAlias('xpt');
$product->setDeparturePlace('bne');
$product->setDepartureDate('2016-10-01');
$product->setArrivalPlace('syd');
$product->setArrivalDate('2016-10-14');

$product1 = $reservation->addProduct($product);

$fare = new Fare();

$fare->setFarebase('sydbne');
$fare->setServiceClass('daylight');
$fare->setCabinClass('economy class seating');

$fare1 = $reservation->addFare($fare);

$ro = $reservation->serialize();

print_r(json_encode($ro));

/* MAKE REQUEST

$request = new TravelApiRequest();

$request->setAction('/create/reservation');
$request->setApiEndpoint('https://travel-dev.plenty.services');
$request->setApiKey('58E66190-BDDD-42EA-8D8F-D3BFBD05B91A');
$request->setParameters($ro);

$result = $request->request();

*/




