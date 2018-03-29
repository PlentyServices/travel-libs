<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2018-03-28 17:07:56

namespace PlentyServices\TravelLibs\Protobuf\Person {

  class Id extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $type = null;
    
    /**  @var string */
    public $id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'PlentyServicesTravelLibs.Person.Id');

      // REQUIRED STRING type = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED STRING id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(1);
    }
    
    /**
     * Clear <type> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Person\Id
     */
    public function clearType(){
      return $this->_clear(1);
    }
    
    /**
     * Get <type> value
     *
     * @return string
     */
    public function getType(){
      return $this->_get(1);
    }
    
    /**
     * Set <type> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Person\Id
     */
    public function setType( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <id> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Person\Id
     */
    public function clearId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <id> value
     *
     * @return string
     */
    public function getId(){
      return $this->_get(2);
    }
    
    /**
     * Set <id> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Person\Id
     */
    public function setId( $value){
      return $this->_set(2, $value);
    }
  }
}

