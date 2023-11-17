<?php
$number = 21;
$isPrime = true;

if ($number == 1) {
    echo "Not a prime number";
} elseif ($number > 1) {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime == true) {
        echo "A prime Number";
    } elseif ($isPrime == false) {
        echo "Not A prime Number";
    } else {
        echo "error";
    }
}
?>