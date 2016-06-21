<?php

require('Reservation.php');

$reservation = new Reservation();

$reservation->setGlobalSystem('camper');
$reservation->setGlobalCurrency('EUR');
$reservation->setGlobalOperator('alacampa');
$reservation->setGlobalBroker('service');
$reservation->setGlobalDisplay('Jucy Rentals (AU), Crib');
$reservation->setGlobalLocale('DE');
$reservation->setGlobalType('vehicle');
$reservation->setGlobalPayment('invoice');


$reservation->setContractorFirstName('Dona');
$reservation->setContractorLastName('Duck');
$reservation->setContractorGender('female');
$reservation->setContractorPostal('12345');
$reservation->setContractorCity('Entenhausen');
$reservation->setContractorCountry('DE');
$reservation->setContractorNationality('EN');
$reservation->setContractorIsPassenger();


$reservation->newPassenger();
$reservation->setPassengerFirstName('Daniel');
$reservation->setPassengerLastName('Düsentrieb');
$reservation->setPassengerGender('male');


$reservation->newJourney();

$reservation->newJourneySegment();
$reservation->setJourneySegmentPlaceAlias('SY1');
$reservation->setJourneySegmentDepartDate('2016-07-02');
$reservation->setJourneySegmentType('departure');

$reservation->newJourneySegment();
$reservation->setJourneySegmentPlaceAlias('SY1');
$reservation->setJourneySegmentDepartDate('2016-14-02');
$reservation->setJourneySegmentType('return');


$reservation->newItem();

$reservation->newItemSegment();
$reservation->setItemSegmentType('vehicle');
$reservation->setItemSegmentVendorAlias('JUCY_AU');
$reservation->setItemSegmentProductAlias('JUCYAU_CRIB');
$reservation->setItemSegmentDisplay('Jucy Rentals (AU), Crib');


$reservation->newCalculation();

$reservation->newCalculationSegment();
$reservation->setCalculationSegmentType('package');
$reservation->setCalculationSegmentAmount(300);
$reservation->setCalculationSegmentCurrency('EUR');
$reservation->setCalculationSegmentService('basic');
$reservation->setCalculationSegmentDisplay('Basis Paket');


$reservation->flush();

$response = $reservation->persist();
