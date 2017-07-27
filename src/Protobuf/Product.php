<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2017-07-27 12:58:19

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
    public $date_from = null;
    
    /**  @var string */
    public $time_from = null;
    
    /**  @var string */
    public $place_to = null;
    
    /**  @var string */
    public $place_to_display = null;
    
    /**  @var string */
    public $date_to = null;
    
    /**  @var string */
    public $time_to = null;
    
    /**  @var \PlentyServices\TravelLibs\Protobuf\Product\Fare[]  */
    public $fares = array();
    

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

      // OPTIONAL STRING date_from = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "date_from";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING time_from = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "time_from";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING place_to = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "place_to";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING place_to_display = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "place_to_display";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING date_to = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "date_to";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING time_to = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "time_to";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE fares = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "fares";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\PlentyServices\TravelLibs\Protobuf\Product\Fare';
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
     * Check if <date_from> has a value
     *
     * @return boolean
     */
    public function hasDateFrom(){
      return $this->_has(11);
    }
    
    /**
     * Clear <date_from> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearDateFrom(){
      return $this->_clear(11);
    }
    
    /**
     * Get <date_from> value
     *
     * @return string
     */
    public function getDateFrom(){
      return $this->_get(11);
    }
    
    /**
     * Set <date_from> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setDateFrom( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <time_from> has a value
     *
     * @return boolean
     */
    public function hasTimeFrom(){
      return $this->_has(12);
    }
    
    /**
     * Clear <time_from> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearTimeFrom(){
      return $this->_clear(12);
    }
    
    /**
     * Get <time_from> value
     *
     * @return string
     */
    public function getTimeFrom(){
      return $this->_get(12);
    }
    
    /**
     * Set <time_from> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setTimeFrom( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <place_to> has a value
     *
     * @return boolean
     */
    public function hasPlaceTo(){
      return $this->_has(15);
    }
    
    /**
     * Clear <place_to> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearPlaceTo(){
      return $this->_clear(15);
    }
    
    /**
     * Get <place_to> value
     *
     * @return string
     */
    public function getPlaceTo(){
      return $this->_get(15);
    }
    
    /**
     * Set <place_to> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setPlaceTo( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <place_to_display> has a value
     *
     * @return boolean
     */
    public function hasPlaceToDisplay(){
      return $this->_has(16);
    }
    
    /**
     * Clear <place_to_display> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearPlaceToDisplay(){
      return $this->_clear(16);
    }
    
    /**
     * Get <place_to_display> value
     *
     * @return string
     */
    public function getPlaceToDisplay(){
      return $this->_get(16);
    }
    
    /**
     * Set <place_to_display> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setPlaceToDisplay( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <date_to> has a value
     *
     * @return boolean
     */
    public function hasDateTo(){
      return $this->_has(17);
    }
    
    /**
     * Clear <date_to> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearDateTo(){
      return $this->_clear(17);
    }
    
    /**
     * Get <date_to> value
     *
     * @return string
     */
    public function getDateTo(){
      return $this->_get(17);
    }
    
    /**
     * Set <date_to> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setDateTo( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <time_to> has a value
     *
     * @return boolean
     */
    public function hasTimeTo(){
      return $this->_has(18);
    }
    
    /**
     * Clear <time_to> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearTimeTo(){
      return $this->_clear(18);
    }
    
    /**
     * Get <time_to> value
     *
     * @return string
     */
    public function getTimeTo(){
      return $this->_get(18);
    }
    
    /**
     * Set <time_to> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setTimeTo( $value){
      return $this->_set(18, $value);
    }
    
    /**
     * Check if <fares> has a value
     *
     * @return boolean
     */
    public function hasFares(){
      return $this->_has(20);
    }
    
    /**
     * Clear <fares> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function clearFares(){
      return $this->_clear(20);
    }
    
    /**
     * Get <fares> value
     *
     * @param int $idx
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare
     */
    public function getFares($idx = NULL){
      return $this->_get(20, $idx);
    }
    
    /**
     * Set <fares> value
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Product\Fare $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function setFares(\PlentyServices\TravelLibs\Protobuf\Product\Fare $value, $idx = NULL){
      return $this->_set(20, $value, $idx);
    }
    
    /**
     * Get all elements of <fares>
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare[]
     */
    public function getFaresList(){
     return $this->_get(20);
    }
    
    /**
     * Add a new element to <fares>
     *
     * @param \PlentyServices\TravelLibs\Protobuf\Product\Fare $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product
     */
    public function addFares(\PlentyServices\TravelLibs\Protobuf\Product\Fare $value){
     return $this->_add(20, $value);
    }
  }
}

