<?php


class General
{

    /**
     * @var string
     * @Assert\Choice(choices = {"request", "booking"}, message = "status: request or booking" groups={"booking", "request"})
     */
    protected $status;

    /**
     * @var string
     * @Assert\Choice(choices = {"travel", "camper"}, message = "system: context" groups={"booking", "request"})
     */
    protected $system;

    /**
     * @var string
     * @Assert\NotBlank(message = "locale: en, de.." groups={"booking", "request"})
     */
    protected $locale;

    /**
     * @var string
     */
    protected $broker;

    /**
     * @var string
     * @Assert\NotBlank(message = "operator: touroperator" groups={"booking", "request"})
     */
    protected $operator;

    /**
     * @var string
     * @Assert\Choice(choices = {"direct", "business"}, message = "transaction_type: b2c => 'direct', b2b => 'business'" groups={"booking", "request"})
     */
    protected $transaction_type;

    /**
     * @var string
     * @Assert\NotBlank(message = "display: head title" groups={"booking", "request"})
     */
    protected $display;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking", "request"})
     */
    protected $currency;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking"})
     */
    protected $payment_type;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking"})
     */
    protected $payment_fee;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking", "request"})
     */
    protected $ip_referred;

    /**
     * @var string
     * @Assert\NotBlank(message = "currency: selling currency" groups={"booking", "request"})
     */
    protected $consultant_notice;

    
    
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

    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    public function setTransactionType($transactionType = 'direct')
    {
        $this->transaction_type= $transactionType;
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
    protected $name_last;
    protected $name_first;
    protected $name_title;
    protected $gender;
    protected $street;
    protected $postal;
    protected $city;
    protected $phone;
    protected $dob;
    protected $email;
    protected $state;
    protected $country;
    protected $nationality;
    protected $contractor_notice;
    protected $tags;
    protected $ids;
    protected $is_passenger;
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
    protected $name_last;
    protected $name_first;
    protected $name_title;
    protected $gender;
    protected $street;
    protected $postal;
    protected $city;
    protected $state;
    protected $country;
    protected $company;
    protected $dob;
    protected $phone;
    protected $email;


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
    protected $name_last;
    protected $name_first;
    protected $name_title;
    protected $gender;
    protected $street;
    protected $postal;
    protected $city;
    protected $phone;
    protected $dob;
    protected $email;
    protected $state;
    protected $country;
    protected $nationality;
    protected $contractor_notice;
    protected $tags;
    protected $passport;
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
    protected $vendor_alias;
    protected $vendor_id;
    protected $product_alias;
    protected $product_id;
    protected $product_type;
    protected $product_subtype;
    protected $display;
    protected $display_description;
    protected $depart_place;
    protected $depart_date;
    protected $depart_time;
    protected $arrive_place;
    protected $arrive_date;
    protected $arrive_time;
    protected $consultant_notice;
    protected $is_optional;
    protected $items_holds;
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
        $this->items_holds[] = $itemHolds;
    }
}

class ItemHolds
{
    protected $display;
    protected $display_description;
    protected $is_optional;
    protected $amount;
    protected $amount_buy;
    protected $currency;
    protected $payable;
    protected $margin;
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

    public function isOptional($isOptional = true)
    {
        $this->is_optional = $isOptional;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setAmountBuy($amount)
    {
        $this->amount_buy = $amount;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function setPayable($payable = 'on_booking')
    {
        $this->payable = $payable;
    }

    public function setMargin($margin = true)
    {
        $this->margin = $margin;
    }
}

class Calculation
{
    protected $pax_holds;
    protected $id_conditions;
    protected $amount;
    protected $amount_buy;
    protected $currency;
    protected $exchange;
    protected $option;
    protected $display;
    protected $display_description;
    protected $consultant_notice;
    protected $margin_operator;
    protected $margin_broker;
    protected $calculations_holds;
    public $uid;
    
    public function __construct()
    {
        $this->uid = uniqid();
        $this->id_conditions = array();
        $this->margin_broker = array();
        $this->margin_operator = array();
        $this->calculations_holds = array();
    }

    public function setPaxHolds($paxHolds)
    {
        $this->pax_holds = $paxHolds;
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

    public function setMarginOperator($type = 'percent', $amount, $included = true)
    {
        $this->margin_operator = array(
            $type => $amount,
            'included' => $included
        );
    }

    public function setMarginBroker($type = 'percent', $amount, $included = true)
    {
        $this->margin_operator = array(
            $type => $amount,
            'included' => $included
        );
    }

    public function addCalculationHolds($calculationHolds)
    {
        $this->calculations_holds = $calculationHolds;
    }
}

class CalculationHolds
{
    protected $display;
    protected $display_description;
    protected $payable;
    protected $amount;
    protected $currency;
    protected $margin;
    protected $included;
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