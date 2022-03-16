<?php

namespace App\Multiples;

class MultipleOf3or5and7 implements MultipleInterface
{
    public function isValid(int $value): bool
    {
        return ($value % 3 === 0 || $value % 5 === 0) && $value % 7 === 0;
    }
}