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
    public $allocation_fare_to_product;
    public $allocation_passenger_to_fare;

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


    // new allocation methods -->
    public function addFareToProduct($fare, $product)
    {
        //add product if not set
        if(isset($this->products[$product->uid]) === false)
        {
            $this->products[$product->uid] = (array) $product;
            unset($this->products[$product->uid]['uid']);
        }

        //add fare if not set
        if(isset($this->fares[$fare->uid]) === false)
        {
            $this->fares[$fare->uid] = (array) $fare;
            unset($this->fares[$fare->uid]['uid']);
        }

        //assoc fare with product
        if(isset($this->allocation_fare_to_product[$product->uid]) === false)
            $this->allocation_fare_to_product[$product->uid] = array();

        $this->allocation_fare_to_product[$product->uid][] = $fare->uid;
    }

    public function addPassengerToFare($passenger, $fare)
    {
        //add passenger if not set
        if(isset($this->passengers[$passenger->uid]) === false)
        {
            $this->passengers[$passenger->uid] = (array) $passenger;
            unset($this->passengers[$passenger->uid]['uid']);
        }

        //assoc passenger with fare
        if(isset($this->allocation_passenger_to_fare[$fare->uid]) === false)
            $this->allocation_passenger_to_fare[$fare->uid] = array();

        $this->allocation_passenger_to_fare[$fare->uid][] = $passenger->uid;
    }

    protected function autoAllocate()
    {
        foreach ($this->allocation_fare_to_product as $product => $fares)
        {
            foreach($fares as $fare)
            {
                foreach($this->allocation_passenger_to_fare as $allocated_fare => $passengers)
                {
                    if($allocated_fare === $fare)
                    {
                        if(isset($current_passengers_fares) === false)
                            $current_passengers_fares = array();

                        foreach ($passengers as $passenger)
                            $current_passengers_fares[$passenger] = $fare;
                    }
                }
            }

            if(isset($current_passengers_fares))
                $this->addAllocation($product, $current_passengers_fares, $this->products[$product]['quantity']);
        }

        unset($this->allocation_fare_to_product, $this->allocation_passenger_to_fare);
    }


    public function serialize()
    {
        //autoallocate with new allocation methods
        $this->autoAllocate();

        return json_encode($this);
    }

}