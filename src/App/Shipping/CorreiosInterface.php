<?php

namespace App\Shipping;

interface CorreiosInterface
{
    public function costOfDelivery(string $zipCode): float;
}