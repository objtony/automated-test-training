<?php

namespace App\Shipping;

class Product
{
    private string $name;
    private float $price;
    private int $quantity;

    public function __construct(string $name, float $price = 0.0, int $quantity = 0)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}