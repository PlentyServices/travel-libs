<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: reservation.proto
//   Date: 2016-12-04 11:49:52

namespace PlentyServices\TravelLibs\Protobuf\Product\Fare {

  class Charge extends \DrSlump\Protobuf\Message {

    /**  @var float */
    public $retail_exchange = null;
    
    /**  @var float */
    public $purchase_exchange = null;
    
    /**  @var float */
    public $purchase_nett = null;
    
    /**  @var float */
    public $purchase_gross = null;
    
    /**  @var string */
    public $purchase_currency = null;
    
    /**  @var float */
    public $purchase_commission_percentage = null;
    
    /**  @var float */
    public $purchase_commission_amount = null;
    
    /**  @var float */
    public $retail_price = null;
    
    /**  @var string */
    public $retail_currency = null;
    
    /**  @var boolean */
    public $calc_from_gross = null;
    
    /**  @var boolean */
    public $round_retail_price = null;
    
    /**  @var string */
    public $display = null;
    
    /**  @var string */
    public $display_description = null;
    
    /**  @var float */
    public $markup_percentage = null;
    
    /**  @var float */
    public $markup_amount = null;
    
    /**  @var float */
    public $margin_percentage = null;
    
    /**  @var float */
    public $commission_peer_percentage = null;
    
    /**  @var float */
    public $commission_peer_amount = null;
    
    /**  @var float */
    public $commission_broker_percentage = null;
    
    /**  @var float */
    public $commission_broker_amount = null;
    
    /**  @var string */
    public $payable = null;
    
    /**  @var int */
    public $quantity = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'PlentyServicesTravelLibs.Product.Fare.Charge');

      // OPTIONAL FLOAT retail_exchange = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "retail_exchange";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT purchase_exchange = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "purchase_exchange";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT purchase_nett = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "purchase_nett";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT purchase_gross = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "purchase_gross";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING purchase_currency = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "purchase_currency";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT purchase_commission_percentage = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "purchase_commission_percentage";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT purchase_commission_amount = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "purchase_commission_amount";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT retail_price = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "retail_price";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING retail_currency = 34
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 34;
      $f->name      = "retail_currency";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL calc_from_gross = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "calc_from_gross";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL round_retail_price = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "round_retail_price";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING display = 19
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 19;
      $f->name      = "display";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING display_description = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "display_description";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT markup_percentage = 23
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 23;
      $f->name      = "markup_percentage";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT markup_amount = 24
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 24;
      $f->name      = "markup_amount";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT margin_percentage = 25
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 25;
      $f->name      = "margin_percentage";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT commission_peer_percentage = 26
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 26;
      $f->name      = "commission_peer_percentage";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT commission_peer_amount = 27
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 27;
      $f->name      = "commission_peer_amount";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT commission_broker_percentage = 28
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 28;
      $f->name      = "commission_broker_percentage";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT commission_broker_amount = 29
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 29;
      $f->name      = "commission_broker_amount";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING payable = 33
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 33;
      $f->name      = "payable";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 quantity = 35
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 35;
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
     * Check if <retail_exchange> has a value
     *
     * @return boolean
     */
    public function hasRetailExchange(){
      return $this->_has(9);
    }
    
    /**
     * Clear <retail_exchange> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearRetailExchange(){
      return $this->_clear(9);
    }
    
    /**
     * Get <retail_exchange> value
     *
     * @return float
     */
    public function getRetailExchange(){
      return $this->_get(9);
    }
    
    /**
     * Set <retail_exchange> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setRetailExchange( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <purchase_exchange> has a value
     *
     * @return boolean
     */
    public function hasPurchaseExchange(){
      return $this->_has(10);
    }
    
    /**
     * Clear <purchase_exchange> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearPurchaseExchange(){
      return $this->_clear(10);
    }
    
    /**
     * Get <purchase_exchange> value
     *
     * @return float
     */
    public function getPurchaseExchange(){
      return $this->_get(10);
    }
    
    /**
     * Set <purchase_exchange> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setPurchaseExchange( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <purchase_nett> has a value
     *
     * @return boolean
     */
    public function hasPurchaseNett(){
      return $this->_has(11);
    }
    
    /**
     * Clear <purchase_nett> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearPurchaseNett(){
      return $this->_clear(11);
    }
    
    /**
     * Get <purchase_nett> value
     *
     * @return float
     */
    public function getPurchaseNett(){
      return $this->_get(11);
    }
    
    /**
     * Set <purchase_nett> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setPurchaseNett( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <purchase_gross> has a value
     *
     * @return boolean
     */
    public function hasPurchaseGross(){
      return $this->_has(12);
    }
    
    /**
     * Clear <purchase_gross> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearPurchaseGross(){
      return $this->_clear(12);
    }
    
    /**
     * Get <purchase_gross> value
     *
     * @return float
     */
    public function getPurchaseGross(){
      return $this->_get(12);
    }
    
