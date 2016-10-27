<?php

require '../Service/Reservation.php';

$reservation = new Reservation();

$general = new General();

$general->setSystem('camper');
$general->setStatus('request'); //request, booking
$general->setOperator('alacampa');
$general->setPeer('aer');
$general->setBroker('service');
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

$pax1 = $reservation->setContractor($contractor);

$billing = new BillingContact(); //wenn vom reiseanmelder abweichend

$billing->setFirstName('Alfons');
$billing->setLastName('Schuhbeck');
$billing->setGender('male');
$billing->setCity('Minga');
$billing->setStreet('Münchnerstr. 1');
$billing->setCountry('de');
$billing->setCompany('Partyservice GmbH');

$reservation->setBillingContact($billing);

$passenger = new Passenger();

$passenger->setFirstName('John');
$passenger->setLastName('Doe');
$passenger->setGender('male');
$passenger->addTag('driver');
$passenger->addId('drivers-license', 'DE123435678491');

$pax2 = $reservation->addPassenger($passenger);

$product = new Product();

$product->setProductAlias('JUCNZ_CASA6'); //camper 2.0 kodierung
$product->setDeparturePlace('SYD1'); //camper 2.0 kodierung, depot oder city
$product->setDepartureDate('2016-10-01'); //pickup
$product->setArrivalPlace('Syd1'); //drop
$product->setArrivalDate('2016-10-14');
$product->isOptional(); //nur möglich bei status 'request'

$charge = new Charge(); //surcharge, tax, item, service

$charge->setChargeType('surcharge');
$charge->setDisplay('Einweggebühr');
$charge->setPayable('on_arrival'); //default ist on_booking, on_arrival wird nicht berechnet
$charge->setPurchase(40,'aud');

$product->addCharge($charge);

$product1 = $reservation->addProduct($product);

$product = new Product();

$product->setProductAlias('JUCAU_CASA6');
$product->setPickupPlace('SYD1');
$product->setPickupDate('2016-10-01'); //oder dropTime mit Uhrzeit
$product->setDropPlace('Syd1');
$product->setDropDate('2016-10-14');
$product->isOptional();

$product2 = $reservation->addProduct($product);

$fare = new Fare();

$chairs = new Charge(); //zusatzleistung oder auch inkludierte leistung

$chairs->setChargeType('item');
$chairs->setDisplay('4 Campingstühle');
$chairs->setPurchase(0,'nuc'); //inklusive

$fare->addCharge($chairs); //bei diesem tarif sind 4 campingstühle inkludiert

$fare->setPurchaseExchange(0.86); //default: 1 wenn currency = general currency, aus travel system hinterlegt sonst tagesaktuelle umrechnung
$fare->setPurchase(50,'aud');
$fare->setPaxHolds(2); //anzahl der inkl. pax, wenn 0 wird nur einmal berechnet
$fare->setDisplay('Basis Paket');
$fare->setDisplayDescription('Hier sind die Standard Leistungen enthalten');
$fare->setIdCondition('driver', 'drivers-license'); //pax mit tag driver muss id drivers-license vorweisen
$fare->setMarkupAmount(80); //alacampa
$fare->setCommissionPeerAmount(10); //Bsp. AER
$fare->setCommissionBrokerAmount(30); //Vermittler/Reisebüro

$fare1 = $reservation->addFare($fare);


$fare = new Fare();

$fare->setPurchase(50,'aud');
$fare->setRetailExchange(0.86);
$fare->setPaxHolds(2);
$fare->setDisplay('Basis Paket');
$fare->setDisplayDescription('Hier sind die Standard Leistungen enthalten');
$fare->setIdCondition('driver', 'drivers-license');
$fare->setMarkupAmount(80);
$fare->setCommissionPeerAmount(10);
$fare->setCommissionBrokerAmount(30);

$fare2 = $reservation->addFare($fare);

$reservation->addAllocation($product1, array( //nicht nötig wenn nur ein product und eine fare vorhanden
        $pax1 => $fare1, //pax uid zu fare uid
        $pax2 => $fare1
    ), 1 //plus optionaler parameter für quantity, default 1
);

$reservation->addAllocation($product2, array(
        $pax1 => $fare2,
        $pax2 => $fare2
    )
);

$ro = $reservation->serialize();

print_r(json_encode($ro));

/* MAKE REQUEST

$request = new TravelApiRequest();

$request->setAction('/create/reservation');
$request->setApiEndpoint('travel.plenty.services');
$request->setAccessKey('58E66190-BDDD-42EA-8D8F-D3BFBD05B91A');
$request->setParameters($ro);

$result = $request->request();

*/



