<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2017-06-23 19:47:21

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
    
    /**  @var \PlentyServices\TravelLibs\Protobuf\Message[]  */
    public $messages = array();
    

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

      // REPEATED MESSAGE messages = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "messages";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\PlentyServices\TravelLibs\Protobuf\Message';
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
     * Check if <messages> has a value
     *
     * @return boolean
     */
    public function hasMessages(){
      return $this->_has(20);
    }
    
    /**
     * Clear <messages> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function clearMessages(){
      return $this->_clear(20);
    }
    
    /**
     * Get <messages> value
     *
     * @param int $idx
     * @return \PlentyServices\TravelLibs\Protobuf\Message
     */
    public function getMessages($idx = NULL){
      return $this->_get(20, $idx);
    }
    
    /**
     * Set <messages> value
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Message $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function setMessages(\PlentyServices\TravelLibs\Protobuf\Message $value, $idx = NULL){
      return $this->_set(20, $value, $idx);
    }
    
    /**
     * Get all elements of <messages>
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Message[]
     */
    public function getMessagesList(){
     return $this->_get(20);
    }
    
    /**
     * Add a new element to <messages>
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Message $value
     * @return \PlentyServices\TravelLibs\Protobuf\Reservation
     */
    public function addMessages(\PlentyServices\TravelLibs\Protobuf\Message $value){
     return $this->_add(20, $value);
    }
  }
}

