<?php

namespace App\Tests\unit;

use App\Shipping\CorreiosInterface;
use App\Shipping\ShoppingCart;
use App\ShippingCalculation;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\ShippingCalculation
 */
final class ShippingCalculationTest extends TestCase
{
    public function testShouldCalculateWithoutShippingCost()
    {
        $shoppingCart = $this->createMock(ShoppingCart::class);
        $delivery = $this->createMock(CorreiosInterface::class);

        $shoppingCart->method('getTotal')->willReturn(290.00);
        $delivery->expects($this->never())->method('costOfDelivery');

        $shippingCalculation = new ShippingCalculation($delivery);
        $total = $shippingCalculation->total($shoppingCart);

        $this->assertEquals(290.00, $total);
    }

    public function testShouldCalculateWithShippingCost()
    {
        $shoppingCart = $this->createMock(ShoppingCart::class);
        $delivery = $this->createMock(CorreiosInterface::class);

        $shoppingCart->method('getTotal')->willReturn(95.00);
        $delivery->method('costOfDelivery')->willReturn(10.00);
        $delivery->expects($this->once())->method('costOfDelivery');

        $shippingCalculation = new ShippingCalculation($delivery);
        $total = $shippingCalculation->total($shoppingCart);

        $this->assertEquals(105.00, $total);
    }
}