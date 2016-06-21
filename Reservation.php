<?php

use PlentyServices\TravelCoreBundle\Service\TravelApiRequest;

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
    protected $itemCounter;
    protected $operatorAlias;
    protected $brokerAlias;
    protected $resourceMembers;
    protected $global;
    
    protected $passengerCounterTmp;
    
    public function __construct(){
        $this->error = false;
        $this->passenger = array();
        $this->resourceMembers = array();
        $this->calculation = array('sums' => array(), 'index' => array(), 'total' => array('amount' => 0));
        $this->global = array();
        $this->contractor = array();
        $this->journey = array();
        $this->passengerCounter = -1;
        $this->calculationCounter = -1;
        $this->itemCounter = -1;
        $this->itemSegmentCounter = -1;
        $this->calculationCounter = -1;
        $this->calculationSegmentCounter = -1;
        $this->journeyCounter = -1;
        $this->journeySegmentCounter = -1;
    }

    /* GLOBAL --> */

    public function setGlobalStatus($status){
        $this->global['status'] = $status;
    }

    public function setGlobalSystem($system){
        $this->global['system'] = $system;
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

    public function setGlobalLocale($locale){
        $this->global['locale'] = $locale;
    }

    public function setGlobalPayment($payment){
        $this->global['payment'] = $payment;
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

    public function setContractorIp($ip){
        $this->contractor['ip'] = $ip;
    }

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
    
    public function isContractorPassanger(){
        if(key_exists('is_passenger', $this->contractor)){
            if($this->contractor['is_passenger']) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    public function associateContractorItem($item, $calculation){
        if(!isset($this->contractor['items']))
            $this->contractor['items'] = array();
        
        $this->contractor['items'][] = array(
            'item' => $item,
            'calculation' => $calculation
        );
    }

    public function associateContractorJourney($journey){
        if(!isset($this->contractor['journey']))
            $this->contractor['journey'] = array();

        $this->contractor['journey'][] = $journey;
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

    public function associatePassengerItem($item, $calculation){
        if(!isset($this->passenger[$this->passengerCounter]['items']))
            $this->passenger[$this->passengerCounter]['items'] = array();

        $this->passenger[$this->passengerCounter]['items'][] = array(
            'item' => $item,
            'calculation' => $calculation
        );
    }

    public function associatePassengerJourney($journey){
        if(!isset($this->passenger[$this->passengerCounter]['journey']))
            $this->passenger[$this->passengerCounter]['journey'] = array();

        $this->passenger[$this->passengerCounter]['journey'][] = $journey;
    }
    
    public function alterPassenger($key){
        $this->passengerCounterTmp = $this->passengerCounter;
        $this->passengerCounter = $key;
    }
    
    public function flushPassenger(){
        if($this->passengerCounterTmp > $this->passengerCounter)
            $this->passengerCounter = $this->passengerCounterTmp;
    }    
    

    /* <-- PASSENGER */


    /* JOURNEY --> */

    public function newJourney(){
        $this->journeyCounter++;
    }

    public function getJourneyCounter(){
        return $this->journeyCounter;
    }

    public function newJourneySegment(){
        if(!is_array($this->journey[$this->journeyCounter]))
            $this->journey[$this->journeyCounter] = array();

        $this->journeySegmentCounter++;

        $this->journey[$this->journeyCounter][$this->journeySegmentCounter] = array();
    }

    public function flushJourney(){
        $this->journeySegmentCounter = -1;
    }

    public function setJourneySegmentPlaceId($placeId){
        $this->journey[$this->journeyCounter][$this->journeySegmentCounter]['place_id'] = $placeId;
    }

    public function setJourneySegmentPlaceAlias($placeAlias){
        $this->journey[$this->journeyCounter][$this->journeySegmentCounter]['place_alias'] = $placeAlias;
    }

    public function setJourneySegmentDepartDate($departDate){
        $this->journey[$this->journeyCounter][$this->journeySegmentCounter]['depart_date'] = $departDate;
    }

    public function setJourneySegmentDepartTime($departTime){
        $this->journey[$this->journeyCounter][$this->journeySegmentCounter]['depart_time'] = $departTime;
    }

    public function setJourneySegmentArriveDate($arriveDate){
        $this->journey[$this->journeyCounter][$this->journeySegmentCounter]['arrive_date'] = $arriveDate;
    }

    public function setJourneySegmentArriveTime($arriveTime){
        $this->journey[$this->journeyCounter][$this->journeySegmentCounter]['arrive_time'] = $arriveTime;
    }

    public function setJourneySegmentType($type){
        $this->journey[$this->journeyCounter][$this->journeySegmentCounter]['type'] = $type;
    }

    /* <-- JOURNEY */

    /* ITEMS --> */

    public function newItem(){
        $this->itemCounter++;
    }

    public function getItemCounter(){
        return $this->itemCounter;
    }

    public function newItemSegment(){
        if(!is_array($this->items[$this->itemCounter]))
            $this->items[$this->itemCounter] = array();

        $this->itemSegmentCounter++;

        $this->items[$this->itemCounter][$this->itemSegmentCounter] = array();
    }

    public function flushItem(){
        $this->itemSegmentCounter = -1;
    }

    public function setItemSegmentType($type){
        $this->items[$this->itemCounter][$this->itemSegmentCounter]['type'] = $type;
    }

    public function setItemSegmentJourney($journey){
        $this->items[$this->itemCounter][$this->itemSegmentCounter]['journey'] = $journey;
    }

    public function setItemSegmentVendorAlias($vendorAlias){
        $this->items[$this->itemCounter][$this->itemSegmentCounter]['vendor_alias'] = $vendorAlias;
    }

    public function setItemSegmentVendorId($vendorId){
        $this->items[$this->itemCounter][$this->itemSegmentCounter]['vendor_id'] = $vendorId;
    }

    public function setItemSegmentProductAlias($productAlias){
        $this->items[$this->itemCounter][$this->itemSegmentCounter]['product_alias'] = $productAlias;
    }

    public function setItemSegmentProductId($productId){
        $this->items[$this->itemCounter][$this->itemSegmentCounter]['product_id'] = $productId;
    }

    public function setItemSegmentDisplay($display){
        $this->items[$this->itemCounter][$this->itemSegmentCounter]['display'] = $display;
    }

    public function setItemSegmentSubType($subType){
        $this->items[$this->itemCounter][$this->itemSegmentCounter]['subtype'] = $subType;
    }

    public function setItemSegmentClassification($classification){
        $this->items[$this->itemCounter][$this->itemSegmentCounter]['classification'] = $classification;
    }

    /* <-- ITEMS */
    
    /* CALCULATION --> */

    public function newCalculation(){
        $this->calculationCounter++;
    }

    public function getCalculationCounter(){
        return $this->calculationCounter;
    }

    public function newCalculationSegment(){
        if(!is_array($this->calculation[$this->calculationCounter]))
            $this->calculation[$this->calculationCounter] = array();

        $this->calculationSegmentCounter++;

        $this->calculation[$this->calculationCounter][$this->calculationSegmentCounter] = array();
    }

    public function flushCalculation(){
        $this->calculationSegmentCounter = -1;
    }

    public function setCalculationSegmentType($type){
        $this->calculation[$this->calculationCounter][$this->calculationSegmentCounter]['type'] = $type;
    }

    public function setCalculationSegmentAmount($amount){
        $this->calculation[$this->calculationCounter][$this->calculationSegmentCounter]['amount'] = $amount;
    }

    public function setCalculationSegmentCurrency($currency){
        $this->calculation[$this->calculationCounter][$this->calculationSegmentCounter]['currency'] = $currency;
    }

    public function setCalculationSegmentService($service){
        $this->calculation[$this->calculationCounter][$this->calculationSegmentCounter]['service'] = $service;
    }

    public function setCalculationSegmentDisplay($display){
        $this->calculation[$this->calculationCounter][$this->calculationSegmentCounter]['display'] = $display;
    }

    public function setCalculationSegmentPaxTypes($paxTypes){
        $this->calculation[$this->calculationCounter][$this->calculationSegmentCounter]['pax_types'] = $paxTypes;
    }

    public function setCalculationSegmentPaxHolds($paxHolds){
        $this->calculation[$this->calculationCounter][$this->calculationSegmentCounter]['pax_holds'] = $paxHolds;
    }
    
    /* <-- CALCULATION */
    
    
    /* Prepare */
    public function flush(){
        
        if($this->isContractorPassanger()){
            if($this->calculationCounter < 1 && $this->itemCounter < 1){
                $this->associateContractorItem(0,0);
            }
            if($this->journeyCounter < 1){
                $this->associateContractorJourney(0);
            }
        }
        
        foreach (array_keys($this->passenger) as $pax){
            $this->alterPassenger($pax);

            if($this->calculationCounter < 1 && $this->itemCounter < 1){
                $this->associatePassengerItem(0,0);
            }
            if($this->journeyCounter < 1){
                $this->associatePassengerJourney(0);
            }
            
            $this->flushPassenger();
        }
        
        $this->reservation = array(
            'global' => $this->global,
            'contractor' => $this->contractor,
            'items' => $this->items,
            'calculation' => $this->calculation
        );
        
        if(!empty($this->journey))
            $this->reservation['journey'] = $this->journey;

        if(!empty($this->passenger))
            $this->reservation['passenger'] = $this->passenger;
        
        return $this->reservation;        
    }
    
    /* Do it! */
    public function persist(){
        return new TravelApiRequest('/create/reservation', $this->reservation);
    }

}