<?php

namespace App\Tests\unit;

use App\HappyNumber;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\HappyNumber
 */
final class HappyNumberTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIsValid($expected, $value): void
    {
        $happyNumber = new HappyNumber();
        $this->assertEquals($expected, $happyNumber->isHappyNumber($value));
    }

    public function dataProvider(): array
    {
        return [
            'should be valid when value is Happy Number' => ['expected' => true, 'value' => 7],
            'should be valid when value is not Happy Number' => ['expected' => false, 'value' => 15]
        ];
    }
}