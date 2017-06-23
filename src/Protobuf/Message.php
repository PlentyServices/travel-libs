<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2017-06-23 21:23:11

namespace PlentyServices\TravelLibs\Protobuf {

  class Message extends \DrSlump\Protobuf\Message {

    /**  @var string[]  */
    public $access = array();
    
    /**  @var string */
    public $identifier = null;
    
    /**  @var string */
    public $message = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'PlentyServicesTravelLibs.Message');

      // REPEATED STRING access = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "access";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REQUIRED STRING identifier = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "identifier";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED STRING message = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "message";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <access> has a value
     *
     * @return boolean
     */
    public function hasAccess(){
      return $this->_has(1);
    }
    
    /**
     * Clear <access> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Message
     */
    public function clearAccess(){
      return $this->_clear(1);
    }
    
    /**
     * Get <access> value
     *
     * @param int $idx
     * @return string
     */
    public function getAccess($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <access> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Message
     */
    public function setAccess( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <access>
     *
     * @return string[]
     */
    public function getAccessList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <access>
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Message
     */
    public function addAccess( $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <identifier> has a value
     *
     * @return boolean
     */
    public function hasIdentifier(){
      return $this->_has(2);
    }
    
    /**
     * Clear <identifier> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Message
     */
    public function clearIdentifier(){
      return $this->_clear(2);
    }
    
    /**
     * Get <identifier> value
     *
     * @return string
     */
    public function getIdentifier(){
      return $this->_get(2);
    }
    
    /**
     * Set <identifier> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Message
     */
    public function setIdentifier( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <message> has a value
     *
     * @return boolean
     */
    public function hasMessage(){
      return $this->_has(3);
    }
    
    /**
     * Clear <message> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Message
     */
    public function clearMessage(){
      return $this->_clear(3);
    }
    
    /**
     * Get <message> value
     *
     * @return string
     */
    public function getMessage(){
      return $this->_get(3);
    }
    
    /**
     * Set <message> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Message
     */
    public function setMessage( $value){
      return $this->_set(3, $value);
    }
  }
}

