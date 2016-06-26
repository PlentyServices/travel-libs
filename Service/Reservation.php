<?php

require_once ('resource/TravelApiRequest.php');
require_once ('resource/ReservationObjects.php');

class Reservation
{
    protected $error;
    protected $contractor;
    protected $passengers;
    protected $billing_contact;
    protected $items;
    protected $calculations;
    protected $general;
    protected $cart;
    protected $reservation;

    public function __construct()
    {
        $this->items = array();
        $this->calculations = array();
        $this->passengers = array();
        $this->cart = array();
    }


    public function setGeneralParameters($params)
    {
        $this->general = $params;
    }

    public function setContractor($contractor)
    {
        $this->contractor = $contractor;
    }

    public function setBillingContact($billingContact)
    {
        $this->billing_contact = $billingContact;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function addCalculation($calculation)
    {
        $this->calculations[] = $calculation;
    }

    public function addPassenger($passenger)
    {
        $this->passengers[] = $passenger;
    }

    public function addPaxToCalculation($pax, $calculation)
    {
        
    }
    
    public function addToCart($item, $passengerCalculation = array(), $quantity = 1)
    {
        $this->cart[] = array(
            'item' => $item,
            'quantity' => $quantity,
            'passenger_calculation' => $passengerCalculation
        );
    }


}