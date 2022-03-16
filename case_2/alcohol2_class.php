<?php


class Alcohol extends Basket
{
    public float $vat;


    public function __construct(int $amount, float $price, float $vat = 0.21)
    {
        parent::__construct($amount, $price);
        $this->vat = ($vat);
    }
}

$wine = new Alcohol(2, 10);