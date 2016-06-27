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

$reservation->setContractor($contractor);

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

$reservation->addPassenger($passenger);

$item = new Item();

$item->setProductAlias('JUCNZ_CASA6');
$item->setDepartDate('2016-10-01');
$item->setArriveDate('2016-10-14');
$item->isOptional();

$itemHolds = new ItemHolds();

$itemHolds->setDisplay('Stuhl');
$itemHolds->setDisplayDescription('Der Stuhl unter den Stühlen');
$itemHolds->setPayable();
$itemHolds->setCurrency('eur');
$itemHolds->setAmount(40);
$itemHolds->isOptional();
$itemHolds->setMargin(false);

$item->addItemHolds($itemHolds);

$reservation->addItem($item);

