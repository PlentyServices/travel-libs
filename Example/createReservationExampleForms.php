<?php

require '../Service/Reservation.php';

$reservation = new Reservation();

$general = new General();

$general->setStatus('booking-request'); //request, booking
$general->setOperator('hm-touristik');
$general->setBroker('reisebine');
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
$contractor->addId('dob', '1991-07-02');

$pax1 = $reservation->setContractor($contractor);

$passenger = new Passenger();

$passenger->setFirstName('John');
$passenger->setLastName('Doe');
$passenger->setGender('male');
$passenger->addTag('adult');
$passenger->addId('passport', 'DE123435678491');
$passenger->addId('dob', '1991-07-02');

$pax2 = $reservation->addPassenger($passenger);

$product = new Product();

$product->setProductAlias('the_ghan');
$product->setDeparturePlace('asp');
$product->setArrivalPlace('drw');
$product->setDepartureDate('2017-03-13');

$product1 = $reservation->addProduct($product);

$fare = new Fare();

$fare->setFareId(1);

$fare1 = $reservation->addFare($fare);

$ro = $reservation->serialize();

print_r($ro);

/* MAKE REQUEST

$request = new TravelApiRequest();

$request->setAction('/create/reservation');
$request->setApiEndpoint('travel.plenty.services');
$request->setAccessKey('58E66190-BDDD-42EA-8D8F-D3BFBD05B91A');
$request->devMode(); //Resourcen werden als dummies gekennzeichnet und Email Benachrichtigungen gehen an hinterlegte Adresse (access key user)
$request->addJsonDocument($ro);

$result = $request->request();

*/




