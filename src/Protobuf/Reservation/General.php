<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2017-09-21 14:07:08

namespace PlentyServices\TravelLibs\Protobuf\Reservation {

  class General extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $status = null;
    
    /**  @var string */
    public $system = null;
    
    /**  @var string */
    public $transaction_type = null;
    
    /**  @var string */
    public $operator = null;
    
    /**  @var string */
    public $peer = null;
    
    /**  @var string */
    public $broker = null;
    
    /**  @var string */
    public $travel_type = null;
    
    /**  @var string */
    public $travel_type_sub = null;
    
    /**  @var string */
    public $display = null;
    
    /**  @var string */
    public $currency = null;
    
    /**  @var string */
    public $locale = null;
    
    /**  @var string */
    public $payment_type = null;
    
    /**  @var float */
    public $payment_surcharge_amount = null;
    
    /**  @var int */
    public $payment_surcharge_percentage = null;
    
    /**  @var string */
    public $ip_referred = null;
    
    /**  @var string */
    public $departure_place = null;
    
    /**  @var string */
    public $departure_time = null;
    
    /**  @var string */
    public $destination_place = null;
    
    /**  @var string */
    public $destination_time = null;
    
    /**  @var string */
    public $return_place = null;
    
    /**  @var string */
    public $return_time = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'PlentyServicesTravelLibs.Reservation.General');

      // REQUIRED STRING status = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "status";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED STRING system = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "system";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED STRING transaction_type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "transaction_type";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED STRING operator = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "operator";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // OPTIONAL STRING peer = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "peer";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING broker = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "broker";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING travel_type = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "travel_type";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING travel_type_sub = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "travel_type_sub";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING display = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "display";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REQUIRED STRING currency = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "currency";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // OPTIONAL STRING locale = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "locale";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REQUIRED STRING payment_type = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "payment_type";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // OPTIONAL DOUBLE payment_surcharge_amount = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "payment_surcharge_amount";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 payment_surcharge_percentage = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "payment_surcharge_percentage";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING ip_referred = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "ip_referred";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING departure_place = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "departure_place";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING departure_time = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "departure_time";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING destination_place = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "destination_place";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING destination_time = 19
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 19;
      $f->name      = "destination_time";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING return_place = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "return_place";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING return_time = 21
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 21;
      $f->name      = "return_time";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <status> has a value
     *
     * @return boolean
     */
    public function hasStatus(){
      return $this->_has(1);
    }
    
    /**
     * Clear <status> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearStatus(){
      return $this->_clear(1);
    }
    
    /**
     * Get <status> value
     *
     * @return string
     */
    public function getStatus(){
      return $this->_get(1);
    }
    
    /**
     * Set <status> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setStatus( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <system> has a value
     *
     * @return boolean
     */
    public function hasSystem(){
      return $this->_has(2);
    }
    
    /**
     * Clear <system> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearSystem(){
      return $this->_clear(2);
    }
    
    /**
     * Get <system> value
     *
     * @return string
     */
    public function getSystem(){
      return $this->_get(2);
    }
    
    /**
     * Set <system> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setSystem( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <transaction_type> has a value
     *
     * @return boolean
     */
    public function hasTransactionType(){
      return $this->_has(3);
    }
    
    /**
     * Clear <transaction_type> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearTransactionType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <transaction_type> value
     *
     * @return string
     */
    public function getTransactionType(){
      return $this->_get(3);
    }
    
    /**
     * Set <transaction_type> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setTransactionType( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <operator> has a value
     *
     * @return boolean
     */
    public function hasOperator(){
      return $this->_has(4);
    }
    
    /**
     * Clear <operator> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearOperator(){
      return $this->_clear(4);
    }
    
    /**
     * Get <operator> value
     *
     * @return string
     */
    public function getOperator(){
      return $this->_get(4);
    }
    
    /**
     * Set <operator> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setOperator( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <peer> has a value
     *
     * @return boolean
     */
    public function hasPeer(){
      return $this->_has(5);
    }
    
    /**
     * Clear <peer> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearPeer(){
      return $this->_clear(5);
    }
    
    /**
     * Get <peer> value
     *
     * @return string
     */
    public function getPeer(){
      return $this->_get(5);
    }
    
    /**
     * Set <peer> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setPeer( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <broker> has a value
     *
     * @return boolean
     */
    public function hasBroker(){
      return $this->_has(6);
    }
    
    /**
     * Clear <broker> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearBroker(){
      return $this->_clear(6);
    }
    
    /**
     * Get <broker> value
     *
     * @return string
     */
    public function getBroker(){
      return $this->_get(6);
    }
    
    /**
     * Set <broker> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setBroker( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <travel_type> has a value
     *
     * @return boolean
     */
    public function hasTravelType(){
      return $this->_has(7);
    }
    
    /**
     * Clear <travel_type> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearTravelType(){
      return $this->_clear(7);
    }
    
    /**
     * Get <travel_type> value
     *
     * @return string
     */
    public function getTravelType(){
      return $this->_get(7);
    }
    
    /**
     * Set <travel_type> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setTravelType( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <travel_type_sub> has a value
     *
     * @return boolean
     */
    public function hasTravelTypeSub(){
      return $this->_has(8);
    }
    
    /**
     * Clear <travel_type_sub> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearTravelTypeSub(){
      return $this->_clear(8);
    }
    
    /**
     * Get <travel_type_sub> value
     *
     * @return string
     */
    public function getTravelTypeSub(){
      return $this->_get(8);
    }
    
    /**
     * Set <travel_type_sub> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setTravelTypeSub( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <display> has a value
     *
     * @return boolean
     */
    public function hasDisplay(){
      return $this->_has(9);
    }
    
    /**
     * Clear <display> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearDisplay(){
      return $this->_clear(9);
    }
    
    /**
     * Get <display> value
     *
     * @return string
     */
    public function getDisplay(){
      return $this->_get(9);
    }
    
    /**
     * Set <display> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setDisplay( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <currency> has a value
     *
     * @return boolean
     */
    public function hasCurrency(){
      return $this->_has(10);
    }
    
    /**
     * Clear <currency> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearCurrency(){
      return $this->_clear(10);
    }
    
    /**
     * Get <currency> value
     *
     * @return string
     */
    public function getCurrency(){
      return $this->_get(10);
    }
    
    /**
     * Set <currency> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setCurrency( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <locale> has a value
     *
     * @return boolean
     */
    public function hasLocale(){
      return $this->_has(11);
    }
    
    /**
     * Clear <locale> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearLocale(){
      return $this->_clear(11);
    }
    
    /**
     * Get <locale> value
     *
     * @return string
     */
    public function getLocale(){
      return $this->_get(11);
    }
    
    /**
     * Set <locale> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setLocale( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <payment_type> has a value
     *
     * @return boolean
     */
    public function hasPaymentType(){
      return $this->_has(12);
    }
    
    /**
     * Clear <payment_type> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearPaymentType(){
      return $this->_clear(12);
    }
    
    /**
     * Get <payment_type> value
     *
     * @return string
     */
    public function getPaymentType(){
      return $this->_get(12);
    }
    
    /**
     * Set <payment_type> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setPaymentType( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <payment_surcharge_amount> has a value
     *
     * @return boolean
     */
    public function hasPaymentSurchargeAmount(){
      return $this->_has(13);
    }
    
    /**
     * Clear <payment_surcharge_amount> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearPaymentSurchargeAmount(){
      return $this->_clear(13);
    }
    
    /**
     * Get <payment_surcharge_amount> value
     *
     * @return float
     */
    public function getPaymentSurchargeAmount(){
      return $this->_get(13);
    }
    
    /**
     * Set <payment_surcharge_amount> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setPaymentSurchargeAmount( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <payment_surcharge_percentage> has a value
     *
     * @return boolean
     */
    public function hasPaymentSurchargePercentage(){
      return $this->_has(14);
    }
    
    /**
     * Clear <payment_surcharge_percentage> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearPaymentSurchargePercentage(){
      return $this->_clear(14);
    }
    
    /**
     * Get <payment_surcharge_percentage> value
     *
     * @return int
     */
    public function getPaymentSurchargePercentage(){
      return $this->_get(14);
    }
    
    /**
     * Set <payment_surcharge_percentage> value
     *
     * @param int $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setPaymentSurchargePercentage( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <ip_referred> has a value
     *
     * @return boolean
     */
    public function hasIpReferred(){
      return $this->_has(15);
    }
    
    /**
     * Clear <ip_referred> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearIpReferred(){
      return $this->_clear(15);
    }
    
    /**
     * Get <ip_referred> value
     *
     * @return string
     */
    public function getIpReferred(){
      return $this->_get(15);
    }
    
    /**
     * Set <ip_referred> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setIpReferred( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <departure_place> has a value
     *
     * @return boolean
     */
    public function hasDeparturePlace(){
      return $this->_has(16);
    }
    
    /**
     * Clear <departure_place> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearDeparturePlace(){
      return $this->_clear(16);
    }
    
    /**
     * Get <departure_place> value
     *
     * @return string
     */
    public function getDeparturePlace(){
      return $this->_get(16);
    }
    
    /**
     * Set <departure_place> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setDeparturePlace( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <departure_time> has a value
     *
     * @return boolean
     */
    public function hasDepartureTime(){
      return $this->_has(17);
    }
    
    /**
     * Clear <departure_time> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearDepartureTime(){
      return $this->_clear(17);
    }
    
    /**
     * Get <departure_time> value
     *
     * @return string
     */
    public function getDepartureTime(){
      return $this->_get(17);
    }
    
    /**
     * Set <departure_time> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setDepartureTime( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <destination_place> has a value
     *
     * @return boolean
     */
    public function hasDestinationPlace(){
      return $this->_has(18);
    }
    
    /**
     * Clear <destination_place> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearDestinationPlace(){
      return $this->_clear(18);
    }
    
    /**
     * Get <destination_place> value
     *
     * @return string
     */
    public function getDestinationPlace(){
      return $this->_get(18);
    }
    
    /**
     * Set <destination_place> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setDestinationPlace( $value){
      return $this->_set(18, $value);
    }
    
    /**
     * Check if <destination_time> has a value
     *
     * @return boolean
     */
    public function hasDestinationTime(){
      return $this->_has(19);
    }
    
    /**
     * Clear <destination_time> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearDestinationTime(){
      return $this->_clear(19);
    }
    
    /**
     * Get <destination_time> value
     *
     * @return string
     */
    public function getDestinationTime(){
      return $this->_get(19);
    }
    
    /**
     * Set <destination_time> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setDestinationTime( $value){
      return $this->_set(19, $value);
    }
    
    /**
     * Check if <return_place> has a value
     *
     * @return boolean
     */
    public function hasReturnPlace(){
      return $this->_has(20);
    }
    
    /**
     * Clear <return_place> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearReturnPlace(){
      return $this->_clear(20);
    }
    
    /**
     * Get <return_place> value
     *
     * @return string
     */
    public function getReturnPlace(){
      return $this->_get(20);
    }
    
    /**
     * Set <return_place> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setReturnPlace( $value){
      return $this->_set(20, $value);
    }
    
    /**
     * Check if <return_time> has a value
     *
     * @return boolean
     */
    public function hasReturnTime(){
      return $this->_has(21);
    }
    
    /**
     * Clear <return_time> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function clearReturnTime(){
      return $this->_clear(21);
    }
    
    /**
     * Get <return_time> value
     *
     * @return string
     */
    public function getReturnTime(){
      return $this->_get(21);
    }
    
    /**
     * Set <return_time> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function setReturnTime( $value){
      return $this->_set(21, $value);
    }
  }
}

