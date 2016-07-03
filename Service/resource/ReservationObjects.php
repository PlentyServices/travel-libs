<?php


class General
{

    /**
     * @var string
     * @Assert\Choice(choices = {"request", "booking"}, message = "status: request or booking" groups={"booking", "request"})
     */
    public $status;

    /**
     * @var string
     * @Assert\Choice(choices = {"travel", "camper"}, message = "system: context" groups={"booking", "request"})
     */
    public $system;

    /**
     * @var string
     * @Assert\NotBlank(message = "locale: en, de.." groups={"booking", "request"})
     */
    public $locale;

    /**
     * @var string
     */
    public $broker;

    /**
     * @var string
     */
    public $peer;

    /**
     * @var string
     * @Assert\NotBlank(message = "operator: touroperator" groups={"booking", "request"})
     */
    public $operator;

    /**
     * @var string
     */
    public $travel_type;

    /**
     * @var string
     */
    public $travel_type_sub;

    /**
     * @var string
     * @Assert\Choice(choices = {"direct", "business"}, message = "transaction_type: b2c => 'direct', b2b => 'business'" groups={"booking", "request"})
     */
    public $transaction_type;

    /**
     * @var string
     * @Assert\NotBlank(message = "display: head title" groups={"booking", "request"})
     */
    public $display;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking", "request"})
     */
    public $currency;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking"})
     */
    public $payment_type;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking"})
     */
    public $payment_fee;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking", "request"})
     */
    public $ip_referred;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking", "request"})
     */
    public $consultant_notice;

    
    
    public function setStatus($status = 'request')
    {
        $this->status = $status;
    }

    public function setSystem($system = 'travel')
    {
        $this->system = $system;
    }

    public function setLocale($locale = 'de')
    {
        $this->locale = $locale;
    }

    public function setBroker($broker)
    {
        $this->broker = $broker;
    }

    public function setPeer($peer)
    {
        $this->peer = $peer;
    }

    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    public function setTransactionType($transactionType = 'direct')
    {
        $this->transaction_type= $transactionType;
    }

    public function setTravelType($travelType)
    {
        $this->travel_type= $travelType;
    }

    public function setTravelSubType($travelSubType)
    {
        $this->travel_type_sub = $travelSubType;
    }

    public function setDisplay($display)
    {
        $this->display = $display;
    }

    public function setCurrency($currency = 'eur')
    {
        $this->currency = $currency;
    }

    public function setPaymentType($paymentType = 'invoice')
    {
        $this->payment_type = $paymentType;
    }

    public function setPaymentFee($paymentFee)
    {
        $this->payment_fee = $paymentFee;
    }

    public function setIpReferred($ipReferred)
    {
        $this->ip_referred = $ipReferred;
    }

    public function setConsultantNotice($consultantNotice)
    {
        $this->consultant_notice = $consultantNotice;
    }

}

class Contractor
{
    public $name_last;
    public $name_first;
    public $name_title;
    public $gender;
    public $street;
    public $postal;
    public $city;
    public $phone;
    public $dob;
    public $email;
    public $state;
    public $country;
    public $nationality;
    public $contractor_notice;
    public $tags;
    public $ids;
    public $is_passenger;
    public $uid;

    public function __construct()
    {
        $this->uid = uniqid();
        $this->tags = array();
        $this->ids = array();
    }

    public function setLastName($lastName)
    {
        $this->name_last = $lastName;
    }

    public function setFirstName($firstName)
    {
        $this->name_first = $firstName;
    }

