<?php

require_once ('resource/TravelApiRequest.php');
require_once ('resource/ReservationObjects.php');

class Reservation
{
    public $general;
    public $contractor;
    public $passengers;
    public $billing_contact;
    public $products;
    public $fares;
    public $allocation;

    public function __construct()
    {
        $this->fares = array();
        $this->passengers = array();
        $this->allocation = array();
    }


    public function setGeneralParameters($params)
    {
        $this->general = (array) $params;
    }

    public function setContractor($contractor)
    {
        $this->contractor = (array) $contractor;
        if($this->contractor['is_passenger'])
            $this->addPassenger($contractor);
        return $contractor->uid;
    }

    public function setBillingContact($billingContact)
    {
        $this->billing_contact = (array) $billingContact;
    }

    public function addPassenger($passenger)
    {
        $this->passengers[$passenger->uid] = (array) $passenger;
        unset($this->passengers[$passenger->uid]['uid']);
        return $passenger->uid;
    }

    public function addProduct($product)
    {
        $this->products[$product->uid] = (array) $product;
        unset($this->products[$product->uid]['uid']);
        return $product->uid;
    }

    public function addFare($fare)
    {
        $this->fares[$fare->uid] = (array) $fare;
        unset ($this->fares[$fare->uid]['uid']);
        return $fare->uid;
    }
    
    public function addAllocation($product, $fares = array(), $quantity = 1)
    {
        $this->allocation[] = array(
            'product' => $product,
            'quantity' => $quantity,
            'fares' => $fares
        );
    }

    public function serialize()
    {
        return $this;
    }

}