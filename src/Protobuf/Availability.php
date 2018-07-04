<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2018-07-04 13:55:16

namespace PlentyServices\TravelLibs\Protobuf {

  class Availability extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $status = null;
    
    /**  @var string */
    public $rate = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'PlentyServicesTravelLibs.Availability');

      // REQUIRED STRING status = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "status";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // OPTIONAL STRING rate = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "rate";
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
     * @return \PlentyServices\TravelLibs\Protobuf\Availability
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
     * @return \PlentyServices\TravelLibs\Protobuf\Availability
     */
    public function setStatus( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <rate> has a value
     *
     * @return boolean
     */
    public function hasRate(){
      return $this->_has(2);
    }
    
    /**
     * Clear <rate> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Availability
     */
    public function clearRate(){
      return $this->_clear(2);
    }
    
    /**
     * Get <rate> value
     *
     * @return string
     */
    public function getRate(){
      return $this->_get(2);
    }
    
    /**
     * Set <rate> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Availability
     */
    public function setRate( $value){
      return $this->_set(2, $value);
    }
  }
}

