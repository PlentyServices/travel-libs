<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2016-12-02 20:37:47

namespace PlentyServices\TravelLibs\Protobuf {

  class Product extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $product_uid = null;
    
    /**  @var string */
    public $product_alias = null;
    
    /**  @var string */
    public $vendor_uid = null;
    
    /**  @var string */
    public $vendor_alias = null;
    
    /**  @var string */
    public $product_type = null;
    
    /**  @var string */
    public $product_subtype = null;
    
    /**  @var string */
    public $display = null;
    
    /**  @var string */
    public $display_description = null;
    
    /**  @var string */
    public $place_from = null;
    
    /**  @var string */
    public $place_from_display = null;
    
    /**  @var string */
    public $place_to = null;
    
    /**  @var string */
    public $place_to_display = null;
    
    /**  @var string */
    public $departure_date = null;
    
    /**  @var string */
    public $departure_time = null;
    
    /**  @var string */
    public $arrival_date = null;
    
    /**  @var string */
    public $arrival_time = null;
    
    /**  @var \PlentyServices\TravelLibs\Protobuf\Product\Fare[]  */
    public $fares = array();
    
    /**  @var string */
    public $status = null;
    
    /**  @var int */
    public $quantity = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'PlentyServicesTravelLibs.Product');

      // OPTIONAL STRING product_uid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "product_uid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING product_alias = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "product_alias";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING vendor_uid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "vendor_uid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING vendor_alias = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "vendor_alias";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING product_type = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "product_type";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING product_subtype = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "product_subtype";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING display = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "display";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING display_description = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "display_description";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING place_from = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "place_from";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING place_from_display = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "place_from_display";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING place_to = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "place_to";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING place_to_display = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "place_to_display";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING departure_date = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "departure_date";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING departure_time = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "departure_time";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING arrival_date = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "arrival_date";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING arrival_time = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "arrival_time";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE fares = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "fares";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\PlentyServices\TravelLibs\Protobuf\Product\Fare';
      $descriptor->addField($f);

      // OPTIONAL STRING status = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "status";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 quantity = 21
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 21;
      $f->name      = "quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <product_uid> has a value
     *
     * @return boolean
     */
    public function hasProductUid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <product_uid> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearProductUid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <product_uid> value
     *
     * @return string
     */
    public function getProductUid(){
      return $this->_get(1);
    }
    
    /**
     * Set <product_uid> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setProductUid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <product_alias> has a value
     *
     * @return boolean
     */
    public function hasProductAlias(){
      return $this->_has(2);
    }
    
    /**
     * Clear <product_alias> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearProductAlias(){
      return $this->_clear(2);
    }
    
    /**
     * Get <product_alias> value
     *
     * @return string
     */
    public function getProductAlias(){
      return $this->_get(2);
    }
    
    /**
     * Set <product_alias> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setProductAlias( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <vendor_uid> has a value
     *
     * @return boolean
     */
    public function hasVendorUid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <vendor_uid> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearVendorUid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <vendor_uid> value
     *
     * @return string
     */
    public function getVendorUid(){
      return $this->_get(3);
    }
    
    /**
     * Set <vendor_uid> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setVendorUid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <vendor_alias> has a value
     *
     * @return boolean
     */
    public function hasVendorAlias(){
      return $this->_has(4);
    }
    
    /**
     * Clear <vendor_alias> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearVendorAlias(){
      return $this->_clear(4);
    }
    
    /**
     * Get <vendor_alias> value
     *
     * @return string
     */
    public function getVendorAlias(){
      return $this->_get(4);
    }
    
    /**
     * Set <vendor_alias> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setVendorAlias( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <product_type> has a value
     *
     * @return boolean
     */
    public function hasProductType(){
      return $this->_has(5);
    }
    
    /**
     * Clear <product_type> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearProductType(){
      return $this->_clear(5);
    }
    
    /**
     * Get <product_type> value
     *
     * @return string
     */
    public function getProductType(){
      return $this->_get(5);
    }
    
    /**
     * Set <product_type> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setProductType( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <product_subtype> has a value
     *
     * @return boolean
     */
    public function hasProductSubtype(){
      return $this->_has(6);
    }
    
    /**
     * Clear <product_subtype> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearProductSubtype(){
      return $this->_clear(6);
    }
    
    /**
     * Get <product_subtype> value
     *
     * @return string
     */
    public function getProductSubtype(){
      return $this->_get(6);
    }
    
    /**
     * Set <product_subtype> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setProductSubtype( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <display> has a value
     *
     * @return boolean
     */
    public function hasDisplay(){
      return $this->_has(7);
    }
    
    /**
     * Clear <display> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearDisplay(){
      return $this->_clear(7);
    }
    
    /**
     * Get <display> value
     *
     * @return string
     */
    public function getDisplay(){
      return $this->_get(7);
    }
    
    /**
     * Set <display> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setDisplay( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <display_description> has a value
     *
     * @return boolean
     */
    public function hasDisplayDescription(){
      return $this->_has(8);
    }
    
    /**
     * Clear <display_description> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearDisplayDescription(){
      return $this->_clear(8);
    }
    
    /**
     * Get <display_description> value
     *
     * @return string
     */
    public function getDisplayDescription(){
      return $this->_get(8);
    }
    
    /**
     * Set <display_description> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setDisplayDescription( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <place_from> has a value
     *
     * @return boolean
     */
    public function hasPlaceFrom(){
      return $this->_has(9);
    }
    
    /**
     * Clear <place_from> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearPlaceFrom(){
      return $this->_clear(9);
    }
    
    /**
     * Get <place_from> value
     *
     * @return string
     */
    public function getPlaceFrom(){
      return $this->_get(9);
    }
    
    /**
     * Set <place_from> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setPlaceFrom( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <place_from_display> has a value
     *
     * @return boolean
     */
    public function hasPlaceFromDisplay(){
      return $this->_has(10);
    }
    
    /**
     * Clear <place_from_display> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearPlaceFromDisplay(){
      return $this->_clear(10);
    }
    
    /**
     * Get <place_from_display> value
     *
     * @return string
     */
    public function getPlaceFromDisplay(){
      return $this->_get(10);
    }
    
    /**
     * Set <place_from_display> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setPlaceFromDisplay( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <place_to> has a value
     *
     * @return boolean
     */
    public function hasPlaceTo(){
      return $this->_has(11);
    }
    
    /**
     * Clear <place_to> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearPlaceTo(){
      return $this->_clear(11);
    }
    
    /**
     * Get <place_to> value
     *
     * @return string
     */
    public function getPlaceTo(){
      return $this->_get(11);
    }
    
    /**
     * Set <place_to> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setPlaceTo( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <place_to_display> has a value
     *
     * @return boolean
     */
    public function hasPlaceToDisplay(){
      return $this->_has(12);
    }
    
    /**
     * Clear <place_to_display> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearPlaceToDisplay(){
      return $this->_clear(12);
    }
    
    /**
     * Get <place_to_display> value
     *
     * @return string
     */
    public function getPlaceToDisplay(){
      return $this->_get(12);
    }
    
    /**
     * Set <place_to_display> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setPlaceToDisplay( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <departure_date> has a value
     *
     * @return boolean
     */
    public function hasDepartureDate(){
      return $this->_has(13);
    }
    
    /**
     * Clear <departure_date> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearDepartureDate(){
      return $this->_clear(13);
    }
    
    /**
     * Get <departure_date> value
     *
     * @return string
     */
    public function getDepartureDate(){
      return $this->_get(13);
    }
    
    /**
     * Set <departure_date> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setDepartureDate( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <departure_time> has a value
     *
     * @return boolean
     */
    public function hasDepartureTime(){
      return $this->_has(14);
    }
    
    /**
     * Clear <departure_time> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearDepartureTime(){
      return $this->_clear(14);
    }
    
    /**
     * Get <departure_time> value
     *
     * @return string
     */
    public function getDepartureTime(){
      return $this->_get(14);
    }
    
    /**
     * Set <departure_time> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setDepartureTime( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <arrival_date> has a value
     *
     * @return boolean
     */
    public function hasArrivalDate(){
      return $this->_has(15);
    }
    
    /**
     * Clear <arrival_date> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearArrivalDate(){
      return $this->_clear(15);
    }
    
    /**
     * Get <arrival_date> value
     *
     * @return string
     */
    public function getArrivalDate(){
      return $this->_get(15);
    }
    
    /**
     * Set <arrival_date> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setArrivalDate( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <arrival_time> has a value
     *
     * @return boolean
     */
    public function hasArrivalTime(){
      return $this->_has(16);
    }
    
    /**
     * Clear <arrival_time> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearArrivalTime(){
      return $this->_clear(16);
    }
    
    /**
     * Get <arrival_time> value
     *
     * @return string
     */
    public function getArrivalTime(){
      return $this->_get(16);
    }
    
    /**
     * Set <arrival_time> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setArrivalTime( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <fares> has a value
     *
     * @return boolean
     */
    public function hasFares(){
      return $this->_has(18);
    }
    
    /**
     * Clear <fares> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearFares(){
      return $this->_clear(18);
    }
    
    /**
     * Get <fares> value
     *
     * @param int $idx
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare
     */
    public function getFares($idx = NULL){
      return $this->_get(18, $idx);
    }
    
    /**
     * Set <fares> value
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Product\Fare $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setFares(\PlentyServices\TravelLibs\Protobuf\Product\Fare $value, $idx = NULL){
      return $this->_set(18, $value, $idx);
    }
    
    /**
     * Get all elements of <fares>
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare[]
     */
    public function getFaresList(){
     return $this->_get(18);
    }
    
    /**
     * Add a new element to <fares>
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Product\Fare $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function addFares(\PlentyServices\TravelLibs\Protobuf\Product\Fare $value){
     return $this->_add(18, $value);
    }
    
    /**
     * Check if <status> has a value
     *
     * @return boolean
     */
    public function hasStatus(){
      return $this->_has(20);
    }
    
    /**
     * Clear <status> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearStatus(){
      return $this->_clear(20);
    }
    
    /**
     * Get <status> value
     *
     * @return string
     */
    public function getStatus(){
      return $this->_get(20);
    }
    
    /**
     * Set <status> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setStatus( $value){
      return $this->_set(20, $value);
    }
    
    /**
     * Check if <quantity> has a value
     *
     * @return boolean
     */
    public function hasQuantity(){
      return $this->_has(21);
    }
    
    /**
     * Clear <quantity> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearQuantity(){
      return $this->_clear(21);
    }
    
    /**
     * Get <quantity> value
     *
     * @return int
     */
    public function getQuantity(){
      return $this->_get(21);
    }
    
    /**
     * Set <quantity> value
     *
     * @param int $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setQuantity( $value){
      return $this->_set(21, $value);
    }
  }
}

