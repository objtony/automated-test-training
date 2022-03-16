<?php

namespace App;

use App\Shipping\CorreiosInterface;
use App\Shipping\ShoppingCart;

class ShippingCalculation
{
    private CorreiosInterface $delivery;

    public function __construct(CorreiosInterface $delivery)
    {
        $this->delivery = $delivery;
    }

    public function total(ShoppingCart $cart): float
    {
        $total = $cart->getTotal();

        if ($total < 100.00) {
            $total += $this->delivery->costOfDelivery($cart->getUser()->getZipCode());
        }

        return $total;
    }


}