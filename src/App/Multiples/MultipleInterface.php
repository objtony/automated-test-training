<?php

namespace App\Multiples;

interface MultipleInterface
{
    public function isValid(int $value): bool;
}