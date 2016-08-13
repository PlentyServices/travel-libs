<?php


class General
{
    public $status;
    public $system;
    public $locale;
    public $broker;
    public $peer;
    public $operator;
    public $travel_type;
    public $travel_type_sub;
    public $transaction_type;
    public $display;
    public $currency;
    public $payment_type;
    public $payment_surcharge_amount;
    public $payment_surcharge_percentage;
    public $ip_referred;
    public $consultant_notice;
    public $contractor_notice;

    public function __construct()
    {
        $this->setStatus();
        $this->setSystem();
        $this->setLocale();
        $this->setTransactionType();
        $this->setCurrency();
        $this->setPaymentType();
        $this->consultant_notice = array();
        $this->contractor_notice = array();
    }

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

    public function setPaymentSurchargeAmount($paymentFee)
    {
        $this->payment_surcharge_amount = $paymentFee;
    }

    public function setPaymentSurchargePercentage($paymentFee)
    {
        $this->payment_surcharge_percentage = $paymentFee;
    }

    public function setIpReferred($ipReferred)
    {
        $this->ip_referred = $ipReferred;
    }

    public function addConsultantNotice($consultantNotice)
    {
        $this->consultant_notice[] = $consultantNotice;
    }

    public function addContractorNotice($contractorNotice)
    {
        $this->contractor_notice[] = $contractorNotice;
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
    public $company;
    public $nationality;
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

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
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
    public $company;
    public $nationality;
    public $consultant_notice;
    public $tags;
    public $passport;
    public $uid;

    public function __construct()
    {
        $this->uid = uniqid();
        $this->tags = array();
        $this->ids = array();
        $this->consultant_notice = array();
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

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function addConsultantNotice($consultantNotice)
    {
        $this->consultant_notice[] = $consultantNotice;
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

class Product
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
    public $contractor_notice;
    public $status;
    public $charges;
    public $uid;

    public function __construct()
    {
        $this->uid = uniqid();
        $this->services = array();
        $this->tax = array();
        $this->surcharges = array();
        $this->consultant_notice = array();
        $this->contractor_notice = array();
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

    public function addConsultantNotice($consultantNotice)
    {
        $this->consultant_notice[] = $consultantNotice;
    }

    public function addContractorNotice($contractorNotice)
    {
        $this->contractor_notice[] = $contractorNotice;
    }

    public function isOptional()
    {
        $this->status = 'option';
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function addCharge($charge)
    {
        $this->charges[] = (array) $charge;
    }
}



class Fare
{
    public $fare_base;
    public $discount_id;
    public $pax_holds;
    public $id_conditions;
    public $retail_price;
    public $retail_exchange;
    public $purchase_nett;
    public $purchase_gross;
    public $purchase_currency;
    public $purchase_commission_percentage;
    public $purchase_commission_amount;
    public $calc_from_gross;
    public $round_retail_price;
    public $display;
    public $display_description;
    public $consultant_notice;
    public $contractor_notice;
    public $markup_percentage;
    public $markup_amount;
    public $margin_percentage;
    public $commission_peer_percentage;
    public $commission_peer_amount;
    public $commission_broker_percentage;
    public $commission_broker_amount;
    public $charges;
    public $uid;
    
    public function __construct()
    {
        $this->uid = uniqid();
        $this->id_conditions = array();
        $this->tag_conditions = array();
        $this->services = array();
        $this->tax = array();
        $this->surcharges = array();
        $this->consultant_notice = array();
        $this->contractor_notice = array();
        $this->round_retail_price = true;
    }

    public function setFareBase($fareBase)
    {
        $this->fare_base = $fareBase;
    }

    public function setDiscountId($discountId)
    {
        $this->discount_id = $discountId;
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

    public function calcFromGross()
    {
        $this->calc_from_gross = true;
    }

    public function roundRetailPrice($bool = true)
    {
        $this->round_retail_price = $bool;
    }

    public function setPurchase($cost, $currency, $commission = false)
    {
        if($commission)
        {
            $this->purchase_commission_percentage = $commission;
            $this->purchase_commission_amount = $cost * $commission / 100;
            $this->purchase_nett = $cost * (100 - $commission) / 100;
            $this->purchase_gross = $cost;
        } else {
            $this->purchase_nett = $cost;
        }

        $this->purchase_currency = $currency;
    }


    public function setRetailExchange($exchange)
    {
        $this->retail_exchange = $exchange;
    }

    public function setDisplay($display)
    {
        $this->display = $display;
    }

    public function setDisplayDescription($displayDescription)
    {
        $this->display_description = $displayDescription;
    }

    public function addConsultantNotice($consultantNotice)
    {
        $this->consultant_notice[] = $consultantNotice;
    }

    public function addContractorNotice($contractorNotice)
    {
        $this->contractor_notice[] = $contractorNotice;
    }

    public function setMarkupPercentage($percentage)
    {
        $this->markup_percentage = $percentage;
    }

    public function setMarkupAmount($amount)
    {
        $this->markup_amount = $amount;
    }

    public function setMarginPercentage($percentage)
    {
        $this->margin_percentage = $percentage;
    }

    public function setCommissionPeerPercentage($percentage)
    {
        $this->commission_peer_percentage = $percentage;
    }

    public function setCommissionPeerAmount($amount)
    {
        $this->commission_peer_amount = $amount;
    }

    public function setCommissionBrokerPercentage($percentage)
    {
        $this->commission_broker_percentage = $percentage;
    }

    public function setCommissionBrokerAmount($amount)
    {
        $this->commission_broker_amount = $amount;
    }

    public function addCharge($charge)
    {
        $this->charges[] = (array) $charge;
    }

}


class Charge
{
    public $charge_type;
    public $display;
    public $display_description;
    public $retail_price;
    public $retail_exchange;
    public $purchase_nett;
    public $purchase_gross;
    public $purchase_currency;
    public $purchase_commission_percentage;
    public $purchase_commission_amount;
    public $calc_from_gross;
    public $round_retail_price;
    public $payable;
    public $markup_percentage;
    public $markup_amount;
    public $margin_percentage;
    public $commission_peer_percentage;
    public $commission_peer_amount;
    public $commission_broker_percentage;
    public $commission_broker_amount;
    public $uid;

    public function setChargeType($chargeType)
    {
        switch ($chargeType)
        {
            case 'tax':
                $this->charge_type = 'tax';
                break;
            case 'surcharge':
                $this->charge_type = 'surcharge';
                break;
            case 'service':
                $this->charge_type = 'service';
                break;
            case 'item':
                $this->charge_type = 'item';
                break;
        }
    }

    public function setDisplay($display)
    {
        $this->uid = uniqid();
        $this->display = $display;
        $this->setPayable();
        $this->round_retail_price = true;
    }

    public function setDisplayDescription($displayDescription)
    {
        $this->display_description = $displayDescription;
    }

    public function setPurchase($cost, $currency, $commission = false)
    {
        if($commission)
        {
            $this->purchase_commission_percentage = $commission;
            $this->purchase_commission_amount = $cost * $commission / 100;
            $this->purchase_nett = $cost * (100 - $commission) / 100;
            $this->purchase_gross = $cost;
        } else {
            $this->purchase_nett = $cost;
        }

        $this->purchase_currency = $currency;
    }


    public function setRetailExchange($exchange)
    {
        $this->retail_exchange = $exchange;
    }

    public function calcFromGross()
    {
        $this->calc_from_gross = true;
    }

    public function roundRetailPrice($bool = true)
    {
        $this->round_retail_price = $bool;
    }

    public function setPayable($payable = 'on_booking')
    {
        $this->payable = $payable;
    }

    public function setMarkupPercentage($percentage)
    {
        $this->markup_percentage = $percentage;
    }

    public function setMarkupAmount($amount)
    {
        $this->markup_amount = $amount;
    }

    public function setMarginPercentage($percentage)
    {
        $this->margin_percentage = $percentage;
    }

    public function setCommissionPeerPercentage($percentage)
    {
        $this->commission_peer_percentage = $percentage;
    }

    public function setCommissionPeerAmount($amount)
    {
        $this->commission_peer_amount = $amount;
    }

    public function setCommissionBrokerPercentage($percentage)
    {
        $this->commission_broker_percentage = $percentage;
    }

    public function setCommissionBrokerAmount($amount)
    {
        $this->commission_broker_amount = $amount;
    }

}
