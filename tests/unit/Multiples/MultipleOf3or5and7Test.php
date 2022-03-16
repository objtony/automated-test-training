<?php

namespace App\Tests\unit\Multiples;

use App\Multiples\MultipleOf3or5and7;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Multiples\MultipleOf3or5and7
 */
final class MultipleOf3or5and7Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIsValid($expected, $value): void
    {
        $multipleOf3and5 = new MultipleOf3or5and7();
        $this->assertEquals($expected, $multipleOf3and5->isValid($value));
    }

    public function dataProvider()
    {
        return [
            'should be valid when value is Multiple of 3 or 5 and 7' => ['expected' => true, 'value' => 35],
            'should be valid when value is not Multiple of 3 or 5 and 7' => ['expected' => false, 'value' => 34],
        ];
    }

}