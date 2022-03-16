<?php

namespace App\Tests\unit;

use App\WordsInNumbers;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\WordsInNumbers
 * @covers \App\Number\Number
 * @covers \App\Multiples\MultipleOf3or5
 */
final class WordsInNumbersTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIsValid($expected, $value)
    {
        $convert = new WordsInNumbers();
        $this->assertEquals($expected, $convert->isPrimeOrHappyOrMultiple3or5TheText($value));
    }

    public function dataProvider()
    {
        return [
            'should be valid when value is Prime and is not Happy and Multiple of 3 or 5' => [
                'expected' => [
                    'prime' => true,
                    'happy' => false,
                    'multiple' => false
                ],
                'value' => 'Pasmag'
            ],
            'should be valid when value is Happy and is not Prime and Multiple of 3 or 5' => [
                'expected' => [
                    'prime' => false,
                    'happy' => true,
                    'multiple' => false
                ],
                'value' => 'a'
            ],
            'should be valid when value is Multiple of 3 or 5 and is not Prime and Happy' => [
                'expected' => [
                    'prime' => false,
                    'happy' => false,
                    'multiple' => true
                ],
                'value' => 'feca'
            ],
            'should be valid when value is Prime and Happy and is not Multiple of 3 or 5' => [
                'expected' => [
                    'prime' => true,
                    'happy' => true,
                    'multiple' => false
                ],
                'value' => 'do'
            ],
            'should be valid when value is Multiple of 3 or 5 and Happy and is not Prime' => [
                'expected' => [
                    'prime' => false,
                    'happy' => true,
                    'multiple' => true
                ],
                'value' => 'ai'
            ],
            'should be valid when value is Multiple of 3 or 5 AndPrime and not is Happy' => [
                'expected' => [
                    'prime' => true,
                    'happy' => false,
                    'multiple' => true
                ],
                'value' => 'e'
            ],
        ];
    }
}