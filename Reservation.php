<?php

use TravelRequest;

class Reservation
{
    protected $error;
    protected $reservation;
    protected $contractor;
    protected $passenger;
    protected $passengerCounter;
    protected $journey;
    protected $journeyCounter;
    protected $calculation;
    protected $calculationCounter;
    protected $items;
    protected $itemsCounter;
    protected $operatorAlias;
    protected $brokerAlias;
    protected $resourceMembers;
    protected $global;
    
    public function __construct(){
        $this->error = false;
        $this->passenger = array();
        $this->resourceMembers = array();
        $this->calculation = array('sums' => array(), 'index' => array(), 'total' => array('amount' => 0));
        $this->global = array();
        $this->contractor = array();
        $this->passengerCounter = -1;
        $this->calculationCounter = -1;
        $this->itemsCounter = -1;
        $this->journeyCounter = -1;
        $this->journeySegmentCounter = -1;
    }

    /* GLOBAL --> */

    public function setGlobalStatus($status){
        $this->global['status'] = $status;
    }

    public function setGlobalOperator($operator){
        $this->global['operator'] = $operator;
    }

    public function setGlobalBroker($broker){
        $this->global['broker'] = $broker;
    }

    public function setGlobalDisplay($display){
        $this->global['display'] = $display;
    }

    public function setGlobalType($type){
        $this->global['type'] = $type;
    }

    public function setGlobalCurrency($currency){
        $this->global['currency'] = $currency;
    }

    public function setGlobalPayment($payment){
        $this->global['payment'] = $payment;
    }

    public function setGlobalIp($ip){
        $this->global['ip'] = $ip;
    }

    public function setGlobalNotice($notice){
        $this->global['notice'] = $notice;
    }

    /* add var to global */
    public function addGlobal($key, $value){
        $this->global[$key] = $value;
    }

    /* <-- GLOBAL */

    /* CONTRACTOR --> */

    public function setContractorFirstName($firstName){
        $this->contractor['name_first'] = $firstName;
    }

    public function setContractorLastName($lastName){
        $this->contractor['name_last'] = $lastName;
    }

    public function setContractorTitle($title){
        $this->contractor['title'] = $title;
    }

    public function setContractorGender($gender){
        $this->contractor['gender'] = $gender;
    }

    public function setContractorStreet($street){
        $this->contractor['street'] = $street;
    }

    public function setContractorPostal($postal){
        $this->contractor['postal'] = $postal;
    }

    public function setContractorCity($city){
        $this->contractor['city'] = $city;
    }

    public function setContractorPhone($phone){
        $this->contractor['phone'] = $phone;
    }

    public function setContractorDateOfBirth($dob){
        $this->contractor['dob'] = $dob;
    }

    public function setContractorEmail($email){
        $this->contractor['email'] = $email;
    }

    public function setContractorPassport($passport){
        $this->contractor['passport'] = $passport;
    }

    public function setContractorState($state){
        $this->contractor['state'] = $state;
    }

    public function setContractorCountry($country){
        $this->contractor['country'] = $country;
    }

    public function setContractorNationality($nationality){
        $this->contractor['nationality'] = $nationality;
    }

    public function addContractorDiscountId($type, $id){
        if(!isset($this->contractor['did']))
            $this->contractor['did'] = array();

        $this->contractor['did'][] = array(
            'type' => $type,
            'id' => $id
        );
    }

    public function setContractorIsPassenger($isPassenger = true){
        $this->contractor['is_passenger'] = $isPassenger;
    }

    /* <-- CONTRACTOR */

    /* PASSENGER --> */

    public function newPassenger(){
        $this->passengerCounter++;
    }

    public function setPassengerFirstName($firstName){
        $this->passenger[$this->passengerCounter]['name_last'] = $firstName;
    }

    public function setPassengerLastName($lastName){
        $this->passenger[$this->passengerCounter]['name_last'] = $lastName;
    }

    public function setPassengerTitle($title){
        $this->passenger[$this->passengerCounter]['title'] = $title;
    }

    public function setPassengerGender($gender){
        $this->passenger[$this->passengerCounter]['gender'] = $gender;
    }

    public function setPassengerStreet($street){
        $this->passenger[$this->passengerCounter]['street'] = $street;
    }

    public function setPassengerPostal($postal){
        $this->passenger[$this->passengerCounter]['postal'] = $postal;
    }

    public function setPassengerCity($city){
        $this->passenger[$this->passengerCounter]['city'] = $city;
    }

    public function setPassengerPhone($phone){
        $this->passenger[$this->passengerCounter]['phone'] = $phone;
    }

    public function setPassengerDateOfBirth($dob){
        $this->passenger[$this->passengerCounter]['dob'] = $dob;
    }

    public function setPassengerEmail($email){
        $this->passenger[$this->passengerCounter]['email'] = $email;
    }

    public function setPassengerPassport($passport){
        $this->passenger[$this->passengerCounter]['passport'] = $passport;
    }

    public function setPassengerState($state){
        $this->passenger[$this->passengerCounter]['state'] = $state;
    }

    public function setPassengerCountry($country){
        $this->passenger[$this->passengerCounter]['country'] = $country;
    }

    public function setPassengerNationality($nationality){
        $this->passenger[$this->passengerCounter]['nationality'] = $nationality;
    }

    public function addPassengerDiscountId($type, $id){
        if(!isset($this->passenger[$this->passengerCounter]['did']))
            $this->passenger[$this->passengerCounter]['did'] = array();

        $this->passenger[$this->passengerCounter]['did'][] = array(
            'type' => $type,
            'id' => $id
        );
    }

    /* <-- PASSENGER */


    /* JOURNEY --> */

    public function newJourney(){
        $this->journeyCounter++;
    }

    public function getJourneyIndex(){
        return $this->journeyCounter;
    }

    public function newJourneySegment(){
        $this->journeySegmentCounter++;
    }

    public function flushJourneySegment(){

    }

    public function setJourneyPlaceId(){

    }


    /* <-- JOURNEY */

    public function addItems(){

    }

    public function addCalculation(){

    }
}