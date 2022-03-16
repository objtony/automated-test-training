<?php

namespace App\Tests\unit\Number;

use App\Number\Number;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Number\Number
 */
final class NumberTest extends TestCase
{
    /**
     * @dataProvider sumOfSquaresDataProvider
     */
    public function testShouldBeValidWhenIsSumOfSquares($value, $expected)
    {
        $number = new Number();
        $this->assertEquals($expected, $number->sumOfSquares($value));
    }

    public function sumOfSquaresDataProvider():array
    {
        return [
            ['value' => 33, 'expected' => 18],
            ['value' => 11, 'expected' => 2],
            ['value' => 8, 'expected' => 64],
            ['value' => 9, 'expected' => 81],
        ];
    }

    /**
     * @dataProvider valueProvider
     */
    public function testIsPrime($expected, $value): void
    {
        $number = new Number();
        $this->assertEquals($expected, $number->isPrime($value));
    }

    public function valueProvider(): array
    {
        return [
            'should be valid when value is Prime' => ['expected' => true, 'value' => 3],
            'should be valid when value is not Prime' => ['expected' => false, 'value' => 1],
        ];
    }

    public function testShouldBeValidWhenConvertedTextToNumber(): void
    {
        $expected = 176;
        $value = 'TestWord';

        $number = new Number();
        $this->assertEquals($expected, $number->convertTextToNumber($value));
    }

    /**
     * @dataProvider convertLetterToNumberDataProvider
     */
    public function testShouldBeValidWhenConvertedLetterToNumber($expected, $value): void
    {
        $number = new Number();
        $this->assertEquals($expected, $number->convertLetterToNumber($value));
    }

    public function convertLetterToNumberDataProvider(): array
    {
        return [
            ['expected' => 1, 'value' => 'a'],
            ['expected' => 4, 'value' => 'd'],
            ['expected' => 8, 'value' => 'h'],
            ['expected' => 45, 'value' => 'S'],
            ['expected' => 50, 'value' => 'X'],
        ];
    }
}