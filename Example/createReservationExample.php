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

$reservation->setGeneralParameters($general);

$contractor = new Contractor();

$contractor->setFirstName('Peter');
$contractor->setLastName('Parker');
$contractor->setGender('male');
$contractor->setDateOfBirth('1921-07-02');
$contractor->setPostal('12345');
$contractor->setCity('Smallville');
$contractor->setStreet('Batman Str. 123');
$contractor->setContractorNotice('Freitext Bemerkung vom Reiseanmelder');
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
$product->setDepartPlaceAlias('SYD1'); //camper 2.0 kodierung, depot oder city
$product->setDepartDate('2016-10-01'); //pickup
$product->setArrivePlaceAlias('Syd1'); //drop
$product->setArriveDate('2016-10-14');
$product->isOptional(); //nur möglich bei status 'request'

$charge = new Charge(); //Gebühr

$charge->setDisplay('Einweggebühr');
$charge->setPayable('on_arrival'); //default ist on_booking, on_arrival wird nicht berechnet
$charge->setCurrency('aud');
$charge->setAmount(40);

$product->addCharge($charge);

$product1 = $reservation->addProduct($product);

$product = new Product();

$product->setProductAlias('JUCAU_CASA6');
$product->setDepartPlaceAlias('SYD1');
$product->setDepartDate('2016-10-01');
$product->setArrivePlaceAlias('Syd1');
$product->setArriveDate('2016-10-14');
$product->isOptional();

$product2 = $reservation->addProduct($product);

$fare = new Fare();

$chairs = new Service(); //zusatzleistung oder auch inkludierte leistung

$chairs->setDisplay('4 Campingstühle');
$chairs->setAmount(0); //default 0 => inklusive

$fare->addService($chairs); //bei diesem tarif sind 4 campingstühle inkludiert

$fare->setCurrency('aud'); //einkaufswährung, default = general currency, NICHT BEI setAmount()!!!
$fare->setExchange(0.86); //default: 1 wenn currency = general currency, aus travel system hinterlegt sonst tagesaktuelle umrechnung
$fare->setCost(50); //endpreis wird berechnet, ansonsten setAmount()
$fare->setPaxHolds(2); //anzahl der inkl. pax, wenn 0 wird nur einmal berechnet
$fare->setDisplay('Basis Paket');
$fare->setDisplayDescription('Hier sind die Standard Leistungen enthalten');
$fare->setIdCondition('driver', 'drivers-license'); //pax mit tag driver muss id drivers-license vorweisen
$fare->setMarginOperatorAmount(80); //percent oder fixed, amount, include=true: marge wird auf ek angewendet und ist basis für weitere kalkulation, include=false: ek wird nicht verändert marge wird am ende addiert
$fare->setMarginPeerAmount(10); //Bsp. AER
$fare->setMarginBrokerAmount(30); //Vermittler/Reisebüro

$fare1 = $reservation->addFare($fare);


$fare = new Fare();

$fare->setCurrency('aud');
$fare->setExchange(0.86);
$fare->setCost(50);
$fare->setPaxHolds(2);
$fare->setDisplay('Basis Paket');
$fare->setDisplayDescription('Hier sind die Standard Leistungen enthalten');
$fare->setIdCondition('driver', 'drivers-license');
$fare->setMarginOperatorAmount(80);
$fare->setMarginPeerAmount(10);
$fare->setMarginBrokerAmount(30);

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
$request->setApiEndpoint('https://travel-dev.plenty.services');
$request->setApiKey('58E66190-BDDD-42EA-8D8F-D3BFBD05B91A');
$request->setParameters($ro);

$result = $request->request();

*/




