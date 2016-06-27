<?php

require '../Service/Reservation.php';

$reservation = new Reservation();

$general = new General();

$general->setSystem('camper');
$general->setStatus('request');
$general->setOperator('alacampa');
$general->setBroker('service');
$general->setLocale('de');
$general->setTransactionType('direct');
$general->setCurrency('eur');
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
$contractor->addTag('driver');
$contractor->addId('drivers-license', 'DE123435678490');

$pax1 = $reservation->setContractor($contractor);

$billing = new BillingContact();

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

$item->setProductAlias('JUCNZ_CASA6');
$item->setDepartPlaceAlias('SYD1');
$item->setDepartDate('2016-10-01');
$item->setArrivePlaceAlias('Syd1');
$item->setArriveDate('2016-10-14');
$item->isOptional();

$itemHolds = new ItemHolds();

$itemHolds->setDisplay('Stuhl');
$itemHolds->setDisplayDescription('Der Stuhl unter den Stühlen');
$itemHolds->setPayable();
$itemHolds->setCurrency('eur');
$itemHolds->setAmount(40);
$itemHolds->isOptional();

$item->addItemHolds($itemHolds);

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

$calculation->setCurrency('aud');
$calculation->setExchange(0.86);
$calculation->setAmountBuy(50);
$calculation->setDisplay('Basis Paket');
$calculation->setDisplayDescription('Hier sind die Standard Leistungen enthalten');
$calculation->setIdCondition('driver', 'drivers-license');
$calculation->setMarginOperator('percent', 8);
$calculation->setMarginBroker('percent', 3);

$calc1 = $reservation->addCalculation($calculation);

$reservation->addToCart($item1, array(
        $pax1 => $calc1,
        $pax2 => $calc1
    )
);

$reservation->addToCart($item2, array(
        $pax1 => $calc1,
        $pax2 => $calc1
    )
);

print_r($reservation->serialize());




