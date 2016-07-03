<?php

require_once ('resource/TravelApiRequest.php');
require_once ('resource/ReservationObjects.php');

class Reservation
{
    public $contractor;
    public $passengers;
    public $billing_contact;
    public $items;
    public $calculations;
    public $general;
    public $cart;

    public function __construct()
    {
        $this->items = array();
        $this->calculations = array();
        $this->passengers = array();
        $this->cart = array();
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

    public function addItem($item)
    {
        $this->items[$item->uid] = (array) $item;
        unset($this->items[$item->uid]['uid']);
        return $item->uid;
    }

    public function addCalculation($calculation)
    {
        $this->calculations[$calculation->uid] = (array) $calculation;
        unset ($this->calculations[$calculation->uid]['uid']);
        return $calculation->uid;
    }

    public function addPassenger($passenger)
    {
        $this->passengers[$passenger->uid] = (array) $passenger;
        unset($this->passengers[$passenger->uid]['uid']);
        return $passenger->uid;
    }
    
    public function addToCart($item, $passengerCalculation = array(), $quantity = 1)
    {
        $this->cart[] = array(
            'item' => $item,
            'quantity' => $quantity,
            'passenger_calculation' => $passengerCalculation
        );
    }

    public function serialize()
    {
        return $this;
    }

}