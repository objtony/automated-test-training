<?php

namespace App\Shipping;

class User
{
    private string $name;
    private string $zipCode;

    public function __construct(string $name, string $cep)
    {
        $this->name = $name;
        $this->zipCode = $cep;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

}