<?php

namespace App\Multiples;

class MultipleOf3and5 implements MultipleInterface
{
    public function isValid(int $value): bool
    {
        return $value % 3 === 0 && $value % 5 === 0;
    }
}