    /**
     * Set <purchase_gross> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setPurchaseGross( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <purchase_currency> has a value
     *
     * @return boolean
     */
    public function hasPurchaseCurrency(){
      return $this->_has(13);
    }
    
    /**
     * Clear <purchase_currency> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearPurchaseCurrency(){
      return $this->_clear(13);
    }
    
    /**
     * Get <purchase_currency> value
     *
     * @return string
     */
    public function getPurchaseCurrency(){
      return $this->_get(13);
    }
    
    /**
     * Set <purchase_currency> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setPurchaseCurrency( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <purchase_commission_percentage> has a value
     *
     * @return boolean
     */
    public function hasPurchaseCommissionPercentage(){
      return $this->_has(14);
    }
    
    /**
     * Clear <purchase_commission_percentage> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearPurchaseCommissionPercentage(){
      return $this->_clear(14);
    }
    
    /**
     * Get <purchase_commission_percentage> value
     *
     * @return float
     */
    public function getPurchaseCommissionPercentage(){
      return $this->_get(14);
    }
    
    /**
     * Set <purchase_commission_percentage> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setPurchaseCommissionPercentage( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <purchase_commission_amount> has a value
     *
     * @return boolean
     */
    public function hasPurchaseCommissionAmount(){
      return $this->_has(15);
    }
    
    /**
     * Clear <purchase_commission_amount> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearPurchaseCommissionAmount(){
      return $this->_clear(15);
    }
    
    /**
     * Get <purchase_commission_amount> value
     *
     * @return float
     */
    public function getPurchaseCommissionAmount(){
      return $this->_get(15);
    }
    
    /**
     * Set <purchase_commission_amount> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setPurchaseCommissionAmount( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <retail_price> has a value
     *
     * @return boolean
     */
    public function hasRetailPrice(){
      return $this->_has(16);
    }
    
    /**
     * Clear <retail_price> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearRetailPrice(){
      return $this->_clear(16);
    }
    
    /**
     * Get <retail_price> value
     *
     * @return float
     */
    public function getRetailPrice(){
      return $this->_get(16);
    }
    
    /**
     * Set <retail_price> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setRetailPrice( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <retail_currency> has a value
     *
     * @return boolean
     */
    public function hasRetailCurrency(){
      return $this->_has(34);
    }
    
    /**
     * Clear <retail_currency> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearRetailCurrency(){
      return $this->_clear(34);
    }
    
    /**
     * Get <retail_currency> value
     *
     * @return string
     */
    public function getRetailCurrency(){
      return $this->_get(34);
    }
    
    /**
     * Set <retail_currency> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setRetailCurrency( $value){
      return $this->_set(34, $value);
    }
    
    /**
     * Check if <calc_from_gross> has a value
     *
     * @return boolean
     */
    public function hasCalcFromGross(){
      return $this->_has(17);
    }
    
    /**
     * Clear <calc_from_gross> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearCalcFromGross(){
      return $this->_clear(17);
    }
    
    /**
     * Get <calc_from_gross> value
     *
     * @return boolean
     */
    public function getCalcFromGross(){
      return $this->_get(17);
    }
    
    /**
     * Set <calc_from_gross> value
     *
     * @param boolean $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setCalcFromGross( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <round_retail_price> has a value
     *
     * @return boolean
     */
    public function hasRoundRetailPrice(){
      return $this->_has(18);
    }
    
    /**
     * Clear <round_retail_price> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearRoundRetailPrice(){
      return $this->_clear(18);
    }
    
    /**
     * Get <round_retail_price> value
     *
     * @return boolean
     */
    public function getRoundRetailPrice(){
      return $this->_get(18);
    }
    
    /**
     * Set <round_retail_price> value
     *
     * @param boolean $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setRoundRetailPrice( $value){
      return $this->_set(18, $value);
    }
    
    /**
     * Check if <display> has a value
     *
     * @return boolean
     */
    public function hasDisplay(){
      return $this->_has(19);
    }
    
    /**
     * Clear <display> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearDisplay(){
      return $this->_clear(19);
    }
    
    /**
     * Get <display> value
     *
     * @return string
     */
    public function getDisplay(){
      return $this->_get(19);
    }
    
    /**
     * Set <display> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setDisplay( $value){
      return $this->_set(19, $value);
    }
    
    /**
     * Check if <display_description> has a value
     *
     * @return boolean
     */
    public function hasDisplayDescription(){
      return $this->_has(20);
    }
    
    /**
     * Clear <display_description> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearDisplayDescription(){
      return $this->_clear(20);
    }
    
    /**
     * Get <display_description> value
     *
     * @return string
     */
    public function getDisplayDescription(){
      return $this->_get(20);
    }
    
    /**
     * Set <display_description> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setDisplayDescription( $value){
      return $this->_set(20, $value);
    }
    
    /**
     * Check if <markup_percentage> has a value
     *
     * @return boolean
     */
    public function hasMarkupPercentage(){
      return $this->_has(23);
    }
    
    /**
     * Clear <markup_percentage> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearMarkupPercentage(){
      return $this->_clear(23);
    }
    
    /**
     * Get <markup_percentage> value
     *
     * @return float
     */
    public function getMarkupPercentage(){
      return $this->_get(23);
    }
    
