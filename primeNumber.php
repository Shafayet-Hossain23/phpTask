<?php
$number = 10;
$isPrime = true;

if ($number === 1) {
    echo "1 is not a prime number\n";
} else if ($number > 1) {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo "$number is a prime number\n";
    } else {
        echo "$number is not a prime number\n";
    }
} else {
    echo "The number is not a prime number\n";
}
?>