<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Fruit extends Basket
{
    public float $vat;


    public function __construct(int $amount, float $price, float $vat = 0.06, float $discount = 0.1)
    {
        parent::__construct($amount, $discount);
        $this->price = ($price-($price*$discount));
        $this->vat = ($vat);
    }
}

$bananas = new Fruit(6, 1);
$apples = new Fruit(3, 1.5);