<?php

namespace App\Multiples;

class MultipleOf3or5 implements MultipleInterface
{
    public function isValid(int $value): bool
    {
        return $value % 3 === 0 || $value % 5 === 0;
    }
}