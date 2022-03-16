<?php

namespace App\Tests\unit\Multiples;

use App\Multiples\MultipleOf3and5;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Multiples\MultipleOf3and5
 */
final class MultipleOf3and5Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIsValid($expected, $value): void
    {
        $multipleOf3and5 = new MultipleOf3and5();
        $this->assertEquals($expected, $multipleOf3and5->isValid($value));
    }

    public function dataProvider()
    {
        return [
            'should be valid when value is Multiple of 3 and 5' => ['expected' => true, 'value' => 15],
            'should be valid when value is not Multiple of 3 and 5' => ['expected' => false, 'value' => 99],
        ];
    }

}