    public function setTitle($title)
    {
        $this->name_title = $title;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setPostal($postal)
    {
        $this->postal = $postal;
    }

    public function setDateOfBirth($dob)
    {
        $this->dob = $dob;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function setContractorNotice($contractorNotice)
    {
        $this->contractor_notice = $contractorNotice;
    }

    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    public function addId($idName, $id)
    {
        $this->ids[$idName] = $id;
    }
    public function isPassenger($isPassenger = true)
    {
        $this->is_passenger = $isPassenger;
    }
    
}

class BillingContact
{
    public $name_last;
    public $name_first;
    public $name_title;
    public $gender;
    public $street;
    public $postal;
    public $city;
    public $state;
    public $country;
    public $company;
    public $dob;
    public $phone;
    public $email;


    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function setLastName($lastName)
    {
        $this->name_last = $lastName;
    }

    public function setFirstName($firstName)
    {
        $this->name_first = $firstName;
    }

    public function setTitle($title)
    {
        $this->name_title = $title;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setPostal($postal)
    {
        $this->postal = $postal;
    }

    public function setDateOfBirth($dob)
    {
        $this->dob = $dob;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }
}

class Passenger
{
    public $name_last;
    public $name_first;
    public $name_title;
    public $gender;
    public $street;
    public $postal;
    public $city;
    public $phone;
    public $dob;
    public $email;
    public $state;
    public $country;
    public $nationality;
    public $contractor_notice;
    public $tags;
    public $passport;
    public $uid;

    public function __construct()
    {
        $this->uid = uniqid();
        $this->tags = array();
        $this->ids = array();
    }

    public function setLastName($lastName)
    {
        $this->name_last = $lastName;
    }

    public function setFirstName($firstName)
    {
        $this->name_first = $firstName;
    }

    public function setTitle($title)
    {
        $this->name_title = $title;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setPostal($postal)
    {
        $this->postal = $postal;
    }

    public function setDateOfBirth($dob)
    {
        $this->dob = $dob;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function setContractorNotice($contractorNotice)
    {
        $this->contractor_notice = $contractorNotice;
    }

    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    public function addId($idName, $id)
    {
        $this->ids[$idName] = $id;
    }
}

class Item
{
    public $vendor_alias;
    public $vendor_id;
    public $product_alias;
    public $product_id;
    public $product_type;
    public $product_subtype;
    public $display;
    public $display_description;
    public $depart_place;
    public $depart_place_alias;
    public $depart_date;
    public $depart_time;
    public $arrive_place;
    public $arrive_place_alias;
    public $arrive_date;
    public $arrive_time;
    public $consultant_notice;
    public $is_optional;
    public $items_holds;
    public $uid;

    public function __construct()
    {
        $this->uid = uniqid();
        $this->items_holds = array();
    }

    public function setVendorAlias($vendorAlias)
    {
        $this->vendor_alias = $vendorAlias;
    }

    public function setVendorId($vendorId)
    {
        $this->vendor_id = $vendorId;
    }

    public function setProductId($productId)
    {
        $this->product_id = $productId;
    }

    public function setProductAlias($productAlias)
    {
        $this->product_alias = $productAlias;
    }

    public function setProductType($productType)
    {
        $this->product_type = $productType;
    }

    public function setProductSubtype($productSubtype)
    {
        $this->product_subtype = $productSubtype;
    }

    public function setDisplay($display)
    {
        $this->display = $display;
    }

    public function setDisplayDescription($displayDescription)
    {
        $this->display_description = $displayDescription;
    }

    public function setDepartPlaceAlias($departPlaceAlias)
    {
        $this->depart_place_alias = $departPlaceAlias;
    }
    
    public function setDepartPlace($departPlace)
    {
        $this->depart_place = $departPlace;
    }
    
    public function setDepartDate($departDate)
    {
        $this->depart_date = $departDate;
    }

    public function setDepartTime($departTime)
    {
        $this->depart_time = $departTime;
    }

    public function setArrivePlace($arrivePlace)
    {
        $this->arrive_place = $arrivePlace;
    }

    public function setArrivePlaceAlias($arrivePlaceAlias)
    {
        $this->arrive_place_alias = $arrivePlaceAlias;
    }

    public function setArriveDate($arriveDate)
    {
        $this->arrive_date = $arriveDate;
    }

    public function setArriveTime($arriveTime)
    {
        $this->arrive_time = $arriveTime;
    }

    public function setConsultantNotice($consultantNotice)
    {
        $this->consultant_notice = $consultantNotice;
    }

    public function isOptional($isOptional = false)
    {
        $this->is_optional = $isOptional;
    }

    public function addItemHolds($itemHolds)
    {
        $this->items_holds[] = (array) $itemHolds;
    }
}

class ItemHolds
{
    public $display;
    public $display_description;
    public $amount;
    public $amount_buy;
    public $currency;
    public $exchange;
    public $payable;
    public $margin_operator;
    public $margin_peer;
    public $margin_broker;
    public $uid;
    
    public function setDisplay($display)
    {
        $this->uid = uniqid();
        $this->display = $display;
        $this->setAmount();
        $this->setPayable();
    }

    public function setDisplayDescription($displayDescription)
    {
        $this->display_description = $displayDescription;
    }

    public function setAmount($amount = 0)
    {
        $this->amount = $amount;
    }

    public function setAmountBuy($amount)
    {
        $this->amount_buy = $amount;
    }

    public function setExchange($exchange)
    {
        $this->exchange = $exchange;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function setPayable($payable = 'on_booking')
    {
        $this->payable = $payable;
    }

    public function setMarginOperator($type = 'percent', $amount, $include = true)
    {
        $this->margin_operator = array(
            $type => $amount,
            'included' => $include
        );
    }

    public function setMarginPeer($type = 'percent', $amount, $include = true)
    {
        $this->margin_peer = array(
            $type => $amount,
            'included' => $include
        );
    }

    public function setMarginBroker($type = 'percent', $amount, $include = true)
    {
        $this->margin_broker = array(
            $type => $amount,
            'included' => $include
        );
    }
}

class Calculation
{
    public $pax_holds;
    public $id_conditions;
    public $amount;
    public $amount_buy;
    public $currency;
    public $exchange;
    public $option;
    public $display;
    public $display_description;
    public $consultant_notice;
    public $margin_operator;
    public $margin_peer;
    public $margin_broker;
    public $calculations_holds;
    public $uid;
    
    public function __construct()
    {
        $this->uid = uniqid();
        $this->id_conditions = array();
        $this->calculations_holds = array();
        $this->tag_conditions = array();
    }

    public function setPaxHolds($maxPax)
    {
        $this->pax_holds = $maxPax;
    }

    public function setTagCondition($tag, $paxMax)
    {
        $this->tag_conditions[$tag] = $paxMax;
    }

    public function setIdCondition($tag, $idName)
    {
        $this->id_conditions[$tag] = $idName;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setAmountBuy($amountBuy)
    {
        $this->amount_buy = $amountBuy;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function setExchange($exchange)
    {
        $this->exchange = $exchange;
    }

    public function setOption($option)
    {
        $this->option = $option;
    }

    public function setDisplay($display)
    {
        $this->display = $display;
    }

    public function setDisplayDescription($displayDescription)
    {
        $this->display_description = $displayDescription;
    }

    public function setConsultantNotice($consultantNotice)
    {
        $this->consultant_notice = $consultantNotice;
    }

    public function setMarginOperator($type = 'percent', $amount, $include = true)
    {
        $this->margin_operator = array(
            $type => $amount,
            'included' => $include
        );
    }

    public function setMarginPeer($type = 'percent', $amount, $include = true)
    {
        $this->margin_peer = array(
            $type => $amount,
            'included' => $include
        );
    }

    public function setMarginBroker($type = 'percent', $amount, $include = true)
    {
        $this->margin_broker = array(
            $type => $amount,
            'included' => $include
        );
    }

    public function addCalculationHolds($calculationHolds)
    {
        $this->calculations_holds = (array) $calculationHolds;
    }
}

class CalculationHolds
{
    public $display;
    public $display_description;
    public $payable;
    public $amount;
    public $currency;
    public $margin;
    public $included;
    public $uid;


    public function setDisplay($display)
    {
        $this->uid = uniqid();
        $this->display = $display;
    }

    public function setDisplayDescription($displayDescription)
    {
        $this->display_description = $displayDescription;
    }

    public function setPayable($payable)
    {
        $this->payable = $payable;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function setMargin($margin)
    {
        $this->margin = $margin;
    }

    public function setIncluded($included = true)
    {
        $this->included = $included;
    }
}