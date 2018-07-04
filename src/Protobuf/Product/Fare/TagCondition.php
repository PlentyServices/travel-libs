<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2018-07-04 13:55:16

namespace PlentyServices\TravelLibs\Protobuf\Product\Fare {

  class TagCondition extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $tag = null;
    
    /**  @var string[]  */
    public $required_ids = array();
    
    /**  @var int */
    public $pax_max = null;
    
    /**  @var int */
    public $pax_min = null;
    
    /**  @var boolean */
    public $strict = null;
    
    /**  @var boolean */
    public $included = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'PlentyServicesTravelLibs.Product.Fare.TagCondition');

      // REQUIRED STRING tag = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tag";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REPEATED STRING required_ids = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "required_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL INT32 pax_max = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "pax_max";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 pax_min = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "pax_min";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL strict = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "strict";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL included = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "included";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <tag> has a value
     *
     * @return boolean
     */
    public function hasTag(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tag> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function clearTag(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tag> value
     *
     * @return string
     */
    public function getTag(){
      return $this->_get(1);
    }
    
    /**
     * Set <tag> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function setTag( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <required_ids> has a value
     *
     * @return boolean
     */
    public function hasRequiredIds(){
      return $this->_has(2);
    }
    
    /**
     * Clear <required_ids> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function clearRequiredIds(){
      return $this->_clear(2);
    }
    
    /**
     * Get <required_ids> value
     *
     * @param int $idx
     * @return string
     */
    public function getRequiredIds($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <required_ids> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function setRequiredIds( $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <required_ids>
     *
     * @return string[]
     */
    public function getRequiredIdsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <required_ids>
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function addRequiredIds( $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <pax_max> has a value
     *
     * @return boolean
     */
    public function hasPaxMax(){
      return $this->_has(3);
    }
    
    /**
     * Clear <pax_max> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function clearPaxMax(){
      return $this->_clear(3);
    }
    
    /**
     * Get <pax_max> value
     *
     * @return int
     */
    public function getPaxMax(){
      return $this->_get(3);
    }
    
    /**
     * Set <pax_max> value
     *
     * @param int $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function setPaxMax( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <pax_min> has a value
     *
     * @return boolean
     */
    public function hasPaxMin(){
      return $this->_has(4);
    }
    
    /**
     * Clear <pax_min> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function clearPaxMin(){
      return $this->_clear(4);
    }
    
    /**
     * Get <pax_min> value
     *
     * @return int
     */
    public function getPaxMin(){
      return $this->_get(4);
    }
    
    /**
     * Set <pax_min> value
     *
     * @param int $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function setPaxMin( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <strict> has a value
     *
     * @return boolean
     */
    public function hasStrict(){
      return $this->_has(5);
    }
    
    /**
     * Clear <strict> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function clearStrict(){
      return $this->_clear(5);
    }
    
    /**
     * Get <strict> value
     *
     * @return boolean
     */
    public function getStrict(){
      return $this->_get(5);
    }
    
    /**
     * Set <strict> value
     *
     * @param boolean $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function setStrict( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <included> has a value
     *
     * @return boolean
     */
    public function hasIncluded(){
      return $this->_has(6);
    }
    
    /**
     * Clear <included> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function clearIncluded(){
      return $this->_clear(6);
    }
    
    /**
     * Get <included> value
     *
     * @return boolean
     */
    public function getIncluded(){
      return $this->_get(6);
    }
    
    /**
     * Set <included> value
     *
     * @param boolean $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\TagCondition
     */
    public function setIncluded( $value){
      return $this->_set(6, $value);
    }
  }
}

