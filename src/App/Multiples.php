<?php

namespace App;

use App\Multiples\MultipleInterface;

class Multiples
{
    public function calculate(MultipleInterface $calculator, int $number): int
    {
        $sum = 0;
        for ($value = 1; $value < $number; $value++) {
            if ($calculator->isValid($value)) {
                $sum += $value;
            }
        }

        return $sum;
    }
}