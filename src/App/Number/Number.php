<?php

namespace App\Number;

class Number
{
    private array $tempNumbers = [];

    public function isHappy(int $number): bool
    {
        $this->tempNumbers[] = $number;

        $sum = $this->sumOfSquares($number);

        if ($sum == 1) {
            return true;
        }

        if (in_array($sum, $this->tempNumbers)) {
            return false;
        }

        return $this->isHappy($sum);
    }

    public function sumOfSquares(int $number) : int
    {
        $sum = 0;
        foreach (str_split($number) as $digit) {
            $sum += $digit * $digit;
        }

        return $sum;
    }

    public function isPrime(int $number): bool
    {
        if ($number < 2) {
            return false;
        }

        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }

    public function convertTextToNumber(string $text): int
    {
        $sum = 0;
        $text = str_split(preg_replace("/[^a-zA-Z]/", "", $text));
        foreach ($text as $digit) {
            $sum += $this->convertLetterToNumber($digit);
        }

        return $sum;
    }

    public function convertLetterToNumber(string $str): int
    {
        return ord($str) - (ctype_upper($str) ? 38 : 96);
    }
}