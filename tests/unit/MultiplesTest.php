<?php

namespace App\Tests\unit;

use App\Multiples;
use App\Multiples\MultipleOf3and5;
use App\Multiples\MultipleOf3or5;
use App\Multiples\MultipleOf3or5and7;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Multiples
 * @covers \App\Multiples\MultipleOf3or5
 * @covers \App\Multiples\MultipleOf3and5
 * @covers \App\Multiples\MultipleOf3or5and7
 */
final class MultiplesTest extends TestCase
{
    /**
     * @dataProvider dataProvider3or5
     */
    public function testShouldBeValidWhenTheSumIsEqualMultipleOf3or5($value, $expected)
    {
        $multiples = new Multiples();
        $this->assertEquals($expected, $multiples->calculate(new MultipleOf3or5(), $value));
    }

    public function dataProvider3or5()
    {
        return [
            ['value' => 1000, 'expected' => 233168],
            ['value' => 10, 'expected' => 23]
        ];
    }

    /**
     * @dataProvider dataProvider3and5
     */
    public function testShouldBeValidWhenTheSumIsEqualMultipleOf3and5($value, $expected)
    {
        $multiples = new Multiples();
        $this->assertEquals($expected, $multiples->calculate(new MultipleOf3and5(), $value));
    }

    public function dataProvider3and5()
    {
        return [
            ['value' => 1000, 'expected' => 33165],
            ['value' => 10, 'expected' => 0]
        ];
    }

    /**
     * @dataProvider dataProvider3or5and7
     */
    public function testShouldBeValidWhenTheSumIsEqualMultipleOf3or5and7($value, $expected)
    {
        $multiples = new Multiples();
        $this->assertEquals($expected, $multiples->calculate(new MultipleOf3or5and7(), $value));
    }

    public function dataProvider3or5and7()
    {
        return [
            ['value' => 1000, 'expected' => 33173],
            ['value' => 10, 'expected' => 0]
        ];
    }
}