<?php

require '../Service/Reservation.php';

$reservation = new Reservation();

$general = new General();

$general->setSystem('camper');
$general->setStatus('request'); //request, booking
$general->setOperator('alacampa');
$general->setBroker('aer');
$general->setLocale('de');
$general->setTransactionType('business'); //business => b2b, direct => b2c
$general->setTravelType('camper');
$general->setCurrency('eur'); //vk
$general->setIpReferred('127.0.0.1');
$general->setPaymentType('credit-card');
$general->setPaymentSurchargePercentage(2); //kreditkartengebühr
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
$contractor->addTag('driver'); //tags für kalkulationsabhängigkeiten
$contractor->addId('drivers-license', 'DE123435678490');

$reservation->setContractor($contractor);

$billing = new BillingContact(); //wenn vom reiseanmelder abweichend

$billing->setFirstName('Alfons');
$billing->setLastName('Schuhbeck');
$billing->setGender('male');
$billing->setCity('Minga');
$billing->setStreet('Münchnerstr. 1');
$billing->setCountry('de');
$billing->setCompany('Partyservice GmbH');

$reservation->setBillingContact($billing);


$product = new Product();

$product->setProductAlias('JUCNZ_CASA6'); //camper 2.0 kodierung
$product->setVendorAlias('MAUI_AF_FTI'); //camper 2.0 kodierung
$product->setDeparturePlace('SYD1'); //camper 2.0 kodierung, depot oder city
$product->setDepartureDate('2016-10-01'); //pickup
$product->setArrivalPlace('Syd1'); //drop
$product->setArrivalDate('2016-10-14');
//$product->isOptional(); //nur möglich bei status 'request'


/* noch nicht möglich
$charge = new Charge(); //surcharge, tax, item, service

$charge->setChargeType('surcharge');
$charge->setDisplay('Einweggebühr');
$charge->setPayable('on_arrival'); //default ist on_booking, on_arrival wird nicht berechnet
$charge->setPurchase(40,'aud');

$product->addCharge($charge);
*/
$fare = new Fare();

$fare->setPurchaseExchange(0.86); //default: 1 wenn currency = general currency, aus travel system hinterlegt sonst tagesaktuelle umrechnung
$fare->setPurchase(50,'aud');
$fare->setPaxHolds(0); //anzahl der inkl. pax, wenn 0 wird nur einmal berechnet
$fare->setDisplay('Basis Paket');
$fare->setDisplayDescription('Hier sind die Standard Leistungen enthalten');
$fare->setIdCondition('driver', 'drivers-license'); //pax mit tag driver muss id drivers-license vorweisen
$fare->setCommissionBrokerAmount(5); //AER ist vorerst broker, da dessen agenturen nettopreise bekommen und keine provision
$fare->setRetailPrice(500); //VK

$reservation->addFareToProduct($fare, $product); // ordnet fare zu Produkt zu und fügt Produkt zur Reservierung hinzu wenn noch nicht vorhanden

$passenger = new Passenger();

$passenger->setFirstName('John');
$passenger->setLastName('Doe');
$passenger->setGender('male');
$passenger->addTag('driver');
$passenger->addId('drivers-license', 'DE123435678491');

$reservation->addPassengerToFare($passenger, $fare); //ordnet passagier zu fare zu und fügt passagier zur Reservierung hinzu wenn noch nicht vorhanden
$reservation->addPassengerToFare($contractor, $fare);

$ro = $reservation->serialize();

print_r($ro);

/* MAKE REQUEST

$request = new TravelApiRequest();

$request->setAction('/create/reservation');
$request->setApiEndpoint('travel.plenty.services');
$request->devMode(); //Resourcen werden als dummies gekennzeichnet und Email Benachrichtigungen gehen an hinterlegte Adresse (access key user)
$request->setAccessKey('58E66190-BDDD-42EA-8D8F-D3BFBD05B91A');
$request->addJsonDocument($ro);

$result = $request->request();

*/



