<?php

namespace App;

use App\Multiples\MultipleOf3or5;
use App\Number\Number;

class WordsInNumbers
{
    public function isPrimeOrHappyOrMultiple3or5TheText(string $value): array
    {
        $number = new Number();
        $multipleOf3or5 = new MultipleOf3or5();

        $value = $number->convertTextToNumber($value);

        return [
            'prime' => $number->isPrime($value),
            'happy' => $number->isHappy($value),
            'multiple' => $multipleOf3or5->isValid($value)
        ];
    }

}