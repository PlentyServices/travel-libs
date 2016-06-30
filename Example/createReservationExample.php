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

$item = new Item();

$item->setProductAlias('JUCNZ_CASA6'); //camper 2.0 kodierung
$item->setDepartPlaceAlias('SYD1'); //camper 2.0 kodierung, depot oder city
$item->setDepartDate('2016-10-01'); //pickup
$item->setArrivePlaceAlias('Syd1'); //drop
$item->setArriveDate('2016-10-14');
$item->isOptional(); //nur möglich bei status 'request'

$itemHolds = new ItemHolds(); //child item oder zusatzgebühr pro produkt

$itemHolds->setDisplay('Stuhl');
$itemHolds->setDisplayDescription('Der Stuhl unter den Stühlen');
$itemHolds->setPayable('on_arrival'); //default ist on_booking, on_arrrival wird nicht berechnet
$itemHolds->setCurrency('eur');
$itemHolds->setAmount(40); //default 0 => inklusive

$item->addItemHolds($itemHolds); //child items haben nur eine kalkulationsvariante und sind deshalb im item

$item1 = $reservation->addItem($item);

$item = new Item();

$item->setProductAlias('JUCAU_CASA6');
$item->setDepartPlaceAlias('SYD1');
$item->setDepartDate('2016-10-01');
$item->setArrivePlaceAlias('Syd1');
$item->setArriveDate('2016-10-14');
$item->isOptional();

$item2 = $reservation->addItem($item);

$calculation = new Calculation();

$calculation->setCurrency('aud'); //einkaufswährung, default = general currency, NICHT BEI setAmount()!!!
$calculation->setExchange(0.86); //default: 1 wenn currency = general currency, aus travel system hinterlegt sonst tagesaktuelle umrechnung
$calculation->setAmountBuy(50); //endpreis wird berechnet, ansonsten setAmount()
$calculation->setPaxHolds(2); //anzahl der inkl. pax, wenn 0 wird nur einmal berechnet
$calculation->setDisplay('Basis Paket');
$calculation->setDisplayDescription('Hier sind die Standard Leistungen enthalten');
$calculation->setIdCondition('driver', 'drivers-license'); //pax mit tag driver muss id drivers-license vorweisen
$calculation->setMarginOperator('percent', 8, true); //percent oder fixed, amount, include=true: marge wird auf ek angewendet und ist basis für weitere kalkulation, include=false: ek wird nicht verändert marge wird am ende addiert
$calculation->setMarginPeer('percent', 1); //Bsp. AER
$calculation->setMarginBroker('percent', 3); //Vermittler/Reisebüro

$calc1 = $reservation->addCalculation($calculation);


$calculation = new Calculation();

$calculation->setCurrency('aud');
$calculation->setExchange(0.86);
$calculation->setAmountBuy(50);
$calculation->setPaxHolds(2);
$calculation->setDisplay('Basis Paket');
$calculation->setDisplayDescription('Hier sind die Standard Leistungen enthalten');
$calculation->setIdCondition('driver', 'drivers-license');
$calculation->setMarginOperator('percent', 8);
$calculation->setMarginPeer('percent', 1);
$calculation->setMarginBroker('percent', 3);

$calc2 = $reservation->addCalculation($calculation);

$reservation->addToCart($item1, array( //nicht nötig wenn nur ein item und eine kalkulation vorhanden
        $pax1 => $calc1, //pax uid zugeordnet mit kalkulations uid
        $pax2 => $calc1
    ), 1 //plus optionaler parameter für quantity, default 1
);

$reservation->addToCart($item2, array(
        $pax1 => $calc2,
        $pax2 => $calc2
    )
);

print_r($ro = $reservation->serialize());

/* MAKE REQUEST

$request = new TravelApiRequest();

$request->setAction('/create/reservation');
$request->setApiEndpoint('https://travel-dev.plenty.services');
$request->setApiKey('58E66190-BDDD-42EA-8D8F-D3BFBD05B91A');
$request->setParameters($ro);

$result = $request->request();

*/




