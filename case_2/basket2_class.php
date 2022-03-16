<?php

declare(strict_types = 1);

class Basket 
{
    public int $amount;
    public float $price;

    public function __construct(int $amount, float $price)
    {
        $this->amount = ($amount);
        $this->price = ($price);
    }

    public function getPrice()
    {
        return $this->amount * $this->price;
    }

    public function getTax()
    {
        return ($this->amount * $this->price) * $this->vat;
    }
}