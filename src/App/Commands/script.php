<?php
require_once 'vendor/autoload.php';

use App\Number\Number;

if ($argc < 2) {
    echo "Invalid parameters to run the script!" . PHP_EOL;
    exit(1);
}

$number = new Number();
if($number->isHappy($argv[1])) {
    echo "The number is happy!" . PHP_EOL;
} else {
    echo "The number is not happy!" . PHP_EOL;
}