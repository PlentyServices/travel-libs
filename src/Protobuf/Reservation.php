<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2016-12-03 20:48:43

namespace PlentyServices\TravelLibs\Protobuf {

  class Reservation extends \DrSlump\Protobuf\Message {

    /**  @var \PlentyServices\TravelLibs\Protobuf\Reservation\General */
    public $general = null;
    
    /**  @var \PlentyServices\TravelLibs\Protobuf\Person */
    public $contractor = null;
    
    /**  @var \PlentyServices\TravelLibs\Protobuf\Person */
    public $billing_contact = null;
    
    /**  @var \PlentyServices\TravelLibs\Protobuf\Product[]  */
    public $products = array();
    
    /**  @var string[]  */
    public $operator_notice = array();
    
    /**  @var string[]  */
    public $contractor_notice = array();
    
    /**  @var string[]  */
    public $peer_notice = array();
    
    /**  @var string[]  */
    public $broker_notice = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'PlentyServicesTravelLibs.Reservation');

      // REQUIRED MESSAGE general = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "general";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\PlentyServices\TravelLibs\Protobuf\Reservation\General';
      $descriptor->addField($f);

      // REQUIRED MESSAGE contractor = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "contractor";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\PlentyServices\TravelLibs\Protobuf\Person';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE billing_contact = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "billing_contact";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\PlentyServices\TravelLibs\Protobuf\Person';
      $descriptor->addField($f);

      // REPEATED MESSAGE products = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "products";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\PlentyServices\TravelLibs\Protobuf\Product';
      $descriptor->addField($f);

      // REPEATED STRING operator_notice = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "operator_notice";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED STRING contractor_notice = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "contractor_notice";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED STRING peer_notice = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "peer_notice";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED STRING broker_notice = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "broker_notice";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <general> has a value
     *
     * @return boolean
     */
    public function hasGeneral(){
      return $this->_has(1);
    }
    
    /**
     * Clear <general> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function clearGeneral(){
      return $this->_clear(1);
    }
    
    /**
     * Get <general> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation\General
     */
    public function getGeneral(){
      return $this->_get(1);
    }
    
    /**
     * Set <general> value
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Reservation\General $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function setGeneral(\PlentyServices\TravelLibs\Protobuf\Reservation\General $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <contractor> has a value
     *
     * @return boolean
     */
    public function hasContractor(){
      return $this->_has(2);
    }
    
    /**
     * Clear <contractor> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function clearContractor(){
      return $this->_clear(2);
    }
    
    /**
     * Get <contractor> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Person
     */
    public function getContractor(){
      return $this->_get(2);
    }
    
    /**
     * Set <contractor> value
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Person $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function setContractor(\PlentyServices\TravelLibs\Protobuf\Person $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <billing_contact> has a value
     *
     * @return boolean
     */
    public function hasBillingContact(){
      return $this->_has(3);
    }
    
    /**
     * Clear <billing_contact> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function clearBillingContact(){
      return $this->_clear(3);
    }
    
    /**
     * Get <billing_contact> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Person
     */
    public function getBillingContact(){
      return $this->_get(3);
    }
    
    /**
     * Set <billing_contact> value
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Person $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function setBillingContact(\PlentyServices\TravelLibs\Protobuf\Person $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <products> has a value
     *
     * @return boolean
     */
    public function hasProducts(){
      return $this->_has(4);
    }
    
    /**
     * Clear <products> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function clearProducts(){
      return $this->_clear(4);
    }
    
    /**
     * Get <products> value
     *
     * @param int $idx
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function getProducts($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <products> value
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Product $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function setProducts(\PlentyServices\TravelLibs\Protobuf\Product $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <products>
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product[]
     */
    public function getProductsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <products>
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Product $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function addProducts(\PlentyServices\TravelLibs\Protobuf\Product $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <operator_notice> has a value
     *
     * @return boolean
     */
    public function hasOperatorNotice(){
      return $this->_has(10);
    }
    
    /**
     * Clear <operator_notice> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function clearOperatorNotice(){
      return $this->_clear(10);
    }
    
    /**
     * Get <operator_notice> value
     *
     * @param int $idx
     * @return string
     */
    public function getOperatorNotice($idx = NULL){
      return $this->_get(10, $idx);
    }
    
    /**
     * Set <operator_notice> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function setOperatorNotice( $value, $idx = NULL){
      return $this->_set(10, $value, $idx);
    }
    
    /**
     * Get all elements of <operator_notice>
     *
     * @return string[]
     */
    public function getOperatorNoticeList(){
     return $this->_get(10);
    }
    
    /**
     * Add a new element to <operator_notice>
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function addOperatorNotice( $value){
     return $this->_add(10, $value);
    }
    
    /**
     * Check if <contractor_notice> has a value
     *
     * @return boolean
     */
    public function hasContractorNotice(){
      return $this->_has(11);
    }
    
    /**
     * Clear <contractor_notice> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function clearContractorNotice(){
      return $this->_clear(11);
    }
    
    /**
     * Get <contractor_notice> value
     *
     * @param int $idx
     * @return string
     */
    public function getContractorNotice($idx = NULL){
      return $this->_get(11, $idx);
    }
    
    /**
     * Set <contractor_notice> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function setContractorNotice( $value, $idx = NULL){
      return $this->_set(11, $value, $idx);
    }
    
    /**
     * Get all elements of <contractor_notice>
     *
     * @return string[]
     */
    public function getContractorNoticeList(){
     return $this->_get(11);
    }
    
    /**
     * Add a new element to <contractor_notice>
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function addContractorNotice( $value){
     return $this->_add(11, $value);
    }
    
    /**
     * Check if <peer_notice> has a value
     *
     * @return boolean
     */
    public function hasPeerNotice(){
      return $this->_has(12);
    }
    
    /**
     * Clear <peer_notice> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function clearPeerNotice(){
      return $this->_clear(12);
    }
    
    /**
     * Get <peer_notice> value
     *
     * @param int $idx
     * @return string
     */
    public function getPeerNotice($idx = NULL){
      return $this->_get(12, $idx);
    }
    
    /**
     * Set <peer_notice> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function setPeerNotice( $value, $idx = NULL){
      return $this->_set(12, $value, $idx);
    }
    
    /**
     * Get all elements of <peer_notice>
     *
     * @return string[]
     */
    public function getPeerNoticeList(){
     return $this->_get(12);
    }
    
    /**
     * Add a new element to <peer_notice>
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function addPeerNotice( $value){
     return $this->_add(12, $value);
    }
    
    /**
     * Check if <broker_notice> has a value
     *
     * @return boolean
     */
    public function hasBrokerNotice(){
      return $this->_has(13);
    }
    
    /**
     * Clear <broker_notice> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function clearBrokerNotice(){
      return $this->_clear(13);
    }
    
    /**
     * Get <broker_notice> value
     *
     * @param int $idx
     * @return string
     */
    public function getBrokerNotice($idx = NULL){
      return $this->_get(13, $idx);
    }
    
    /**
     * Set <broker_notice> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function setBrokerNotice( $value, $idx = NULL){
      return $this->_set(13, $value, $idx);
    }
    
    /**
     * Get all elements of <broker_notice>
     *
     * @return string[]
     */
    public function getBrokerNoticeList(){
     return $this->_get(13);
    }
    
    /**
     * Add a new element to <broker_notice>
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function addBrokerNotice( $value){
     return $this->_add(13, $value);
    }
  }
}

