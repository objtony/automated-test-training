<?php

namespace App;

use App\Number\Number;

class HappyNumber
{

    public function isHappyNumber(int $value): bool
    {
        $number = new Number();
        return $number->isHappy($value);
    }
}