    /**
     * Set <markup_percentage> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setMarkupPercentage( $value){
      return $this->_set(23, $value);
    }
    
    /**
     * Check if <markup_amount> has a value
     *
     * @return boolean
     */
    public function hasMarkupAmount(){
      return $this->_has(24);
    }
    
    /**
     * Clear <markup_amount> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearMarkupAmount(){
      return $this->_clear(24);
    }
    
    /**
     * Get <markup_amount> value
     *
     * @return float
     */
    public function getMarkupAmount(){
      return $this->_get(24);
    }
    
    /**
     * Set <markup_amount> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setMarkupAmount( $value){
      return $this->_set(24, $value);
    }
    
    /**
     * Check if <margin_percentage> has a value
     *
     * @return boolean
     */
    public function hasMarginPercentage(){
      return $this->_has(25);
    }
    
    /**
     * Clear <margin_percentage> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearMarginPercentage(){
      return $this->_clear(25);
    }
    
    /**
     * Get <margin_percentage> value
     *
     * @return float
     */
    public function getMarginPercentage(){
      return $this->_get(25);
    }
    
    /**
     * Set <margin_percentage> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setMarginPercentage( $value){
      return $this->_set(25, $value);
    }
    
    /**
     * Check if <commission_peer_percentage> has a value
     *
     * @return boolean
     */
    public function hasCommissionPeerPercentage(){
      return $this->_has(26);
    }
    
    /**
     * Clear <commission_peer_percentage> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearCommissionPeerPercentage(){
      return $this->_clear(26);
    }
    
    /**
     * Get <commission_peer_percentage> value
     *
     * @return float
     */
    public function getCommissionPeerPercentage(){
      return $this->_get(26);
    }
    
    /**
     * Set <commission_peer_percentage> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setCommissionPeerPercentage( $value){
      return $this->_set(26, $value);
    }
    
    /**
     * Check if <commission_peer_amount> has a value
     *
     * @return boolean
     */
    public function hasCommissionPeerAmount(){
      return $this->_has(27);
    }
    
    /**
     * Clear <commission_peer_amount> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearCommissionPeerAmount(){
      return $this->_clear(27);
    }
    
    /**
     * Get <commission_peer_amount> value
     *
     * @return float
     */
    public function getCommissionPeerAmount(){
      return $this->_get(27);
    }
    
    /**
     * Set <commission_peer_amount> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setCommissionPeerAmount( $value){
      return $this->_set(27, $value);
    }
    
    /**
     * Check if <commission_broker_percentage> has a value
     *
     * @return boolean
     */
    public function hasCommissionBrokerPercentage(){
      return $this->_has(28);
    }
    
    /**
     * Clear <commission_broker_percentage> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearCommissionBrokerPercentage(){
      return $this->_clear(28);
    }
    
    /**
     * Get <commission_broker_percentage> value
     *
     * @return float
     */
    public function getCommissionBrokerPercentage(){
      return $this->_get(28);
    }
    
    /**
     * Set <commission_broker_percentage> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setCommissionBrokerPercentage( $value){
      return $this->_set(28, $value);
    }
    
    /**
     * Check if <commission_broker_amount> has a value
     *
     * @return boolean
     */
    public function hasCommissionBrokerAmount(){
      return $this->_has(29);
    }
    
    /**
     * Clear <commission_broker_amount> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearCommissionBrokerAmount(){
      return $this->_clear(29);
    }
    
    /**
     * Get <commission_broker_amount> value
     *
     * @return float
     */
    public function getCommissionBrokerAmount(){
      return $this->_get(29);
    }
    
    /**
     * Set <commission_broker_amount> value
     *
     * @param float $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setCommissionBrokerAmount( $value){
      return $this->_set(29, $value);
    }
    
    /**
     * Check if <payable> has a value
     *
     * @return boolean
     */
    public function hasPayable(){
      return $this->_has(33);
    }
    
    /**
     * Clear <payable> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearPayable(){
      return $this->_clear(33);
    }
    
    /**
     * Get <payable> value
     *
     * @return string
     */
    public function getPayable(){
      return $this->_get(33);
    }
    
    /**
     * Set <payable> value
     *
     * @param string $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setPayable( $value){
      return $this->_set(33, $value);
    }
    
    /**
     * Check if <quantity> has a value
     *
     * @return boolean
     */
    public function hasQuantity(){
      return $this->_has(35);
    }
    
    /**
     * Clear <quantity> value
     *
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function clearQuantity(){
      return $this->_clear(35);
    }
    
    /**
     * Get <quantity> value
     *
     * @return int
     */
    public function getQuantity(){
      return $this->_get(35);
    }
    
    /**
     * Set <quantity> value
     *
     * @param int $value
     * @return \PlentyServices\TravelLibs\Protobuf\Product\Fare\Charge
     */
    public function setQuantity( $value){
      return $this->_set(35, $value);
    }
  }
}

