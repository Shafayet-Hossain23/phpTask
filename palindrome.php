<?php
$num = 121;
$sum = 0;
$temp = $num;

while ($temp != 0) {
    $rem = $temp % 10;
    $sum = $sum * 10 + $rem;
    $temp = (int) ($temp / 10);
}

if ($num == $sum) {
    echo "Palindrome Number\n";
} else {
    echo "Not a Palindrome Number\n";
}
?>